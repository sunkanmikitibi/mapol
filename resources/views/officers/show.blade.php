
@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        Officer Details
                        <div class="card-tools donot" style="float:right">
                            <a href="{{ route('officers.index')}}" class="btn btn-md btn-info">
                                    Back to Officers List
                                </a></div>
                    </div>
                    <div class="card-body">
                        <h2>{{$officer->surname}} {{$officer->firstname}} {{ $officer->othernames}}  |  {{ $officer->gsm_number }}</h2>
                        <table class="table table-bordered table-striped" style="width:100%">
                            <tr>
                                <th style="width:30%">AP number</th>
                                <td>{{$officer->ap_no}}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>
                                    {{ date('d/m/Y', strtotime($officer->dateofbirth)) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{$officer->gender}}</td>
                            </tr>
                            <tr>
                                <th>State \ Local Govt. Area </th>
                                <td>{{ $officer->state_of_origin }} \ {{ $officer->lga }}</td>
                            </tr>
                            <tr>
                                <th>
                                   Substantive Rank
                                </th>
                                <td>{{ $officer->substantive_rank }}</td>
                            </tr>
                            <tr>
                                <th>Date Enlisted</th>
                                <td>  {{ date('d/m/Y', strtotime($officer->date_enlisted))}} </td>
                            </tr>
                            <tr>
                                <th>Education Qualification</th>
                                <td>{{ $officer->education_qualification}}</td>
                            </tr>
                            <tr>
                                <th>
                                    Field of Study
                                </th>
                                <td>{{ $officer->field_of_study }}</td>
                            </tr>
                            <tr><th>General Duty Speciality</th> <td>{{$officer->generalduty_specialist}}</td></tr>
                            <tr>
                                <th>Specialist Field</th>
                                <td>{{ $officer->specialist_field }}</td>
                            </tr>
                            <tr>
                                <th>Previous Command | Date </th>
                                <td>  {{ $officer->previous_command}} |  {{ date('d/m/Y', strtotime($officer->date))}}</td>
                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <th>Division Formation</th>
                                <td>{{ $officer->div_formation }}</td>
                            </tr>
                            <tr>
                                <th>Date of Posting</th>
                                <td>{{ date('d/m/Y', strtotime($officer->date_of_posting))}}</td>
                            </tr>
                            <tr>
                                <th>Marital Status</th>
                                <td> {{$officer->marital_status }}</td>
                            </tr>
                            <tr>
                                <th>Name Of Spouse</th>
                                <td>{{ $officer->name_of_spouse}}</td>
                            </tr>
                            <tr>
                                <th>Religion</th>
                                <td>{{ $officer->religion }}</td>
                            </tr>
                            <tr>
                                <th>Tribe</th>
                                <td>{{ $officer->tribe }} </td>
                            </tr>
                            <tr>
                                <th>Bloodgroup  | Genotype </th>
                                <td> {{$officer->bloodgroup }} |  {{ $officer->genotype }}</td>
                            </tr>
                            <tr>
                                <th>
                                    Next of Kin | Relationship
                                </th>
                                <td>  {{$officer->nextofkin1 }} | {{$officer->relationship1 }}</td>
                            </tr>
                            <tr>
                                <th>
                                    Next of Kin | Relationship
                                </th>
                                <td>  {{$officer->nextofkin2 }} | {{$officer->relationship2 }}</td>
                            </tr>
                            <tr>
                                <th>Home Address</th>
                                <td>{{ $officer->home_address }}</td>
                            </tr>
                            <tr>
                                <th colspan="2" style="text-align:center"> Promotion History</th>
                            </tr>
                            <tr><th>Inspector</th>
                            <td>{{ date('d/m/Y', strtotime($officer->promotion_history_inspr))}}</td></tr>

                                <tr><th>Sergent</th>
                                    <td>{{ date('d/m/Y', strtotime($officer->promotion_history_sgt))}}</td></tr>

                                    <tr><th>Corporal</th>
                                        <td>{{ date('d/m/Y', strtotime($officer->promotion_history_cpl))}}</td></tr>

                                        <tr><th>Date Confirmed to Inspector</th>
                                            <td>{{ date('d/m/Y', strtotime($officer->date_confirmedto_inspr))}}</td></tr>

                                            <tr>
                                                <th>Pension Pin Number</th>
                                                <td>{{ $officer->pensionpinno }}</td>
                                            </tr>
                                            <tr>
                                                <th>PFA</th>
                                                <td>{{ $officer->pfa }}</td>
                                            </tr>
                                            <tr>
                                                <th>IPPIS Number</th>
                                                <td>{{ $officer->ippis_no }}</td>
                                            </tr>
                                            <tr>
                                                <th>NHF</th>
                                                <td>{{ $officer->nhf }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pay Point</th>
                                                <td>{{ $officer->pay_point }}</td>
                                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4 donot">
<div class="card">
    <div class="card-header">
        Actions
    </div>
    <div class="card-body">
<div class="row">
    <div class="col-6">
        {!! Form::open(['method'=>'Delete', 'route'=>['officers.destroy', $officer->id]]) !!}

{!! Form::submit('Delete Record', ['class'=>'btn btn-danger btn-flat btn-md']) !!}

{!! Form::close() !!}
    </div>
    <div class="col-6">

            <button onclick="myFunction()" class="btn btn-info btn-md btn-block">
                    <i class="fa fa-print"></i> Print
                </button>
    </div>
</div>


    </div>
</div>
            </div>
        </div>
    </div>
@stop

