<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<script type="text/javascript" src="{{asset('js/jquery-3.5.1.js')}}"></script>
	<title>Login</title>
</head>
<body>
	<header> 
		<div class="row">
		<div class= text2> New!!!! Register here ------->>>></div>
	<!-- <ul class="main-nav1"> -->
		<!-- <table> -->
			<!-- <tr> -->
				<a class="btn btn3" href="/login/github" >Sign-Up With Github</a>
				<a href="/register" ><input type="button" class="btn btn2" name ="register" value="Sign-Up"></a>
			<!-- </tr> -->
		<!-- </table> -->
	
	
		
		<!-- </ul> -->
		</div>	
		<br>
		<br>
		<h1 class="freelancer"> <b> Find the perfect <br> <i>freelance</i>  <br> services for your <br> business</b> </h1>
	</header> 
	<form method="post">
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		
	
		
			<div class="login-box">  
				<h1 class="text1">Login</h1>
			 <div class="textbox">
			
			 <input type="text" placeholder="Username" name ='username'  >
			 
			 </div>
	 
			  <div class="textbox">
			
			 <input type="password" placeholder="Password" name ='password' >
			  
			 </div>
			 
			 <input type="submit" class="btn btn1" name ="submit" value="Log in">
			 <br>
			 <br>

			
		
		 
		 </div>
		 <div style="color: red">{{session('msg')}} </div>
		
		
	</form>
</body>
</html>
