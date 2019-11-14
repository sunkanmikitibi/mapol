
@extends('layouts.app2')
@section('styles')
    @include('partials._styles')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 donot">
                <div class="card">
                    <div class="card-header">
                        Action
                    </div>
                    <div class="card-body">

                        {!! Form::open(['method'=>'DELETE', 'route'=>['mopol.destroy', $mopo->id]]) !!}

                         <button type="submit" class="btn btn-danger btn-block btn-xs">
                    <i class="fa fa-trash-o"></i> Delete
                </button>
                {!! Form::close() !!}
                <hr>

                <button onclick="myFunction()" class="btn btn-info btn-md btn-block">
                    <i class="fa fa-print"></i> Print
                </button>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-uppercase">
               <strong>
                   Record for {{$mopo->names}}
            </strong>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                    <div class="col-md-2 mb-3">
                                        <img src="{{ asset('img/logo.jpg')}}" class="logo" alt="Police logo" srcset="">
                                    </div>
                                    <div class="col-md-8"> <h4 class="justify-content-center">
                                      <strong>MAPOL 50 PMF KUBWA-ABUJA</strong>
                                    </h4>
                                    </div>

                                    <div class="col-md-2">
                                            <img src="{{ asset('img/logo.jpg')}}" class="logo" alt="Police logo" srcset="">
                                        </div>

                                </div>
                         <table class="table table-bordered table-striped table-responsive-md">
                    <tr>
                        <th>SerialNo</th>
                        <td>{{ $mopo->serialno}}</td>
                    </tr>
                    <tr>
                        <th>
                            AP/FN
                        </th>
                        <td>
                            {{ $mopo->APFN }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Rank
                        </th>
                        <td>
                            {{$mopo->rank}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Duty Post
                        </th>
                        <td>
                            {{$mopo->duty_post}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            ARM Serial Number
                        </th>
                        <td>



                            @if ($mopo->arms_serial_no == null)
                              Not applicable
                            @else
                                {{$mopo->arms_serial_no}}
                            @endif



                        </td>
                    </tr>
                    <tr>
                        <th>ARMS Make </th>
                        <td>


                            @if ($mopo->make == null)
Not Applicable
                            @else
{{$mopo->make}}
                            @endif


                        </td>
                    </tr>
                    <tr>
                        <th>ARMS Breach Number</th>
                        <td>

                                @if ($mopo->breach_number == null)
                                Not Applicable
                              @else
                                {{$mopo->breach_number}}
                                                            @endif

                        </td>
                    </tr>
                    <tr>
                        <th>Armournation Stock</th>
                        <td>

                                @if ($mopo->armournation_stock == null)
                                Not Applicable
                                                            @else
                                {{$mopo->armournation_stock}}
                                                            @endif

                        </td>
                    </tr>
                </table>

                    </div>
                </div>

            </div>
            <div class="col-md-2 donot">
                    <div class="card">
                            <div class="card-header">
                                <div class="card-title">Menu</div>

                            </div>
                            <div class="card-body">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home')}}">Dashboard</a> </li>
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
@section('scripts')
@include('partials._scripts')
@endsection
