@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Bem-vindo ao Sistema de Análise Genética</h1>
    <p>
        Este sistema foi desenvolvido para facilitar o registro e a gestão de exames genéticos realizados em nosso laboratório.<br>
        Com ele, você pode:
    </p>
    <ul>
        <li>Cadastrar novos exames genéticos de pacientes</li>
        <li>Visualizar exames já cadastrados</li>
        <li>Manter o histórico de laudos de forma digital e acessível</li>
    </ul>
    <div class="mt-4">
        <a href="{{ route('exames.create') }}" class="btn btn-primary">Cadastrar novo exame</a>
        <a href="{{ route('exames.index') }}" class="btn btn-secondary">Ver exames cadastrados</a>
    </div>
</div>
@endsection