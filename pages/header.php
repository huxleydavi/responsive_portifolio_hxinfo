<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>
<?php
	$menuSite = MySql::conectar()->prepare("SELECT * FROM `tb_menu.config`");
	$menuSite->execute();
	$menuSite = $menuSite->fetch();

    $chamadaSite = MySql::conectar()->prepare("SELECT * FROM `tb_chamada.config`");
	$chamadaSite->execute();
	$chamadaSite = $chamadaSite->fetch();

    $infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_sobre.config`");
	$infoSite->execute();
	$infoSite = $infoSite->fetch();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $infoSite['titulo']; ?></title>
    <link rel="icon" href="perfil.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hx Info" />
	<meta name="keywords" content="hxinfo,hx info,hx inf,hxinformatica,hx informatica,portifoliohx,portifolio hx,hxportifolio,hx portifolio,hx,huxley,hux,ley,huxleydavi,huxley davi,hscorp,hs corp,hscorporation,hs corporation">
	<meta name="description" content="Hx Info, uma agência de tecnologia.
    Criamos sistema profissionais para turbinar o seu negócio!">
    <!-- MS, fb & Whatsapp -->

    <!-- MS Tile - for Microsoft apps-->
    <meta name="msapplication-TileImage" content="https://i.imgur.com/ru9Tel6.jpg">    

    <!-- fb & Whatsapp -->

    <!-- Site Name, Title, and Description to be displayed -->
    <meta property="og:site_name" content="Portifólio Hx Info" />
    <meta property="og:title" content="Contato para Hx Info e projetos" />
    <meta property="og:description" content="Hx Info, a melhor agência de tecnologia.">

    <!-- Image to display -->
    <!-- Replace   «example.com/image01.jpg» with your own -->
    <meta property="og:image" content="https://i.imgur.com/ru9Tel6.jpg">

    <!-- No need to change anything here -->
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/jpeg">

    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="250">
    <meta property="og:image:height" content="250">

    <!-- Website to visit when clicked in fb or WhatsApp-->
    <meta property="og:url" content="https://portifoliohx.x10.mx/">
</head>