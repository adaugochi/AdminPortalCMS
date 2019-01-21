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
	            <li class="breadcrumb-item active">Members in {{ $dept->name }}</li>
	        </ol>
	    
	    <br>
	        <div class="card">
	            <div class="card-body" style="">
	                <div class="table-responsive">
		                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
		                    <thead>
			                    <tr>
			                      	<th style="width: 15px">S/N</th>
					                <th>First Name</th>				
					                <th>Last Name</th>				
						        </tr>
		                    </thead>
		               
			                <tbody>
			                    @foreach($members as $key => $member)
				                <tr class="small">
				                    <td> {{$key+1}} </td>
				                    <td> {{ $member->firstname }} </td>
				                    <td> {{ $member->lastname }} </td>
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