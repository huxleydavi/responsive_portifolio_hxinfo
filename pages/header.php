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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.min.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>perfil.ico" type="image/x-icon" />
</head>