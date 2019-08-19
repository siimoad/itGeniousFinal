@extends('layouts.app')

@section('content')
    @include('Client.header')   

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12">
                    <a href="{{route('formation.add')}}" class="mb-3 btn btn-secondary btn-lg  btn-block active" role="button" aria-pressed="true">Ajouter Formation</a>


    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Project</th>
                        <th scope="col">Nombres De Places</th>
                        <th scope="col">Date Debut</th>
                        <th scope="col">PDF</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($formations as $formation)
                    <tr>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <span class="mb-0 text-sm"><a href="{{ route('formation', ['id' => $formation->id])}}"> {{$formation->titre}}</a></span>
                            </div>
                        </th>
                        <td class="font-weight-normal">
                            30 
                        </td>
                        <td >
                            <span class="badge badge-dot mr-4">
                             30/10/2019
                            </span>
                        </td>
                        <td >{{$formation->formation_pdf}}</td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="{{route('formation.show', ['id' => $formation->id])}}">Modifier Formation</a>
                                    <a class="dropdown-item" href="{{route('formation.destroy', ['id' => $formation->id])}}">Supprimer Formation</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                        
                    @empty
                        
                    @endforelse
                   
                            
                               
                    
                  
                    
                </tbody>
            </table>
        </div>
        <div class="text-center text-white">
                <INPUT class="btn btn-lg btn-primary" TYPE="button" VALUE="Retour" onClick="history.back()">
                
            </div>
        
    </div>
            </div>

        
            </div>
</div>
        

    @endsection