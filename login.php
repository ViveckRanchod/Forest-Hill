

<div id="loginForm" style="display: none;">
  <div class="forms">
    <h2>Foreset Hill Login</h2>
    <form action="authenticate.php" method="POST">
      <h3>Email address:</h3>
      <input type="text" name="email" required>

      <h3>Password:</h3>
      <input type="password" name="userPassword" required>
      <br><br>

      <button type="submit">SIGN IN</button>
      <p class="signInPopUpPara">Dont have an account? Sign up below!</p>
    <button type="submit" onclick="window.location.href='register.php'">SIGN UP</button>
    <button type="button" onclick="closeForm()">CLOSE</button>

    </form>
  </div>
</div>

