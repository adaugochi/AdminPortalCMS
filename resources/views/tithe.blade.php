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
	            <li class="breadcrumb-item active"><small>tithe</small></li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-tithe" style="float: right;">
	        	<i class="fas fa-plus"></i> New Offering
	        </button>
	    
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
			                    @foreach($tithes as $key => $tithe)
				                <tr class="small">
				                    <td> {{ $key+1 }} </td>
				                    <td> {{ $tithe->amount }} </td>
				                    <td> {{ $tithe->transaction_code }}</td>
				                    <td> {{ $tithe->payment_date }}</td>
				                    <td> {{ $tithe->member_code }}</td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning" 
				                                data-amount="{{ $tithe->amount }}" 
				                                data-tcode="{{ $tithe->transaction_code }}" 
				                                data-pdate="{{ $tithe->payment_date }}" 
				                                data-mcode="{{ $tithe->member_code }}" 
				                                data-id="{{ $tithe->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-edittithe">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger" 
				                                data-id="{{ $tithe->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-del">
				                        	Delete
				                        </button>
				                    </td>
				                </tr>
				                @endforeach
			                </tbody>
		                </table>
		                @include('Modals.tithemodal')
		            </div>
		        </div>
		    </div>
		</div>
	    <!--container-->
    </div>
    <!--container-fluid-->
@endsection