<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Officer;
use Session;
use Alert;

class OfficerController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers = Officer::all();
        return view('officers.index')->withOfficers($officers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('admin', auth()->user())) {
            // The current user can create the post...
            return view('officers.create');
        } else if(Gate::allows('superadmin', auth()->user())) {
            return view('officers.create');
        }
        else{
            return view('unauthorized');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $this->validate($request, [
            'ap_no'=>'required',
            'substantive_rank'=>'required',
            'gender' => 'required',
            'firstname'=> 'required',
            'surname' => 'required',
            'othernames' => 'required',
            'state_of_origin' => 'required',
            'lga' => 'required',
            'dateofbirth' => 'required',
            'date_enlisted' => 'required',
            'date_promoted' => 'required',
            'rankonenlistment' => 'required',
            'div_formation' =>'required',
            'date_of_posting' => 'sometimes',
            'education_qualification' => 'required',
            'field_of_study' => 'required',
            'generalduty_specialist' =>'required',
            'specialist_field' => 'required',
            'previous_command' => 'required',
            'date' => 'required',
            'marital_status' => 'required',
            'name_of_spouse' => 'required',
            'religion' => 'required',
            'tribe' => 'required',
            'bloodgroup' =>'required',
            'genotype' => 'required',
            'nextofkin1'=>'required',
            'relationship1' => 'required',
            'nextofkin2' => 'sometimes',
            'relationship2' =>'sometimes',
            'home_address' => 'required',
            'promotion_history_inspr' => 'sometimes',
            'promotion_history_sgt' => 'sometimes',
            'promotion_history_cpl' => 'sometimes',
            'date_confirmedto_inspr' => 'sometimes',
            'pensionpinno' => 'sometimes',
            'pfa' => 'sometimes',
            'ippis_no' => 'sometimes',
            'nhf' => 'sometimes',
            'pay_point' => 'sometimes',
            'gsm_number' => 'required',
        ]);

            $officer = new Officer;

            $officer->ap_no = $request->ap_no;
            $officer->substantive_rank = $request->substantive_rank;
            $officer->gender = $request->gender;
            $officer->firstname = $request->firstname;
            $officer->surname = $request->surname;
            $officer->othernames = $request->othernames;
            $officer->state_of_origin = $request->state_of_origin;
            $officer->lga = $request->lga;
            $officer->dateofbirth = $request->dateofbirth;
            $officer->date_enlisted = $request->date_enlisted;
            $officer->date_promoted = $request->date_promoted;
            $officer->rankonenlistment = $request->rankonenlistment;
            $officer->div_formation = $request->div_formation;
            $officer->date_of_posting = $request->date_of_posting;
            $officer->education_qualification = $request->education_qualification;
            $officer->field_of_study = $request->field_of_study;
            $officer->generalduty_specialist = $request->field_of_study;
            $officer->specialist_field = $request->specialist_field;
            $officer->previous_command = $request->previous_command;
            $officer->date = $request->date;
            $officer->marital_status = $request->marital_status;
            $officer->name_of_spouse = $request->name_of_spouse;
            $officer->religion = $request->religion;
            $officer->tribe = $request->tribe;
            $officer->bloodgroup = $request->bloodgroup;
            $officer->genotype = $request->genotype;
            $officer->nextofkin1 = $request->nextofkin1;
            $officer->relationship1 = $request->relationship1;
            $officer->nextofkin2 = $request->nextofkin2;
            $officer->relationship2 = $request->relationship2;
            $officer->home_address = $request->home_address;
            $officer->promotion_history_inspr = $request->promotion_history_inspr;
            $officer->promotion_history_sgt = $request->promotion_history_sgt;
            $officer->promotion_history_cpl = $request->promotion_history_cpl;
            $officer->date_confirmedto_inspr = $request->date_confirmedto_inspr;
            $officer->pensionpinno = $request->pensionpinno;
            $officer->pfa = $request->pfa;
            $officer->ippis_no = $request->ippis_no;
            $officer->nhf = $request->nhf;
            $officer->pay_point = $request->pay_point;
            $officer->gsm_number = $request->gsm_number;

            $officer->save();

            $request->session()->flash('success', 'Record created Successfully');
            Alert::success('Success Message', 'Officer Successfully Added');

            return redirect()->route('officers.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
