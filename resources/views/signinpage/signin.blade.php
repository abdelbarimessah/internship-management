<!DOCTYPE html>
<html>
<head>
  <title>sign In</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="{{ asset('signin_assets/style.css') }}">

</head>
<body>
	<a href="/home" class="navbar-brand">
		<img src="{{asset('homepage/img/ocp_ogo.png')}}" alt="ocp logo" width="150">
   </a>
  <div class="container">
	<h2>Login</h2>
	<div class="button-container">
	  <button class="button user-login" >Login as User</button>
	  <button class="button admin-login">Login as Admin</button>
	</div>
  </div>
  <script>
    document.querySelector('.user-login').addEventListener('click', function() {
      window.location.href = '/user/signup'; // Replace with the desired user login page URL
    });

    document.querySelector('.admin-login').addEventListener('click', function() {
      window.location.href = '/admin/login'; // Replace with the desired admin login page URL
    });
  </script>
  {{-- <script src="{{ URL::asset('signin_assets/script.js') }}"></script> --}}
</body>
</html>
