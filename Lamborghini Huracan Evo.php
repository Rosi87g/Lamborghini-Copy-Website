<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lamborghini Huracan Evo</title>
  <link rel="website icon" type="png" href="logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.21/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK10nMGCdVK+iQrJ7lzPJQD1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

</head>
<style>
	html{
		scroll-behavior: smooth;
	}

	/* nav menu */

		   	/*=============== GOOGLE FONTS ===============*/
@import url("https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600&display=swap");

/*=============== VARIABLES CSS ===============*/
:root {
  --header-height: 3.5rem;

  /*========== Colors ==========*/
  /*Color mode HSL(hue, saturation, lightness)*/
  --first-color: hsl(230, 75%, 56%);
  --title-color: hsl(230, 75%, 15%);
  --text-color: hsl(230, 12%, 40%);
  --body-color: hsl(230, 100%, 98%);
  --container-color: hsl(230, 100%, 97%);
  --border-color: hsl(230, 25%, 80%);

  /*========== Font and typography ==========*/
  /*.5rem = 8px | 1rem = 16px ...*/
  --body-font: "Syne", sans-serif;
  --h2-font-size: 1.25rem;
  --normal-font-size: .938rem;

  /*========== Font weight ==========*/
  --font-regular: 400;
  --font-medium: 500;
  --font-semi-bold: 600;

  /*========== z index ==========*/
  --z-fixed: 100;
  --z-modal: 1000;
}

/*========== Responsive typography ==========*/
@media screen and (min-width: 1023px) {
  :root {
    --h2-font-size: 1.5rem;
    --normal-font-size: 1rem;
  }
}

/*=============== BASE ===============*/

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body,
input,
button {
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
}

input,
button {
  border: none;
  outline: none;
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  display: block;
  max-width: 100%;
  height: auto;
}

/*=============== REUSABLE CSS CLASSES ===============*/
.container {
 position: fixed;
 height: 60px;
        padding: 0.8rem 2rem;
    	top: -90px;
    	left: 0;
    	background: #181818;
    	display: flex;
    	justify-content: center;
    	align-items: center;
    	width: 100%;
    	z-index: 8;
    	animation: slide-top 1s 0.7s forwards;
    	animation-direction: reverse;
}


.search,
.login {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: var(--z-modal);
  background-color: hsla(230, 75%, 15%, .1);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px); /* For safari */
  padding: 8rem 1.5rem 0;
  opacity: 0;
  pointer-events: none;
  transition: opacity .4s;
}

.search__close,
.login__close {
  position: absolute;
  top: 2rem;
  right: 2rem;
  font-size: 1.5rem;
  color: #fff;
  cursor: pointer;
}

/*=============== HEADER & NAV ===============*/

.brand {
		width: 11em;
	}

.nav {
  height: 5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav__logo {
  color: #fff;
  font-weight: var(--font-semi-bold);
  
}

.nav__actions {
  display: flex;
  align-items: center;
  column-gap: 1rem;
}

.nav__search, 
.nav__login, 
.nav__toggle, 
.nav__close {
  font-size: 1.8rem;
  color: #fff;
  cursor: pointer;
  transition: color .4s;
}

:is(.nav__logo, .nav__search, .nav__login, .nav__toggle, .nav__link):hover {
  color: #fff;
}

/* Navigation for mobile devices */
@media screen and (max-width: 1023px) {
  .nav__menu {
    position: fixed;
    padding: 0.8rem 2rem;
    top: -100%;
    left: 0;
        font-family: Roboto, Helvetica Neue, Arial;
    background-color: #000;
    box-shadow: 0 8px 16px hsla(230, 75%, 32%, .15);
    width: 100%;
    padding-block: 4.5rem 4rem;
    transition: top .4s;
  }
}

.nav__list {
  display: flex;
  flex-direction: column;
  row-gap: 2.5rem;
      font-family: Roboto, Helvetica Neue, Arial;
  text-align: center;
}

.nav__link {
  color: #fff;
  font-weight: var(--font-semi-bold);
  transition: color .4s;
}
.nav__link::after{
	background: none repeat scroll 0 0 transparent;
	bottom: 0;
	content: "";
	display: block;
	height: 2px;
	position: absolute;
	background: #fff;
	width: 100%;
}

.nav__close {
  position: absolute;
  top: 1.15rem;
  right: 1.5rem;
}

/* Show menu */
.show-menu {
  top: 0;
}

/*=============== SEARCH ===============*/
.search__form {
  display: flex;
  align-items: center;
  column-gap: .5rem;
  background-color: var(--container-color);
  box-shadow: 0 8px 32px hsla(230, 75%, 15%, .2);
  padding-inline: 1rem;
  border-radius: .5rem;
  transform: translateY(-1rem);
  transition: transform .4s;
}

.search__icon {
  font-size: 3.25rem;
  color: var(--title-color);
}

.search__input {
  width: 100%;
  padding-block: 1rem;
  background-color: var(--container-color);
  color: var(--text-color);
}

.search__input::placeholder {
  color: var(--text-color);
}

/* Show search */
.show-search {
  opacity: 1;
  pointer-events: initial;
}

.show-search .search__form {
  transform: translateY(0);
}

/*=============== BREAKPOINTS ===============*/
/* For medium devices */
@media screen and (min-width: 576px) {
  .search,
  .login {
    padding-top: 10rem;
  }

  .search__form {
    max-width: 450px;
    margin-inline: auto;
  }

  .search__close,
  .login__close {
    width: max-content;
    top: 5rem;
    left: 0;
    right: 0;
    margin-inline: auto;
    font-size: 2rem;
  }

  .login__form {
    max-width: 400px;
    margin-inline: auto;
  }
}

/* For large devices */
@media screen and (min-width: 1023px) {
  .nav {
    height: calc(var(--header-height) + 2rem);
    column-gap: 3rem;
  }
  .nav__close, 
  .nav__toggle {
    display: none;
  }
  .nav__menu {
    margin-left: auto;
  }
  .nav__list {
    flex-direction: row;
    column-gap: 3rem;
  }

  .login__form {
    padding: 1rem 2rem 3.5rem;
  }
}

@media screen and (min-width: 1150px) {
  .container {
    margin-inline: auto;
  }
}

	/* html */

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		scroll-behavior: smooth;
	}
	body {
		width: 100%;
		min-height: 100vh;
		position: relative;
		font-family: 'roboto', sans-serif;
		
	}
	.anim-container {
		position: fixed;
		top: 0;
		left: 0;
		z-index: 9;
		width: 100%;
		height: 100vh;
		overflow: hidden;
	}

	.shutter{
		position: absolute;
		left: 0;
		width: 100%;
		height: 50%;
		background: #000;
	}

	.shutter.top{
		top: 0;
		z-index: 2;
		animation: slide-top;
	}

	.shutter.bottom{
		bottom: 0;
		animation: slide-bottom;
	}

	.shutter.top .logo{
		position: absolute;
		height: 250px;
		bottom: -125px;
		left: 50%;
		transform: translateX(-50%) rotateY(90deg);
		z-index: 2;
		animation: logo_anim;
	}
	@keyframes logo_anim {
		0%{
			transform: translateX(-50%) rotateY(90deg);
		}
		100%{
			transform: translateX(-50%);
		}
	}

	.shutter.top::after{
		content: '';
		position: absolute;
		height: 3px;
		width: 100%;
		background: #fff;
		bottom: 0;
		left: -100%;
		animation: slide-in-out;
	}
	@keyframes slide-in-out {
		0%{
			left: -100%;
		}
		100%{
			left: 100%;
		}
	}
	@keyframes slide-top{
		0%{
			top: 0;
		}
		100%{
			top: -100%;
		}
	}
	@keyframes slide-bottom{
		0%{
			bottom: 0;
		}
		100%{
			bottom: -100%;
		}
	}

	.lambo-carousel {
		position: relative;
		width: 100%;
		height: 100vh;
	}
	.carousel{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-image: url(huracan/hura_evo_02.jpg);
		background-size: cover;
		background-position: center center;
		padding: 3vw;
		padding-top: 34vh;
	}
	.carousel:nth-child(2){
		background: url(huracan/thumb-1920-1308575.jpeg);
		background-size: cover;
		z-index: -1;
	}
	.carousel:nth-child(3){
		background: url(huracan/snap_hero_01.png);
		background-size: cover;
		z-index: -1;
	}
	.carousel:nth-child(4){
		background: url(huracan/lLamborghini-Aventador-SVJ-6_1.jpg);
		background-size: cover;
		z-index: -1;
	}
	.carousel .title{
		color: #fff;	
		font-size: 20px;
		text-transform: uppercase;
		opacity: 0;
    }
    .carousel .ti{
		color: #fff;	
		font-size: 50px;
		text-transform: uppercase;
		opacity: 0;
    }

    .btn {
    	opacity: 0;    	
    	width: 150px;
    	height: 40px;
    	margin-top: 28px;
    	background: none;
    	color: #fff;
    	text-transform: capitalize;
    	font-size: 16px;
    	cursor: pointer;
    	transition: .5s;
    	text-align: left;
    	padding-left: 30px;
    	position: relative;
    	border: none;
    	clip-path: polygon(0 0, 82% 0, 100% 100%, 0% 100%);
    }
    .btn::before{
    	content: '';
    	position: absolute;
    	top: 0;
    	left: 0;
    	right: 0;
    	bottom: 0;
    	background: url(btn.png);
    	background-size: 100% 100%;
    }
    .btn:hover {
    	background: #fff;
    	color: #000;
    }

    .carousel.active {
    	z-index: 2;
    }
    .carousel.active .title,
    .carousel.active .ti,
    .carousel.active .btn{
    	opacity: 0;
    	animation: fade-up 1s forwards 1;
    }
    @keyframes fade-up{
    	0%{
    		opacity: 0;
    		transform: translateX(-50%);
    	}
    	100%{
    		opacity: 1;
    		transform: translateX(0px);
    	}
    }

    /* indicator */

    .indicators{
    	position: absolute;
    	bottom: 20px;
    	left: 50%;
    	transform: translateX(-50%);
    	width: 80px;
    	height: 15px;
    	display: flex;
    	justify-content: space-evenly;
    	align-items: center;
    	cursor: pointer;
    	z-index: 3;
    }

    .indicators span{
    	width: 15px;
    	height: 15px;
    	border-radius: 50%;
    	transition: .5s;
    	background: rgba(0, 0, 0, 0.4);
    }

    .indicators span.active{
    	background: #fff;
    }

    /* slider */

    .slider {
    position: relative;
    max-width: 100%;
    margin: 0 auto;
    overflow: hidden;
}

.slides {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 100%;
    box-sizing: border-box;
}

.slide img {
    width: 100%;
    vertical-align: middle;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0,0,0,0.5);
    color: white;
    border: none;
    padding: 20px;
    cursor: pointer;
    z-index: 100;
    transform: translate(-1624, -187.923);
}

.prev {
    left: 50px;
}
.prev, .next::before {
    content: '';
    	position: absolute;
    	top: 50%;
    	background: url(hex.png);
    	background-size: 100% 100%;
}
.next, .prev::before {
    content: '';
    	position: absolute;
    	top: 50%;
    	background: url(hex.png);
    	background-size: 100% 100%;
}
.prev:hover {
    background-color: #fff;
    color: black;
        clip-path: polygon(50% 0%, 100% 28%, 100% 75%, 50% 100%, 0% 75%, 0% 28%); 
}
.next:hover {
    background-color: #fff;
    color: black;
        clip-path: polygon(50% 0%, 100% 28%, 100% 75%, 50% 100%, 0% 75%, 0% 28%); 
}
.next {
    right: 50px;
}
@media only screen and (max-width: 990px){
    .prev, .next{
        padding: 15px;
    }
}
@media only screen and (max-width: 768px){
    .prev, .next{
        padding: 10px;
    }
}


    /* model showcase */

    .model-container{
    	width: 100%;
    	height: 70vh;
    	position: relative;
    	overflow: hidden;
    	background: #fff;
    	padding: 49px;
    	z-index: 3;
    }
    .model-img{
    	position: absolute;
    	top: 10%;
    	max-width: 70%;
    	margin: 0 auto;
    	min-height: 70%;
    	clip-path: polygon(29% 0, 100% 0, 76% 100%, 0 100%);   
    }
    .model-img:nth-child(3){
    	left: 0;
    }

    .model-img:nth-child(2){
    	right: 42%;
    }
    .model-img:nth-child(1){
    	right: -13%;
    	max-width: 70%;
    	clip-path: polygon(24% 0%, 100% 0%, 76% 100%, 3% 100%);
    }

    .model-content{
    	position: relative;
    	color: #fff;
    	text-transform: uppercase;
    }

    .heading {
    	font-size: 40px;
    	margin: 30px auto;
    }

    .model-name {
    	font-size: 50px;
    	margin: -40px auto;
    }
    .link{
    	font-size: 25px;
    	cursor: pointer;
    	position: relative;
    	width: fit-content;
    }
    .link::before{
    	content: '';
    	position: absolute;
    	width: 35px;
    	height: 40px;
    	top: -5px;
    	left: -20px;
    	background: url(hex.png);
    	background-size: 100% 100%;
    	transform: scale(1.5);
    	transition: 1s;
    }
    .link:hover::before{
    	transform: scale(1.5) rotate(-360deg);
    }

    /* row wrapper */

    .rowwrapper .row {
		width: 100%;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
	    grid-gap: 20px;
		overflow: hidden;
	}
	.rowwrapper .row .imgwrapper {
		overflow: hidden;

	}
	.rowwrapper .row .imgwrapper .img192 {
		width: 100%;
		height: 120%;
		left: 10%;
		object-fit: cover;
		position: relative;
		clip-path: polygon(34% 0, 100% 0, 100% 100%, 0% 100%);
	}
	.rowwrapper .row .imgwrapper .img193{
		width: 100%;
		height: 100%;
		left: -10%;
		object-fit: cover;
		position: relative;
		clip-path: polygon(21% 0, 100% 0, 79% 100%, 0 100%);
	}

	.rowwrapper .row .contentwrapper {
		width: 100%;
		display: flex;
		justify-content: center;
		margin-top: -20px;
		align-items: center;
		padding-left: 30px;
	}
	.rowwrapper .row .contentwrapper span.textwrapper {
		display: block;
		font-size: 20px;
		text-transform: capitalize;
		display: flex;
		justify-content: flex-start;
		align-items: center;
		gap: 1px;
		margin-bottom: 10px;
	}
	.rowwrapper .row .contentwrapper span.textwrapper span {
		display: inline-block;
		background: #383f47;
		width: 70%;
		height: 5px;
	}
	.rowwrapper .row .contentwrapper h2 {
		font-size: 2.9rem;
		font-weight: 700;
		margin-top: 1px;
		font-family: Roboto, Helvetica Neue, Arial;
		text-align: center;
		text-transform: uppercase;
		color: #383f47;
		line-height: 1.2;
	}
	.rowwrapper .row .contentwrapper p{
		font-size: 16px;
		line-height: 25px;
		color: #000;
	}

	@media (max-width: 1200px){
		.rowwrapper .row {
			grid-template-columns: 1fr;
			grid-gap: 50px;
		}
		.rowwrapper .row .contentwrapper {
			padding-left: 0;
		}
		.row .contentwrapper p {
			line-height: 24px;
			padding: 2em;
		}
	}
	@media (max-width:768px) {
		.row {
			width: 90%;
		}
		.row .contentwrapperh2{
			font-size: 30px;
			padding-bottom: 20px;
		}
		.row .contentwrapper p {
			line-height: 24px;
			padding: 2em;
		}
	}
	@media (max-width: 575px) {
		.rowwrapper .row .contentwrapper span.textwrapper {
			font-size: 18px;
		}
		.row .contentwrapper h2 {
			font-size: 25px;
		}
		.row .contentwrapper p{
			font-size: 15px;
			line-height: 22px;
		}
		.row .contentwrapper a{
			font-size: 15px;
			padding: 10px 20px;
		}
	}

	/* align */

	.inp {
		color: #666;
		font-size: 16px;
		line-height: 25px;
		font-family: Roboto, Helvetica Neue, Arial;
		text-transform: capitalize;
		align-items: flex-start;
	}
	.exp {
		letter-spacing: 1px;
		font-size: 2.9em;	
		font-family: Roboto, Helvetica Neue, Arial;
		text-align: center;
	}
	.skewed {
		width: 75em;
		color: #000;
		display: flex;
		margin: 1em;
		
	}
	.text {
		padding: 1em;
		width: 50%;
		font-family: Roboto, Helvetica Neue, Arial;
		display: grid;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}
	a {
		color: #000;
		text-decoration: none;
	}
	.image900 {
		width: 65%;
		height: 20em;
		display: grid;
		left: %;
		right: initial;
		align-items: center;
		position: relative;
        clip-path: polygon(24% 0, 100% 0%, 76% 100%, 0% 100%);
		flex-direction: column;
		overflow: hidden;
	}
	.image9001 {
		width: 55%;
		height: 20em;
		display: grid;
		left: initial;
		right: %;
		align-items: center;
		position: relative;
		clip-path: polygon(25% 0, 100% 0%, 75% 100%, 0% 100%);
		flex-direction: column;
		overflow: hidden;
	}

	.image9002 {
		width: 60%;
		height: 30%;
		display: grid;
		left: 43%;
		align-items: center;
		position: relative;
      clip-path: polygon(49% 0, 100% 0%, 96% 100%, 6% 100%);
		flex-direction: column;
		background-size: contain;
		overflow: hidden;
	}
	.image9003 {
		width: 80%;
		height: 30%;
		display: grid;
		right: initial;
		left: -13%;
		margin-top: -30%;
		align-items: center;
		position: relative;
		clip-path: polygon(39% 0%, 100% 0%, 68% 100%, 3% 100%);	
		flex-direction: column;
		overflow: hidden;
	}

	@media screen and (max-width: 990px){
		.image900, .image9001 {
			width: 100%;
			height: 100%;
			clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
		}
		.skewed {
			display: block;
			width: 47em;
		}
		.text {
			width: 100%;
			padding: 1em;
			font-size: 16px;
			align-items: flex-start;
			margin-top: 2px;
		}
		.image9002, .image9003{
			display: none !important;
		}
	}

	@media screen and (max-width: 768px){
		.skewed {
			display: block;
			width: 37em;
		}
		.image900, .image9001 {
			width: 107%;
			height: 100%;
			clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
		}
		.image9002, .image9003{
			display: none !important;
		}
		.text {
			width: 100%;
			padding: 1em;
			font-size: 16px;
			align-items: flex-start;
			margin-top: 2px;
		}
		.exp {
			padding: 0.1em;
		}
	}

	.iframe-video {
	 	max-width: 1300px;
	 	padding: 2em;
	 	margin: 0 auto;
	 	text-align: center;
	 }

	 /* section align */

	 .align {
    font-family: Roboto, Helvetica Neue, Arial;
    margin: 0;
    padding: 0;
    background-color: #fff;
    color: #000;
}

.con {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.feature {
    flex: 1 1 45%;
    box-sizing: border-box;
    padding: 20px;
    text-transform: capitalize;
    margin: 5px;
    border-radius: 8px;
}

.feature h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #383f47;
}

.feature p {
    font-size: 16px;
    line-height: 1.5;
    color: black;
    margin-bottom: 15px;
}

.icon-text {
    display: flex;
    align-items: center;
}

.icon-text img {
    width: 55px;
    height: 55px;
    margin-right: 10px;
}

@media (max-width: 768px) {
    .feature {
        flex: 1 1 100%;
        margin: 10px 0;
    }
}

.image-container {
    flex: 1 1 60%;
    position: relative;
}

.image-container img {
    width: 100%;
    height: auto;
    display: block;
}

.audio-player {
    flex: 1 1 30%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.play-pause {
    width: 170%;
    height: 100px;
    color: black;
    background: url('huracan/pause2.png') no-repeat center center;
    background-size: contain;
    cursor: pointer;
}

.play-pause.playing {
	color: black;
    background: url('huracan/play2.png') no-repeat center center;
    background-size: contain;
}

@media (max-width: 628px){
	.play-pause, .play-pause.playing{
		width: 430px;
		height: 100px;
		background-size: cover;
		cursor: pointer;
	}
}

@media (max-width: 768px) {
    .image-container, .audio-player {
        flex: 1 1 100%;
    }
}

/* expand collapse */

.specs2 {
		padding: 0 2em;
		margin-top: 2%;
	}
	.specs2 ul{
		max-width: 600px;
		margin: 0 auto;
	}
	.Head2{
		    font-size: 1.8rem;
    font-weight: 600;
    line-height: 1.3;
    letter-spacing: 0.12rem;
    margin-bottom: 0.9rem;
    display: block;
    text-transform: uppercase;
		margin: 0 auto;
		text-transform: uppercase;
		font-family: Roboto, Helvetica Neue, Arial;
	}
	 .specs2 ul li {
		padding: 1em 0;
		font-family: Roboto, Helvetica Neue, Arial;
		text-transform: capitalize;
		border-bottom: 1px #aaa solid;
		width: 100%;
		display: flex;
		justify-content: space-between;
		align-items: center;
		    font-size: 1rem;
    font-weight: 400;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.3;
    letter-spacing: 0.02rem;
	}

.expand-collapse-btn {
    padding: 10px 20px;
    margin: 10px;
    margin-left: 20%;
    cursor: pointer;
    background-color: transparent;
    margin-top: 10px;
    margin-bottom: 5%;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
.expand-collapse-btn:hover {
	transform: scale(1.02);
}
.expandimg {
    width: 70%;
    border: 0.7px solid #111;
    border-radius: 5%;
}

.collapse {
    display: none;
    padding: 20px;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.expand {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .section {
            flex: 1 1 45%;
            margin: 1px;
            padding: 20px;
        }
        @media (max-width: 768px) {
            .section {
                flex: 1 1 100%;
            }
        }

    .section, .specs {
        padding: 0 1em;
        width: 100%;
    }
    .section, .specs ul{
        max-width: 700px;
        margin: 0 auto;
        padding: 0.1em;
    }
    .section, .head{
         font-size: 1.6rem;
         font-weight: 600;
         line-height: 1.3;
         letter-spacing: 0.12rem;
         margin-bottom: 0.4rem;
         display: block;
         margin: 0 auto;
         text-transform: uppercase;
         font-family: Roboto, Helvetica Neue, Arial;
    }
    .header {
        font-weight: 600;
        color: black;
        text-align: left;
    }
     .section, .specs ul li {
        padding: 1.2em;
        font-family: Roboto, Helvetica Neue, Arial;
        text-transform: capitalize;
        border-bottom: 1px #aaa solid;
        width: 100%;
        color: #3c3c3c;
        text-align: right;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1em;
        font-weight: 300;
        line-height: 1.3;
        letter-spacing: 0.02rem;
    }

    /* footer */

    footer {
    padding: 20px;
    text-align: center;
    background-color: #181818;
    font-family: Roboto, Helvetica Neue, Arial;
}

.footer-links {
    display: flex;
    flex-wrap: wrap;
    text-transform: uppercase !important;
    color: #fff;
    unicode-bidi: isolate;
    justify-content: center;
    margin-bottom: 20px;
}

.footer-links a {
    color: #fff;
    margin: 5px 10px;
    text-decoration: none;
}

.footer-links a:hover {
  transform: scale3d(1.2, 1.2, 1.2);
  text-decoration: underline;
}

.footer-social {
    margin-bottom: 20px;
}

.footer-social a {
    margin: 0 5px;
    display: inline-block;
}

.footer-social img {
    width: 24px;
    height: 24px;
}
.footer-social img:hover {
    transform: scale(1.1);
    color: #fff;
}


footer p {
    font-size: 14px;
    line-height: 1.5;
    letter-spacing: 0.02em;
    color: #fff;
    margin: 10px 0;
}

.footerlogobrand{
	margin-bottom: 2%;
	width: 10em;
}
.specs-container{
    padding: 0;
    display: flex;
    font-family: Arial, sans-serif;
    color: white;
    justify-content: space-evenly;
}

.spec-item {
    display: block;
    padding: 2.5em;
}

#info {
    font-size: 18px;
    font-weight: bold;
    font-weight: 600;
    margin-top: 5%;
}

#value {
    font-size: 15px;
    font-weight: 400;
    margin-top: 1%;
}

.input-wrap {
    margin: 1em 0;
    display: flex;
    margin-left: 40%;
}
.input-wrap input {
    padding: 0.5em;
    border: none;
    background: #20232a;
    color: #ccc;
}
.input-wrap input:focus {
    outline: none;
}
.input-wrap button {
    padding: 0.8em;
    background: blue;
    border: none;
    color: #fff;
}
.input-wrap button:hover {
    background: #fff;
    color: #111;
}
.alert{
  margin: -9px 0 12px 0;
  padding: 10px;
  border-radius: 5px;
}
.success-alert{
  color: #155724;
  background: #d4edda;
  border: 1px solid #c3e6cb;
}
.error-alert{
  color: #721c24;
  background: #f8d7da;
  border: 1px solid #f5c6cb;
}

</style>
<body>
	  <!--- <div class="anim-container">
		<span class="shutter top">
			<img src="logo.png" class="logo" alt="">
		</span>
		<span class="shutter bottom"></span>
	</div> --->

	<!--- navbar --->

	<nav class="nav container">
              <a class="nav__logo">
              	<img src="collage.png" class="brand"/>
              </a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="Lamborghini Models.php?" class="nav__link">MODELS</a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">BEYOND</a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">OWNERSHIP</a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">MOTORSPORT</a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">STORE</a>
                  </li>
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">
               <!-- Search button -->
               <i class="ri-search-eye-line nav__search" id="search-btn"></i>

               <!-- Login button -->
               <a href=""><i class="ri-account-pin-circle-line nav__login" id="login-btn"></i></a>
       

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
            </div>
         </nav>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search">
         <form action="" class="search__form">
            <i class='bx bx-search-alt'></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>
	

	<!--- carousel --->

	<div class="lambo-carousel">
		<div class="carousel">
			<h1 class="title">HURACÁN EVO </h1> 
			<h2 class="ti"> EveryDay Amplified</h2>
			<div class="specs-container">
        <div class="spec-item">
            <p class="title" id="info">POWER(CV) / POWER(KW) </p>
            <p class="ti" id="value">640 CV / 470KW </p>
        </div>
        <div class="spec-item">
            <p class="title" id="info">MAX. SPEED</p>
            <p class="ti" id="value">&gt;325 km/h</p>
        </div>
        <div class="spec-item">
            <p class="title" id="info">0-100 km/h</p>
            <p class="ti" id="value">2.9 s</p>
          </div>
    </div>
		</div>
		<div class="carousel">
			<h1 class="title">REVUELTO </h1> 
			<h2 class="ti"> From Now ON</h2>
			<a href="Lamborghini Revuelto.php?"><button class="btn">Explore</button></a>
            <div class="specs-container">
        <div class="spec-item">
            <p class="title" id="info">POWER (combined ICE+EE) </p>
            <p class="ti" id="value">1015CV </p>
        </div>
        <div class="spec-item">
            <p class="title" id="info">MAX. SPEED</p>
            <p class="ti" id="value">&gt;350 km/h</p>
        </div>
        <div class="spec-item">
            <p class="title" id="info">0-100 km/h</p>
            <p class="ti" id="value">2.5 s</p>
          </div>
    </div>
		</div>
		<div class="carousel">
			<h1 class="title">URUS SE </h1> 
			<h2 class="ti">DARE TO LIVE MORE</h2>
			<a href="Lamborghini Urus Se.php?"><button class="btn">Explore</button></a>
            <div class="specs-container">
        <div class="spec-item">
            <p class="title" id="info">MAX POWER (combined ICE+EE) </p>
            <p class="ti" id="value">800CV / 588KW</p>
        </div>
        <div class="spec-item">
            <p class="title" id="info">MAX. SPEED</p>
            <p class="ti" id="value">312 km/h</p>
        </div>
        <div class="spec-item">
            <p class="title" id="info">0-100 km/h</p>
            <p class="ti" id="value">3.4 s</p>
          </div>
    </div>
		</div>
		<div class="carousel">
			<h1 class="title">Aventador SVJ Roadster </h1> 
			<h2 class="ti"> Real Emotions <br>Shape the Future</h2>
			<a href="Lamborghini SVJ Aventador Roadstar.php?"><button class="btn">Explore</button></a>
            <div class="specs-container">
        <div class="spec-item">
            <p class="title" id="info">POWER(CV) / POWER(KW) </p>
            <p class="ti" id="value">770 CV / 566KW </p>
        </div>
        <div class="spec-item">
            <p class="title" id="info">MAX. SPEED</p>
            <p class="ti" id="value">&gt;350 km/h</p>
        </div>
        <div class="spec-item">
            <p class="title" id="info">0-100 km/h</p>
            <p class="ti" id="value">2.9 s</p>
          </div>
    </div>
		</div>

	<div class="indicators">
		<span class="active" 
		></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
	<section class="rowwrapper">
<div class="row">
		<div class="imgwrapper">
			<img src="huracan/H-EVO_3.jpg">
		</div>
		<div class="contentwrapper">
			<div class="content">
				<div class="textwrapper">
			<h2>Overview</h2>	
			<p>The Huracán EVO is the evolution of the most successful V10-powered Lamborghini ever. The result of fine-tuning and refining existing features, combined with new design solutions that increase performance, the car stands out for its ability to anticipate and cater to the driver’s behavior, expectations and desires.</p>
		    </div>
		</div>
	</div>
</div>
</section>

<section class="iframe-video">
	<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/955425270?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Lamborghini Huracán EVO"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
</section>

    <!-- skewed --->

    <div class="skewed">
		<div class="text">
			<h1 class="exp">Exterior Design</h1>
			<p class="inp">The Huracán EVO introduces refined aerodynamic solutions while remaining true to the design philosophy that is the hallmark of Lamborghini. 
The front bumper adopts unmistakable Lamborghini Y-shape stylistic elements, hood lines inspired by the Countach, skirt air intakes reminiscent of the Murciélago, and central high-mounted exhaust tailpipes that recall the highest-performance Lamborghini models of the past.
New features include 20-inch Aesir rims and new Ad Personam colors for the bodywork. 
</p>	
		</div>
		<div class="image900">
			<div>
				<img src="lamborghini-huracan-evo-grigio-artis_107.jpg" alt="img" />
			</div>
		</div>
	</div>

	<div class="skewed skewed-left">
		<div class="image9001">
			<div>
				<img src="huracan/hura_evo_s_03.jpg" alt="img" />
			</div>
		</div>
		<div class="text">
			<h1 class="exp">Interior Design</h1>
			<p class="inp">The passenger compartment features a cutting-edge 8.4-inch touchscreen system in the center console, from which the vehicle and entertainment functions are controlled. Exclusive interior finishes reflect authentic Italian design and feature the highest quality materials, with upholstery available in leather, Alcantara and—for the first time—Carbon Skin®, an innovative carbon-fiber material available exclusively from Lamborghini. </p>
		</div>
	</div>

	<div class="skewed">
		<div class="image9002">
			<div>
				<img src="huracan/hura_evo_s_02.png" alt="img" />
			</div>
		</div>
	</div>

	<div class="skewed skewed-left">
		<div class="image9003">
			<div>
				<img src="huracan/hura_evo_s_03.png" alt="img" />
			</div>
		</div>
	</div>

	<!--- section align --->

<section class="align">
    <div class="con">
        <div class="feature">
            <h2>FEEL THE ENGINE</h2>
            <p>The emotion has the sound of a naturally aspirated throbbing heart able to touch your deepest chords of feeling.</p>
            <div class="icon-text">
                <img src="huracan/headphones.png" alt="Headphones Icon">
                <p>Use headphones or earphones for a 8D sound experience.</p>
        </div>
        <div class="audio-player">
            <div id="play-pause-button" class="play-pause"></div>
            <audio id="audio" src="huracan/Huracan_V1.mp3"></audio>
        </div>
    </div>
        <div class="feature">
            <h2>CENTRO STILE</h2>
            <p>Its inimitable design is the natural evolution of the iconic Huracán lines, incorporating sophisticated new solutions that elevate performance and driving emotion to levels never before achieved.</p>
        </div>
    </div>
</section>


<section class="specs2">
	<ul>
		<li>
			<span class="Head2">Technical Specifications</span>
		</li>
		<li>
			<span>ENGINE</span>
			<span>V10, 90° (Multi Point Injection) + DSI (Direct Stratified Injection)</span>
		</li>
		<li>
			<span>MAX. TORQUE</span>
			<span>600 Nm (443 lb.-ft.) @ 6,500 rpm</span>
		</li>
		<li>
			<span>DISPLACEMENT</span>
			<span>5,204 cm³</span>
		</li>
		<li>
			<span>MAX. POWER</span>
			<span>640 CV (470 kW) @ 8,000 rpm</span>
		</li>
	</ul>

	<button class="expand-collapse-btn" onclick="toggleContent()"><img src="huracan/Expand all Technical Specifications.png" class="expandimg"></button>
		<div class="collapse">
            <div class="expand">
             	<div class="section">
            <section class="specs">
    <ul>
        <li>
            <span class="head">Technical Specifications</span>
        </li>
        <li>
            <span class="header">BORE X STROKE</span>
            <span>84.5 x 92.8 mm (3.33 x 3.65 in)</span>
        </li>
        <li>
            <span class="header">COMPRESSION RATIO</span>
            <span>12.7:1</span>
        </li>
        <li>
            <span class="header">MAX. POWER</span>
            <span>640 CV (470 kW) @ 8,000 rpm</span>
        </li>
        <li>
            <span class="header">WEIGHT TO POWER RATIO</span>
            <span>2.22 kg/CV</span>
        </li>
        <li>
            <span class="header">LUBRICATION</span>
            <span>Dry sump</span>
        </li>
        <li>
            <span class="header">EMISSION CLASS</span>
            <span>Euro 6 - LEV 3</span>
        </li>
        <li>
            <span class="header">EMISSION CONTROL SYSTEM</span>
            <span>Catalytic converters with lambda sensors</span>
        </li>
        </ul>
</div>


<div class="section">
            <section class="specs">
    <ul>
        <li>
            <span class="head">STEERING AND SUSPENSION</span>
        </li>
        <li>
            <span class="header">CONTROL SYSTEM</span>
            <span>Electronic Stability Control (integrating ABS and TCS)</span>
        </li>
        <li>
            <span class="header">SUSPENSION TYPE</span>
            <span>Magneto-rheological suspension</span>
        </li>
        <li>
            <span class="header">SUSPENSION GEOMETRY</span>
            <span>Double wishbone fully independent suspension</span>
        </li>
        <li>
            <span class="header">STEERING 	TYPE</span>
            <span>Lamborghini Dynamic Steering (with variable steering ratio)</span>
        </li>
        <li>
            <span class="header">STEERING SYSTEM</span>
            <span>Electro-mechanical Power Steering (EPS) Lamborghini All-Wheel Steering (LAWS) </span>
        </li>
</div>
</ul>

<div class="section">
            <section class="specs">
    <ul>
        <li>
            <span class="head">PERFORMANCE</span>
        </li>
        <li>
            <span class="header">TOP SPEED</span>
            <span>>325 km/h</span>
        </li>
        <li>
            <span class="header">ACCELERATION 0-100 KM/H (0-62 MPH)</span>
            <span>2.9 s</span>
        </li>
        <li>
            <span class="header">ACCELERATION 0-200 KM/H (0-124 MPH)</span>
            <span>9.0 s</span>
        </li>
        <li>
            <span class="header">BRAKING 100-0 KM/H (62-0 MPH)</span>
            <span>31.9 m</span>
        </li>
</div>
</ul>


<div class="section">
            <section class="specs">
    <ul>
        <li>
            <span class="head">TRANSMISSION</span>
        </li>
        <li>
            <span class="header">TRANSMISSION TYPE</span>
            <span>Electronically controlled all-wheel drive system (Haldex gen. V) <br> with rear mechanical self-locking differential</span>
        </li>
        <li>
            <span class="header">GEARBOX</span>
            <span>Dual clutch gearbox LDF (Lamborghini Doppia Frizione) with 7 speeds</span>
        </li>
    </div>
</ul>


        <div class="section">
            <section class="specs">
    <ul>
        <li>
            <span class="head">BRAKING SYSTEM</span>
        </li>

        <li>
            <span class="header">BRAKES</span>
            <span>Carbon-ceramic brakes with fixed monoblock calipers with 6 pistons (front) and 4 pistons (rear), in aluminum, CCB disks</span>
        </li>
        
        <li>
            <span class="header">FRONT BRAKES</span>
            <span>Carbon-ceramic discs – ventilated and cross drilled with 380 mm diameter and 38 mm thickness</span>
        </li>
        <li>
            <span class="header">REAR BRAKES</span>
            <span>Carbon-ceramic discs – ventilated and cross drilled with 356 mm diameter and 32 mm thickness</span>
        </li>
        </div>
    </ul>


        <div class="section">
            <section class="specs">
    <ul>
        <li>
            <span class="head">SAFETY</span>
        </li>
        <li>
            <span class="header">AIR BAGS</span>
            <span>Driver, passenger and side airgbags; kneels airbags in selected markets</span>
        </li>
        <li>
            <span class="header">PASSIVE SAFETY</span>
            <span>Front and rear specific collapsible areas; side protection system</span>
        </li>
        <li>
            <span class="header">ACTIVE SAFETY</span>
            <span>Electronic Stability Control (integrating ABS and TCS)</span>
        </li>
        </div>
    </ul>


        <div class="section">
            <section class="specs">
    <ul>
        <li>
            <span class="head">BODY AND CHASSIS</span>
        </li>
        <li>
            <span class="header">CHASSIS</span>
            <span>Hybrid in aluminum and carbon fiber</span>
        </li>
        <li>
            <span class="header">BODY</span>
            <span>Aluminum and synthetic material</span>
        </li>
        <li>
            <span class="header">MIRRORS</span>
            <span>Electrically operated, heated and foldable</span>
        </li>
        <li>
            <span class="header">AERODYNAMICS</span>
            <span>Front splitter with integrated wing, Underbody with aerodynamic deflector and Backend with integrated slotted spoiler</span>
        </li>
        </div>
    </ul>

<div class="section">
            <section class="specs">
    <ul>
        <li>
            <span class="head">DIMENSION</span>
        </li>
        <li>
            <span class="header">LENGTH</span>
            <span>mm 4,520 (in 177.9)</span>
        </li>
        <li>
            <span class="header">WIDTH (EXCLUDING MIRRORS)</span>
            <span>mm 1,933 (in 76.10)</span>
        </li>
        <li>
            <span class="header">WIDTH (INCLUDING MIRRORS)</span>
            <span>mm 2,236 (in 88.03)</span>
        </li>
        <li>
            <span class="header">HEIGHT</span>
            <span>standard suspension mm 1,165 (in 45.86)</span>
        </li>
        <li>
            <span class="header">WHEELBASE</span>
            <span>mm 2,620 (in 103.14)</span>
        </li>
        <li>
            <span class="header">DRY WEIGHT</span>
            <span>kg 1,422 (lb 3,134)</span>
        </li>
        <li>
            <span class="header">WEIGHT DISTRIBUTION</span>
            <span>% 43 / 57</span>
        </li>
    </ul>
</div>      
</div>
</section>

<div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="huracan/hura_evo_03.jpg" alt="">
            </div>
            <div class="slide">
                <img src="huracan/hura_evo_04.jpg" alt="">
            </div>
            <div class="slide">
                <img src="huracan/hura_evo_05.jpg" alt="">
            </div>
            <div class="slide">
                <img src="huracan/hura_evo_02.jpg" alt="">
            </div>
            <div class="slide">
                <img src="huracan/hura_evo_01.jpg" alt="">
            </div>
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>

<footer>
		<img src="collage.png" class="footerlogobrand"/>
        <div class="footer-links">     
            <a href="https://www.lamborghini.com/en-en/company">COMPANY</a>
            <a href="https://www.lamborghini.com/en-en/financials">FINANCIALS</a>
            <a href="https://www.lamborghini.com/en-en/careers">CAREERS</a>
            <a href="https://www.lamborghini.com/en-en/contact-us">CONTACT US</a>
            <a href="https://www.lamborghini.com/en-en/sustainability">SUSTAINABILITY</a>
            <a href="https://media.lamborghini.com/english?_gl=1*1qh9q67*_ga*NDg5MTE0NTY3LjE3MTU2NzQ0MTQ.*_ga_Z6KBBZE20R*MTcxNzgyODcyNC40OC4xLjE3MTc4Mjk3MzEuNTAuMC4w">MEDIA CENTER</a>
            <a href="https://www.lamborghini.com/en-en/privacy-legal">PRIVACY & LEGAL</a>
            <a href="https://www.lamborghini.com/en-en/sitemap">SITEMAP</a>
            <a href="https://www.lamborghini.com/en-en/accessibility">ACCESSIBILITY</a>
            <a href="newsletter.php?">NEWSLETTER</a>
        </div>    
        <div class="footer-social">
            <a href="https://www.instagram.com/lamborghini/?hl=en"><img src="icons/instagram.png" class="socialicons"></a>
            <a href="https://www.facebook.com/Lamborghini/"><img src="icons/facebook.png" class="socialicons"></a>
            <a href="https://www.youtube.com/channel/UC9DXZC8BCDOW6pYAQKgozqw"><img src="icons/youtube.png" class="socialicons"></a>
            <a href="https://twitter.com/Lamborghini"><img src="icons/twitter.png" class="socialicons"></a>
            <a href="https://www.tiktok.com/@lamborghini?lang=en"><img src="icons/tiktok.png" class="socialicons"></a>
            <a href="https://www.linkedin.com/company/automobili-lamborghini-s-p-a-"><img src="icons/linkedin.png" class="socialicons"></a>
            <a href="https://weibo.com/lamborghinichina?is_all=1"><img src="icons/weibo.png" class="socialicons"></a>
            <a href="http://i.youku.com/i/UMjg0MDg1ODMy"><img src="icons/podcast.png" class="socialicons"></a>
            <a href="https://www.lamborghini.com/en-en/wechat"><img src="icons/wechat.png" class="socialicons"></a>
            <a href="https://discord.gg/vet6ZBjpFd"><img src="icons/discord.png" class="socialicons"></a>
        </div>
        <p>* The consumption and emissions values in the website refer to your geographical IP. This value might be unrealistic if you navigate using VPN or if the position of your Internet provider is imprecise. If you believe you are incorrectly geolocalized, contact your dealer to get valid consumption and emissions information in your area.</p>
        <p>Copyright © 2024 Automobili Lamborghini S.p.A. a sole shareholder company part of Audi Group. All rights reserved. VAT no. IT 00591801204</p>
        <p>WARNING ABOUT ILLEGAL OFFERS OF ALLEGED SHARES OF AUTOMOBILI LAMBORGHINI S.P.A. Automobili Lamborghini S.p.A. got the notice that several third parties across different countries are allegedly offering shares in Automobili Lamborghini S.p.A. These offers are unlawful and originate neither from Volkswagen Aktiengesellschaft nor from any of its subsidiaries.</p>
    </footer>

<script>

		const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Menu show */
navToggle.addEventListener('click', () =>{
   navMenu.classList.add('show-menu')
})

/* Menu hidden */
navClose.addEventListener('click', () =>{
   navMenu.classList.remove('show-menu')
})

/*=============== SEARCH ===============*/
const search = document.getElementById('search'),
      searchBtn = document.getElementById('search-btn'),
      searchClose = document.getElementById('search-close')

/* Search show */
searchBtn.addEventListener('click', () =>{
   search.classList.add('show-search')
})

/* Search hidden */
searchClose.addEventListener('click', () =>{
   search.classList.remove('show-search')
})

/* caorusel */
    const animContainer = document.querySelector('.anim-container');
	const carousels = [...document.querySelectorAll('.carousel')];
	const indicators = [...document.querySelectorAll('.indicators span')];

	let carousel_index = 0;

	setTimeout(() => {
	//animContainer.remove();
	carousels[0].classList.add('active');
	setIntervalForSlider();
	}, 500);

	const setIntervalForSlider = () => {
		setInterval(() => {

			indicators[carousel_index].classList.remove('active');
			carousels[carousel_index].classList.remove('active');
 
			if(carousel_index == carousels.length - 1){
				carousel_index = 0
			} else{
				carousel_index++;
			}
				indicators[carousel_index].classList.add('active');
			carousels[carousel_index].classList.add('active');
		}, 3000);
	}

	document.addEventListener('DOMContentLoaded', () => {
    const audio = document.getElementById('audio');
    const playPauseButton = document.getElementById('play-pause-button');

    playPauseButton.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            playPauseButton.classList.add('playing');
        } else {
            audio.pause();
            playPauseButton.classList.remove('playing');
        }
    });
});

let currentSlide = 0;

function changeSlide(direction) {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    const offset = -currentSlide * 100;
    
    slides.style.transform = `translateX(${offset}%)`;
}

 function toggleContent() {
    const content = document.querySelector('.collapse');
    const button = document.querySelector('.expand-collapse-btn');
    
    if (content.style.display === 'block') {
        content.style.display = 'none';
    } else {
        content.style.display = 'block';
    }
}


</script>
</body>
</html>