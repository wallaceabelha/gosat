@extends('layouts.main')

@section('title', 'Simular Oferta de Crédito GoSat')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Simular Empréstimo</h1>
        <form action="/simula" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="form-control" oninput="mascaraCpf(this)" placeholder="Consultar CPF" aria-label="Consultar CPF" aria-describedby="consulta_cpf">
            </div>
            <div class="form-group">
                <label for="title">Código da Instituição:</label>
                <input type="text" class="form-control" id="instituicao_id" name="instituicao_id" placeholder="Código da Instituição">
            </div>
            <div class="form-group">
                <label for="title">Modalidade de Crédiro:</label>
                <input type="text" class="form-control" id="codModalidade" name="codModalidade" placeholder="Modalidade de Crédiro">
            </div>
            <input type="submit" value="Simular" class="btn btn-primary">
        </form>
    </div>
@endsection