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
	            <li class="breadcrumb-item active"><small>offering</small></li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-offering" style="float: right;">
	        	<i class="fas fa-plus"></i> New Offering
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
					                <th>Amount</th>
					                <th>Transaction Code</th>
					                <th>Payment Date</th>
					                <th>Member Code</th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($offerings as $key => $offering)
				                <tr class="small">
				                    <td> {{ $key+1 }} </td>
				                    <td> {{ $offering->amount }} </td>
				                    <td> {{ $offering->transaction_code }}</td>
				                    <td> {{ $offering->payment_date }}</td>
				                    <td> {{ $offering->member_code }}</td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-amount="{{ $offering->amount }}" 
				                                data-tcode="{{ $offering->transaction_code }}" 
				                                data-pdate="{{ $offering->payment_date }}" 
				                                data-mcode="{{ $offering->member_code }}" 
				                                data-id="{{ $offering->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editoffering">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger" 
				                                data-toggle="modal" 
				                                data-target="#modaldel_{{ $offering->id }}">
				                        	Delete
				                        </button>
				                        <!--Delete Modal -->
										<div class="modal fade" id="modaldel_{{ $offering->id }}" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
										    <div class="modal-dialog modal-sm">
										    
										      <!-- Modal content-->
											    <div class="modal-content">
											        <div class="modal-header bg-info">
											            <button type="button" class="close" data-dismiss="modal">&times;</button> 
											        </div>
											        <div class="modal-body">
											            <form method="POST" action="{{ url('del-offering') }}" enctype="multipart/form-data" id="deloffering">
											      
											              {{ csrf_field() }}
												            <div class="form-group">
												                <input type="hidden" id="id" value="{{ $offering->id }}" name="id">    
												            </div>
												            <i class="fas fa-question-circle" style="font-size: 40px;"></i>
												            <p class="text-center" >
												            	Are you sure you want to delete <span><b>{{ $offering->amount }} ?</b></span>
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
		                @include('Modals.offeringmodal')
		            </div>
		        </div>
		    </div>
		</div>
	    <!--container-->
    </div>
    <!--container-fluid-->
@endsection