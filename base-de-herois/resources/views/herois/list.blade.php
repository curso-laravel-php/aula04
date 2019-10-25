@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Heróis</div>

                <div class="card-body">
                        <table>
                                <thead>
                                  <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($herois as $heroi)
                                        <tr>
                                            <td>{{$heroi->id}}</td>
                                            <td>{{$heroi->nome}}</td>
                                         </tr>                                    
                                    @endforeach                                                              
                                </tbody>                            
                        </table>                                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
