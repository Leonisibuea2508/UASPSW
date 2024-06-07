@extends('layouts.app', [
    'title' => 'Tambah Pengelola',
])

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')
    @if (session('users')->role == 'all')
        <!-- add admin form -->
        <h1>Add Admin</h1>
        <form method="POST" action="">
            @csrf <!-- Menambahkan csrf token -->

            <p>
                <input type="email" name="email" placeholder="Enter email" required>
            </p>
    
            <p>
                <input type="password" name="password" placeholder="Enter password" required>
            </p>
    
            <p>
                <label>Enter role</label>
                <select name="role" required>
                    <option value="all">All</option>
                    <option value="pengelola_lapangan">Pengelola Lapangan</option>
                </select>
            </p>
    
            <p>
                <input type="submit" name="add_pengelola" value="Tambahkan Pengelola Lapangan">
            </p>
        </form>
    @endif
@endsection
