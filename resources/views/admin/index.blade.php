@extends('layouts.app')

@section('title','Admin')

@section('page-title','Admin')

@section('dashboard-content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal"> Tambah</button>

    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->first_name}}</td>
            <td>{{$admin->last_name}}</td>
            <td>{{$admin->username}}</td>
            <td>{{$admin->email}}</td>
            <td>
                <a href="#" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    
    <div class="modal" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form action="/admin" method="post">
            {{csrf_field()}}
            <div class="modal-body mx-3">
            <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" class="form-control validate" required>
                </div>

                 <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control validate" required>
                </div>

                 <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control validate" required>
                </div>

                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control validate" required>
                </div>

            <div class="form-group">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch Modal Login Form</a>
</div>
@endsection
