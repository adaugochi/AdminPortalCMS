@extends('layouts.admin')
@section('content')
<div id="content-wrapper">

    <div class="container-fluid">
		<!-- Breadcrumbs-->
		<div class="container">
	        <ol class="breadcrumb">
	            <li class="breadcrumb-item">
	                <a href="#">Dashboard</a>
	            </li>
	            <li class="breadcrumb-item active"><small>announcement</small></li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-announcement" style="float: right;">
	        	<i class="fas fa-plus"></i> New Announcement
	        </button>
	        
	    	@if(session()->has('success'))
	    		<div class="row">
	    			<div class="col-md-4">
					    <div class="alert alert-success">
					        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
					        <small>{{ session()->get('success') }} </small>
					    </div>
					</div>
				</div>
			@endif
	    	<br><br>
	        <div class="card">
	            <div class="card-body" style="">
	                <div class="table-responsive">
		                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
		                    <thead>
			                    <tr>
			                      	<th style="width: 15px">S/N</th>
					                <th>Title</th>
					                <th>Description</th>
					                <th>Spoken By</th>
					                <th>Time</th>
					                <th>Member Code</th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($announces as $key => $announce)
				                <tr class="small">
				                    <td> {{ $key+1 }} </td>
				                    <td> {{ $announce->title }} </td>
				                    <td> {{ $announce->description }}</td>
				                    <td> {{ $announce->made_by }}</td>
				                    <td> {{ $announce->time_of_announcement }}</td>
				                    <td> {{ $announce->member_code }}</td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-title="{{ $announce->title }}" 
				                                data-des="{{ $announce->description }}" 
				                                data-member="{{ $announce->made_by }}" 
				                                data-code="{{ $announce->member_code }}" 
				                                data-date="{{ $announce->time_of_announcement }}"
				                                data-id="{{ $announce->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editannounce">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger" 
				                                data-id="{{ $announce->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-del">
				                        	Delete
				                        </button>
				                    </td>
				                </tr>
				                @endforeach
			                </tbody>
		                </table>
		                @include('Modals.announcementmodal')
		            </div>
		        </div>
		    </div>
		</div>
	    <!--container-->
    </div>
    <!--container-fluid-->
@endsection