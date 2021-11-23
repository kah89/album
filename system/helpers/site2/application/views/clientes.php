<?php $this->load->view('header'); ?>
<style>
	body{
		background: #DCDCDC;
	}
	#painelnot  img {
    	width: 100%;
	}
	h2{
		text-align: center;
		margin-top: 5%;
	}
	.card{
		margin: 5%;
	}
</style>
<div class="container">
	   <h2>Veja quem já contratou nosso serviços</h2>
<div class="row" id="painelnot">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 1</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 2</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
   <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 3</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
   <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 4</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
   <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 5</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
    <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 6</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
    <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 7</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
    <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 8</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
</div>


    
        <div class="row">
			<div class="col-sm-7">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Opinião de quem contratou</h5>
		  <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
                    <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
                    <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
      </div>
    </div>
  </div>
            
            <div class="col-sm-5">
            <?php $this->load->view('noticias', $noticias); ?>
            </div>
        </div>
   </div>
<?php $this->load->view('footer'); ?>
