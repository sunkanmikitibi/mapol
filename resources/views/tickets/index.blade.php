
@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Supports Tickets
                            <div class="card-tools" style="float:right">
                                <a href="{{ route('support-tickets.create')}}"
                                class="btn btn-block btn-info btn-sm">
                                Create Support Ticket
                            </a>

                                </div>


                    </div>
                    <div class="card-body">
                            <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>
                                                Title
                                            </th>
                                            <th>message</th>
                                            <th>Status</th>
                                            <th>Priority</th>
                                            <th>Last Updated</th>
                                        </tr>
                                    </thead>
                                    @if ($tickets->isEmpty())
                                    <tbody>
                                        <tr>
                                            <td colspan="6"> <p>You have not created any tickets.</p></td>
                                        </tr>
                                    </tbody>

                    @else
                                    <tbody>

                                        @foreach ($tickets as $ticket)

                                        <tr>
                                            <td>@foreach ($categories as $category)
                                                    @if ($category->id === $ticket->category_id)
                                                        {{ $category->name }}
                                                    @endif
                                                @endforeach</td>
                                                <td>
                                                        <a href="{{ route('support-tickets.show', $ticket->id)}}">
                                                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                                        </a>
                                                </td>
                                                <td>{{$ticket->message}}</td>
                                                <td>
                                                        @if ($ticket->status === 'Open')
                                                        <span class="badge badge-success">{{ $ticket->status }}</span>
                                                    @else
                                                        <span class="badge badge-danger">{{ $ticket->status }}</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    {{$ticket->priority}}
                                                </td>
                                                <td>
                                                    {{ date('d/m/Y g:i A', strtotime($ticket->updated_at)) }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    @endif
                                </table>
                                   {{ $tickets->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

