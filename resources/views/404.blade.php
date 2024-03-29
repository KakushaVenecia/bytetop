<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>ERROR PAGE</title>
</head>

<style>
:root {
	--primary-color: orange;
	--eye-pupil-color: #050505;
	--bg-color: #fff;
	--text-color: #000;
	--fs-heading: 36px;
	--fs-text: 26px;
	--fs-button: 18px;
  --fs-icon: 30px;
	--pupil-size: 30px;
	--eye-size: 80px;
	--button-padding: 15px 30px;

		@media only screen and (max-width: 567px) {
      --fs-heading: 30px;
      --fs-text: 22px;
      --fs-button: 16px;
      --fs-icon: 24px;
	    --button-padding: 12px 24px;
		}
}

body {
	min-height: 100vh;
	background-color: var(--bg-color);
	color: var(--text-color);
}

.container {
	display: flex;
	flex-direction: column;
	align-items: center;
	row-gap: 30px;
	text-align: center;
}

.error-page {
	margin: auto;
	min-height: 50vh;

	&__heading {
		&-title {
			text-transform: capitalize;
		  font-size: var(--fs-heading);
			font-weight: 500;
			color: var(--primary-color);
		}

		&-desciption {
			margin-top: 10px;
		  font-size: var(--fs-text);
			font-weight: 200;
		}
	}

	&__button {
		color: inherit;
		text-decoration: none;
		border: 1px solid var(--primary-color);
		font-size: var(--fs-button);
		font-weight: 200;
		padding: var(--button-padding);
		border-radius: 15px;
		box-shadow: 0px 7px 0px -2px var(--primary-color);
		transition: all 0.3s ease-in-out;
		text-transform: capitalize;

		&:hover {
			box-shadow: none;
			background-color: var(--primary-color);
			color: #fff;
		}
	}
}

.eyes {
	display: flex;
	justify-content: center;
	gap: 2px;
}

.eye {
	width: var(--eye-size);
	height: var(--eye-size);
	background-color: var(--primary-color);
	border-radius: 50%;
	display: grid;
	place-items: center;
}

.eye__pupil {
	width: var(--pupil-size);
	height: var(--pupil-size);
	background-color: var(--eye-pupil-color);
	border-radius: 50%;
	animation: movePupil 2s infinite ease-in-out;
	transform-origin: center center;
}

@keyframes movePupil {
	0%,
	100% {
		transform: translate(0, 0);
	}
	25% {
		transform: translate(-10px, -10px);
	}
	50% {
		transform: translate(10px, 10px);
	}
	75% {
		transform: translate(-10px, 10px);
	}
}

.color-switcher {
	position: fixed;
	top: 70px;
	right: 40px;
	background-color: transparent;
	font-size: var(--fs-icon);
	cursor: pointer;
	color: var(--primary-color);
	border: 0;
}


</style>
@include('partials.navbar')
<body>
<main class="error-page">
  <div class="container">
    <div class="eyes">
      <div class="eye">
        <div class="eye__pupil eye__pupil--left"></div>
      </div>
      <div class="eye">
        <div class="eye__pupil eye__pupil--right"></div>
      </div>
    </div>

    <div class="error-page__heading">
      <h1 class="error-page__heading-title">Looks like you're lost</h1>
      <p class="error-page__heading-desciption">404 error</p>
    </div>

    <a class="error-page__button" href="{{route('landing')}}" aria-label="back to home" title="back to home">back to home</a>
  </div>
</div>
</main>
<button class="color-switcher" data-theme-color-switch>&#127769;</button>
@include('partials.footer')
</body>
<script>
const colorSwitcher = document.querySelector("[data-theme-color-switch]");
let currentTheme = "light";

colorSwitcher.addEventListener("click", function () {
	const root = document.documentElement;

	if (currentTheme == "dark") {
		root.style.setProperty("--bg-color", "#fff");
		root.style.setProperty("--text-color", "#000");
		colorSwitcher.textContent = "\u{1F319}";
		currentTheme = "light";
	} else {
		root.style.setProperty("--bg-color", "#050505");
		root.style.setProperty("--text-color", "#fff");
		colorSwitcher.textContent = "\u{2600}";
		currentTheme = "dark";
	}

	colorSwitcher.setAttribute("data-theme", currentTheme);
});
</script>
</html>
