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
	            <li class="breadcrumb-item active">weekly activity</li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-wkact" style="float: right;">
	        	<i class="fas fa-plus"></i> New Weekly Activity
	        </button>
	    
	    <br><br>
	        <div class="card">
	            <div class="card-body" style="">
	                <div class="table-responsive">
		                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
		                    <thead>
			                    <tr>
			                      	<th style="width: 15px">S/N</th>
					                <th>Name</th>
					                <th>Day</th>
					                <th>Time</th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($wkacts as $key => $wkact)
				                <tr class="small">
				                    <td> {{ $key+1 }} </td>
				                    <td> {{ $wkact->name }} </td>
				                    <td> {{ $wkact->day_of_week }}</td>
				                    <td> {{ $wkact->time_of_activity }}</td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-name="{{ $wkact->name }}" 
				                                data-day="{{ $wkact->day_of_week }}"
				                                data-time="{{ $wkact->time_of_activity }}"
				                                data-id="{{ $wkact->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editwkact">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger" 
				                                data-id="{{ $wkact->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-del">
				                        	Delete
				                        </button>
				                    </td>
				                </tr>
				                @endforeach
			                </tbody>
		                </table>
		                @include('Modals.weeklyactmodal')
		            </div>
		        </div>
		    </div>
		</div>
	    <!--container-->
    </div>
    <!--container-fluid-->
@endsection