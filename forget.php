<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		
		a {
			color:yellow;
			text-decoration: blink;
			font-family:'Open-sans', sans-serif;
			margin-left: 50px;
		}
		.forget {
			background: #000000;
			padding: 100px;
			width:240px;
			height:340px;
			margin-left: 180px;
			margin: 0 auto;
			margin-top: 120px;
		}
		h2{
			margin-top: 25px;
			margin-left: 10px;
		}
		input[type=text]{
			width:240px;
			background: transparent;
			border: none;
			border-bottom: 1px solid #fff;
			font-family: 'play', sans-serif
			font-size: 16px;
			font-weight: 200px;
			padding: 10px 0;
			transition: border 0.5s;
			text-align: center;
			color: white;
		}
		input[type=button]{
			border: none;
			background: white;
			color: black;
			font-size: 16px;
			line-height: 25px;
			padding: 10px 0 ;
			border-radius: 10px;
			cursor: pointer;
			width: 180px;
			margin-left: 30px;
		}
		input[type=button]:hover{
			background:yellow;
			color: white;
		}
		::placeholder {
			color: aliceblue;
			opacity: 0.8;
		}
		#fp{
		visibility: hidden;
		min-width: 250px;
		background-color: yellow;
		color:#000;
		text-align: center;
		border-radius: 2px;
		padding: 10px;
		position: fixed;
		z-index: 1;
		right: 30%;
		top: 30px;
		font-size: 17px;
		margin-right: 30px;

	}
	#fp.show{
		visibility: visible;
		-webkit-animation: fade in 0.5s,fade out 0.5s 2.5s;
		animation: fade in 0.5s, fadeout 0.5s 2.5s;
	}
	@-webkit-keyframes fade in{
		from{top: 0; opacity: 0;}
		to{  top: 30px; opacity: 1; }
	}
	@keyframes fedein{
		from{top: 0; opacity: 0;}
		to{ top: 30px; opacity: 1; }
	}
	@-webkit-keyframes fadeout{
		from{top: 30px; opacity: 1;}
		to{top: 0; opacity: 0;}
	}
	</style>
</head>
<body>
  <div class="forget">
	<h2 align="center" style=" color:#fff;">Forgot Password?</h2>
	  <h5 style="font-size:14px; color:yellow;">Enter the email you used on your account. We will send the link on your email to reset your password.</h5>
	   <input type="text" name="username" placeholder="enter email"><br/> <br/>
	    <input type="button" value="send" onclick="fFunction()"/> <br/><br/>
	  <a href="index.php">Go to home page</a><br/> <br/>
	<div id="fp">Link send on your email successfully!</div>
   <script src="js/main.js"></script>
  </div>
 </body>
</html>