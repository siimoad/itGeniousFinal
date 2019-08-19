@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	

	<div class="container">
		<div class="row ">	
			<div class="col-md-6">
                <a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/project.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			<div class="col-md-6">
                <a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/server.png" class="img-fluid" alt="img-responsive"></a>
			
			<div class="clearfix"> </div>
		</div>
		<div class="row ">
			<div class="col-md-6">
                <a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/security.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			<div class="col-md-6">
                <a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/cloud.png" class="img-fluid" alt="img-responsive"></a>
				
			<div class="clearfix"> </div>
		</div>
		
			<div class="col-md-6">
                <a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/network.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			<div class="col-md-6 ">
                <a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/mobility.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			
		</div>			
	</div>
	@include('Guest.footer')
			<div class="clearfix"> </div></div>
</div>



@endsection


 

