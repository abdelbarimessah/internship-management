<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('admin_assets/style.css') }}">
</head>
<body>
    <div class="cotn_principal">
        <a href="/home" class="navbar-brand">
            <img src="{{asset('homepage/img/ocp_ogo.png')}}" alt="ocp logo" width="150">
       </a>
       <div class="h2text">
         <h2 style="font-size: 32px; color: #fff; display: inline;">admin</h2>
        </div>

        <div class="cont_centrar">
    
      <div class="cont_login">
    <div class="cont_info_log_sign_up">
          <div class="col_md_login">
    <div class="cont_ba_opcitiy">
            
            <h2>LOGIN</h2>
      <button class="btn_login" onclick="change_to_login()">LOGIN</button>
      </div>
      </div>
    <div class="col_md_sign_up">
    <div class="cont_ba_opcitiy">
      <h2>SIGN UP</h2>
      <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
    </div>
      </div>
           </div>
    
        
        <div class="cont_back_info">
        </div>
    <div class="cont_forms" >
        <div class="cont_img_back_">
            <img src="{{asset('signin_assets/images.jpeg')}}">
           </div>
     <div class="cont_form_login">
    <a href="#" onclick="hidden_login_and_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
       <h2>LOGIN</h2>
       <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
        <input type="password" id="password" name="password" required placeholder="password">
        <button type="submit" class="btn_login" onclick="change_to_login()">Login</button>
        </form>
      </div>
      
       <div class="cont_form_sign_up">
    <a href="#" onclick="hidden_login_and_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
         <h2>SIGN UP</h2>
         <form method="POST" action="{{ route('admin.signup.submit') }}">
            @csrf
    
            <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="first name">
            <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" required placeholder="last name">
            <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="email">
            <input type="password" id="password" name="password" required placeholder="password">
            <input type="text" id="cin" name="cin" value="{{ old('cin') }}" required placeholder="cin">
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" placeholder="phone number">
            <div>
                <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
            </div>
        </form>
      </div>
    
        </div>
        
      </div>
     </div>
    </div>
    <script src="{{ URL::asset('admin_assets/script.js') }}"></script>
</body>
</html>