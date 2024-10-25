@extends('admin.layout.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
<link rel="stylesheet" href="{{('admin')}}/css.css" />
<center>
<h2 class="mt-4">Management User</h2>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
</center>
<div class="container">
<div class="mb-4">
       <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Add User</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    </div>

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
             <th>No</th>
             <th>Username</th>
             <th>Email</th>
             <th>Role</th>
             <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @php $no=1 @endphp
        @foreach($userAll as $ua)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $ua->name }}</td>
                <td>{{ $ua->email }}</td>
                <td>{{ $ua->role }}</td>
                <td>
                <a href="{{ route('user.edit', $ua->id) }}" class="btn btn-success btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm" onclick="if(confirm('Apakah anda yakin ingin menghapus?')) { event.preventDefault(); document.getElementById('delete-form-{{ $ua->id }}').submit(); }">Delete</button>
                <form id="delete-form-{{ $ua->id }}" action="{{ route('user.destroy', $ua->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
             <th></th>
             <th>Username</th>
             <th>Email</th>
             <th>Role</th>
             <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection

