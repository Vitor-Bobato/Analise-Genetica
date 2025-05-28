@extends('layouts.app')

@section('content')
<div class="container fade-in">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card p-5 mt-4 text-center">
                <img src="https://img.icons8.com/color/100/000000/dna-helix.png" alt="DNA" style="width:90px; margin-bottom:20px; animation: fadeIn 2s;">
                <h1 class="mb-3" style="color:#1976d2; font-weight:700;">Bem-vindo ao LabGenética</h1>
                <p class="lead mb-4" style="color:#333;">
                    Sistema para registro e gestão de exames genéticos.<br>
                    <span style="color:#26a69a;">Organize, consulte e mantenha o histórico dos exames do laboratório de forma prática e segura.</span>
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-3">
                    <a href="{{ route('exames.create') }}" class="btn btn-primary btn-lg shadow-sm" style="animation: fadeInUp 1.5s;">Cadastrar novo exame</a>
                    <a href="{{ route('exames.index') }}" class="btn btn-secondary btn-lg shadow-sm" style="animation: fadeInUp 1.7s;">Ver exames cadastrados</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection