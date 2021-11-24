<?php $this->load->view('header'); ?>
<style>
	body {
		background-color: #f1f1f1;
		padding: 20px;
		font-family: Arial;
	}


	h1 {
		font-size: 50px;
		word-break: break-all;
	}


	.row,
	.row>.column {
		padding: 8px;
	}

	.column {
		float: left;
		width: 33.33%;
		display: none;
	}

	.show {
		display: block;
	}

	.btn {
		border: none;
		background-color: white;
		cursor: pointer;
	}


	.modal-content {
		margin-top: 24%;
		width: 150%;
		margin-left: -25%;
	}
</style>
<div class="container">
	<div class="main">
		<h1>Ano</h1>
		<hr>
		<h2>2021</h2>

		<div id="myBtnContainer">
			<button class="btn active" onclick="filterSelection('Tudo')"> Tudo</button>
			<button class="btn" onclick="filterSelection('Familia')"> Familia</button>
			<button class="btn" onclick="filterSelection('Filhos')"> Filhos</button>
			<button class="btn" onclick="filterSelection('Cachorros')"> Cachorros</button>
		</div>

		<div class="row">
			<div class="column Familia">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
						<img src="https://images.pexels.com/photos/10268338/pexels-photo-10268338.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/10268338/pexels-photo-10268338.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
						<img src="https://images.pexels.com/photos/159823/kids-girl-pencil-drawing-159823.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/159823/kids-girl-pencil-drawing-159823.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
						<img src="https://images.pexels.com/photos/1633522/pexels-photo-1633522.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/1633522/pexels-photo-1633522.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal4">
						<img src="https://images.pexels.com/photos/7985736/pexels-photo-7985736.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/7985736/pexels-photo-7985736.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal5">
						<img src="https://images.pexels.com/photos/296301/pexels-photo-296301.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/296301/pexels-photo-296301.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal6">
						<img src="https://images.pexels.com/photos/35638/labrador-breed-dogs-animal.jpg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/35638/labrador-breed-dogs-animal.jpg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal7">
						<img src="https://images.pexels.com/photos/6568492/pexels-photo-6568492.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/6568492/pexels-photo-6568492.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal8">
						<img src="https://images.pexels.com/photos/1212805/pexels-photo-1212805.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/1212805/pexels-photo-1212805.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal9">
						<img src="https://images.pexels.com/photos/333083/pexels-photo-333083.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/333083/pexels-photo-333083.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal10">
						<img src="https://images.pexels.com/photos/5810662/pexels-photo-5810662.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/5810662/pexels-photo-5810662.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal11">
						<img src="https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal12">
						<img src="https://images.pexels.com/photos/551628/pexels-photo-551628.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/551628/pexels-photo-551628.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal13">
						<img src="https://images.pexels.com/photos/5082631/pexels-photo-5082631.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/5082631/pexels-photo-5082631.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal14">
						<img src="https://images.pexels.com/photos/8087860/pexels-photo-8087860.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/8087860/pexels-photo-8087860.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal15">
						<img src="https://images.pexels.com/photos/257540/pexels-photo-257540.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/257540/pexels-photo-257540.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal16">
						<img src="https://images.pexels.com/photos/7005193/pexels-photo-7005193.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/7005193/pexels-photo-7005193.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal17">
						<img src="https://images.pexels.com/photos/50692/brothers-family-siblings-boys-50692.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/50692/brothers-family-siblings-boys-50692.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal18">
						<img src="https://images.pexels.com/photos/2827238/pexels-photo-2827238.jpeg"
							style="width:100%" />
					</button>
					<div class="modal fade" id="modal18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="https://images.pexels.com/photos/2827238/pexels-photo-2827238.jpeg"
										style="width:100%" />
									<button type="button" class="btn" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>

	<script>
		filterSelection("Tudo")
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
		var btns = btnContainer.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
			btns[i].addEventListener("click", function () {
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			});
		}
	</script>

</div>
<?php $this->load->view('footer'); ?>