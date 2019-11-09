
@extends('layouts.app2')

@section('content')
<div class="container">
        <div class="row">
                <div class="col-10 offset-lg-1">
                    @include('partials._messages')
                </div>
            </div>
        <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">Users</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped" id="exampleButtons">
                        <thead>
                            <tr class="bg-danger text-white-50">
                                <th>Username</th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>User Type/Level </th>
                                <th>Date Registered</th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->username }}
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td> {{ $user->email }}</td>
                                    <td> {{ $user->type }}</td>
                                    <td> {{ date('M, d Y', strtotime($user->created_at)) }}</td>
                                    <td>

                                    <a href="" class="btn btn-sm btn-warning btn-md">
                                            <i class="fa fa-edit"></i>
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                        </div>
                    </div>

                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            Add / Register User
                        </div>
                        <div class="card-body">
                             {!! Form::open(['route'=>'users.store', 'method'=>'Post']) !!}
                    <div class="form-group">
                        {!! Form::text('name', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Names']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('username', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Username']) !!}
                    </div>
                    <div class="form-group">
{!! Form::select('type', ['superadmin'=>'Super Admin', 'admin'=>'Admin', 'user'=>'Armory User'], null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Select User Type']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::email('email', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Email Address']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password', ['class'=>'form-control form-control-sm', 'placeholder'=>'Password']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password_confirmation', ['class'=>'form-control form-control-sm', 'placeholder'=>'Confirm Password']) !!}
                    </div>
                    <div class="form-group">

                        {!! Form::submit('Create User', ['class'=>'btn btn-md btn-block btn-secondary']) !!}

                    </div>
                    {!! Form::close() !!}
                        </div>
                    </div>


                </div>
            </div>

</div>

@stop

