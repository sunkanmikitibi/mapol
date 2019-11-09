
@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10">
<div class="card">
<div class="card-header">
    Edit
</div>
<div class="card-body">

    {!! Form::model($mopo, ['method'=>'PUT', 'route'=>['mopol.update', $mopo->id]]) !!}
    <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                <label for="Serial No">Serial Number</label>
               {!! Form::text('serialno', null, ['class'=>'form-control']) !!}
            </div>
           </div>
            <div class="col-md 6">
                   <div class="form-group">
                       <label for="apfn">AP/FN</label>
                       {!! Form::text('APFN', null, ['class'=>'form-control']) !!}
                   </div>
               </div>

        </div>
        <div class="row">
                <div class="col-md-4">
                        <div class="form-group">
                            <label for="rank">Rank</label>
                          {!! Form::text('rank', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="Names">Names</label>
                        {!! Form::text('names', null, ['class'=>'form-control']) !!}
                    </div>
         </div>
         <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="duty_post">Duty Post</label>
                        {!! Form::text('duty_post', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <h2>Arms</h2>
            <hr>
            <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="arms_serial_no">Serial No</label>
                            {!! Form::text('arms_serial_no', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('make', 'Make') !!}
                        {!! Form::text('make', null, ['class'=>'form-control']) !!}

                        {!! Form::hidden('user_id', Auth::user()->id) !!}

                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        {!! Form::label('breachnumber', 'Breach Number') !!}
                        {!! Form::text('breach_number', null, ['class'=>'form-control']) !!}
                        </div>

                    </div>
                </div>

                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('armournation_stock', 'Armournation Stock') !!}
                                {!! Form::text('armournation_stock', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                {!! Form::submit('Update', ['class'=>'btn btn-block btn-warning']) !!}

                            </div>
                        </div>
                    </div>
    {!! Form::close() !!}

</div>
</div>
</div>

<div class="col-md-2 donot">
        <div class="card mb-2">
                <div class="card-header">
                    Menu

                </div>
                <div class="card-body">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Dashboard</a> </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mopol.create')}}">Create Record</a>
                        </li>
                    </ul>
                </div>
            </div>


</div>
</div>
</div>
@stop
