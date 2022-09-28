@extends('layouts/'.$template)

@section('main_content')
<div id="main"><div class="container">  
  
   
    <div class="bl-tb container-tb">
    <div class="bl-cell al-top bl-center">
       
      
      
    <h1></h1>  
      
    <div class="text-center"><form role="form" method="POST" action="" name="login_page" class="form-container form-login bl-inl al-top form-hover">
         
    <div class="text-center"><h1>Вход в личный кабинет</h1></div>
      
    <form action="/client/login-post" method="POST">
        @csrf
        <div class="field-form text-left">
        <input placeholder="E-mail" name="email" type="email" class="email form-control br3 b-f"><br>
        <input placeholder="Пароль" name="password" type="password" class="pass-log show-pas1 form-control br3 b-f" id="user-pass">
        <div class="text-right"><a class="a-pass s13" href="/users/password_recovery/">Напомнить пароль</a></div>
        </div>
      
        <div class="btn-form text-center">
        <button type="submit" class="btn btn-primary s16">Войти</button>
        </div>
    </form>
        
    <div class="text-center"><a class="a-reg" href="/lk-logup">Регистрация</a></div>
    <input type="hidden" name="_csrf" value="cd8b9c2087a776d685d265c0121eecd41664318854"></form></div>
    
    
    
    
    
    
    
    
    </div>
                    
    
    </div>
    </div></div>
@endsection