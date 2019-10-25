@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($errors->any())
                <div class="alert alert-danger">                    
                    @foreach ($errors->all() as $erro)
                        <p>{{$erro}}</p>        
                    @endforeach                    
                </div>
            @endif

            <div class="card">                
                <div class="card-header">Novo Heróis</div>

                <div class="card-body" >
                    <form action="{{route("herois.salva-novo")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <p>Nome:</p>
                        <input type="text" name="nome">

                        <p>Identidade Secreta:</p>
                        <input type="text" name="identidade_secreta">

                        <p>Origem:</p>
                        <input type="text" name="origem">

                        <p>Força:</p>
                        <select id="forca" name="forca">
                            <option value="forte">Forte</option>
                            <option value="média">Média</option>
                            <option value="fraca">Fraca</option>
                        </select>    
                        
                        <p>Terraqueo?
                            <input type="checkbox" name="terraqueo">
                        </p>    
                        
                        <p>Pode voar?
                            <input type="checkbox" name="podevoar">
                        </p>

                        <p>Foto:</p>
                        <p>
                            <input type="file" id="foto" name="foto">
                        </p>

                        <input type="submit" value="Salvar">
                    </form>                                              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
