@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('Client.header')   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/user.png" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light">, {{auth()->user()->age}} ans</span>
                            </h3>
                            <div class="h3 mt-3 font-weight-1000">
                                <i class="ni location_pin mr-2"></i>{{ auth()->user()->ville }}
                            </div>
                            <div class="h3 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>@if (auth()->user()->sexe = 'homme')
                                    Etudiant en <b>{{auth()->user()->niveau}}</b>
                                @else
                                Etudiante en <b>{{auth()->user()->niveau}}</b>

                                @endif
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>
                            @switch(auth()->user()->etablissement)
                                @case('um6ss')
                                <span> UNIVERSITÉ MOHAMMED VI DES SCIENCES DE LA SANTÉ </span>
                                @break
                                @case('uiass')
                                <span> UNIVERSITÉ INTERNATIONALE ABULCASIS DES SCIENCES DE LA SANTÉ </span>
                                @break
                                @case('ueuromed')
                                <span> UNIVERSITÉ EUROMED DE FÈS </span>
                                @break
                                @case('medmetiers')
                                <span> MED UNIVERSITÉ – L’UNIVERSITÉ DES MÉTIERS </span>
                                @break
                                @case('mundiapolis')
                                <span> UNIVERSITÉ MUNDIAPOLIS DE CASABLANCA </span>
                                @break
                                @case('usms')
                                <span>  UNIVERSITÉ BÉNI MELLAL - SULTAN MOULAY SLIMANE </span>
                                @break
                                @case('upf')
                                <span> UNIVERSITÉ PRIVÉE DE FÈS </span>
                                @break
                                @case('universiapolis')
                                <span> UNIVERSIAPOLIS AGADIR </span>
                                @break
                                @case('aui')
                                <span> UNIVERSITÉ AL AKHAWAYN </span>
                                @break
                                @case('ump')
                                <span>  UNIVERSITÉ OUJDA - MOHAMMED PREMIER </span>
                                @break
                                @case('uae')
                                <span> UNIVERSITÉ TANGER - ABDELMALEK ESSAÂDI </span>
                                @break
                                @case('uit')
                                <span> UNIVERSITÉ IBN TOFAÏL KÉNITRA </span>
                                @break
                                @case('umi')
                                <span> UNIVERSITÉ MOULAY ISMAÏL MEKNÈS </span>
                                @break
                                @case('alqaraouiyine')
                                <span> UNIVERSITÉ QUARAOUIYINE FÈS </span>
                                @break
                                @case('ucd')
                                <span> UNIVERSITÉ EL JADIDA - CHOUAÏB DOUKKALIS </span>
                                @break
                                @case('uh1')
                                <span> UNIVERSITÉ SETTAT - HASSAN PREMIER </span>
                                @break
                                @case('uh2m')
                                <span> UNIVERSITÉ MOHAMMEDIA - HASSAN II </span>
                                @break
                                @case('uh2c')
                                <span> UNIVERSITÉ HASSAN II CASABLANCA </span>
                                @break
                                @case('um5c')
                                <span> UNIVERSITÉ RABAT - MOHAMMED V SOUISSI </span>
                                @break
                                @case('um5a')
                                <span> UNIVERSITÉ RABAT - MOHAMMED V AGDAL </span>
                                @break
                                @case('usmba')
                                <span> UNIVERSITÉ FÈS - SIDI MOHAMED BEN ABDELAH </span>
                                @break
                                @case('uca')
                                <span> UNIVERSITÉ MARRAKECH - CADI AYYAD </span>
                                @break
                                @case('uiz')
                                <span> UNIVERSITÉ IBN ZOHR AGADIR </span>
                                @break
                            @default
                            <span> Autre..</span>
                            @endswitch
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Modifier Profile') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Informations') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Nom complet') }}</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nom complet') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group{{ $errors->has('date_naissance') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-date_naissance">{{ __('Date Naissance') }}</label>
                                        <input type="date" name="date_naissance" id="input-date_naissance" class="form-control form-control-alternative{{ $errors->has('date_naissance') ? ' is-invalid' : '' }}" placeholder="{{ __('Date Naissance') }}" value="{{ old('name', auth()->user()->date_naissance) }}" required autofocus>

                                        @if ($errors->has('date_naissance'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('date_naissance') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col form-group{{ $errors->has('ville') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-ville">{{ __('Ville') }}</label>
                                        <select type="text" class="form-control" name="ville" id="input-ville" class="form-control form-control-alternative{{ $errors->has('ville') ? ' is-invalid' : '' }}" placeholder="{{ __('Ville') }}" value="{{ old('ville',auth()->user()->ville) }}"  autofocus>
                                            <option selected=false disabled selected value>Selectionner une ville</option>
                                            <option   value='Agadir'>Agadir</option>
                                            <option   value='Asilah'>Asilah</option>
                                            <option   value='Arfoud'>Arfoud</option>
                                            <option   value='Beni Mellal'>Beni Mellal</option>
                                            <option   value='Berkane'>Berkane</option>
                                            <option   value='Berrechid'>Berrechid</option>
                                            <option   value='Boujdour'>Boujdour</option>
                                            <option   value='Casablanca'>Casablanca</option>
                                            <option   value='Chefchaouen'>Chefchaouen</option>
                                            <option   value='Dakhla'>Dakhla</option>
                                            <option   value='El aioun'>El Aioun </option>
                                            <option   value='El jadida'>El Jadida </option>
                                            <option   value='Errachidia'>Errachidia </option>
                                            <option   value='Essaouira'>Essaouira</option>
                                            <option   value='Fes'>Fès</option>
                                            <option   value='Fnideq'>Fnideq</option>
                                            <option   value='Guelmim'>Guelmim</option>
                                            <option   value='Guelmima'>Guelmima</option>
                                            <option   value='Guercif'>Guercif</option>
                                            <option   value='Ifrane'>Ifrane</option>
                                            <option   value='Kenitra'>Kénitra</option>
                                            <option   value='Khenifra'>Khénifra</option>
                                            <option   value='Khouribga'>Khouribga</option>
                                            <option   value='Ksar El Kebir'>Ksar el Kebir </option>
                                            <option   value='Laayoune'>Laâyoune</option>
                                            <option   value='Lagouira '>Lagouira </option>
                                            <option   value='Larache'>Larache</option>
                                            <option   value='Marrakech'>Marrakech</option>
                                            <option   value='Martil'>Martil</option>
                                            <option   value='Meknes'>Meknès</option>
                                            <option   value='Mohammedia'>Mohammédia</option>
                                            <option   value='Nador'>Nador</option>
                                            <option   value='Ouarzazate'>Ouarzazate</option>
                                            <option   value='Ouezzane'>Ouezzane</option>
                                            <option   value='Oujda'>Oujda</option>
                                            <option   value='Rabat'>Rabat</option>
                                            <option   value='Oujda'>Oujda</option>
                                            <option   value='Safi'>Safi</option>
                                            <option   value='Sale'>Salé</option>
                                            <option   value='Tanger'>Tanger</option>
                                            <option   value='Tetouan'>Tétouan</option>
                                            <option   value='autre'>Autre..</option>
                                        </select>                                

                                        @if ($errors->has('ville'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('ville') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group{{ $errors->has('etablissement') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-etablissement">{{ __('Etablissement') }}</label>
                                        <select type="text" class="form-control" name="etablissement" id="input-etablissement" class="form-control form-control-alternative{{ $errors->has('etablissmeent') ? ' is-invalid' : '' }}" placeholder="{{ __('Etablissement') }}" value="{{ old('etablissement', auth()->user()->etablissement) }}"  autofocus> 
                                            <option selected=true disabled selected value>Selectionner une université</option>
                                            <option   value='um6ss'>UNIVERSITÉ MOHAMMED VI DES SCIENCES DE LA SANTÉ</option>
                                            <option   value='uiass'>UNIVERSITÉ INTERNATIONALE ABULCASIS DES SCIENCES DE LA SANTÉ</option>
                                            <option   value='ueuromed'>UNIVERSITÉ EUROMED DE FÈS</option>
                                            <option   value='medmetiers'>MED UNIVERSITÉ – L’UNIVERSITÉ DES MÉTIERS</option>
                                            <option   value='mundiapolis'>UNIVERSITÉ MUNDIAPOLIS DE CASABLANCA</option>
                                            <option   value='usms'>UNIVERSITÉ BÉNI MELLAL - SULTAN MOULAY SLIMANE</option>
                                            <option   value='upf'>UNIVERSITÉ PRIVÉE DE FÈS</option>
                                            <option   value='universiapolis'>UNIVERSIAPOLIS AGADIR</option>
                                            <option   value='aui'>UNIVERSITÉ AL AKHAWAYN</option>
                                            <option   value='ump'>UNIVERSITÉ OUJDA - MOHAMMED PREMIER</option>
                                            <option   value='uae'>UNIVERSITÉ TANGER - ABDELMALEK ESSAÂDI</option>
                                            <option   value='uit'>UNIVERSITÉ IBN TOFAÏL KÉNITRA</option>
                                            <option   value='umi'>UNIVERSITÉ MOULAY ISMAÏL MEKNÈS</option>
                                            <option   value='alqaraouiyine'>UNIVERSITÉ QUARAOUIYINE FÈS</option>
                                            <option   value='ucd'>UNIVERSITÉ EL JADIDA - CHOUAÏB DOUKKALI</option>
                                            <option   value='uh1'>UNIVERSITÉ SETTAT - HASSAN PREMIER</option>
                                            <option   value='uh2m'>UNIVERSITÉ MOHAMMEDIA - HASSAN II</option>
                                            <option   value='uh2c'>UNIVERSITÉ HASSAN II CASABLANCA</option>
                                            <option   value='um5c'>UNIVERSITÉ RABAT - MOHAMMED V SOUISSI</option>
                                            <option   value='um5a'>UNIVERSITÉ RABAT - MOHAMMED V AGDAL</option>
                                            <option   value='usmba'>UNIVERSITÉ FÈS - SIDI MOHAMED BEN ABDELAH</option>
                                            <option   value='uca'>UNIVERSITÉ MARRAKECH - CADI AYYAD</option>
                                            <option   value='uiz'>UNIVERSITÉ IBN ZOHR AGADIR</option>
                                            <option   value='autre'>AUTRE..</option>
                                                
                                        </select>                                 

                                        @if ($errors->has('etablissement'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('etablissement') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col form-group{{ $errors->has('niveau') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-niveau">{{ __('Niveau') }}</label>
                                        <select type="text" class="form-control" name="niveau" id="input-etablissement" class="form-control form-control-alternative{{ $errors->has('niveau') ? ' is-invalid' : '' }}" placeholder="{{ __('Niveau') }}" value="{{ old('niveau', auth()->user()->niveau) }}"  autofocus> 
                                            <option selected=true disabled selected value>Selectionner votre niveau</option>
                                            <option   value='bac'>BAC</option>
                                            <option   value='bac+1'>BAC+1</option>
                                            <option   value='bac+2'>BAC+2</option>
                                            <option   value='bac+3'>BAC+3</option>
                                            <option   value='bac+4'>BAC+4</option>
                                            <option   value='bac+5'>BAC+5</option>
                                            <option   value='doctorat'>DOCTORAT</option>
                                            <option   value='autre'>AUTRE..</option>
                                                
                                        </select>                                 

                                        @if ($errors->has('niveau'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('niveau') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col form-group{{ $errors->has('tel') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tel">{{ __('Numero tel') }}</label>
                                    <input type="tel" name="tel" id="input-tel" class="form-control form-control-alternative{{ $errors->has('tel') ? ' is-invalid' : '' }}" placeholder="{{ __('Tel') }}" value="{{ old('tel', auth()->user()->tel) }}" required>

                                    @if ($errors->has('tel'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tel') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Sauvegarder') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Mot de passe') }}</h6>

                            @if (session('password_status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-current-password">{{ __('Mot de passe actuel') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Mot de passe actuel') }}" value="" required>
                                    
                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Nouveau mot de passe') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nouveau mot de passe') }}" value="" required>
                                    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmer mot de passe') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirmer nouveau mot de passe') }}" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Changer') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('Guest.footer')
    </div>
@endsection