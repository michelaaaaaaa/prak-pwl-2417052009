<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $users = $this->userModel->getUser();

        return view('list_user', [
            'users' => $users,
            'title' => 'Daftar User'
        ]);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        return view('create_user', [
            'title' => 'Create User',
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required'
        ]);

        $this->userModel->create($data);

        return redirect('/user')
            ->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(string $uuid)
    {
        $user = $this->userModel->newQuery()
            ->where('uuid', $uuid)
            ->firstOrFail();

        $kelas = $this->kelasModel->getKelas();

        return view('edit_user', [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas
        ]);
    }

    public function update(Request $request, string $uuid)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required'
        ]);

        $user = $this->userModel->newQuery()
            ->where('uuid', $uuid)
            ->firstOrFail();

        $user->update($data);

        return redirect('/user')
            ->with('success', 'User berhasil diperbarui!');
    }

    public function destroy(string $uuid)
    {
        $user = $this->userModel->newQuery()
            ->where('uuid', $uuid)
            ->firstOrFail();

        $user->delete();

        return redirect('/user')
            ->with('success', 'User berhasil dihapus!');
    }
}