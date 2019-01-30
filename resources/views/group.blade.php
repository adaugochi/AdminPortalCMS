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
	            <li class="breadcrumb-item active">group</li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-group" style="float: right;">
	        	<i class="fas fa-plus"></i> New Group
	        </button>
	        @include('Modals.groupmodal')

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
					                <th>Name Of Groups</th>
					                <th></th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($groups as $key => $group)
				                <tr class="small">
				                    <td> {{$key+1}} </td>
				                    <td> {{ $group->name }} </td>
				                    <td>
				                        <a href="/members/{{$group->id}}" class="btn btn-sm btn-outline-info">View</a>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-myname="{{ $group->name }}" 
				                                data-id="{{ $group->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editgroup">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger" 
				                                data-toggle="modal" 
				                                data-target="#modaldel_{{ $group->id }}">
				                        	Delete
				                        </button>
				                        <!--Delete Modal -->
										<div class="modal fade" id="modaldel_{{ $group->id }}" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
										    <div class="modal-dialog modal-sm">
										    
										      <!-- Modal content-->
											    <div class="modal-content">
											        <div class="modal-header bg-info">
											            <button type="button" class="close" data-dismiss="modal">&times;</button> 
											        </div>
											        <div class="modal-body">
											            <form method="POST" action="{{ url('del-group') }}" enctype="multipart/form-data" id="delGroup">
											      
											              {{ csrf_field() }}
												            <div class="form-group">
												                <input type="hidden" id="id" value="{{ $group->id }}" name="id">    
												            </div>
												            <i class="fas fa-question-circle" style="font-size: 40px;"></i>
												            <p class="text-center" >
												            	Are you sure you want to delete <span><b>{{ $group->name }} ?</b></span>
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