@extends('admin.layout.app')

@section('content')
    <div class="container mt-4">
        <center>
            <h2>Create New User</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create User</li>
            </ol>
        </center>

        <!-- Form Create User -->
        <div class="card p-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required style="width: 100%; height: 45px;">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required style="width: 100%; height: 45px;">
                </div>

                <div class="form-group mb-3">
                    <label for="role">Role:</label>
                    <div>
                        <input type="radio" id="admin" name="role" value="admin" {{ (old('role') == 'admin') ? 'checked' : '' }}>
                        <label for="admin">Admin</label>

                        <input type="radio" id="pelanggan" name="role" value="pelanggan" {{ (old('role') == 'pelanggan') ? 'checked' : '' }}>
                        <label for="pelanggan">Pelanggan</label>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <center>
                    <button type="submit" class="btn btn-primary" style="width: 50%; margin-top: 10px;">Create User</button>
                </center>
            </form>
        </div>
    </div>
@endsection
