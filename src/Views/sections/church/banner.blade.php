<div id="home"  class="main-banner">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="banner-content">
                            <h1>Nossa Igreja Agora On-line</h1>
                            <p>
                                Ter uma presença forte na web é uma necessidade real para
                                conseguir alcançar um publico cada vez maior
                            </p>

                            <div class="banner-btn">
                                <a href="{{ route('register') }}" class="default-btn">
                                    Comece o teste gratuito
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-form">
                            <h3>Comece agora de graça</h3>
                            <p>
                               O cadastro é simples assim como o sistema para sua igreja
                            </p>

                            <form method="POST" action="{{ route('register') }}">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                @csrf
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Seu Nome">
                                </div>

                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Seu E-mail">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Senha">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme a senha">
                                </div>

                                <button type="submit">Cadastre-se</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/1.png') }}" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/2.png') }}" alt="image">
        </div>

        <div class="shape-3">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/3.svg') }}" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/4.svg') }}" alt="image">
        </div>

        <div class="shape-5">
            <img src="{{ asset('vendor/confrariaweb/template-colugo/img/shape/5.png') }}" alt="image">
        </div>
    </div>
</div>