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
            <div class="fundo"></div> 
            <div class="banner-container">
                <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/<?php echo $chamadaSite['img1']; ?>.jpg');" class="banner-single"></div><!--banner-single-->
                <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/<?php echo $chamadaSite['img2']; ?>.jpg');" class="banner-single"></div><!--banner-single-->
                <div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/<?php echo $chamadaSite['img3']; ?>.jpg');" class="banner-single"></div><!--banner-single-->
                <!--<div class="overlay"></div><!--overlay-->
            </div><!--bg-img-->
            <div class="bg-text" style="display:<?php echo $chamadaSite['textdisplay'] ?>;">
                <h2><?php echo $chamadaSite['titulo']; ?></h2>
                <p><?php echo $chamadaSite['sub_titulo']; ?></p>
                <!--<a href="#sobre" style="background:<?php echo $chamadaSite['corbotao'] ?>;"><?php echo $chamadaSite['botao']; ?></a>-->
            </div><!--bg-text-->
        </div><!--container-->
        <div class="bullets"></div><!--bullets-->
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
                    <img src="images/<?php echo $infoSite['sobreimg']; ?>.png" />
                </div><!--sobre-img-->
            </div><!--sobre-info-->
        </div><!--container-->
    </section><!--sobre-->

    <section class="projetos" id="projetos">
        <div class="container">
        <div class="title">
            <h2>Projetos</h2>
        </div><!--title-->

            <div class="projetos-wrapper">

                <div class="projetos-single">
                <!--<div class="overlay"></div>-->
                    <a href="pages/produtos/mountainview.php"><img src="images/mountain.jpg"/></a>
                </div><!--projetos-single-->

                <div class="projetos-single">
                <!--<div class="overlay"></div>-->
                    <a href="pages/produtos/lumicorp.php"><img src="images/lumi.jpg"/></a>
                </div><!--projetos-single-->

                <div class="projetos-single">
                <!--<div class="overlay"></div>-->
                    <a href="pages/produtos/florastore.php"><img src="images/flora.jpg"/></a>
                </div><!--projetos-single-->

                <div class="projetos-single">
                <!--<div class="overlay"></div>-->
                    <a href="pages/produtos/monguilhott.php"><img src="images/mong.jpg"/></a>
                </div><!--projetos-single-->

                <div class="projetos-single">
                <!--<div class="overlay"></div>-->
                    <a href="pages/produtos/metaloop.php"><img src="images/meta.jpg"/></a>
                </div><!--projetos-single-->

                <div class="projetos-single">
                <!--<div class="overlay"></div>-->
                    <a href="pages/produtos/rmveiculos.php"><img src="images/rm.jpg"/></a>
                </div><!--projetos-single-->

            </div><!--projetos-wrapper-->

        </div><!--container-->
    </section><!--projetos-->

        <section class="extras">

        <div class="container">
        <div class="title">
                <h2>Depoimentos</h2>
            </div><!--title-->
            <div id="depoimentos" class="w50 left depoimentos-container">
                <?php
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3");
                    $sql->execute();
                    $depoimentos = $sql->fetchAll();
                    foreach ($depoimentos as $key => $value) {
                ?>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"<?php echo $value['depoimento']; ?>"</p>
                    <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                    <img src="images/<?php echo $value['imgdepoimento']; ?>.png" />
                </div><!--depoimento-single-->
                <?php } ?>
            </div><!--w50-->
            <div class="title">
                <h2>Serviços</h2>
            </div><!--title-->
            <div id="servicos" class="w50 left servicos-container">
            <div class="servicos-img">
                    <img src="images/servicos.jpg" />
                </div>
                <div class="servicos">
                <ul>
                    <?php
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 7");
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
        </div><!--container-->
    </section><!--extras-->

    <section class="contato" id="contato">
        <div class="container">
        <div class="title">
            <h2 style="color:black;">Contato</h2>
        </div><!--title-->
            <div class="contato-wrapper">
                <div class="contato-left">
                </div><!--contato-left-->
                <div class="contato-rigth">
                <!--<form class="ajax-form" method="post" action="">
                        <input required type="text" name="nome" placeholder="Nome...">
                        <input required type="text" name="text" id="telefone" maxlength="15" placeholder="Telefone...">
                        <input required type="email" name="email" placeholder="Email...">
                        <textarea placeholder="Mensagem..."></textarea>
                        <input type="hidden" name="identificador" value="form_contato" />
                        <input type="submit" value="Enviar" nome="acao">
                    </form>-->
                    <form action="https://formsubmit.co/huxdavi@gmail.com" method="POST">
                        <input required type="text" name="name" placeholder="Nome..." />
                        <input required type="text" name="telefone" id="telefone" placeholder="Telefone..." maxlength="15"/>
                        <input required type="email" name="email" placeholder="E-mail..." />
                        <textarea name="message" placeholder="Deixe sua mensagem... (Opcional)"></textarea>
                        <input type="submit" name="button" value="Enviar" />
                        <!--Form Submit-->
                        <input type="hidden" name="_captcha" value="false">
                        <input type="text" name="_honey" style="display:none">
                        <!--<input type="hidden" name="_cc" value="hs.corpp@gmail.com">-->
                        <input type="hidden" name="_subject" value="Nova mensagem!">
                        <input type="hidden" name="_template" value="table">
                        <input type="hidden" name="_next" value="https://portifoliohx.x10.mx/obrigado.php">
                    </form>
                    </form>
                </div><!--contato-rigth-->
            </div><!--contato-wrapper-->
        </div><!--container-->
    </section>