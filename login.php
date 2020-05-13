<?php
include 'header.php';
?>    

<!------ Include the above in your HEAD tag ---------->


<div id="frm">
  <form action="proces.php" method="POST">
    <p>
      <label>Nom usuari:<label>
      <input type="text" id="Nombre" name="Nombre"/>
    </p>
    <p>
      <label>Contrasenya:<label>
      <input type="password" id="Contraseña" name="Contraseña"/>
    </p>
    <p>
      <input type="submit" id="btn" name="Login"/>
    </p>
  </form>
</div>

<!--
<div class="wrapper fadeInDown">
  <div id="formContent">


 <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
      
      <br>
      <a class="btn btn-primary" href="PaginaPrincipal" role="button">ENTRAR</a>

      login con gmail
      <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
      <script>
        function onSignIn(googleUser) {
          // Useful data for your client-side scripts:
          var profile = googleUser.getBasicProfile();
          console.log("ID: " + profile.getId()); // Don't send this directly to your server!
          console.log('Full Name: ' + profile.getName());
          console.log('Given Name: ' + profile.getGivenName());
          console.log('Family Name: ' + profile.getFamilyName());
          console.log("Image URL: " + profile.getImageUrl());
          console.log("Email: " + profile.getEmail());

          // The ID token you need to pass to your backend:
          var id_token = googleUser.getAuthResponse().id_token;
          console.log("ID Token: " + id_token);
        }
      </script>

    </form>

    Remind Passowrd
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>-->