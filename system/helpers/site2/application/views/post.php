<?php $this->load->view('header'); ?>
<style>
body{
		background: #DCDCDC;
		
}


</style>
	
<div class="container">
<div class="row">
     

            <div class="col-sm-8">
                <h2><?php  echo $not_titulo; ?></h2>
				<?php  echo $not_conteudo; ?>
            </div>
            <div class="col-sm-4 ">
                <h3>Dados do post</h3>
                <img src="<?php echo base_url('upload/'.$not_imagem) ?>" alt="<?php  echo $not_titulo; ?>">
                <ul>
                    <li>Publicado em:</li>
                    <li>Autor:</li>
                </ul>
            </div>
       
    </div>
	</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                
            </div>
            <div class="col-sm-5">
                <?php $this->load->view('noticias'); ?>
            </div>
        </div>
    </div> 
	<?php $this->load->view('footer'); ?>
