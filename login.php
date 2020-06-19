
  <link rel="stylesheet"href="<?php echo ASSET; ?>css/login.css">
  
  <div class="con" align="center">
    <div class="tamp">
    <h1>Login</h1>
    <form action="login_proses.php" method="POST">
      <table>
        <tr><td><input type="text" name="user_email" placeholder="Masukkan E-mail Anda"></td></tr>
        
        <tr><td><input type="password" name="user_password" placeholder="Masukkan Password"></td></tr>
       </table>

       <div class="tombol">
         <input type="submit" name="submit" value="LOGIN">
       </div>
       <p><span></span></p>
      
    </form>
    </div>
  </div>

     