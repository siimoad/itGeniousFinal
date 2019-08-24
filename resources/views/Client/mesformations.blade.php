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
                        <th scope="col">Brochure PDF</th>
                        <th scope="col">Formation PDF</th>
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
                        @if ($formation->user->etat == 2)
                        <td ><a href="storage/brochure_pdf/{{$formation->annonce->formation->brochure_pdf}}"}}">Brochure PDF</a>
                        </td>
                        <td ><a href="storage/formation_pdf/{{$formation->annonce->formation->formation_pdf}}"}}">Formation PDF</a>
                        @else
                        <td >Brochure PDF
                        </td>
                        <td >Formation PDF</td>
                            
                        @endif
                        

                    </tr>
                        @empty
                        @endforelse
                   
                               
                    
                  
                    
                </tbody>
            </table>
        </div>
        
    </div><div class="text-center text-white py-7">
            <INPUT class="btn btn-lg btn-primary" TYPE="button" VALUE="Retour" onClick="history.back()">
            
        </div>
            </div>
            
                    
        
            </div>
</div>
        

    @endsection