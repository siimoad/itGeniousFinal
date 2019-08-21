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
                        <th scope="col">Date Debut</th>
                        <th scope="col">Date Fin</th>
                        <th scope="col">Paiement</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                  
                    <tr>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <span class="mb-0 text-sm"> Microsoft</span>
                            </div>
                        </th>
                        <td class="font-weight-normal">
                            30/10/2019
                        </td>
                        <td >
                            <span class="badge badge-dot mr-4">
                             30/12/2019
                            </span>
                        </td>
                        <td >Non paye</td>
                        <td class="text-right">
                            
                        </td>
                    </tr>
                        
                   
                               
                    
                  
                    
                </tbody>
            </table>
        </div>
        
    </div><div class="text-center text-white py-9">
            <INPUT class="btn btn-lg btn-primary" TYPE="button" VALUE="Retour" onClick="history.back()">
            
        </div>
            </div>
            
                    
        
            </div>
</div>
        

    @endsection