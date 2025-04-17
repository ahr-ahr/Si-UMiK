<?php
// app/Http/Controllers/KonsultanController.php
namespace App\Http\Controllers;

use App\Models\Konsultan;
use App\Models\User;
use Illuminate\Http\Request;

class KonsultanController extends Controller
{
    public function index()
    {
        // Ambil data konsultan berdasarkan user yang sedang login
        $konsultan = Konsultan::with('user')->where('user_id', auth()->id())->first();

        return view('konsultan.index', compact('konsultan'));
    }


    public function create()
    {
        $users = User::where('role', 'konsultan')->get();
        return view('konsultan.create', compact('users'));
    }

    public function show(Request $request)
    {
        $search = $request->input('search');

        $konsultans = Konsultan::with('user')
            ->when($search, function ($query, $search) {
                $query->where('bidang_keahlian', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($q) use ($search) {
                        $q->where('fullname', 'like', "%{$search}%");
                    });
            })
            ->paginate(10);

        return view('konsultan.show', compact('konsultans', 'search'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'bidang_keahlian' => 'required|string|max:100',
            'pengalaman_tahun' => 'nullable|integer',
            'sertifikasi' => 'nullable|string',
            'portofolio' => 'nullable|string',
            'biaya_per_jam' => 'required|integer',
            'biaya_per_menit' => 'required|integer',
            'jenis_konsultan' => 'required',
        ]);

        Konsultan::create($validated);

        return redirect()->route('konsultan.index')->with('success', 'Data konsultan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $konsultan = Konsultan::findOrFail($id);
        $users = User::where('role', 'konsultan')->get();
        return view('konsultan.edit', compact('konsultan', 'users'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'bidang_keahlian' => 'required|string|max:100',
            'pengalaman_tahun' => 'nullable|integer',
            'sertifikasi' => 'nullable|string',
            'portofolio' => 'nullable|string',
            'biaya_per_jam' => 'required|integer',
            'biaya_per_menit' => 'required|integer',
            'jenis_konsultan' => 'required',
        ]);

        Konsultan::where('id', $id)->update($validated);

        return redirect()->route('konsultan.index')->with('success', 'Data konsultan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Konsultan::destroy($id);
        return redirect()->route('konsultan.index')->with('success', 'Data konsultan berhasil dihapus.');
    }
}

?>