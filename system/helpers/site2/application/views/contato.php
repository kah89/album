<?php $this->load->view('header'); ?>
<style>
	body{
		background: #DCDCDC;
	}
	img {
    width: 100%;
	}
	.form{
	margin-left: 10%;
	}
	.container, .info{
		margin-top: 5%;
	}
</style>
<div class="container">
<div class="row">
            <div class="col-sm-5">
                <h3>Localização</h3>
                <img src="<?php echo 'base_url'('assets/img/mapa.jpg') ?>" alt="">
                <ul > 
                    <li>Rua aprendendo mais,03</li>
                    <li>Bairro Web</li>
                    <li>Desenvolvimento- UF</li>
                </ul>
                <h3>Contato direto</h3>
                <ul>
                    <li>Fone: <strong>(00)99999-8888</strong></li>
                    <li>Email: <strong>contao@gmail.com</strong></li>
                    <li>Skype: <strong>login.skype</strong></li>
                </ul>
            </div>
            <div class="col-sm-5 form">
                <h2>Envie sua mensagem</h2>
				<form action="/action_page.php">
  				<div class="form-group">
				<?php 
					if($formerror):
						echo '<p>'.$formerror.'<p>';
					endif;
					?>
					<div class="form-group">
					<?php 
					echo 'form_open'('pagina/contato');
					echo 'form_label'('Seu nome:', 'nome');
					echo 'form_input'('nome', 'set_value'('nome'), array('class' => "form-control"));
					echo 'form_label'('Seu email:', 'email');
					echo 'form_input'('email','set_value'('email'), array('class' => "form-control"));
					echo 'form_label'('Assunto:', 'assunto');
					echo 'form_input'('assunto', 'set_value'('assunto'), array('class' => "form-control"));
					echo 'form_label'('Mensagem:', 'mensagem');
					echo form_textarea('mensagem', 'set_value'('mensagem'), array('class' => "form-control", 'style' => 'max-height:200px; overflow: auto;'));
					echo 'form_submit'('enviar', 'Enviar mensagem >>', array('class' => 'btn btn-dark'));
					echo 'form_close'();
					?>
					</div>
				  </div>
				</form>
						
                
            </div>
    </div>

 
        <div class="row info">
			<div class=" card col-sm-6">
				<div class="card-body">
				<h5 class="card-title">Método alternativo de palagrafos</h5>
				<p class="card-text">Caso não consiga me contatar com alguns dos meios acima, possivelmente eu estarei em alguma ilha deserta em algum lugar do pacífico. Nesse caso há duas possibilidades: </p>
                    <ol>
                        <li>Enviar uma mensagem de garrafa</li>
                        <li>Tentar sinal de fumaça</li>
                    </ol>
                <p>Mas sinceramente nã sei se algum desses métodos será eficiente. </p>
				</div>
            </div>
            <div class="col-sm-5">
             <?php $this->load->view('noticias'); ?>
            </div>
        </div>
	</div>

	<?php $this->load->view('footer'); ?>
