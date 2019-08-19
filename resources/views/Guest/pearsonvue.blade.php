@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')
        
    
<div class="container ">
        
            <div class="my-6">
                <div class="row">
                    <div class="col-md-5">
                        <img class="d-block w-100" src="{{ asset('gretong') }}/images/pv.png" alt="">
                    </div>              
                    
                    <div class="col-md-7">
                        
                          
                             <div class="short_overview my-4">
                             <h5>IT genious est un centre de certification autorisé Pearson vue, répondant aux normes imposés par cette organisation mondiale, vous offrant ainsi la possibilité de passer vos certifications IT ( Microsoft, CISCO, VMware , Comptia, JAVA ….) facilement et confortablement au sein de notre centre.
								Notre centre est ouvert le week end et les jours férié, ce qui vous permettra de programmer vos examens en toute tranquillité sans à vous soucier de vos engagements et contraintes professionnels. 
								IT genious peut aussi, dans le cadre de son partenariat avec pearson vue, de vous offrir les Voucher des examens a des prix intéressants 
								N’hésitez pas nous contacter, nous demeurons à votre entière disposition pour tout complément d’information 
								</h5>
                             <br>
                             
                            </div>
                        


                        </div>
                    </div>
            
                </div>
                
                @include('Guest.footer')
		</div>
	
@endsection
