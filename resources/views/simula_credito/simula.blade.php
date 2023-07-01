@extends('layouts.main')

@section('title', 'Disponibilidade de Crédito GoSat')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Créditos Disponíveis</h1>
        <div id="cards-container" class="row">
            <div class="card col-md-6 offset-md-3">
                <div class="card-body">
                    <h5 class="card-instituicao">Parcela mínima: {{$QntParcelaMin}}</h5>
                    <h5 class="card-instituicao">Parcela máxima: {{$QntParcelaMax}}</h5>
                    <h5 class="card-instituicao">Valor mínima: {{$valorMin}}</h5>
                    <h5 class="card-instituicao">Valor máxima: {{$valorMax}}</h5>
                    <p class="card-modalidade">Juros: {{$jurosMes}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection