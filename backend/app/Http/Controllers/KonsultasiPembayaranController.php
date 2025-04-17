<?php

namespace App\Http\Controllers;

use App\Models\KonsultasiPembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Support\Facades\Auth;

class KonsultasiPembayaranController extends Controller
{
    public function __construct()
    {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false; // Ganti ke true di production
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function index()
    {
        $konsultan = User::where('role', 'konsultan')->get();
        return view('konsultasi.index', compact('konsultan'));
    }

    public function order(Request $request)
    {
        $user = Auth::user();

        $konsultasi = KonsultasiPembayaran::create([
            'umkm_id' => $user->umkm->id,
            'konsultan_id' => $request->konsultan_id,
            'jadwal_konsultasi' => $request->jadwal_konsultasi,
            'durasi_jam' => $request->durasi_jam,
            'biaya' => $request->biaya,
            'status_pembayaran' => 'menunggu',
        ]);

        $params = [
            'transaction_details' => [
                'order_id' => 'KONSULTASI-' . $konsultasi->id,
                'gross_amount' => $konsultasi->biaya,
            ],
            'customer_details' => [
                'first_name' => $user->fullname,
                'email' => $user->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        $konsultasi->update(['snap_token' => $snapToken]);

        return view('konsultasi.snap', compact('snapToken', 'konsultasi'));
    }

    public function callback(Request $request)
    {
        $payload = json_decode($request->getContent(), true);
        $orderId = $payload['order_id'];
        $transactionStatus = $payload['transaction_status'];

        $id = str_replace('KONSULTASI-', '', $orderId);
        $konsultasi = KonsultasiPembayaran::findOrFail($id);

        if ($transactionStatus == 'settlement') {
            $konsultasi->status_pembayaran = 'berhasil';
        } elseif (in_array($transactionStatus, ['deny', 'cancel', 'expire'])) {
            $konsultasi->status_pembayaran = 'gagal';
        } else {
            $konsultasi->status_pembayaran = 'menunggu';
        }

        $konsultasi->save();

        return response()->json(['status' => 'OK']);
    }
}

?>
