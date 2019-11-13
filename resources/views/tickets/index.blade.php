
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
                                            <th>
                                                Title
                                            </th>
                                            <th>message</th>
                                            <th>Status</th>
                                            <th>Priority</th>
                                            <th>Last Updated</th>
                                        </tr>
                                    </thead>
                                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

