
@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 text-small offset-1">
            @include('partials._messages')
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    Create Officer Record
                </div>
                    <div class="card-body">

                    {!! Form::open(['method'=>'POST', 'route'=>'officers.store']) !!}
                    <div class="row">
                     <div class="col-4">
                        <div class="form-group">
                        {!! Form::text('ap_no', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'AP Number']) !!}
                        </div>
                            </div>
                             <div class="col-4">
                            <div class="form-group">
                                    {!! Form::text('substantive_rank', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Substantive Rank']) !!}

                            </div>
                            </div>
                            <div class="col-4">
                                 <div class="form-group">
                                     {!! Form::select('gender', ['male'=>'Male', 'female'=>'Female'], null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Select Gender']) !!}

                         </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-4">
                               <div class="form-group">
                                    {!! Form::text('firstname', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Enter Firstname']) !!}
                               </div>
                               </div>
                                <div class="col-4">
                               <div class="form-group">
                                    {!! Form::text('surname', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Enter Surname']) !!}
                               </div>
                               </div>
                                <div class="col-4">
                               <div class="form-group">
                                    {!! Form::text('othernames', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Enter Other names']) !!}
                               </div>
                               </div>
                           </div>

                           <div class="row">
                                <div class="col-6">
                               <div class="form-group">
                                    {!! Form::text('lga', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Enter Local Govt Area']) !!}

                               </div>
                               </div>
                               <div class="col-6">
                               <div class="form-group">
                                    {!! Form::text('state_of_origin', null, ['class'=>'form-control form-control-sm', 'placeholder'=>'Enter State of Origin']) !!}
                               </div>
                               </div>
                           </div>

                           <div class="row">
                                <div class="col-6">
                               <div class="form-group">
                                    {!! Form::text('dateofbirth', null, ['class'=>'form-control form-control-sm', 'id'=>'datepicker', 'placeholder'=>'Date of Birth']) !!}

                               </div>
                               </div>
                                <div class="col-6">
                               <div class="form-group">
                                 <input placeholder="Date Enlisted" id="datepicker2" type="text" name="date_enlisted"
                                   class="form-control form-control-sm">
                               </div>
                               </div>
                           </div>

                           <div class="row">
                                <div class="col-6">
                               <div class="form-group">
                                 <input placeholder="Date Promoted" id="datepicker3" type="text" name="date_promoted" class="form-control form-control-sm" >

                               </div>
                               </div>
                               <div class="col-6">
                               <div class="form-group">
                                 <input placeholder="Rank on Enlistment" type="text" name="rankonenlistment" class="form-control form-control-sm" >
                               </div>
                               </div>
                           </div>

                           <div class="row">
                                <div class="col-6">
                               <div class="form-group">
                                 <input placeholder="Div/Formation" type="text" name="div_formation" class="form-control form-control-sm">
                               </div>
                               </div>
                               <div class="col-6">
                               <div class="form-group">
                                 <input placeholder="Date of Posting" id="datepicker4" type="text" name="date_of_posting"
                                   class="form-control form-control-sm">
                               </div>
                               </div>
                           </div>


<div class="row">
        <div class="col-6">
       <div class="form-group">
         <input placeholder="Education Qualification" type="text" name="education_qualification"
           class="form-control form-control-sm">
       </div>
       </div>
       <div class="col-6">
       <div class="form-group">
         <input placeholder="Field of Study"  type="text" name="field_of_study" class="form-control form-control-sm">
       </div>
       </div>
   </div>

   <div class="row">
        <div class="col-6">
       <div class="form-group">
         <input placeholder="General Duty or Specialist" type="text" name="generalduty_specialist"
           class="form-control form-control-sm">
       </div>
       </div>
       <div class="col-6">
       <div class="form-group">
         <input placeholder="Specialist Field" type="text" name="specialist_field" class="form-control form-control-sm">
       </div>
       </div>
   </div>


<div class="row">
        <div class="col-8">
       <div class="form-group">
         <input placeholder="Previous Command"  type="text" name="previous_command" class="form-control form-control-sm">

       </div>
       </div>
       <div class="col-4">
       <div class="form-group">
         <input placeholder="date" id="date5" type="text" name="date"  class="form-control form-control-sm">
       </div>
       </div>
   </div>


   <div class="row">
        <div class="col-6">
       <div class="form-group">
         <input placeholder="Marital Status" type="text" name="marital_status"  class="form-control form-control-sm">
       </div>
       </div>
       <div class="col-6">
       <div class="form-group">
         <input placeholder="Spouse Name" type="text" name="name_of_spouse" class="form-control form-control-sm">
       </div>
       </div>
   </div>

   <div class="row">
        <div class="col-3">
       <div class="form-group">
         <input placeholder="Religion" type="text" name="religion"class="form-control form-control-sm">
       </div>
       </div>
       <div class="col-3">
       <div class="form-group">
         <input placeholder="Tribe" v-model="form.tribe" type="text" name="tribe" class="form-control form-control-sm">
       </div>
       </div>

        <div class="col-3">
       <div class="form-group">
         <input placeholder="Blood Group" type="text" name="bloodgroup" class="form-control form-control-sm">
       </div>
       </div>

       <div class="col-3">
       <div class="form-group">
         <input placeholder="Genotype" type="text" name="genotype"  class="form-control form-control-sm" >
       </div>
       </div>
   </div>

   <h4> <i class="fa fa-users"></i> Next of Kin</h4>
   <hr>
<div class="row">
<div class="col-6">
      <div class="form-group">
      <input placeholder="(1) Next of Kin" type="text" name="nextofkin1" class="form-control form-control-sm">
    </div>
</div>
<div class="col-6">
      <div class="form-group">
      <input placeholder="Relationship with the Next of Kin" type="text" name="relationship1" class="form-control form-control-sm">
    </div>
</div>
</div>

<div class="row">
<div class="col-6">
      <div class="form-group">
      <input placeholder="(2) Next of Kin" type="text" name="nextofkin2"  class="form-control form-control-sm">
    </div>
</div>
<div class="col-6">
      <div class="form-group">
      <input placeholder="Relationship with the Next of Kin" type="text" name="relationship2" class="form-control form-control-sm">
    </div>
</div>
</div>

<div class="row">
        <div class="col-12">
                  <div class="form-group">
          <input placeholder="Home Address" type="text" name="home_address" class="form-control form-control-sm">
        </div>

        </div>
    </div>
    <h4> <i class="fa fa-history" aria-hidden="true"></i> Promotion History</h4>
    <hr>
    <div class="row">
        <div class="col-3">
             <div class="form-group">
          <input placeholder="INSPR"  id="date4" type="text" name="promotion_history_inspr"
            class="form-control form-control-sm">
        </div>
        </div>
        <div class="col-3">
             <div class="form-group">
          <input placeholder="SGT" id="date3" type="text" name="promotion_history_isgt"
            class="form-control form-control-sm">
        </div>
        </div>
        <div class="col-3">
             <div class="form-group">
          <input placeholder="Date Promoted to CPL" id="date2" type="text" name="promotion_history_cpl"
            class="form-control form-control-sm">
        </div>
        </div>
        <div class="col-3">
             <div class="form-group">
          <input placeholder="Date Confirmed to INSPR"  type="text" name="date_confirmedto_inspr"
            class="form-control form-control-sm" id="date1">
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
             <div class="form-group">
          <input placeholder="Pension Pin No" type="text" name="pensionpinno"  class="form-control form-control-sm">
        </div>
        </div>
        <div class="col-3">
             <div class="form-group">
          <input placeholder="PFA"  type="text" name="pfa" class="form-control form-control-sm">
        </div>
        </div>
        <div class="col-3">
             <div class="form-group">
          <input placeholder="IPPIS No" type="text" name="ippis_no" class="form-control form-control-sm">
        </div>
        </div>
        <div class="col-3">
             <div class="form-group">
          <input placeholder="NHF"  type="text" name="nhf" class="form-control form-control-sm" >
        </div>
        </div>
    </div>

    <div class="row">
          <div class="col-6">
             <div class="form-group">
          <input placeholder="Pay Point" type="text" name="pay_point"
            class="form-control form-control-sm">
        </div>
        </div>

        <div class="col-6">
             <div class="form-group">
          <input placeholder="GSM Number" type="text" name="gsm_number"
            class="form-control form-control-sm" >
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6">

                <button type="submit" class="btn btn-primary btn-xs">
                        <i class="fa fa-user-plus fa-fw"></i>
                        Add New Officer
                    </button>
        </div>
    </div>



                    {!! Form::close() !!}

                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
    </div>
</div>

@stop

