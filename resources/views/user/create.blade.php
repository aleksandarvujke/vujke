@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row">
		<?php foreach ($tretmans as $tretman): ?>
			{{ $tretman->title }}
		<?php endforeach ?>
	</div>
</div>
@endsection