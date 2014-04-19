@extends('app.layout.master')
@section('title')
Add New Client - Churna Management System
@stop

@section('page-toolbar-title')
Add New Client
@stop

@section('page-toolbar-subtitle')
adds a new client in the system
@stop

@section('page-toolbar-block-right')

@stop
@section('breadcrumb')
<li>
	<a href="{{ URL::route('app.dashboard') }}">Dashboard</a>
</li>
<li>
	<a href="{{ URL::route('app.clients.index') }}">Clients</a>
</li>
<li class="active">
	<a href="{{ URL::route('app.clients.create') }}">Add New Client</a>
</li>
@stop
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="block">
			{{ Form::open(array('route' => 'app.clients.store','id' => 'clientsValidation','autocomplete' => 'off')) }}
	    	<div class="block-content">
	    		<h2><strong>New Client</strong> Form</h2>
	    		<hr>
	    		@include('notification')
  				<div class="form-group">
            <label>Client Name <span class="text-danger">*</span></label>
            <input type="text" value="{{ Input::old('client_name') }}" class="form-control tipb" name="client_name" placeholder="Enter the client name" data-original-title="#">
        		@if($errors->first('client_name') != '')
							<label for="client_name" class="error">{{ $errors->first('client_name') }}</label>
        		@endif
          </div>
        	<div class="form-group">
            <label>Contact Person <span class="text-danger">*</span></label>
            <input type="text" value="{{ Input::old('contact_person') }}" class="form-control tipb" name="contact_person" placeholder="Enter the contact person" data-original-title="#">
          	@if($errors->first('contact_person') != '')
          	<label for="contact_person" class="error">{{ $errors->first('contact_person') }}</label>
         		@endif
          </div>

  				<div class="form-group">
            <label>Contact Number <span class="text-danger">*</span></label>
            <input type="text" value="{{ Input::old('contact_number') }}"  class="form-control tipb" name="contact_number" placeholder="Enter the contact number" data-original-title="#">
          	@if($errors->first('contact_number') != '')
          	<label for="contact_number" class="error">{{ $errors->first('contact_number') }}</label>
         		@endif
          </div>
  				<div class="form-group">
            <label>Email Address <span class="text-danger">*</span></label>
            <input type="text" value="{{ Input::old('email_address') }}"  class="form-control tipb" name="email_address" placeholder="Enter the email address" data-original-title="#">
          	@if($errors->first('email_address') != '')
          	<label for="email_address" class="error">{{ $errors->first('email_address') }}</label>
         		@endif
          </div>
    		</div>
	    	<div class="block-footer">
	    		<button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Save Record</button>
	    	</div>
	  	{{ Form::close() }}
    </div>
	</div>
</div>
@stop

@section('bottom_script')

	<script type="text/javascript" src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
	<script type="text/javascript">
	$("#clientsValidation").validate({
	    rules: {
	        client_name   		: {
	        	required 	: true,
	        	maxlength : 64
	        },
	        contact_person  	: {
	        	required 	: true,
	        	maxlength : 64
	        },
	        contact_number  	: {
	        	required 	: true,
	        	maxlength : 20
	        },
	        email_address 		: {
	        	required 	: true,
	        	email 		: true,
	        	maxlength : 64
	        }
	    }
	});
	</script>
@stop