<?php
	include "cabecalho.php";
?>
        <main>
            <div class = "container-fluid">
                <!--Slider-->
                <a class = "ancora" name="home"></a>
                <div id="mainSlider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                        <li data-target="#mainSlider" data-slide-to="1"></li>
                        <li data-target="#mainSlider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
							<?php
								include "conexao.php";
								$select="SELECT foto FROM produtos WHERE tipo_produto='COMIDAS' OR tipo_produto='DOCES' ORDER BY RAND() LIMIT 1";
								$res = mysqli_query($con, $select) or die(mysqli_error($con));
								while($linha=mysqli_fetch_assoc($res)){
									echo'<img src="fotos/'.$linha["foto"].'" class="d-block w-100" alt="Bolos e Doces">';
								}
							?>
                            <div class = "carousel-caption  d-md-block">
                                <h2>Bolos, Salgados e alimentos em geral</h2>
                                <p>Visite Nossos Parceiros!</p>
                                <a href="#" class="main-btn">Visitar</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                           <?php
								include "conexao.php";
								$select="SELECT foto FROM produtos WHERE tipo_produto='ESPORTES' ORDER BY RAND() LIMIT 1";
								$res = mysqli_query($con, $select) or die(mysqli_error($con));
								while($linha=mysqli_fetch_assoc($res)){
									echo'<img src="fotos/'.$linha["foto"].'" class="d-block w-100" alt="Esportes">';
								}
							?>
                            <div class = "carousel-caption  d-md-block">
                                <h2>Esportes</h2>
                                <p>Visite Nossos Parceiros!</p>
                                <a href="#" class="main-btn">Visitar</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                           <?php
								include "conexao.php";
								$select="SELECT foto FROM produtos WHERE tipo_produto='VERDURAS/LEGUMES' ORDER BY RAND() LIMIT 1";
								$res = mysqli_query($con, $select) or die(mysqli_error($con));
								while($linha=mysqli_fetch_assoc($res)){
									echo'<img src="fotos/'.$linha["foto"].'" class="d-block w-100" alt="Verduras e legumes">';
								}
							?>
                            <div class = "carousel-caption  d-md-block">
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
                <a class = "ancora" name="about"></a>
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
                <a class = "ancora" name="services"></a>
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
        <!--Rodape-->
        <footer>
            <a class = "ancora" name="contact"></a>
            <div id="contact-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="main-title">Entre em Contato Conosco</h3>
                        </div>
                        <div class="col-md-4 contact-box">
                            <i class="fas fa-phone"></i>
                            <p><span class ="contact-title">Ligue Para:</span> (16) 99999-9999</p>
                        </div>
                        <div class="col-md-4 contact-box">
                            <i class="fas fa-envelope"></i>
                            <p><span class ="contact-title">Email:</span> tcc_cjl@outlook.com</p>
                        </div>
                        <div class="col-md-4 contact-box">
                            <i class="fab fa-instagram"></i>
                            <p><span class ="contact-title">@</span>nomempresa</p>
                        </div>
                    </div>
                </div>
            </div>
			<?php
				include "rodape.php";
			?>
    </body>
</html>