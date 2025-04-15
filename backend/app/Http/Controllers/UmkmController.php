<?php
namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::with('user')->get();
        return view('umkm.index', compact('umkms'));
    }

    public function show($id)
    {
        $umkm = Umkm::with('user')->findOrFail($id);
        return view('umkm.show', compact('umkm'));
    }
}

?>