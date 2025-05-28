@extends('layouts.app')

@section('content')
<div class="container fade-in">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card p-4 mt-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="mb-0" style="color:#1976d2; font-weight:700;">Exames Cadastrados</h2>
                    <div>
                        <a href="{{ route('exames.create') }}" class="btn btn-primary btn-sm mx-1">Cadastrar novo exame</a>
                        <a href="{{ route('welcome') }}" class="btn btn-outline-secondary btn-sm mx-1">Tela inicial</a>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success fade-in">{{ session('success') }}</div>
                @endif

                @if($exames->isEmpty())
                    <div class="alert alert-info fade-in">Nenhum exame cadastrado até o momento.</div>
                @else
                    <div class="table-responsive">
                        <table class="table align-middle table-hover shadow-sm">
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
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection