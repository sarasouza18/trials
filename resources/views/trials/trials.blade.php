

                @extends('layouts.layout-interno')

                @section('content')
                    <div class="right_col" role="main">
                        @if (Auth::check())
                            <form method="POST" action="/trials/{{ $trial->id }}">


                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Nome: {{ $trial->name }}</p>
                                        <p>Email: {{ $trial->email }}</p>
                                        <p>Telefone: {{ $trial->number }}</p>
                                        <p> Currículo: <a class="btn" href="{{ url('trials/download').'/'.$trial->name }}" >currículo_{{$trial->name}}</a> </p>
                                    </div >


                                    {{ csrf_field() }}
                                </div>



                                {{ csrf_field() }}

                            </form>


                    </div>

                    @else
                        <h3>Você precisa fazer o login <a href="/login">Clique para fazer o login</a></h3>
                        <h3>Ir para o site <a href="/index">Ir para o site</a></h3>

                        @endif

                        </div>

                @endsection
