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
				                                data-toggle="modal" 
				                                data-target="#modaldel_{{ $member->id }}">
				                        	Delete
				                        </button>
				                         <!--Delete Modal -->
										<div class="modal fade" id="modaldel_{{ $member->id }}" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
										    <div class="modal-dialog modal-sm">
										    
										      <!-- Modal content-->
											    <div class="modal-content">
											        <div class="modal-header bg-info">
											            <button type="button" class="close" data-dismiss="modal">&times;</button> 
											        </div>
											        <div class="modal-body">
											            <form method="POST" action="{{ url('del-member') }}" enctype="multipart/form-data" id="delMember">
											      
											              {{ csrf_field() }}
												            <div class="form-group">
												                <input type="hidden" id="id" value="{{ $member->id }}" name="id">    
												            </div>
												            <i class="fas fa-question-circle" style="font-size: 40px;"></i>
												            <p class="text-center">
												            	Are you sure you want to delete <span>{{ $member->firstname }}</span> <span>{{ $member->lastname }}</span>
												            </p>
												            <button type="submit" class="btn btn-info"> 
												                 Yes, Delete
												            </button>
											            </form>
											        </div>
											    </div>
										    </div>
										</div>
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