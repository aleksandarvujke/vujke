@extends('layouts.layout')


@section('content')

<div class="hero-image">
	<div class="container">
		<div class="row" id="hero-title">
			<h1 class="align-middle d-flex">Početna</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row align-items-center rose-image">
		<div class="col-12 col-md-6">
			<div class="introduction-one-image">
				<div class="introduction-one-image-detail">
					<img src="images/img1.png" alt="">
					<img src="images/img2.png" alt="">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="introduction-one-content">
				<h5>Ukratko o <span>Betty-Boop</span></h5>
				<div class="section-title -style1" style="margin-bottom: 1.875em;">
					<h2>When u look good
						<br>
						U Feel Good
					</h2>
				</div>
				<p>The top three occupations in the Beauty salons Industry Group are Hairdressers, hairstylists, & cosmetologists, Manicurists and pedicurists, Receptionists & information clerks, Supervisors of personal care and service workers, and Skincare specialists.</p>

				<a href="#" class="btn-primary-betty">Saznajte više</a>
			</div>
		</div>	
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="w-100 home-tremtnas">
			<h1>Tretmani</h1>
		</div>
			
				<?php $i=0; ?>
				 <?php foreach ($tretmans as $tretman): ?>
				 	

				 	
				 		
				 	<div class="col-md-4" id="tretman-card">	
						<div class="service-item">
							
						<a href="storage/{{$tretman->image}}"><img src="storage/{{$tretman->image}}" alt="{{$tretman->title}}" class="image-fluid w-100"></a>
						<h4>{{$tretman->title}}</h4>
						<p>{{$tretman->body}}</p>
						<a href="#" class="btn-decoration">Saznajte više</a>

						</div>
					</div>

				 	


					<?php if (++$i == 6) break; ?>

				 <?php endforeach ?>
				
			</div>
</div>

@endsection