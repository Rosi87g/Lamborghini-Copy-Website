<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lamborghini Models</title>
  <link rel="website icon" type="png" href="logo.png">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    	animation: slide-top 3s 1s forwards 1;
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
		animation: slide-top 2s 2.5s forwards 1;
	}

	.shutter.bottom{
		bottom: 0;
		animation: slide-bottom  2s 2.5s forwards 1;
	}

	.shutter.top .logo{
		position: absolute;
		height: 250px;
		bottom: -125px;
		left: 50%;
		transform: translateX(-50%) rotateY(90deg);
		z-index: 2;
		animation: logo_anim .5s 1s forwards 1;
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
		animation: slide-in-out 1s 1.5s forwards 1;
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
		background-image: url(lLamborghini-Aventador-SVJ-6_1.jpg);
		background-size: cover;
		background-position: center center;
		padding: 3vw;
		padding-top: 34vh;
	}
	.carousel:nth-child(2){
		background: url(huracan/lamborghini_huracan_evo_spyder_2019_5k_7-1920x1080.jpg);
		background-size: cover;
		z-index: -1;
	}
	.carousel:nth-child(3){
		background: url(thumb-1920-1308575.jpeg);
		background-size: cover;
		z-index: -1;
	}
	.carousel:nth-child(4){
		background: url(snap_hero_01.png);
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

.mySlides {
    display: block;
}
.sliders {
    vertical-align: middle;
}
.prev, .next {
 
}

.next {
  right: 0;
}

.prev:hover, .next:hover {
  background: #ede6d6;
  color: #222;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
.dot{
  height: 10px;
  width: 10px;
  }
@media only screen and (max-width: 500px) {
  .prev, .next,.text {font-size: 14px}
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
	.revulto {
		overflow: hidden;
        width: 100%;
        clip-path: polygon(35% 0, 100% 0%, 100% 100%, 0 100%);
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
		font-size: 2.7rem;
		font-weight: 700;
		margin-top: 1px;
		font-family: Roboto, Helvetica Neue, Arial;
		text-align: center;
		text-transform: uppercase;
		color: #666;
		line-height: 1.2;
	}
	.rp{
        font-size: 0.9rem;
    font-weight: 300;
    margin-bottom: 30%;
    font-family: Roboto, Helvetica Neue, Arial;
    line-height: 1.8rem;
		color: #666;
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
		.revulto{
			clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
			width: 100%;
			margin-top: -37%;
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
		.revulto{
			clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
			width: 100%;
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
		.revulto{
			clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
			width: 100%;
			margin: 0 auto;
		}
	}

	/* align */

	.inp {
		font-size: 1rem;
    font-weight: 100;
	margin-top: 20%;
    line-height: 1.4rem;
		color: #666;
		display: flex;
		justify-content: center;
	}
	.inp1 {
		font-size: 1rem;
    font-weight: 100;
	margin-top: 7%;
	width: 100%;
    line-height: 1.7rem;
		color: #666;
	}
	.inp2 {
		font-size: 1rem;
    font-weight: 100;
	margin-top: 7%;
	width: 100%;
    line-height: 1.7rem;
		color: #666;
	}
	.inp3 {
		font-size: 1rem;
    font-weight: 100;
	margin-top: 3%;
	width: 100%;
	margin-inline-start: 0px;
	margin-inline-end: 0px;
	margin-block-start: 1em;
	margin-block-end: 1em;
    line-height: 1.7rem;
		color: #666;
	}
	.inp4 {
		font-size: 1rem;
    font-weight: 100;
	margin-top: 3%;
	width: 100%;
	text-align: left;
	margin-inline-start: 35%;
	margin-inline-end: 35%;
	margin-block-start: 1em;
	margin-block-end: 1em;
    line-height: 1.7rem;
		color: #666;
	}
	.exp {
		letter-spacing: 1px;
		font-size: 2.9em;	
		font-family: Roboto, Helvetica Neue, Arial;
		text-align: center;
		margin-bottom: 30%;
		margin: 0 auto;
		display: flex;
		align-items: flex-start;
	}
	.exp2 {
		font-size: 2em;	
		font-family: Roboto, Helvetica Neue, Arial;
		margin: 0 auto;
		margin-top: 5%;
		display: flex;
		margin-inline-start: 0px;
	margin-inline-end: 0px;
	margin-block-start: 1em;
	margin-block-end: 1em;
		align-items: flex-start;
	}
	.exp3 {
		font-size: 2em;	
		font-family: Roboto, Helvetica Neue, Arial;
		margin: 0 auto;
		margin-top: 5%;
		margin-inline-start: 35%;
	margin-inline-end: 35%;
	margin-block-start: 1em;
	margin-block-end: 1em;
		display: flex;
		align-items: flex-start;
	}
	.skewed {
		width: 75em;
		color: #000;
		display: flex;
		margin: 1em;
		
	}
	.text {
		padding: 0.3em;
		padding-left: 30px;
		width: 60%;
		font-family: Roboto, Helvetica Neue, Arial;
		
	}
	a {
		color: #000;
		text-decoration: none;
	}
	.image900 {
		width: 100%;
		height: 30em;
		display: grid;
		margin-right: -2%;
		margin-top: -10%;
		margin-left: initial;
		align-items: center;
		position: relative;
		clip-path: polygon(30% 0, 100% 0%, 100% 100%, 0% 100%);
		overflow: hidden;
	}
	.image9001 {
		margin-top: -5%;
		width: 100%;
		height: 20em;
		display: grid;
		right: 7%;
		align-items: center;
		position: relative;
		background-size: contain;
		clip-path: polygon(25% 0, 100% 0%, 75% 100%, 0% 100%);
		flex-direction: column;
		overflow: hidden;
	}

	.image9002 {
		width: 69%;
		height: 30%;
		display: grid;
		left: 34.1%;
		align-items: center;
		position: relative;
		clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
		flex-direction: column;
		background-size: contain;
		overflow: hidden;
	}
	.image9003 {
		width: 55%;
		height: 30%;
		display: grid;
		right: initial;
		left: -11%;
		margin-top: -20%;
		align-items: center;
		position: relative;
		clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);	
		flex-direction: column;
		overflow: hidden;
	}
	.image9006 {
		width: 69%;
		height: 30%;
		display: grid;
		left: 34.1%;
		align-items: center;
		position: relative;
		clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%);
		flex-direction: column;
		background-size: contain;
		overflow: hidden;
	}
	.image9008 {
		width: 55%;
		height: 30%;
		display: grid;
		left: 48%;
		align-items: center;
		position: relative;
		clip-path: polygon(25% 0%, 100% 0%, 92% 100%, 0% 100%);
		flex-direction: column;
		background-size: contain;
		overflow: hidden;
	}
	.image9007 {
		width: 55%;
		height: 30%;
		display: grid;
		right: initial;
		left: -11%;
		margin-top: -20%;
		align-items: center;
		position: relative;
		clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);	
		flex-direction: column;
		overflow: hidden;
	}
	.image9009 {
		width: 77%;
		height: 30%;
		display: grid;
		right: initial;
		left: -21%;
		margin-top: -25%;
		align-items: center;
		position: relative;
		clip-path: polygon(0 0, 100% 0%, 82% 100%, 0% 100%);	
		flex-direction: column;
		overflow: hidden;
	}
    .image9004 {
		width: 35%;
		height: 30%;
		display: grid;
		left: 51.2em;
        margin-top: -2%;
		align-items: center;
		position: relative;
      clip-path: polygon(49% 0, 100% 0%, 100% 100%, 6% 100%);
		flex-direction: column;
		overflow: hidden;
	}
	.image9005 {
		width: 40.5%;
		height: 30%;
		display: grid;
		right: 1em;
		margin-top: -14%;
        margin-right: 0 auto;
		align-items: center;
		position: relative;
		clip-path: polygon(0 0, 100% 0, 67% 100%, 0% 100%);
		flex-direction: column;
		overflow: hidden;
	}

	@media screen and (max-width: 990px){
		.image900 {
			width: 100%;
			height: 100%;
			margin: 0 auto;
			clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
		}
		.int{
			width: 100%;
			height: 100%;
			margin: 0 auto;
			clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
		}
		.image9006,  .image9008 {
			width: 100%;
			height: 100%;
			margin: 0 auto;
			margin-left: -44%;
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
		.image9002, .image9003, .image9004, .image9005, .image9007, .image9009{
			display: none !important;
		}
		.hur{
			clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
			width: 100%;
			margin-top: 37%;
		}
		.exp3{
			margin: 0 auto;
			padding: 0.3em;
		}
		.inp4{
			margin: 0 auto;
			padding: 0.3em;
		}
	}

	@media screen and (max-width: 768px){
		.skewed {
			display: block;
			width: 37em;
		}
		.image900, .image9001 {
			width: 100%;
			height: 100%;
			margin: 0 auto;
			clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
		}
		.image9008 {
			width: 100%;
			height: 100%;
			margin-left: -44%;
			clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
		}
		
		.image9006, {
			width: 100%;
			height: 100%;
			margin-left: -30%;
			clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
		}
		.text {
			width: 100%;
			padding: 1em;
			font-size: 16px;
			align-items: flex-start;
			margin-top: 2px;
		}
		.rev{
			margin: 0 auto;
		}
		.urus{
			margin: 0 auto;
		}
		.hur{
			clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
			width: 120%;
			margin: 0 auto;
			margin-top: -37%;
		}
		.exp {
			padding: 0.1em;
		}
		.exp2{
			padding: 0.3em;
			margin-top: -15%;
			margin: 0 auto;
		}
		.exp3{
			margin: 0 auto;
			padding: 0.3em;
		}
		.inp4{
			margin: 0 auto;
			padding: 0.3em;
		}
		.image9002, .image9003, .image9004, .image9005, .image9007, .image9009{
			display: none !important;
		}
	}

    /* footer */

    footer {
    padding: 20px;
    text-align: center;
    background-color: #000;
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
.rev {
    width: 50%;
    margin-top: 12%;
	overflow: hidden;
	display: flex;
}
.hur {
    width: 80%;
	overflow: hidden;
	display: flex;
    margin-top: 10%;
}
.urus {
    width: 50%;
    margin: 
	overflow: hidden;
	display: flex;
    margin-top: 10%;
}

</style>
<body>
	  <div class="anim-container">
		<span class="shutter top">
			<img src="logo.png" class="logo" alt="">
		</span>
		<span class="shutter bottom"></span>
	</div> 

	<!--- navbar --->

	<nav class="nav container">
              <a class="nav__logo">
              	<img src="models/collage.png" class="brand"/>
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
			<h1 class="title">Aventador SVJ Roadster </h1> 
			<h2 class="ti"> Real Emotions <br>Shape the Future</h2>
			<a href="Lamborghini SVJ Aventador Roadstar.php?"><button class="btn">Explore</button></a>
     </div>
     <div class="carousel">
			<h1 class="title">HURACÁN EVO </h1> 
			<h2 class="ti"> EveryDay Amplified</h2>
            <a href="Lamborghini Huracan Evo.php?"><button class="btn">Explore</button></a>
		</div>
		<div class="carousel">
			<h1 class="title">REVUELTO </h1> 
			<h2 class="ti"> From Now ON</h2>
			<a href="Lamborghini Revuelto.php?"><button class="btn">Explore</button></a>
		</div>
        <div class="carousel">
			<h1 class="title">URUS SE </h1> 
			<h2 class="ti">DARE TO LIVE MORE</h2>
			<a href="Lamborghini Urus Se.php?"><button class="btn">Explore</button></a>
		</div>

	<div class="indicators">
		<span class="active" 
		></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>

<div class="skewed">
		<div data-aos="fade-right" data-aos-easing="linear" data-aos-delay="100" class="image9004">
			<div>
				<img src="models/ats.png" alt="img" />
			</div>
		</div>
	</div>

	<section class="rowwrapper">
<div class="row">
		<div class="contentwrapper">
			<div class="content">
				<div class="textwrapper">
			<h2><img data-aos="fade-left" data-aos-easing="linear" data-aos-delay="100" src="models/revuelto.png" class="rev"></h2>	
			<p data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100" class="rp">The Revuelto is the beginning of a new era for Lamborghini, who has harnessed the power of hybridization technology to create the first HPEV (High Performance Electrified Vehicle). Responding to the need for sustainability and powerful performance, the Lamborghini Revuelto rewrites all paradigms and represents a technical masterpiece beyond anyone’s imagination. The iconic V12 engine finds a new life in this futuristic automotive masterwork that delivers unparalleled performance and driving emotions.</p>
		    </div>
		</div>
	</div>
    <div data-aos="fade-right" data-aos-easing="linear" data-aos-delay="100" class="imgwrapper">
			<img src="models/j0x9tn89.png" class="revulto">
		</div>
</div>
</section>

    <!-- skewed --->
	<div class="skewed skewed-left">
		<div data-aos="fade-left" data-aos-easing="linear" data-aos-delay="100" class="image9001">
			<div>
				<img src="models/gate_models_s_03.png" class="int"/>
			</div>
		</div>
		<div class="text">
			<h1><img data-aos="fade-left" data-aos-easing="linear" data-aos-delay="100" src="models/Huracán_logo.png" class="hur"></h1>
			<p data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100" class="inp1">From our past, we've learned perfection. This is how the first model of the Lamborghini Huracán was born. More performance, more control, more innovation. The Huracán is equipped with a powerful V10 engine and the latest technologies to perform at its absolute best. Engineered to guarantee the best performance and control under any driving condition, it's easy to take to the limit, not to mention extremely fun, thanks to technology like the Lamborghini Doppia Frizione (LDF) dual clutch gearbox and the electronically-controlled four-wheel drive. Enjoy the best driving experience, ever. Discover all the Lamborghini Huracán models.</p>
		</div>
	</div>

	<div class="skewed">
		<div data-aos="fade-left" data-aos-easing="linear" data-aos-delay="100" class="image9005">
			<div>
				<img src="models/aa.png" class="huracan" />
			</div>
		</div>
	</div>

    <div class="skewed">
		<div class="text">
			<h1><img data-aos="fade-left" data-aos-easing="linear" data-aos-delay="100" src="models/Image 34.jpg" class="urus"></h1>
			<p data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100" class="inp2">Lamborghini Urus is the world’s first Super Sport Utility Vehicle, where exclusivity, sportiness, and performance meet comfort and versatility. It offers best-in-class driving dynamics and unmistakable elegance in design. Urus embodies the characteristics of multiple souls: sporty, elegant, and off-road. The range is geared toward the future, ushering in a new era with the first PHEV (Plug-in Hybrid Electric Vehicle) version of the luxury Super SUV. With its unparalleled performance, a fun-to-drive experience, and a pioneering spirit, Lamborghini Urus is anything but typical.
</p>	
		</div>
		<div data-aos="fade-right" data-aos-easing="linear" data-aos-delay="100" class="image900">
			<div>
				<img src="models/dlcvahqj.png" alt="img" />
			</div>
		</div>
	</div>

	<div data-aos="fade-right" data-aos-easing="linear" data-aos-delay="100" class="skewed">
		<div class="text">
			<h1 class="exp2">LIMITED SERIES</h1>
			<p class="inp3">The Limited Series Lamborghini are the most exclusive, limited editions to meet a small and select number of clients. Truly representing the state of the art in the domain of super cars, the Limited Series models express the highest Lamborghini spirit in every respect. Indeed, they are equipped with the most advanced features available in the fields of design and technology.</p>	
		</div>
</div>
</div>

	 <div data-aos="fade-down" data-aos-easing="linear" data-aos-delay="100" class="skewed">
		<div class="image9006">
			<div>
				<img src="models/countach.png" alt="" />
			</div>
		</div>
	</div>

	<div class="skewed skewed-left">
		<div data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100" class="image9007">
			<div>
				<img src="models/6v1p4ris.png" alt="" />
			</div>
		</div>
	</div>

	<div class="skewed">
		<div data-aos="fade-down" data-aos-easing="linear" data-aos-delay="100" class="text">
			<h1 class="exp3">CONCEPT</h1>
			<p class="inp4">The Limited Series Lamborghini are the most exclusive, limited editions to meet a small and select number of clients. Truly representing the state of the art in the domain of super cars, the Limited Series models express the highest Lamborghini spirit in every respect. Indeed, they are equipped with the most advanced features available in the fields of design and technology.</p>	
		</div>
</div>
</div>

<div class="skewed">
		<div data-aos="fade-down" data-aos-easing="linear" data-aos-delay="100" class="image9008">
			<div>
				<img src="models/326.png" alt="" />
			</div>
		</div>
	</div>

	<div class="skewed skewed-left">
		<div data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100" class="image9009">
			<div>
				<img src="models/asterion.jpg" alt="" />
			</div>
		</div>
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

///* Menu show */
//navToggle.addEventListener('click', () =>{
  // navMenu.classList.add('show-menu')
//})

/* Menu hidden */
//navClose.addEventListener('click', () =>{
  // navMenu.classList.remove('show-menu')
// })

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
	animContainer.remove();
	carousels[0].classList.add('active');
	setIntervalForSlider();
	}, 3500);

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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>