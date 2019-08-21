@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	
	<div class="container ">
			<div class="row ">	
				@foreach($annonces as $annonce)
				@if($annonce->id < 5)
				
					<div class="col-md-6">
						<div class="product-div1">
							<div class="img-div1">
								<a href="{{ route('details', ['id' => $annonce->id]) }}"><img src="{{asset("argon/img/formations/$annonce->annonce_photo")}}" class="img-fluid" ></a>
							</div>
						</div>
					</div>
				
					@else
					<div class="col-md-4">
							<div class="product-div1">
									<div class="img-div1">
										<a href="{{ route('details', ['id' => $annonce->id]) }}"><img src="{{asset("argon/img/formations/$annonce->annonce_photo")}}" class="img-fluid" ></a>
									</div>
								</div>
					</div>
					@endif
								@endforeach

			</div>
		</div>@include('Guest.footer')

</div>


@endsection


 

