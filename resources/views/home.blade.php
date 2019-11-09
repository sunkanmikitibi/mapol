@extends('layouts.app2')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-10">
            <div class="card card-primary">
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
                                        <img src="{{ asset('img/mapollogo.png')}}" class="logo" alt="Police logo" srcset="">
                                    </div>

                            </div>
                            <div class="row table-responsive">
                                <div class="col-md-12">


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

                    </div>

                  {{--
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
                    --}}
        </div>
    </div>
</div>
@endsection

