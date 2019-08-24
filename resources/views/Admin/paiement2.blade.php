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
                             {{$reservation->annonce->formation->titre}}
                        </td>
                        <td >
                            @if($reservation->user->etat == 2)
                               <span class="text-danger"> Payé</span>
                            
                            @else 
                               <span class="text-success"> Non payee</span>
                            
                            @endif

                        </td>
                    </tr>
                        
                    @empty
                        
                    @endforelse

                            
                               
                    
                  
                    
                </tbody>
            </table>
            <div class="align-items-center">{{ $reservations->links() }}</div>
            

        </div>
        
    </div>
            </div>

        
            </div>
</div>
        

    @endsection