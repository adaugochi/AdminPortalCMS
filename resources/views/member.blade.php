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
	            <li class="breadcrumb-item active"><small>member</small></li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-member" style="float: right;">
	        	<i class="fas fa-plus"></i> New Member
	        </button>
	    	@include('Modals.membermodal')
	    <br><br>
	        <div class="card">
	            <div class="card-body" style="">
	                <div class="table-responsive">
		                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
		                    <thead>
			                    <tr>
			                      	<th style="width: 15px">S/N</th>
					                <th>First Name</th>
					                <th>Last Name</th>
					                <th>Gender</th>
					                <th>Age Group</th>
					                <th>Birth Date</th>
					                <th>Address</th>
					                <th>Phone Number</th>
					                <th>Email</th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($members as $key => $member)
				                <tr class="small">
				                    <td> {{ $key+1 }} </td>
				                    <td> {{ $member->firstname }} </td>
				                    <td> {{ $member->lastname }}</td>
				                    <td> {{ $member->gender }}</td>
				                    <td> {{ $member->age_category }}</td>
				                    <td> {{ $member->birth_date }}</td>
				                    <td> {{ $member->address }}</td>
				                    <td> {{ $member->phone_number }}</td>
				                    <td> {{ $member->email }}</td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-fname="{{ $member->firstname }}" 
				                                data-lname="{{ $member->lastname }}" 
				                                data-gender="{{ $member->gender }}" 
				                                data-bdate="{{ $member->birth_date }}" 
				                                data-age="{{ $member->age_category }}"
				                                data-address="{{ $member->address }}"			                               
				                                data-pnum="{{ $member->phone_number }}"
				                                data-email="{{ $member->email}}"
				                                data-id="{{ $member->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editmember">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger" 
				                                data-id="{{ $member->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-del">
				                        	Delete
				                        </button>
				                    </td>
				                </tr>
				                @endforeach
			                </tbody>
		                </table>
		                
		            </div>
		        </div>
		    </div>
		</div>
	    <!--container-->
    </div>
    <!--container-fluid-->
@endsection