<?php
	session_start();
	include "cabecalho.php";
?>
    <main>
        <div class = "container-fluid">
            <!--Slider-->
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/bolo_wallpaper.jpg" class="d-block w-100" alt="Bolos e Doces">
                        <div class = "carousel-caption d-none d-md-block">
                            <h2>Bolos e Salgados</h2>
                            <p>Visite Nossos Parceiros!</p>
                            <a href="#" class="main-btn">Visitar</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/salgado_wallpaper.png" class="d-block w-100" alt="Salgados">
                        <div class = "carousel-caption d-none d-md-block">
                            <h2>Salgados</h2>
                            <p>Visite Nossos Parceiros!</p>
                            <a href="#" class="main-btn">Visitar</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/verdura_wallpaper.jpg" class="d-block w-100" alt="Verduras e Legumes">
                        <div class = "carousel-caption d-none d-md-block">
                            <h2>Verduras e Legumes</h2>
                            <p>Visite Nossos Parceiros!</p>
                            <a href="#" class="main-btn">Visitar</a>
                        </div>
                    </div>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class ="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class ="sr-only">Next</span>
                </a>
            </div>
            <!--Sobre Nós-->
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class ="main-title">Sobre Nós</h3>
                        </div>
						<div class="col-md-6">
                            <img class="img-fluid" src="img/agencia.jpg" alt="Sobre Nós">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Pensando no melhor para você!</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Tincidunt augue interdum velit euismod in pellentesque massa</p>
                            <p>Veja outros diferenciais:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet</li>
                                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet</li>
                                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet</li>
                                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Serviços da Empresa-->
            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class ="main-title">Nossos Serviços</h3>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Contato Direto</h4>
                            <p>Tenha diversos números de micro-empresarios da sua região em questão de segundos!</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-shopping-cart"></i>
                            <h4>E-commerce</h4>
                            <p>Temos uma plataforma propria de e-commerce que se adapta a qualquer regra de negócio (B2C).</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-utensils"></i>
                            <h4>Parceiros</h4>
                            <p>Vire um parceiro e comece a alavancar seu pequeno negócio sem custo algum.</p>
                        </div>
                     </div>
                </div>
            </div>

        </div>
    </main>
<?php
	include "modal_cadastro.php";
	include "modal_login.php";
	include "rodape.html";
?>