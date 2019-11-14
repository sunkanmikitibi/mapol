<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Category;
use Session;
use Auth;
use App\User;


class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::where('sender_id', Auth::user()->id)->paginate(10);
        $categories = Category::all();
        return view('tickets.index', compact('tickets', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('tickets.create')
        ->withCategories($categories)
        ->withUsers($users);
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
            'title'=>'required|min:3|max:20',
            'category_id'=>'required',
            'priority'=>'required',
            'message'=>'required'
        ]);

        $ticket = new Ticket([
            'title'=> $request->input('title'),
            'sender_id' => $request->input('sender_id'),
            'category_id'=>$request->input('category_id'),
            'ticket_id'=> strtoupper(str_random(10)),
            'status' => "Open",
            'priority'  => $request->input('priority'),
            'message' => $request->input('message'),
        ]);

        $ticket->save();

        Session::flash('success', 'A ticket with ID: #$ticket->ticket_id has been opened.');

        return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::where('ticket_id', $id)->firstOrFail();
        $category = $ticket->category;

        return view('tickets.show', compact('tickets', 'category'));
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
