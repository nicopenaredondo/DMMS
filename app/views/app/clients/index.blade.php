@extends('app.layout.master')
@section('title')
Clients - Churna Management System
@stop

@section('page-toolbar-title')
Clients
@stop

@section('page-toolbar-subtitle')
Shows the list of the clients
@stop

@section('page-toolbar-block-right')
    <a href="{{ URL::route('app.clients.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Client</a>
    @if(count($data['clients_loop']) > 0)
    <a href="#"class="btn btn-success"><i class="fa fa-external-link"></i> Export to Excel</a>
    @endif
@stop
@section('breadcrumb')
<li>
	<a href="{{ URL::route('app.dashboard') }}">Dashboard</a>
</li>
<li class="active">
	<a href="{{ URL::route('app.clients.index') }}">Clients</a>
</li>
@stop
@section('content')
@include('notification')
@if(count($data['clients_loop']) > 0)
    @foreach($data['clients_loop'] as $client)
    <div class="col-md-4">
        <div class="widget-window">
            <div class="window window-primary window-npb">
                <div class="window-title">{{{ $client['client_name'] }}}</div>
            </div>
            <div class="window window-info">
                <div class="window-block">
                    <img src="{{ asset('assets/img/avatar.jpg') }}" style="width:80px;" class="img-circle img-thumbnail">
                </div>
                <div class="window-block">
                    <h4><b>Contact Person</b></h4>
                    <p>{{{ $client['contact_person'] }}}</p>
                    <h4><b>Contact Details</b></h4>
                    <p>{{{ $client['email_address'] }}}  /  {{{ $client['contact_number'] }}}</p>
                    <a href="{{ URL::route('app.clients.show',$client['client_id']) }}" class="btn btn-xs btn-default">
                        <i class="fa fa-eye"></i> View Client
                    </a>
                    <a href="{{ URL::route('app.clients.delete',$client['client_id']) }}" class="btn btn-xs btn-danger">
                        <i class="fa fa-trash-o"></i> Delete Client
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
<div class="row">
    <div class="col-md-12 text-center">
        <ul class="pagination pagination-lg">
            {{ $data['clients_loop']->links() }}
        </ul>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Information</strong> You don't have any clients. Would you like to add
            <a href="{{ URL::route('app.clients.create') }}"><strong>one</strong></a> ?
        </div>
    </div>
</div>
@endif;
@stop