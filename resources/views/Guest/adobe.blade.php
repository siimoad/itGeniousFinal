@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	

	<div class="container">
		<div class="row ">	
			<div class="col-md-6">
				<div class="product-div1">
					<div class="img-div1">
						<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/ps.png" class="img-fluid" alt="img-responsive"></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
					<div class="product-div1">
							<div class="img-div1">
									<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/id.png" class="img-fluid" alt="img-responsive"></a>
							</div>
					</div>
				<div class="clearfix"> </div>
			</div>
		<div class="row ">
			<div class="col-md-6">
					<div class="product-div1">
						<div class="img-div1">
							<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/ai.png" class="img-fluid" alt="img-responsive"></a>	
						</div>
					</div>
            </div>
			<div class="col-md-6">
					<div class="product-div1">
						<div class="img-div1">
							<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/ae.png" class="img-fluid" alt="img-responsive"></a>
						</div>
					</div>
                <div class="clearfix"> </div>
			</div>
		
			<div class="col-md-6">
					<div class="product-div1">
						<div class="img-div1">
								<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/fl.png" class="img-fluid" alt="img-responsive"></a>
						</div>
					</div>
            </div>
			<div class="col-md-6 ">
					<div class="product-div1">
						<div class="img-div1">
								<a href="{{ route('book') }}"><img src="{{ asset('gretong') }}/images/dw.png" class="img-fluid" alt="img-responsive"></a>
						</div>
					</div>	
			</div>	
		</div>	
				
	</div> 
			@include('Guest.footer')
		<div class="clearfix"> </div></div>
			
</div>



@endsection


 

