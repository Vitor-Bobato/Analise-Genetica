@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Exames Cadastrados</h2>
    <a href="{{ route('exames.create') }}" class="btn btn-sm btn-primary mb-3">Cadastrar novo exame</a>
    <a href="{{ route('welcome') }}" class="btn btn-sm btn-light mb-3">Tela inicial</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($exames->isEmpty())
        <div class="alert alert-info">Nenhum exame cadastrado até o momento.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Nº Exame</th>
                    <th>Tipo</th>
                    <th>Data de Coleta</th>
                    <th>Laudo</th>
                    <th>Data de Cadastro</th>
                </tr>
            </thead>
            <tbody>
            @foreach($exames as $exame)
                <tr>
                    <td>{{ $exame->paciente }}</td>
                    <td>{{ $exame->exame_id }}</td>
                    <td>{{ $exame->tipo }}</td>
                    <td>{{ \Carbon\Carbon::parse($exame->data_coleta)->format('d/m/Y') }}</td>
                    <td>{{ $exame->laudo }}</td>
                    <td>{{ $exame->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection