@extends('layouts.layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<?php if (session()->has('Message')): ?>
				<div class="alert alert-success" role="alert" id="Message">
	  				<?php  echo session()->get('Message'); ?>
				</div>
  			<?php endif ?>
			


			<form action="/g" method="post" enctype="multipart/form-data">
						 @csrf
				  <div class="form-group">
				    <label for="body">Opis</label>
				    <input type="text" class="form-control" id="body" aria-describedby="titleHelp" placeholder="" name="body">
				  </div>
				  <label for="image" class="col-md-4 col-form-label">Slika</label>
				  <input type="file" class="form-control-file" id="image" name="image">
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
		



@endsection