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
			<input type="hidden" name="nome_tabela" value="tb_chamada.config" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->