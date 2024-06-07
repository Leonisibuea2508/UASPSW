@extends('layouts.app')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')
    <div class="container-sm my-5">
        @if (Auth::user()->role == 'all')
            <h1>Tambah Pengelola Lapangan</h1>
            <form action="{{ route('admin.storeAdmin') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama" required value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password" required>
                    @error('password')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Pilih Role</label>
                    <select name="role" class="form-control @error('role') is-invalid @enderror" required>
                        <option value="all">All</option>
                        <option value="pengelola_lapangan">Pengelola Lapangan</option>
                    </select>
                    @error('role')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Tambah Admin</button>
                </div>
            </form>
        @else
            <p>Anda tidak memiliki akses untuk menambah admin.</p>
        @endif
    </div>
@endsection
