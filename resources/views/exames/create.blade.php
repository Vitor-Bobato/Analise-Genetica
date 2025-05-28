@extends('layouts.app')

@section('content')
<div class="container fade-in">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card p-5 mt-4">
                <h2 class="mb-4 text-center" style="color:#1976d2; font-weight:700;">Cadastro de Exame Genético</h2>
                <div class="mb-3 text-center">
                    <a href="{{ route('exames.index') }}" class="btn btn-outline-secondary btn-sm mx-1">Ver exames cadastrados</a>
                    <a href="{{ route('welcome') }}" class="btn btn-outline-primary btn-sm mx-1">Tela inicial</a>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger fade-in">
                        <ul class="mb-0">
                            @foreach($errors->all() as $erro)
                                <li>{{ $erro }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('exames.store') }}" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="paciente" class="form-label">Paciente*</label>
                        <input type="text" class="form-control" id="paciente" name="paciente" value="{{ old('paciente') }}" maxlength="100" required placeholder="Nome do paciente">
                    </div>
                    <div class="mb-3">
                        <label for="exame_id" class="form-label">Número do Exame*</label>
                        <input type="text" class="form-control" id="exame_id" name="exame_id" value="{{ old('exame_id') }}" required placeholder="Ex: GX123AB">
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
                        <textarea class="form-control" id="laudo" name="laudo" maxlength="500" rows="3" placeholder="Digite o laudo (opcional)">{{ old('laudo') }}</textarea>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg shadow-sm px-5">Cadastrar Exame</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection