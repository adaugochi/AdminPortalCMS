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
				                                data-id="{{ $offering->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-del">
				                        	Delete
				                        </button>
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