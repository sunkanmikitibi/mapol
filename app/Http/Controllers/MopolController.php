<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Mopo as Mopol;

class MopolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mopolform');
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
            'serialno'=>'required',
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
        $mopol->serialno = $request->serialno;
        $mopol->APFN = $request->APFN;
        $mopol->rank = $request->rank;
        $mopol->names = $request->names;
        $mopol->duty_post = $request->duty_post;
        $mopol->arms_serial_no = $request->arms_serial_no;
        $mopol->make = $request->make;
        $mopol->breach_number = $request->breach_number;
        $mopol->armournation_stock = $request->armournation_stock;

        $mopol->save();

        $request->session()->flash('success', 'Record created Successfully');
        return redirect()->route('home');




        //dd($request->all());
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
       return view('mopolshow')->withMopo($mopol);
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
        return view('mopoledit')->withMopo($mopol);
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
        $mopol->breach_number = $request->input('breach_number');
        $mopol->armournation_stock = $request->input('armournation_stock');

        $mopol->save();

        $request->session()->flash('success', 'Record Updated Successfully');
        return redirect()->route('home');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $mopol = Mopol::find($id);
        $mopol->delete();
        $request->session()->flash('Success', 'Deleted Successfully');
        return redirect()->route('home');
    }
}
