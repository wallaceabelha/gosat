@extends('layouts.main')

@section('title', 'Disponibilidade de Crédito GoSat')

@section('content')
    <div id="events-container" class="clo-md-12">
        <h1>Creditos Disponíveis</h1>
        <p class="cpf-id">CPF Consultado: {{$cpf}}</p>
        @foreach($response as $json_response)
            <div id="cards-container" class="row">
                @foreach($json_response as $json_instituicao)
                <div class="card col-md-3">
                    <div class="card-body">
                            <p class="card-id">ID: {{$json_instituicao['id']}}</p>
                            <h5 class="card-instituicao">Instituição: {{$json_instituicao['nome']}}</h5>
                            @foreach($json_instituicao['modalidades'] as $json_modalidade)
                                <p class="card-modalidade"><ion-icon name="checkmark-outline"></ion-icon>{{$json_modalidade['cod']}} - {{$json_modalidade['nome']}}</p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach 
    </div>
@endsection