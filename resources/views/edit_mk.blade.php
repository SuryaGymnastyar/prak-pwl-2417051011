@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Mata Kuliah</h1>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama_mk">Nama Mata Kuliah:</label> <br>
            <input type="text" name="nama_mk" id="nama_mk" value="{{ $mk->nama_mk }}" required> <br><br>

            <label for="sks">SKS:</label> <br>
            <input type="number" name="sks" id="sks" value="{{ $mk->sks }}" required> <br><br>

            <button type="submit">Update</button>
        </form>
    </div>
@endsection