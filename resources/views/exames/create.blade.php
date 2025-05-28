@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Cadastro de Exame Genético</h2>
    <a href="{{ route('exames.index') }}" class="btn btn-sm btn-secondary mb-3">Ver exames cadastrados</a>
    <a href="{{ route('welcome') }}" class="btn btn-sm btn-light mb-3">Tela inicial</a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('exames.store') }}">
        @csrf

        <div class="mb-3">
            <label for="paciente" class="form-label">Paciente*</label>
            <input type="text" class="form-control" id="paciente" name="paciente" value="{{ old('paciente') }}" maxlength="100" required>
        </div>

        <div class="mb-3">
            <label for="exame_id" class="form-label">Número do Exame*</label>
            <input type="text" class="form-control" id="exame_id" name="exame_id" value="{{ old('exame_id') }}" required>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Exame*</label>
            <select class="form-select" id="tipo" name="tipo" required>
                <option value="">Selecione</option>
                <option value="Sequenciamento" {{ old('tipo') == 'Sequenciamento' ? 'selected' : '' }}>Sequenciamento</option>
                <option value="PCR" {{ old('tipo') == 'PCR' ? 'selected' : '' }}>PCR</option>
                <option value="Microarray" {{ old('tipo') == 'Microarray' ? 'selected' : '' }}>Microarray</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="data_coleta" class="form-label">Data de Coleta*</label>
            <input type="date" class="form-control" id="data_coleta" name="data_coleta" value="{{ old('data_coleta') }}" required max="{{ date('Y-m-d') }}">
        </div>

        <div class="mb-3">
            <label for="laudo" class="form-label">Laudo</label>
            <textarea class="form-control" id="laudo" name="laudo" maxlength="500">{{ old('laudo') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Exame</button>
    </form>
</div>
@endsection