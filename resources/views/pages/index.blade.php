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
					<img src="{{ asset('images/img1.png') }}" alt="">
					<img src="{{ asset('images/img2.png') }}" alt="">
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

				<a href="#" class="btn-decoration">Saznajte više</a>
			</div>
		</div>	
	</div>
</div>
<div class="back-tretmans-grad">
<div class="container section-tretmans">
	<div class="row">
		<div class="w-100 tremtnas-content">
			<h1>Tretmani</h1>	

		<div class="header-text-tretmans">
				<p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
		</div>	


			
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

				 <div class="button-all-tretmans col-12 justify-content-center d-flex">
					<a href="#" class="btn-decoration">Celokupna ponuda</a>
				</div>
				
			</div>
</div>
</div>

<!-- Gallery Sectio -->

<div class="container">
	<div class="row">
			<div class="content-gallery">
				<h1>GALERIJA</h1>
			<p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
			</div>
			@foreach($galleries as $gallery)
				<div class="col-sm-4" id="gallery">
					<div class="gallery-image-wrapper">
						<div class="imgBox">
							<a href="images/{{$gallery->image_name}}"></a>
							<img src="images/{{$gallery->image_name}}" alt="" class="img-fluid">
						</div>
							<div class="details">
							<div class="" data-like="{{$gallery->id}}"><p class="like-tretman">
								<!-- {{ $gallery->isAuthUserLikedPost() ? "<a href='#' class='like'><i class='fa fa-heart' id='heart' style='color:red'></i></a></p>" : "aca" }} -->

								<?php if ($gallery->isAuthUserLikedPost()): ?>
									<a href="#"class='like'><i class='fa fa-heart' id='heart' style='color:red'></i></a></p>
								<?php else: ?>
									<a href='#' class='like'><i class='fa fa-heart' id='heart' style='color:white'></i></a></p>
								<?php endif ?>
							
								<!-- <a href='#' class='like'><i class='fa fa-heart' id='heart' style='color:red'></i></a></p> -->
							<p class="count-likes" id="pera{{$gallery->id}}">{{$gallery->likes->count()}}</p>
							<p class="tretmans-name">Tretman Lica</p>
							</div>
						</div>
					</div>
				</div>
			@endforeach

	</div>
</div>

<script>
	var likeId = 0;
$('.like').on('click', function(event) {
    event.preventDefault();
    likeId = event.target.parentNode.parentNode.parentNode.dataset['like'];
    var isLike = event.target.previousElementSibling == null;

    console.log(likeId);
    $.ajax({
        method: 'POST',
        url: '/likes',
        data: {"isLike": isLike, "likeId": likeId, "_token":"{{ csrf_token() }}"},
        success: function(count) {
                
        	$('#pera'+likeId).html(count.count[0].likes);

        	
        	console.log(count);
            }
    });
        // .done(function(count) {

        // 	// document.getElementByClassName('pera').innerHTML = count.count[0].likes;

        //     // event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You dont like this post' : 'Dislike';
        //     // if (isLike) {
        //     //     event.target.nextElementSibling.innerText = 'Dislike';
        //     // } else {
        //     //     event.target.previousElementSibling.innerText = 'Like';
        //     // }
        // });
});
	
</script>
@endsection