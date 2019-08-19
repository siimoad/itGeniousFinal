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
                        <th scope="col">Nom complet</th>
                        <th scope="col">Formation souhaitée</th>
                        <th scope="col">Etat de paiement</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($reservations as $reservation)
                    <tr>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <span class="mb-0 text-sm"> {{$reservation->user->name}}</a></span>
                            </div>
                        </th>
                        <td class="font-weight-normal">
                             {{$reservation->annonce->titre}}
                        </td>
                        <td >

@php if($reservation->user->etat == 0){
    Payé
}
elseif ($reservation->user->etat == 1) {
    Payé1
}
else ($reservation->user->etat == 2) {
    Payé2
}@endphp

                        </td>
                        <td class="text-right">
                    <a href="#" class="mb-3 btn btn-secondary active" role="button" aria-pressed="true">Confirmer </a>
                    <a href="#" class="mb-3 btn btn-secondary active" role="button" aria-pressed="true">Annuler </a>

                        </td>
                    </tr>
                        
                    @empty
                        
                    @endforelse
                   
                            
                               
                    
                  
                    
                </tbody>
            </table>
        </div>
        
    </div>
            </div>

        
            </div>
</div>
        

    @endsection