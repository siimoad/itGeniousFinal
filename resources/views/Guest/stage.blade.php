@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')
        
    
<div class="container ">
        
                       
                    
                    
                          
                             <div class="short_overview my-4">
                             <h5>IT genious est un centre de certification autorisé Pearson vue, répondant aux normes imposés par cette organisation mondiale, vous offrant ainsi la possibilité de passer vos certifications IT ( Microsoft, CISCO, VMware , Comptia, JAVA ….) facilement et confortablement au sein de notre centre.
								Notre centre est ouvert le week end et les jours férié, ce qui vous permettra de programmer vos examens en toute tranquillité sans à vous soucier de vos engagements et contraintes professionnels. 
								IT genious peut aussi, dans le cadre de son partenariat avec pearson vue, de vous offrir les Voucher des examens a des prix intéressants 
								N’hésitez pas nous contacter, nous demeurons à votre entière disposition pour tout complément d’information 
								</h5>
                             <br>
                             
                            </div>
                        
                            <div class="row">

                                <div class="col-md-12 mb-md-0 mb-5">
                                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        
                                        <div class="row">
                        
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="name" name="name" class="form-control">
                                                    <label for="name" class="">Your name</label>
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="email" name="email" class="form-control">
                                                    <label for="email" class="">Your email</label>
                                                </div>
                                            </div>
                                         
                        
                                        </div>
                                        
                                        <div class="row">
                        
                                            <div class="col-md-12">
                        
                                                <div class="md-form">
                                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                    <label for="message">Your message</label>
                                                </div>
                        
                                            </div>
                                        </div>
                                        
                        
                                    </form>
                        
                                    <div class="text-center text-white my-5">
                                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').reset();">Reset</a>
                                    </div>
                                    <div class="status"></div>
                                </div>
                                

                    
                
                @include('Guest.footer')
		</div>
	
@endsection
