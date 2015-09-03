@extends('layout.master')

	@section('content')
	<div class="container margin-top profile">
		<div class="col-md-4">
			<img src="http://placehold.it/300x300" alt=""/>
		</div>
		<div class="col-md-8">
			<h2>Lorem Ipsum</h2>
			<div class="row">
				<div class="col-md-2"><span class="label-heading">Date of Birth:</span></div>
				<div class="col-md-10">02/10/1990</div>
			</div>
			<div class="row">
				<div class="col-md-2"><span class="label-heading">Parents:</span></div>
				<div class="col-md-10">Mr Smith & Mrs Smith</div>
			</div>
			<div class="row">
				<div class="col-md-2"><span class="label-heading">Description:</span></div>
				<div class="col-md-10">Integer blandit tincidunt ipsum commodo dictum. Mauris vitae nunc non eros tempus imperdiet et in ipsum. Sed cursus dapibus ipsum ut molestie. Suspendisse interdum massa lacus, in gravida orci pretium vitae. Nulla a dolor iaculis, vehicula mi eget, laoreet orci. Aenean ut metus tellus.</div>
			</div>	
			<div class="row">
				<div class="col-md-4"><button type="button" class="btn btn-success">Edit Details</button></div>
			</div>	
		</div>
	</div>
	<div class="container gallery">
		<div class="col-md-12">
			<img src="http://placehold.it/120x120" alt=""/>
			<img src="http://placehold.it/120x120" alt=""/>
			<img src="http://placehold.it/120x120" alt=""/>
			<img src="http://placehold.it/120x120" alt=""/>
			<img src="http://placehold.it/120x120" alt=""/>
			<img src="http://placehold.it/120x120" alt=""/>
			<img src="http://placehold.it/120x120" alt=""/>
			<img src="http://placehold.it/120x120" alt=""/>
			<img src="http://placehold.it/120x120" alt=""/>
		</div>
	</div>
	@stop