@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')

    <div class="container">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="card bg-primary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col  form-group{{ $errors->has('sexe') ? ' has-danger' : '' }}">
                                    <div class="mx-7">
                                        <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="homme" name="sexe" class="custom-control-input" value="homme">
                                        <label class="custom-control-label" for="homme">Homme</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="femme" name="sexe" class="custom-control-input" value="femme">
                                        <label class="custom-control-label" for="femme">Femme</label>
                                        </div>
                                    </div>
                                    @if ($errors->has('sexe'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('sexe') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group{{ $errors->has('date_naissance') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                            <input class="form-control" name="date_naissance" type="date" value="" >
                                    </div>
                                    @if ($errors->has('date_naissance'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('date_naissance') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col form-group{{ $errors->has('ville') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <select type="text" class="form-control" name = "ville" id="ville" required=required class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }} value="{{ old('ville') }}" required autocomplete="ville" autofocus">
                                            <option selected=true disabled selected value>Selectionner une ville</option>
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
                                    </div>
                                    @if ($errors->has('ville'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('ville') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group{{ $errors->has('etablissement') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <select type="text" class="form-control" name = "etablissement" id="etablissement" required=required class="form-control{{ $errors->has('etablissement') ? ' is-invalid' : '' }} value="{{ old('etablissement') }}" required autocomplete="etablissement" autofocus"> 
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
                                    </div>
                                    @if ($errors->has('etablissement'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('etablissement') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col form-group{{ $errors->has('niveau') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <select type="text" class="form-control" name = "niveau" id="niveau" required=required class="form-control{{ $errors->has('niveau') ? ' is-invalid' : '' }} value="{{ old('niveau') }}" required autocomplete="niveau" autofocus"> 
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
                                    </div>
                                    @if ($errors->has('niveau'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('niveau') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group{{ $errors->has('tel') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" placeholder="{{ __('Tel') }}" type="tel" name="tel" value="{{ old('tel') }}" required>
                                    </div>
                                    @if ($errors->has('tel'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('tel') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-muted font-italic">
                                    <small>{{ __('password strength') }}: <span class="text-success font-weight-700">{{ __('strong') }}strong</span></small>
                                </div>
                                <div class="col  ">
                                    <div class="col-12">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                            <label class="custom-control-label" for="customCheckRegister">
                                                <span class="text-muted">{{ __('I agree with the') }} <a href="#!">{{ __('Privacy Policy') }}</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
                                <INPUT class="btn btn-primary mt-4" TYPE="button" VALUE="Retour" onClick="history.back()">
                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
