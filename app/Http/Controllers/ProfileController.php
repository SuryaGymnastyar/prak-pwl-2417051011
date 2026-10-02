<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $data = [
            'nama' => "M. Surya Gymnastyar",
            'kelas' => "B",
            'npm' => "2417051011"
        ];

        return view('profile', $data);
    }
}
