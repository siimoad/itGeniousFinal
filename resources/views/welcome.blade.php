@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	
	<div class="container">
		<div class="arriv">
			<div class="row">	
				@foreach($annonces as $annonce)
				@if($annonce->id < 3)
					<div class="col-md-5">
						<div class="hovereffect">
								<a href="{{ route('details', ['id' => $annonce->id]) }}"><img  src="{{asset("storage/annonce_photo/$annonce->annonce_photo")}}" alt="img-responsive"></a>

						</div>
					</div>
					@else
					<div class="col-md-4">
						<div class="hovereffect">
								<a href="{{ route('details', ['id' => $annonce->id]) }}"><img src="{{asset("storage/annonce_photo/$annonce->annonce_photo")}}" class="img-fluid" alt="img-responsive"></a>
						<div class=" arriv-info">
							<div class=" crt-btn">
								
							</div>
						</div>
						</div>
					</div>
					@endif
								@endforeach

			</div>
		</div>@include('Guest.footer')
</div>
</div>


@endsection


 

