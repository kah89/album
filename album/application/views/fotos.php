
<?php $this->load->view('template/header'); ?>
<style>
	body {
		background-color: #f1f1f1;
		padding: 20px;
		font-family: Arial;
	}


	.btn {
		border: none;
		background-color: white;
		cursor: pointer;
	}

	.modal-content {
    margin-top: 20%;
    width: 80%;
    margin-left: 10%;
}

</style>
<script>
		filterSelection("Tudo")

		function renderizePage(page = 1) {
			$.ajax({
			    url: "https://api.pexels.com/v1/curated?page="+page+"&per_page=9",
			    headers: {"Authorization": "563492ad6f91700001000001d194fe15d17b41e492745f35096cb325"},
			    success: function(data) { 
			    	if (data && data.photos && data.photos.length > 0) {
			    		const size = data.photos.length;
			    		for (var i = 0; i < size; i++) {
			    			$('.slot'+(i+1)+' img').attr('src', data.photos[i].src.original)
			    		}
			    	}
			    	console.log(data);
			    }
			});
		}

		function changeModal(id) {
			var src = $(".slot"+id+" img").attr("src");

			$("#modal1 img").attr('src', src);
		}

		function filterSelection(c) {
			var x, i;
			x = document.getElementsByClassName("column");
			if (c == "Tudo") c = "";
			for (i = 0; i < x.length; i++) {
				w3RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			}
		}

		function w3AddClass(element, name) {
			var i, arr1, arr2;
			arr1 = element.className.split(" ");
			arr2 = name.split(" ");
			for (i = 0; i < arr2.length; i++) {
				if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
			}
		}

		function w3RemoveClass(element, name) {
			var i, arr1, arr2;
			arr1 = element.className.split(" ");
			arr2 = name.split(" ");
			for (i = 0; i < arr2.length; i++) {
				while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);
				}
			}
			element.className = arr1.join(" ");
		}


		// Add active class to the current button (highlight it)
		var btnContainer = document.getElementById("myBtnContainer");
		var btns = btnContainer ? btnContainer.getElementsByClassName("btn") : [];
		for (var i = 0; i < btns.length; i++) {
			btns[i].addEventListener("click", function () {
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			});
		}
	</script>
<div class="container">
	<div class="main">
		<h1>Momentos</h1>
		<hr>
		<h2>2021</h2>

		<div id="myBtnContainer">
		<button class="btn active" onclick="filterSelection('Tudo')"> Páginas</button>
			<button class="btn" onclick="renderizePage(1)"> 1</button>
			<button class="btn" onclick="renderizePage(2)"> 2</button>
			<button class="btn" onclick="renderizePage(3)"> 3</button>
			<button class="btn" onclick="renderizePage(4)"> 4</button>
			<button class="btn" onclick="renderizePage(5)"> 5</button>
			<button class="btn" onclick="renderizePage(6)"> 6</button>
		</div>
		
		<div>
			<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<img src="" style="width:100%" />
							<button type="button" class="btn" data-dismiss="modal">Fechar</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot1" data-toggle="modal" data-target="#modal1" onclick="changeModal(1)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot2" data-toggle="modal" data-target="#modal1" onclick="changeModal(2)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot3" data-toggle="modal" data-target="#modal1" onclick="changeModal(3)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot4" data-toggle="modal" data-target="#modal1" onclick="changeModal(4)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot5" data-toggle="modal" data-target="#modal1" onclick="changeModal(5)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot6" data-toggle="modal" data-target="#modal1" onclick="changeModal(6)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot7" data-toggle="modal" data-target="#modal1" onclick="changeModal(7)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot8" data-toggle="modal" data-target="#modal1" onclick="changeModal(8)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

			<div class="column">
				<div class="content">
					<button type="button" class="btn btn-primary slot9" data-toggle="modal" data-target="#modal1" onclick="changeModal(9)">
						<img src="" style="width:100%" />
					</button>
				</div>
			</div>

		</div>
	</div>
	</div>

	<script>
		$( document ).ready(function() {
		renderizePage();
	});

	filterSelection("Tudo");
	</script>

</div>
<?php $this->load->view('template/footer'); ?>