@extends('layouts.app', ['title' => __('Ajouter Annonce')])

@section('content')
    @include('Client.header')   

    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Ajouter Annonce') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" action="{{route('annonce.add')}}" autocomplete="off" enctype="multipart/form-data">
                          @csrf
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
                                    <div class="col form-group{{ $errors->has('titre') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-titre">{{ __('Formation') }}</label>
                                        <select type="text" name="titre" id="input-titre" 
                                            class="form-control form-control-alternative{{ $errors->has('titre') ? ' is-invalid' : '' }}" 
                                            placeholder="{{ __('Titre') }}" required autofocus>
                                        @foreach ($formations as $formation)
                                            <option value="<?php echo $formation->id; ?>">
                                                {{ $formation->titre  }}  
                                            </option>
                                        @endforeach
                                        </select>
                                        @if ($errors->has('titre'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('titre') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                     <div class="col form-group{{ $errors->has('prix') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-prix">{{ __('Prix') }}</label>
                                        <input type="text" name="prix" id="input-prix" class="form-control form-control-alternative{{ $errors->has('prix') ? ' is-invalid' : '' }}" placeholder="{{ __('Prix') }}" value="{{ old('prix') }}" required autofocus>
                                        @if ($errors->has('prix'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('prix') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                </div>
                                <div class="row">
                                <div class="col form-group{{ $errors->has('annonce_photo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-annonce_photo">{{ __('Image d\'annonce') }}</label>
                                    <input type="file" name="annonce_photo" id="input-annonce_photo" class="form-control form-control-alternative{{ $errors->has('annonce_photo') ? ' is-invalid' : '' }}" placeholder="{{ __('Annonce Image') }}" value="{{ old('annonce_photo') }}" required>

                                    @if ($errors->has('annonce_photo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('annonce_photo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col form-group{{ $errors->has('annonce_photo2') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-annonce_photo2">{{ __('Image d\'annonce 2') }}</label>
                                    <input type="file" name="annonce_photo2" id="input-annonce_photo2" class="form-control form-control-alternative{{ $errors->has('annonce_photo2') ? ' is-invalid' : '' }}" placeholder="{{ __('Annonce Image 2') }}" value="{{ old('annonce_photo2') }}" required>
                                
                                    @if ($errors->has('annonce_photo2'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('annonce_photo2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                     <INPUT class="btn btn-success mt-4" TYPE="button" VALUE="Retour" onClick="history.back()">
   
                                        
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