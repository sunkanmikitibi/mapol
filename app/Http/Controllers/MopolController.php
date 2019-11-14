<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Alert;
use Auth;
use App\Mopo as Mopol;

class MopolController extends Controller
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
        $armouryrecords = Mopol::all();
        return view('armouryrecords.index')->withMopol($armouryrecords);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('armouryrecords.create');
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
            'APFN'=>'required',
            'rank'=>'required',
            'names'=>'required',
            'duty_post'=>'required',
            'arms_serial_no'=>'sometimes',
            'make'=>'sometimes',
            'breach_number'=>'sometimes',
            'armournation_stock'=>'sometimes'
        ]);

        $mopol = new Mopol;
        $mopol->APFN = $request->APFN;
        $mopol->rank = $request->rank;
        $mopol->names = $request->names;
        $mopol->duty_post = $request->duty_post;
        $mopol->arms_serial_no = $request->arms_serial_no;
        $mopol->make = $request->make;
        $mopol->user_id = $request->user_id;
        $mopol->breach_number = $request->breach_number;
        $mopol->armournation_stock = $request->armournation_stock;

        $mopol->save();
        Alert::success('Success', 'Record created Successfully');

        $request->session()->flash('success', 'Record created Successfully');
        return redirect()->route('mopol.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $mopol = Mopol::find($id);
       return view('armouryrecords.show')->withMopo($mopol);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mopol = Mopol::find($id);
        return view('armouryrecords.edit')->withMopo($mopol);
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
        $mopol = Mopol::find($id);

        $this->validate($request, [
            'serialno'=>'sometimes',
            'APFN'=>'sometimes',
            'rank'=>'sometimes',
            'names'=>'sometimes',
            'duty_post'=>'sometimes',
            'arms_serial_no'=>'sometimes',
            'make'=>'sometimes',
            'breach_number'=>'sometimes',
            'armournation_stock'=>'sometimes'
        ]);

        $mopol->serialno = $request->input('serialno');
        $mopol->APFN = $request->input('APFN');
        $mopol->rank = $request->input('rank');
        $mopol->names = $request->input('names');
        $mopol->duty_post = $request->input('duty_post');
        $mopol->arms_serial_no = $request->input('arms_serial_no');
        $mopol->make = $request->input('make');
        $mopol->user_id = $request->input('user_id');
        $mopol->breach_number = $request->input('breach_number');
        $mopol->armournation_stock = $request->input('armournation_stock');

        $mopol->save();

        $request->session()->flash('success', 'Record Updated Successfully');
        return redirect()->route('mopol.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mopol = Mopol::find($id);
        $mopol->delete();
        Session::flash('Success', 'Deleted Successfully');
        return redirect()->route('mopol.index');
    }
}
