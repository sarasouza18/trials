@extends('layouts.layout-interno')

@section('content')
    <div class="right_col" role="main">
        @if (Auth::check())

            <div>

                    <h1>Lista de Candidatos:</h1>


                @forelse ( $trials as $trial )
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <h3>{{ $trial->name }}</h3>
                            <a class="btn" href="{{ url('trials').'/'.$trial->id }}" > Ver +</a>
                        </div>
                    </div>
                @empty
                    <p>Nenhum Candidato</p>
                @endforelse
            </div>
        @else
            <h3>Você precisa fazer o login <a href="/login">Clique para fazer o login</a></h3>
            <h3>Ir para o site <a href="/index">Ir para o site</a></h3>






         @endif

    </div>
@endsection
