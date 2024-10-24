@extends('admin.layout.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
<link rel="stylesheet" href="{{('admin')}}/css.css" />
<center>
<h2 class="mt-4">Management User</h2>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
</center>
<div class="container">
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
            <tr>
                <td>1</td>
                <td>Tiger Nixon</td>
                <td>tiger.nixon@example.com</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
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

