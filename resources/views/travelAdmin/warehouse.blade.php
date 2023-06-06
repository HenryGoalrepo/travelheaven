<!doctype html>
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
	<title>Dashboard </title>
	<style>
		#loader {
			transition: all .3s ease-in-out;
			opacity: 1;
			visibility: visible;
			position: fixed;
			height: 100vh;
			width: 100%;
			background: #fff;
			z-index: 90000
		}

		#loader.fadeOut {
			opacity: 0;
			visibility: hidden
		}

		.spinner {
			width: 40px;
			height: 40px;
			position: absolute;
			top: calc(50% - 20px);
			left: calc(50% - 20px);
			background-color: #333;
			border-radius: 100%;
			-webkit-animation: sk-scaleout 1s infinite ease-in-out;
			animation: sk-scaleout 1s infinite ease-in-out
		}

		@-webkit-keyframes sk-scaleout {
			0% {
				-webkit-transform: scale(0)
			}

			100% {
				-webkit-transform: scale(1);
				opacity: 0
			}
		}

		@keyframes sk-scaleout {
			0% {
				-webkit-transform: scale(0);
				transform: scale(0)
			}

			100% {
				-webkit-transform: scale(1);
				transform: scale(1);
				opacity: 0
			}
		}
	</style>


	<meta name="robots" content="index, nofollow" />
</head>

<body class="app">
	<div id="loader">
		<div class="spinner"></div>
	</div>
	<script>
		window.addEventListener("load", (function () {
			const t = document.getElementById("loader");
			setTimeout((function () {
				t.classList.add("fadeOut")
			}), 300)
		}))
	</script>
	<div>
	   @include('travelAdmin.sections.sidenav')
		<div class="page-container">
		@include('travelAdmin.sections.header')
		 @yield('content')
		@include('travelAdmin.sections.footer')
		</div>
	</div>
@include('travelAdmin.links&scripts.scripts')
</body>

</html>
