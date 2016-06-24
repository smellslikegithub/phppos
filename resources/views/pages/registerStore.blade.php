@extends('admin.layout.master')

@section('content')

<div class="container">

	<!-- <h2>Register Store form</h2> -->
	<div class="panel panel-default">
		<div class="panel-heading">Register Store form</div>
		<div class="panel-body">
			<form class="form-horizontal" method="post" action="{{url('/register-store')}}">
			{{ csrf_field() }}

				<div class="form-group">
					<label class="control-label col-sm-2" for="storeName">Store Name:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="storeName" name="store_name" placeholder="Enter Store Name">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="storeName">Store URL:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="storeUrl" name="store_url" placeholder="Enter Store URL">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="storeName">Logo:</label>
					<div class="col-sm-6">
						<input type="file" name="storeLogo" class="form-control" accept="image/*" >
						
				</div>

				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="storeName">Terms & Conditions:</label>
					<div class="col-sm-6">
						<input type="file" name="storeLogo" class="form-control" accept="application/pdf,application/vnd.ms-excel" >
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="storeName">Return Poilcy:</label>
					<div class="col-sm-6">
						<textarea class="form-control" rows="4" id="storeReturnPolicy" name="store_return_policy"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="storeName">Sales Tax:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="storeUrl" name="sales_tax" placeholder="Enter Store Name">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="storeName">Voucher Title:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="storeUrl" name="voucher_title" placeholder="Enter Store Name">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	
</div>

@endsection