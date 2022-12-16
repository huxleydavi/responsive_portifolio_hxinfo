<body>

    <base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'sobre':
				echo '<target target="sobre" />';
				break;

            case 'projetos':
                echo '<target target="projetos" />';
                break;

            case 'depoimentos':
                echo '<target target="depoimentos" />';
                break;

            case 'contato':
                echo '<target target="contato" />';
                break;

            case 'links':
                echo '<target target="links" />';
                break;
		}
	?>
	<div class="sucesso"><i class="fa fa-check"></i> Formulário enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif" />
	</div><!--overlay-loading-->

    <header>
        <div class="container">
            <div class="logo">
                <a href="<?php echo INCLUDE_PATH; ?>"><img src="images/logo.png" /></a>
             </div><!--logo-->

             <div class="desktop">
                <ul>
                    <li><a title="Início" href="<?php echo INCLUDE_PATH; ?>"><?php echo $menuSite['menu1']; ?></a></li>
                    <li><a title="Sobre" href="<?php echo INCLUDE_PATH; ?>sobre"><?php echo $menuSite['menu2']; ?></a></li>
                    <li><a title="Porjetos" href="<?php echo INCLUDE_PATH; ?>projetos"><?php echo $menuSite['menu3']; ?></a></li>
                    <li><a title="Contato" href="<?php echo INCLUDE_PATH; ?>depoimentos"><?php echo $menuSite['menu4']; ?></a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato"><?php echo $menuSite['menu5']; ?></a></li>
                    <li><a title="Links Úteis" href="<?php echo INCLUDE_PATH; ?>links"><?php echo $menuSite['menu6']; ?></a></li>
                </ul>
             </div><!--desktop-->

             <div class="mobile">
             <div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
                <ul>
                    <li><a title="Início" href="<?php echo INCLUDE_PATH; ?>"><?php echo $menuSite['menu1']; ?></a></li>
                    <li><a title="Sobre" href="<?php echo INCLUDE_PATH; ?>sobre"><?php echo $menuSite['menu2']; ?></a></li>
                    <li><a title="Porjetos" href="<?php echo INCLUDE_PATH; ?>projetos"><?php echo $menuSite['menu3']; ?></a></li>
                    <li><a title="Contato" href="<?php echo INCLUDE_PATH; ?>depoimentos"><?php echo $menuSite['menu4']; ?></a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato"><?php echo $menuSite['menu5']; ?></a></li>
                    <li><a title="Links Úteis" href="<?php echo INCLUDE_PATH; ?>links"><?php echo $menuSite['menu6']; ?></a></li>
                </ul>
             </div><!--mobile-->
             <div class="clear"></div>
    </header>

    <section class="bg">
        <div class="container">
            <div class="bg-img">
                <div class="bg-person"></div><!--bg-person-->
            </div><!--bg-img-->
            <div class="bg-text">
                <h2><?php echo $chamadaSite['titulo']; ?></h2>
                <p><?php echo $chamadaSite['sub_titulo']; ?></p>
                <a href="#"><?php echo $chamadaSite['botao']; ?></a>
            </div><!--bg-text-->
        </div><!--container-->
    </section><!--bg-->

    <section class="sobre" id="sobre">
        <div class="container">
            <div class="sobre-wrapper">

                <div class="sobre-dots">
                    <div class="sobre-text">
                        <i class="<?php echo $infoSite['icone1']; ?>" aria-hidden="true"></i>
                        <h2>Websites</h2>
                        <p><?php echo $infoSite['descricao1']; ?></p>
                    </div><!--sobre-text-->
                </div><!--sobre-dots-->

                <div class="sobre-dots">
                    <div class="sobre-text">
                        <i class="<?php echo $infoSite['icone2']; ?>" aria-hidden="true"></i>
                        <h2>Designer</h2>
                        <p><?php echo $infoSite['descricao2']; ?></p>
                    </div><!--sobre-text-->
                </div><!--sobre-dots-->

                <div class="sobre-dots">
                    <div class="sobre-text">
                        <i class="<?php echo $infoSite['icone3']; ?>" aria-hidden="true"></i>
                        <h2>Sistemas</h2>
                        <p><?php echo $infoSite['descricao3']; ?></p>
                    </div><!--sobre-text-->
                </div><!--sobre-dots-->

            </div><!--sobre-wrapper-->
            <div class="sobre-info">
                <div class="sobre-it">

                    <section class="descricao-autor">
                        <div class="center">
                        <div class="w100 left">
                    <h2> <?php echo $infoSite['nome_autor']; ?></h2>
                    <p><?php echo $infoSite['descricao']; ?></p>
                        </div><!--w50-->
                        <div class="clear"></div>
                        </div><!--center-->
                    </section><!--descricao-autor-->

                </div><!--sobre-it-->
                <div class="sobre-img">
                    <img src="images/sobre.png" />
                </div><!--sobre-img-->
            </div><!--sobre-info-->
        </div><!--container-->
    </section><!--sobre-->

    <section class="projetos" id="projetos">
        <div class="container">
        <h2 style="color: white; padding:50px 0px";>Projetos</h2>
        <div class="breadcrumb">
            <a href="" id="todos">Todos</a>
            <a href="" id="vendas">Vendas</a>
            <a href="" id="landing">Landing-page</a>
            <a href="" id="sistemas">Sistemas</a>
        </div><!--breadcrumb-->
            <div class="projetos-wrapper todos">

                <div class="projetos-single">
                    <div class="overlay"></div>
                    <a herf="#"><img src="images/delivery.png"/></a>
                </div><!--projetos-single-->

                <div class="projetos-single">
                <div class="overlay"></div>
                    <a herf="#"><img src="images/delivery.png"/></a>
                </div><!--projetos-single-->

                <div class="projetos-single">
                <div class="overlay"></div>
                    <a herf="#"><img src="images/delivery.png"/></a>
                </div><!--projetos-single-->

                <div class="projetos-single">
                <div class="overlay"></div>
                    <a herf="#"><img src="images/delivery.png"/></a>
                </div><!--projetos-single-->

            </div><!--projetos-wrapper-->

            <div class="projetos-wrapper vendas">

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

            </div><!--projetos-wrapper-->

            <div class="projetos-wrapper landing">

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

            </div><!--projetos-wrapper-->

            <div class="projetos-wrapper sistemas">

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

                <div class="projetos-single">
                    <a herf="#"><img src="images/delivery.png"/></a>
                    <p>Website Delivery Resposnivo</p>
                </div><!--projetos-single-->

            </div><!--projetos-wrapper-->

        </div><!--container-->
    </section><!--projetos-->

        <section class="extras">

        <div class="center">
            <div id="depoimentos" class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <?php
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3");
                    $sql->execute();
                    $depoimentos = $sql->fetchAll();
                    foreach ($depoimentos as $key => $value) {
                ?>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"<?php echo $value['depoimento']; ?>"</p>
                    <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                </div><!--depoimento-single-->
                <?php } ?>
            </div><!--w50-->
            <div id="servicos" class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                <ul>
                    <?php
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 6");
                    $sql->execute();
                    $servicos = $sql->fetchAll();
                    foreach ($servicos as $key => $value) {
                    ?>
                    <li><?php echo $value['servico']; ?></li>
                    <?php } ?>
                </ul>
                </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--extras-->

    <section class="contato" id="contato">
        <div class="container">
        <h2 style="color: black; padding:20px 0px";>Contato</h2>
            <div class="contato-wrapper">
                <div class="contato-left">
                </div><!--contato-left-->
                <div class="contato-rigth">
                    <form>
                        <input required type="text" name="nome" placeholder="Nome...">
                        <input required type="text" name="text" id="telefone" maxlength="15" placeholder="Telefone...">
                        <input required type="email" name="email" placeholder="Email...">
                        <textarea placeholder="Mensagem..."></textarea>
                        <input type="submit" value="Enviar" nome="acao">
                    </form>
                </div><!--contato-rigth-->
            </div><!--contato-wrapper-->
        </div><!--container-->
    </section>

    <section <?php if(isset($pagina404) && $pagina404 == true); ?> class="links" id="links">
        <div class="container">
        <h2 style="color: white; padding:50px 0px";>Links Úteis</h2>
            <div class="links-wrapper">
                <div class="links-left">
                    <a href="">Sobre</a>
                    <a href="">Produtos</a>
                    <a href="">Contato</a>
                    <a href="">Mais informações</a>
                    <a href="">HS Corporation</a>
                    <a href="">Hx Info</a>
                    <a href="">Hyrms Publicidade</a>
                </div><!--links-left-->
                <div class="links-rigth">
                    <a href="">Whatsapp</a>
                    <a href="">Instagram</a>
                    <a href="">Git Hub</a>
                    <a href="">Twitter</a>
                    <a href="">Linkdin</a>
                </div><!--links-rigth-->
                <div class="links-logo">
                    <img src="images/logo.png">
                </div>
            </div><!--links-wrapper-->

            <footer>
                <div class="footer-wrapper">
                    <div class="footer-dados">
                    <a href=""><i class="fab fa-whatsapp" aria-hidden="true"></i><z>+55 (33) 99802-3970</z></a>
                    <a href=""><i class="fab fa-instagram" aria-hidden="true"></i><z>@hxinfo</z></a>
                    <a href=""><i class="fab fa-github" aria-hidden="true"></i><z>huxleydavi</z></a>
                    </div><!--footer-dados-->
                </div><!--footer-wrapper-->
            </footer>

        </div><!--container-->
    </section><!--links-->

    <div class="copyrigth">
        <p>Hx Info &copy; | Todos os diretos reservados</p>
    </div>


    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="js/mask.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>