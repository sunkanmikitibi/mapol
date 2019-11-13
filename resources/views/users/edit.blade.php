
@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header">
                    Edit User
                </div>
                <div class="card-body">

                    {!! Form::model($user, ['method'=>'PUT', 'route'=>['users.update', $user->id]]) !!}
                    <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                              {!! Form::label('name', 'Name:') !!}
                              {!! Form::text('name', null, ['class'=>'form-control form-control-sm']) !!}
                          </div>
                        </div>
                        <div class="col-6">
                             <div class="form-group">
                                {!! Form::label('username', 'Username:') !!}
                                {!! Form::text('username', null, ['class'=>'form-control form-control-sm']) !!}
                             </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                                <div class="form-group">
                                        {!! Form::label('email', 'Email Address:') !!}
                                        {!! Form::email('email', null, ['class'=>'form-control form-control-sm']) !!}
                                    </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group">
                                        {!! Form::label('type', 'User Level/Type:') !!}
                                        {!! Form::select('type', ['superadmin'=>'Super Administrator (Commandant Priviledge)', 'admin'=>'Administrator', 'user'=>'Armoury Staff'], null, ['class'=>'form-control form-control-sm']) !!}
                                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                                <div class="form-group">
                                        {!! Form::label('password', 'Password') !!}
                                        {!! Form::password('password', ['class'=>'form-control form-control-sm']) !!}
                                    </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group">
                                        {!! Form::label('password_confirmation', 'Confirm Password:') !!}
                                        {!! Form::password('password_confirmation', ['class'=>'form-control form-control-sm']) !!}
                                    </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 offset-3">
                                <div class="form-group">

                                        {!! Form::submit('Update User Records', ['class'=>'btn btn-block btn-md btn-warning']) !!}

                                    </div>
                        </div>
                    </div>





                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@stop

