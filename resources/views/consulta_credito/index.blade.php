@extends('layouts.main')

@section('title', 'Consulta Crédito GoSat')

@section('content')
    <div id="search-container" class="col-md 12">
        <h1>Consultar Disponibilidade de Crédito</h1>
        <form action="/consulta" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" id="cpf" name="cpf" class="form-control" oninput="mascaraCpf(this)" placeholder="Consultar CPF" aria-label="Consultar CPF" aria-describedby="consulta_cpf">
                <button class="btn btn-outline-secondary" type="submit" id="consulta_cpf">Consultar</button>
            </div>
        </form>
    </div>
@endsection

