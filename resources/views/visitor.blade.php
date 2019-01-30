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
	            <li class="breadcrumb-item active"><small>visitor</small></li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-visitor" style="float: right;">
	        	<i class="fas fa-plus"></i> New Visitor
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
					                <th>First Name</th>
					                <th>Last Name</th>
					                <th>Gender</th>
					                <th>Age Group</th>
					                <th>Birth Date</th>
					                <th>Address</th>
					                <th>Invited By</th>
					                <th>Phone Number</th>
					                <th>Email</th>
					                <th>Member Code</th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($visitors as $key => $visitor)
				                <tr class="small">
				                    <td> {{ $key+1 }} </td>
				                    <td> {{ $visitor->firstname }} </td>
				                    <td> {{ $visitor->lastname }}</td>
				                    <td> {{ $visitor->gender }}</td>
				                    <td> {{ $visitor->age_category }}</td>
				                    <td> {{ $visitor->birth_date }}</td>
				                    <td> {{ $visitor->address }}</td>
				                    <td> {{ $visitor->invited_by }}</td>
				                    <td> {{ $visitor->phone_number }}</td>
				                    <td> {{ $visitor->email }}</td>
				                    <td> {{ $visitor->member_code }}</td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-fname="{{ $visitor->firstname }}" 
				                                data-lname="{{ $visitor->lastname }}" 
				                                data-gender="{{ $visitor->gender }}" 
				                                data-bdate="{{ $visitor->birth_date }}" 
				                                data-age="{{ $visitor->age_category }}"
				                                data-address="{{ $visitor->address }}"
				                                data-by="{{ $visitor->invited_by }}"
				                                data-pnum="{{ $visitor->phone_number }}"
				                                data-email="{{ $visitor->email }}"
				                                data-code="{{ $visitor->member_code }}"
				                                data-id="{{ $visitor->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editvisitor">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger"
				                                data-toggle="modal" 
				                                data-target="#modaldel_{{ $visitor->id }}">
				                        	Delete
				                        </button>
				                        <!--Delete Modal -->
										<div class="modal fade" id="modaldel_{{ $visitor->id }}" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
										    <div class="modal-dialog modal-sm">
										    
										      <!-- Modal content-->
											    <div class="modal-content">
											        <div class="modal-header bg-info">
											            <button type="button" class="close" data-dismiss="modal">&times;</button> 
											        </div>
											        <div class="modal-body">
											            <form method="POST" action="{{ url('del-visitor') }}" enctype="multipart/form-data" id="delVisitor">
											      
											              {{ csrf_field() }}
												            <div class="form-group">
												                <input type="hidden" id="id" value="{{ $visitor->id }}" name="id">    
												            </div>
												            <i class="fas fa-question-circle" style="font-size: 40px;"></i>
												            <p class="text-center" >
												            	Are you sure you want to delete <span><b>{{ $visitor->firstname }} {{ $visitor->lastname}} ?</b></span>
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
		                @include('Modals.visitormodal')
		            </div>
		        </div>
		    </div>
		</div>
	    <!--container-->
    </div>
    <!--container-fluid-->
@endsection