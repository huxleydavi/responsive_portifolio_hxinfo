<?php 
	$site = Painel::select('tb_menu.config',false);
?>

<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Configurações do Menu</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST,true)){
					Painel::alert('sucesso','O site foi editado com sucesso!');
					$site = Painel::select('tb_menu.config',false);
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}
		?>

        <?php
			for($i = 1; $i <= 6; $i++){
		?>

		<div class="form-group">
			<label>Menu do site <?php echo $i; ?>:</label>
			<input type="text" name="menu<?php echo $i; ?>" value="<?php echo $site['menu'.$i]; ?>" />
		</div><!--form-group-->

		<?php } ?>

		<div class="form-group">
			<input type="hidden" name="nome_tabela" value="tb_menu.config" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->