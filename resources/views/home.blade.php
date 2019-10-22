@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header donot">
                 Dashboard
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
                            <div class="row">
                                <div class="col-md-12">

                                    <table class="table table-bordered table-dark table-striped">
                                       <thead>
                                           <tr>
                                         <th>S/No</th>
                                        <th>AP/FN</th>
                                        <th>Rank</th>
                                        <th>Names</th>
                                        <th>Duty Post</th>
                                        <th></th>
                                           </tr>
                                       </thead>
                                       <tbody>

                                           @foreach ($mopol as $record)
                                            <tr>
                                               <td>{{$record->serialno}}</td>
                                               <td>{{$record->APFN}}</td>
                                               <td>{{$record->rank}}</td>
                                               <td>{{$record->names}}</td>
                                               <td>{{$record->duty_post}}</td>
                                               <td align="center"> <a class="btn btn-sm btn-primary donot" href="{{route('mopol.show', $record->id)}}">
                                                   <i class="fa fa-eye"></i> view
                                                </a>
                                                 <a class="btn btn-sm btn-warning donot" href="{{ route('mopol.edit', $record->id) }}">
                                                        <i class="fa fa-edit"></i> edit
                                                    </a>

                                                      </td>

                                           </tr>
                                           @endforeach


                                       </tbody>
                                    </table>
                                </div>
                            </div>

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

                    <div class="card">
                        <div class="card-header">
                            Action
                        </div>
                        <div class="card-body">

                <button onclick="myFunction()" class="btn btn-info btn-md btn-block">
                        <i class="fa fa-print"></i> Print
                    </button>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
