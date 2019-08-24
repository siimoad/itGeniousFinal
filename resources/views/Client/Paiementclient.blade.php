@extends('layouts.app')

@section('content')
    @include('Client.header')   

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12">
                    


    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Formation</th>
                        <th scope="col">Etat de Paiement</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($formations as $formation)

                    <tr>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <span class="mb-0 text-sm"> {{$formation->annonce->formation->titre}}</span>
                            </div>
                        </th>
                        
                        <td >@if ($formation->user->etat == 2)
                            Payee
                            @else
                            Non payee
                        @endif</td>

                    </tr>
                        @empty
                        @endforelse

                </tbody>
            </table>
        </div>
        
    </div><div class="text-center text-white py-9">
            <INPUT class="btn btn-dark" TYPE="button" VALUE="Retour" onClick="history.back()">
            
        </div>
            </div>
            
                    
        
            </div>
</div>
        

    @endsection