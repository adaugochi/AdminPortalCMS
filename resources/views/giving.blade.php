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
	            <li class="breadcrumb-item active"><small>giving</small></li>
	        </ol>

	        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-giving" style="float: right;">
	        	<i class="fas fa-plus"></i> New Giving
	        </button>
	    
	    <br><br>
	        <div class="card">
	            <div class="card-body" style="">
	                <div class="table-responsive">
		                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
		                    <thead>
			                    <tr>
			                      	<th style="width: 15px">S/N</th>
			                      	<th>Item</th>
					                <th>Amount</th>
					                <th>Transaction Code</th>
					                <th>Date of Giving</th>
					                <th>Member Code</th>
					                <th></th>
					                <th></th>
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($givings as $key => $giving)
				                <tr class="small">
				                    <td> {{ $key+1 }} </td>
				                    <td> {{ $giving->item }} </td>
				                    <td> {{ $giving->amount }} </td>
				                    <td> {{ $giving->transaction_code }}</td>
				                    <td> {{ $giving->date_of_giving }}</td>
				                    <td> {{ $giving->member_code }}</td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-warning"
				                        		data-item=" {{ $giving->item }}" 
				                                data-amount="{{ $giving->amount }}" 
				                                data-tcode="{{ $giving->transaction_code }}" 
				                                data-pdate="{{ $giving->date_of_giving }}" 
				                                data-mcode="{{ $giving->member_code }}" 
				                                data-id="{{ $giving->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-editgiving">
				                            Edit
				                        </button>
				                    </td>
				                    <td>
				                        <button type="button" class="btn btn-sm btn-outline-danger" 
				                                data-id="{{ $giving->id }}" 
				                                data-toggle="modal" 
				                                data-target="#modal-del">
				                        	Delete
				                        </button>
				                    </td>
				                </tr>
				                @endforeach
			                </tbody>
		                </table>
		                @include('Modals.givingmodal')
		            </div>
		        </div>
		    </div>
		</div>
	    <!--container-->
    </div>
    <!--container-fluid-->
@endsection