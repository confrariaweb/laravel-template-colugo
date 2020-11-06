<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}">
                <h3>CW Church</h3>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <!--li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        Inicio
                    </a>
                </li-->
                <li class="nav-item">
                    <a href="#about" class="nav-link"> Sobre </a>
                </li>
                <li class="nav-item">
                    <a href="#features" class="nav-link"> Recursos </a>
                </li>
                <!--li class="nav-item">
                    <a href="#screenshots" class="nav-link">
                        Telas
                    </a>
                </li-->
                <li class="nav-item">
                    <a href="#faq" class="nav-link"> Perguntas frequentes </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link"> Blog </a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link"> Contato</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login </a>
                </li>
            </ul>

            <div class="others-option">
                <div class="d-flex align-items-center">
                    <div class="option-item">
                        <a href="{{ route('register') }}" class="default-btn">
                            Experimente
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>