<?php 
	$site = Painel::select('tb_chamada.config',false);
?>

<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Configurações da Chamada</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST,true)){
					Painel::alert('sucesso','O site foi editado com sucesso!');
					$site = Painel::select('tb_chamada.config',false);
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}
		?>

        <div class="form-group">
			<label>Título:</label>
			<input type="text" name="titulo" value="<?php echo $site['titulo']; ?>" />
		</div><!--form-group-->

        <div class="form-group">
			<label>Sub-Título:</label>
			<input type="text" name="sub_titulo" value="<?php echo $site['sub_titulo']; ?>" />
		</div><!--form-group-->

        <div class="form-group">
			<label>Botão:</label>
			<input type="text" name="botao" value="<?php echo $site['botao']; ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Cor Botão:</label>
			<input type="color" name="corbotao" value="<?php echo $site['corbotao']; ?>" />
			<!--<input type="color" name="corbotaohover" value="<?php echo $site['corbotaohover']; ?>" />-->
		</div><!--form-group-->


		<?php
			for($i = 1; $i <= 3; $i++){
		?>

		<div class="form-group">
			<label>Imagem <?php echo $i; ?>:</label>
			<input type="text" name="img<?php echo $i; ?>" value="<?php echo $site['img'.$i]; ?>" />
		</div><!--form-group-->

		<?php } ?>

		<div class="form-group">
			<label>Imagem na tela de celular:</label>
			<input type="text" name="imgmobile" value="<?php echo $site['imgmobile']; ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Texto nas imagens:</label>
			<input type="checkbox" name="textdisplay" id="textdisplay" value="<?php echo $site['textdisplay']; ?>" />
		</div><!--form-group-->



    <div class="form-group">
			<input type="hidden" name="nome_tabela" value="tb_chamada.config" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->