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
	            <li class="breadcrumb-item active">sunday school</li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-sunsch" style="float: right;">
	        	<i class="fas fa-plus"></i> New Sunday School
	        </button>
	    
	    <br><br>
	        <div class="card">
	            <div class="card-body" style="">
	                <div class="table-responsive">
		                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
		                    <thead>
			                    <tr>
			                      	<th style="width: 15px">S/N</th>
					                <th>Ministered By</th>
					                <th>Topic</th>
					                <th>Content</th>
					                <th>Date & Time</th>
					                <th>Total Attendees</th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($sunschs as $key => $sunsch)
				                <tr class="small">
				                    <td> {{ $key+1 }} </td>
				                    <td> {{ $sunsch->ministered_by }} </td>
				                    <td> {{ $sunsch->topic }}</td>
				                    <td> {{ $sunsch->content }}</td>
				                    <td> {{ $sunsch->date_time }}</td>
				                    <td> {{ $sunsch->total_attendees }}</td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-myname="{{ $sunsch->ministered_by }}"
				                                data-topic="{{ $sunsch->topic }}"
				                                data-content="{{ $sunsch->content }}" 
				                                data-date="{{ $sunsch->date_time }}"
				                                data-total="{{ $sunsch->total_attendees }}"
				                                data-id="{{ $sunsch->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editsunsch">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger" 
				                                data-id="{{ $sunsch->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-del">
				                        	Delete
				                        </button>
				                    </td>
				                </tr>
				                @endforeach
			                </tbody>
		                </table>
		                @include('Modals.sunschmodal')
		            </div>
		        </div>
		    </div>
		</div>
	    <!--container-->
    </div>
    <!--container-fluid-->
@endsection