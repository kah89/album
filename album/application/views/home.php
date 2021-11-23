<?php $this->load->view('header'); ?>
<style>
	body {
		background: #DCDCDC;
		margin-top: 10%;
	}

	* {
		box-sizing: border-box;
	}

	.content {
		width: 100%;
	}

	.overlay {
		position: absolute;
		bottom: 0;
		background: rgb(0, 0, 0);
		background: rgba(0, 0, 0, 0.5);
		/* Black see-through */
		color: #f1f1f1;
		width: 100%;
		transition: .5s ease;
		opacity: 0;
		color: white;
		font-size: 20px;
		padding: 20px;
		text-align: center;
	}

	.content:hover .overlay {
		opacity: 1;
	}

	* {
		box-sizing: border-box;
	}

	body {
		background-color: #f1f1f1;
		padding: 20px;
		font-family: Arial;
	}

	/* Center website */
	.main {
		max-width: 1000px;
		margin: auto;
	}

	h1 {
		font-size: 50px;
		word-break: break-all;
	}

	.row {
		margin: 10px -16px;
	}

	/* Add padding BETWEEN each column */
	.row,
	.row>.column {
		padding: 8px;
	}

	/* Create three equal columns that floats next to each other */
	.column {
		float: left;
		width: 33.33%;
		display: none;
		/* Hide all elements by default */
	}

	/* Clear floats after rows */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	/* Content */
	.content {
		background-color: white;
		padding: 10px;
	}

	/* The "show" class is added to the filtered elements */
	.show {
		display: block;
	}

	/* Style the buttons */
	.btn {
		border: none;
		outline: none;
		padding: 12px 16px;
		background-color: white;
		cursor: pointer;
	}

	.btn:hover {
		background-color: #ddd;
	}

	.btn.active {
		background-color: #666;
		color: white;
	}
</style>
<div class="container">
	<div class="main">
		<h1>Ano</h1>
		<hr>
		<h2>2020</h2>

		<div id="myBtnContainer">
			<button class="btn active" onclick="filterSelection('Tudo')"> Tudo</button>
			<button class="btn" onclick="filterSelection('Familia')"> Familia</button>
			<button class="btn" onclick="filterSelection('Filhos')"> Filhos</button>
			<button class="btn" onclick="filterSelection('Cachorros')"> Cachorros</button>
		</div>

		<div class="row">
			<div class="column Familia">
				<div class="content">
					<a href="https://images.pexels.com/photos/10268338/pexels-photo-10268338.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/10268338/pexels-photo-10268338.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<a href="https://images.pexels.com/photos/159823/kids-girl-pencil-drawing-159823.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/159823/kids-girl-pencil-drawing-159823.jpeg" style="width:100%"/>
					</a>
					<!-- <div class="overlay">My Name is John</div> -->
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<a href="https://images.pexels.com/photos/1633522/pexels-photo-1633522.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/1633522/pexels-photo-1633522.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<a href="https://images.pexels.com/photos/7985736/pexels-photo-7985736.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/7985736/pexels-photo-7985736.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<a href="https://images.pexels.com/photos/296301/pexels-photo-296301.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/296301/pexels-photo-296301.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<a href="https://images.pexels.com/photos/35638/labrador-breed-dogs-animal.jpg" target="_blank">
						<img src="https://images.pexels.com/photos/35638/labrador-breed-dogs-animal.jpg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<a href="https://images.pexels.com/photos/6568492/pexels-photo-6568492.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/6568492/pexels-photo-6568492.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<a href="https://images.pexels.com/photos/1212805/pexels-photo-1212805.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/1212805/pexels-photo-1212805.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<a href="https://images.pexels.com/photos/333083/pexels-photo-333083.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/333083/pexels-photo-333083.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<a href="https://images.pexels.com/photos/5810662/pexels-photo-5810662.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/5810662/pexels-photo-5810662.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<a href="https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/1001914/pexels-photo-1001914.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<a href="https://images.pexels.com/photos/551628/pexels-photo-551628.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/551628/pexels-photo-551628.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<a href="https://images.pexels.com/photos/5082631/pexels-photo-5082631.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/5082631/pexels-photo-5082631.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<a href="https://images.pexels.com/photos/8087860/pexels-photo-8087860.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/8087860/pexels-photo-8087860.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<a href="https://images.pexels.com/photos/257540/pexels-photo-257540.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/257540/pexels-photo-257540.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Familia">
				<div class="content">
					<a href="https://images.pexels.com/photos/7005193/pexels-photo-7005193.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/7005193/pexels-photo-7005193.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Filhos">
				<div class="content">
					<a href="https://images.pexels.com/photos/50692/brothers-family-siblings-boys-50692.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/50692/brothers-family-siblings-boys-50692.jpeg" style="width:100%"/>
					</a>
				</div>
			</div>

			<div class="column Cachorros">
				<div class="content">
					<a href="https://images.pexels.com/photos/2827238/pexels-photo-2827238.jpeg" target="_blank">
						<img src="https://images.pexels.com/photos/2827238/pexels-photo-2827238.jpeg" style="width:100%"/>
					</a>
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