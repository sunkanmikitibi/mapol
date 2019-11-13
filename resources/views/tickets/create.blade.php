
@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Category

                    </div>
                    <div class="card-body">

                        {!! Form::open(['route'=>'category.store', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class'=>'form-control form-control-sm']) !!}
                            @if ($errors->has('name'))
                            <span class="help-block text-danger text-small">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group">

                            {!! Form::submit('Add Category', ['class'=>'btn btn-sm btn-primary']) !!}

                        </div>
                        {!! Form::close() !!}

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-dark">
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                        <td>{{$category->name}}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-8">

                <div class="card">
                    <div class="card-header">
                        Supports
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route'=>'support-tickets.store', 'method'=>'POST']) !!}
                        <div class="form-group">
                            {!! Form::text('title', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Ticket Title']) !!}
                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group">
                            <select name="category_id" id="" class="form-control form-control-sm">
                                <option value="">Select Category</option>
                                @foreach ($categories as $cat)
                                <option value="{{$cat->id}}">{{ $cat->name}} </option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group">
                            {!! Form::select('priority', ['low'=>'Low', 'medium'=>'Medium', 'high'=>'High', 'very-urgent'=>'Very urgent'], null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Select Priority']) !!}
                            @if ($errors->has('priority'))
                            <span class="help-block">
                                <strong>{{ $errors->first('priority') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('message', null, ['class'=>'form-control form-control-sm']) !!}
                            @if ($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                        </div>
                        <div class="form-group">

                            {!! Form::submit('Open New Ticket', ['class'=>'btn btn-sm btn-info btn-flat']) !!}

                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

