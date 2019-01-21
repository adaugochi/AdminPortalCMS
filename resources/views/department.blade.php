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
	            <li class="breadcrumb-item active">department</li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-department" style="float: right;">
	        	<i class="fas fa-plus"></i> New Department
	        </button>
	        @include('Modals.departmentmodal')
	    
	    <br><br>
	        <div class="card">
	            <div class="card-body" style="">
	                <div class="table-responsive">
		                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
		                    <thead>
			                    <tr>
			                      	<th style="width: 15px">S/N</th>
					                <th>Names Of Department</th>
					                <th></th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($departments as $key => $department)
				                <tr class="small">
				                    <td> {{$key+1}} </td>
				                    <td> {{ $department->name }} </td>
				                    <td>
				                        <a href="/members/{{$department->id}}" class="btn btn-sm btn-outline-info">View</a>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-myname="{{ $department->name }}" 
				                                data-id="{{ $department->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editdept">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger"
				                        		data-myname="{{ $department->name }}" 
				                                data-id="{{ $department->id }}" 
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