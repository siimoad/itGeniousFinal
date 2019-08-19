@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	

	<div class="container">
		<div class="row ">	
			<div class="col-md-6">
                <a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/office1.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			<div class="col-md-6">
                <a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/office2.png" class="img-fluid" alt="img-responsive"></a>
			
			<div class="clearfix"> </div>
		</div>
		
		
		
                
		
		
		@include('Guest.footer')
		</div>
	
		
	</div>
		<div class="clearfix"> </div></div>
			
</div>



@endsection


