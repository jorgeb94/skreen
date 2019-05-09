<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Skreen | Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/nav.css">
  </head>
  <body>
  <div class="nav" id="nav">
    <div class="logo">
      <span>S<i class="fas fa-video"></i>REEN</span>
    </div>
    <div class="searchNav">
      <input id="inputSearch" type="text" name="" value="">
      <span id="buttonSearch" name="button"><i class="fas fa-search"></i></span>
    </div>
  </div>

  <div class="container">
    <div class="image-container">

    </div>

    <div class="forms-container">
      <h2 class="ui header">Welcome Back!</h2>
      <div class="error" id="error">

      </div>
    <form class="" action="skreen.php" method="post" name="loginForm" onsubmit="return validateForm()">
    <div class="ui equal width form">
      <div class="fields">
        <div class="field">
          <label>Username</label>
          <input type="text" placeholder="Username" name="username">
        </div>
      </div>
      <div class="fields">
        <div class="field">
          <label>Password</label>
          <input type="password" placeholder="Password" name="password">
        </div>
      </div>
    </div>
    <button class="ui button">
      Log in
    </button>
  </form>
  <div class="signup-label">
    <div class="ui label">
      <div class="detail">New to Skreen? <a href="newAcc.php">Sign Up</a></div>
    </div>
  </div>
  </div>
  </div>

  <div class="playbutton">
    <div class="play">
      <i class="play icon"></i>
    </div>
  </div>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  </body>
</html>
