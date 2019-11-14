
@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 offset-lg-1">
            @include('partials._messages')
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    @can('admin', auth()->user())
                    <div class="card-tools float-right">
                            <a href="{{ route('officers.create') }}" class="btn btn-sm btn-info btn-block">
                                <i class="fa fa-user-plus"></i>
                              New Officer
                          </a></div>
                    @elsecan('superadmin', auth()->user())
                    <div class="card-tools float-right">
                            <a href="{{ route('officers.create') }}" class="btn btn-sm btn-info btn-block">
                                <i class="fa fa-user-plus"></i>
                              New Officer
                          </a></div>
                    @endcan

                    <strong>Officers</strong>  <small>({{$officers->count()}})</small>

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
                        <div class="col-12">
                                <table class="table table-bordered table-striped table-responsive table-responsive-md table-condensed" width="100%" id="exampleButtons">
                                        <thead>
                                            <tr class="bg-dark text-white text-capitalize">
                                              <th> AP/FN </th>
                                              <th> Name </th>
                                              <th>Rank </th>
                                              <th>State</th>
                                            <th>Lga</th>
                                            <th>
                                                Tribe
                                            </th>
                                            <th>
                                                Date of Birth
                                            </th>
                                            <th>
                                                Date Enlisted
                                            </th>
                                            <th>
                                                Date of Promotion
                                            </th>
                                            <th>Date Trans. To Comm. </th>
                                            <th>Date Trans. to division </th>
                                            <th>command tran from </th>
                                            <th>Edu qual.</th>
                                            <th></th>
                                            </tr>

                                        </thead>
                                        <tbody>

                                            @foreach ($officers as $officer)
                                               <tr>
                                                    <td>
                                                        {{$officer->ap_no}}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('officers.edit', $officer->id) }}">
                                                                {{$officer->surname}} {{$officer->firstname}}
                                                        </a>

                                                    </td>
                                                    <td>
                                                            {{$officer->substantive_rank}}
                                                    </td>
                                                    <td>
                                                            {{$officer->state_of_origin}}
                                                    </td>
                                                    <td>
                                                            {{$officer->lga}}
                                                    </td>
                                                    <td>
                                                        {{ $officer->tribe}}
                                                    </td>
                                                    <td>
                                                        {{ date('d/m/Y', strtotime($officer->dateofbirth)) }}
                                                    </td>
                                                    <td>
                                                        {{ date('d/m/Y', strtotime($officer->date_enlisted))}}
                                                    </td>
                                                    <td>
                                                        {{ date('d/m/Y', strtotime($officer->date_promoted))}}
                                                    </td>
                                                    <td>
                                                        {{date('d/m/Y', strtotime($officer->date_of_posting))}}
                                                    </td>
                                                    <td>
                                                        {{ date('d/m/Y', strtotime($officer->date))}}
                                                    </td>
                                                    <td>
                                                        {{ $officer->previous_command}}
                                                    </td>
                                                    <td>
                                                        {{ $officer->education_qualification}}
                                                    </td>
                                                    <td>
                                                       <a href="{{ route('officers.show', $officer->id)}}"> <i class="fa fa-camera"></i></a>
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
    </div>
</div>
@stop

