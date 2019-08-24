@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	

	<div class="container">
<div class="arriv">
	<div class="container">
		<div>Afin  répondre tout les besoins en formation et ainsi satisfaire tout les profils , it Genious met a disposition de ces clients un catalogue de formation sur mesure et à la carte incluant les différentes formations de <b>Microsoft</b> .<br>

				Veuillez choisir la formation qui vous convient en remplissant le formulaire adéquat  vous seriez recontacter par nos équipes afin de vous donner tout les détails et informations nécessaires.
				
		</div>					
		<div class="row arriv-top">	
			<div class="col-md-6 ">
				<div class="product-div1">
					<div class="img-div1">
						<a href="{{route ('book')}}"><img src="{{ asset('gretong') }}/images/azure.png" class="img-fluid" alt="img-responsive"></a>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="product-div1">
					<div class="img-div1">
						<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/exchange.png" class="img-fluid" alt="img-responsive"></a>
					</div>
				</div>
            <div class="clearfix"> </div>
		</div>

		<div class="row ">
			<div class="col-md-6">
				<div class="product-div1">
					<div class="img-div1">
						<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/sharepoint.png" class="img-fluid" alt="img-responsive"></a>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="product-div1">
					<div class="img-div1">
						<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/sql.png" class="img-fluid" alt="img-responsive"></a>
					</div>
				</div>
			
            <div class="clearfix"> </div>
		</div>
		
			<div class="col-md-6">
				<div class="product-div1">
					<div class="img-div1">
						<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/asp.png" class="img-fluid" alt="img-responsive"></a>
					</div>
				</div>
			</div>

			<div class="col-md-6 ">
				<div class="product-div1">
					<div class="img-div1">
						<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/system-center.png" class="img-fluid" alt="img-responsive"></a>
					</div>
				</div>	
			</div>	
		</div>			
	</div>
			<div class="clearfix"> </div></div>
			@include('Guest.footer')
</div>



@endsection


 

