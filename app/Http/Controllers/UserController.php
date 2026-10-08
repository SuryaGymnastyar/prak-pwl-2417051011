<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel, $kelasModel;

    public function index() {
        $data = [
            'title' => "List User",
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }

    public function __construct() {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function store(Request $request) {
        $this->userModel->create([
            'nama' => $request->input("nama"),
            'nim' => $request->input("npm"),
            'kelas_id' => $request->input("kelas_id")
        ]);

        return redirect()->to("/user");
    }

    public function create() {
        $kelasModel = new Kelas();

        if ($kelasModel->count() == 0) {
            foreach (['A', 'B'] as $nama) {
                $kelasModel->create(['nama_kelas' => $nama]);
            }
        }

        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];

        return view("create_user", $data);
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $kelas = (new Kelas())->getKelas(); // atau Kelas::all();

        return view('edit_user', [
            'title' => 'Edit User',
            'user'  => $user,
            'kelas' => $kelas
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'     => 'required',
            'npm'      => 'required',
            'kelas_id' => 'required',
        ]);

        $user = UserModel::findOrFail($id);
        $user->update([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id')
        ]);

        return redirect()->to('/user')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'Data berhasil dihapus!');
    }
}