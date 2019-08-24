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
                        <th scope="col">Formation</th>
                        <th scope="col">Brochure PDF</th>
                        <th scope="col">Formation PDF</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($formations as $formation)
                    <tr>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <span class="mb-0 text-sm"> {{$formation->titre}}</span>
                            </div>
                        </th>
                        <td ><a href="storage/brochure_pdf/{{$formation->brochure_pdf}}"}}>Brochure PDF</a>

                            <td ><a href="storage/formation_pdf/{{$formation->brochure_pdf}}"}}>Formation PDF</a>
                                <td class="text-right">

                            <a href="{{route('formation.show', ['id' => $formation->id])}}" class="mb-3 btn btn-info active" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
                        <a href="{{route('formation.destroy', ['id' => $formation->id])}}" class="mb-3 btn btn-danger active" role="button" aria-pressed="true"><i class="fa fa-trash" ></i></a>
    
                            </td>

                            </div>
                        </td>
                    </tr>
                        
                    @empty
                        
                    @endforelse
                   
                            
                               
                    
                  
                    
                </tbody>
            </table>
        </div>
        <div class="text-center text-white">
                <INPUT class="btn btn-dark" TYPE="button" VALUE="Retour" onClick="history.back()">
                
            </div>
        
    </div>
            </div>

        
            </div>
</div>
        

    @endsection