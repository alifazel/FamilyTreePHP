@extends('layout.master')

	@section('content')
	<div class="container margin-top">
		<div class="starter-template">     
				<h1>Test</h1>
		</div>
	</div>

	<div class="footer">
			<div class="container">		
				<div class="col-md-2">
					<div style="text-align:center;">
						<img src="http://placehold.it/150x150" alt="" class="img-circle">
						<h1>Lorem Ipsum</h1>
					</div>
				</div>
				<div class="col-md-8 footer-desc">
					<h1>Personal Details:</h1>
					<div class="row">
							<div class="col-md-2"><p>Date of Birth:</p></div>
							<div class="col-md-10"><p>02/10/1990</p></div>
					</div>
					<div class="row">
							<div class="col-md-2"><p>Parents:</p></div>
							<div class="col-md-10"><p>Mr Smith & Mrs Smith</p></div>
					</div>
					<div class="row">
							<div class="col-md-2"><p>Description:</p></div>
							<div class="col-md-10"><p>Integer blandit tincidunt ipsum commodo dictum. Mauris vitae nunc non eros tempus imperdiet et in ipsum. Sed cursus dapibus ipsum ut molestie. Suspendisse interdum massa lacus, in gravida orci pretium vitae. Nulla a dolor iaculis, vehicula mi eget, laoreet orci. Aenean ut metus tellus.</p></div>
					</div>
				</div>
				<div class="col-md-2">
					<h1>Options:</h1>
					<button type="button" class="btn btn-primary btn-block" onclick="window.location.href='/profile'">View Profile</button>
					<button type="button" class="btn btn-success btn-block">Edit Details</button>
				</div>
			</div>
	</div>
@stop