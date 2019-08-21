@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	
	<div class="container">
		<div class="arriv">
			<div class="row">	
				@foreach($annonces as $annonce)
				@if($annonce->id < 5)
					<div class="col-md-6">
							<a href="{{ route('details', ['id' => $annonce->id]) }}"><img src="{{asset("argon/img/formations/$annonce->annonce_photo")}}" class="img-fluid" alt="img-responsive"></a>

					</div>
					@else
					<div class="col-md-4">
							<a href="{{ route('details', ['id' => $annonce->id]) }}"><img src="{{asset("argon/img/formations/$annonce->annonce_photo")}}" class="img-fluid" alt="img-responsive"></a>

					</div>
					@endif
								@endforeach

			</div>
		</div>@include('Guest.footer')
</div>
</div>


@endsection


 

