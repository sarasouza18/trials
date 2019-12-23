@extends('layouts.layout-index')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/team.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class= "row no-gutters slider-text align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pt-5 text-center">
                        <h2 class="subheading" style="color: #4eef61">Natal/RN Brasil</h2>
                        <h1 class="mb-3">Desenvolvedor PHP</h1>
                    </div>
                <div  class="col-md-12 ftco-animate text-center">
                    <button class="btn btn-success"> Candidate-se </button>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h2 class="subheading"> Na função de Desenvolvedor Frontend aqui na Rits, você vai: </h2>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            Transformar layouts (XD e Photoshop) em montagens responsivas utilizando HTML + CSS + JS;
                        </li>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            Integrar montagem com APIs desenvolvidas por outras equipes;
                        </li>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            Manter e melhorar a base de código existente corrigindo bugs e refatorando código quando necessário.
                        </li>
                    </div>
                    <div class="col-md">
                        <h2 class="subheading"> Procuramos alguém que: </h2>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            Possua habilidades arquiteturais para desenvolvimento de software;
                        </li>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            Goste de trabalhar em equipe;
                        </li>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            Seja focado, proativo, tenha boa comunicação e relacionamento interpessoal.
                        </li>
                    </div>
                    <div class="col-md">
                        <h2 class="subheading"> No dia a dia na Rits, você trabalhará também com: </h2>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            WordPress e sistemas em PHP em geral;
                        </li>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            Webpack e Bootstrap;
                        </li>
                        <li class="py-1 d-block">
                        <span class="icon icon-check-circle-o">
                        </span>
                            Frameworks javascript modernos (Vue 2, React).
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: white">
        <div class="overlay"></div>
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="pt-5 justify-content-center">
                     <form method="POST" action="/trials" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                                <h2>Informações pessoais</h2>
                                <label for="name">NOME COMPLETO</label>
                                <input type="text" class="form-control" name="name" required>
                                <br>
                                <label for="email">E-MAIL</label>
                                <input type="email" class="form-control" name="email" required>
                                <br>

                                <label for="number">TELEFONE (COM DDD)</label>
                                <input type="tel" class="form-control" name="number"  size="9" required>
                                <br>

                                <h2>Carta de apresentação</h2>
                                <label for="description">CONTE SUA MOTIVAÇÃO (OPCIONAL)</label>
                                <textarea type="text" class="form-control" name="description"></textarea>
                                <br>
                                <h2>Últimas perguntas</h2>
                                <label for="language">NÍVEL DE INGLÊS</label>
                                <select class="form-control" name="language">
                                    <option value="1">Avançado</option>
                                    <option value="2">Mediano</option>
                                    <option value="3">Básico</option>
                                </select>
                                <label for="url_github">URL DO SEU GITHUB</label>
                                <input type="url" class="form-control" name="url_github" required>
                                <label for="url_linkedin">URL DO SEU LINKEDIN</label>
                                <input type="url" class="form-control" name="url_linkedin" required>
                                <label for="salary">PRETENÇÃO SALARIAL</label>
                                <input type="number" class="form-control" name="salary" required>
                                <br>
                                <h2>Anexe seu currículo em PDF ou DOC</h2>

                                <input type="file" class="form-btn" name="file" required>
                                <br>
                        </div >
                        <div class="pt-3 py-4 col-md-6 justify-content-center">
                            <input type="submit" name="send" id="send" class="btn btn-primary" value="Enviar">
                        </div>

                    </div>

                {{ csrf_field() }}

            </form>
                </div>

        </div>
    </section>

    <footer class="ftco-footer">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <img style="width: 100px" src="{{asset('images/logotipo-2.png')}}">
                </div>
                <div class="col-md text-center">
                    <p style="color: #6C6472; font-size: 15px; font-weight: bold;">Rits Tecnologia. Todos os direitos reservados.</p>
                    <p style="color: gray; font-size: 10px; "> Desenvolver e evoluir soluções digitais para negócios que acreditam na tecnologia como força propulsora.</p>
                </div>
                <div class="col-md text-right">
                    <span class="subheading" style="color: #4eef61; font-weight: bold;">Rits.com.br</span>
                </div>
            </div>
        </div>
    </footer>

@endsection
