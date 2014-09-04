@section('header')
<header class="header header-two">
    <div class="header-wrapper" id = "header-button">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
                    <div class="logo">
                        <a href="/">
                            <img src="img/finderfly/finderfly-logo.png" class="logo-img" alt="">
                        </a>
                    </div>
                </div><!-- .logo-box -->
                <div class="col-xs-6 col-md-10 col-lg-9 right-box">
                    <div class="right-box-wrapper">
                        <div class="primary">
                            <div class="navbar navbar-default" role="navigation">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                                    <span class="text">Menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <nav class="collapse collapsing navbar-collapse">
                                    <ul class="nav navbar-nav navbar-center">
                                        <li class="parent item-primary item-bg">
                                            <a href="#" data-scroll="publishers">Publishers</a>
                                        </li>
                                        <li class="parent item-primary item-bg">
                                            <a href="#" data-scroll="anunciantes">Anunciantes</a>
                                        </li>
                                        <li class="parent item-primary item-bg">
                                            <a href="#" data-scroll="formatos">Formatos</a>
                                        </li>
                                        <li class="parent item-primary item-bg 4c">
                                            <a href="#" data-scroll="contato">Contato</a>
                                        </li>
                                        <li id = "li-entrar">
                                            <div id="bt-entrar" class = "bt-lg-nav">
                                                <span style = "margin-right: 15px;">Entrar</span>
                                                <span class="icon"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!-- .primary -->
                    </div>
                </div>
            </div><!--.row -->
        </div>

    </div><!-- .header-wrapper -->
    @include('topo.login')
</header><!-- .header -->
@stop