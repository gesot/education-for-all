<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Log In/Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <?php include('nav/navbar.php');?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
    <script src="validate.js"></script>
  </head>

  <body>
  
 
    <!---->
    <section class="register">
      <div class="container">
        <div class="card">
          <div class="inner-box" id="card">
            <div class="card-front">
              <h3>Log in</h3>
              <form action="user-interaction/login.php" id="login-form" method="POST">
                <input
                  type="email"
                  name='email'
                  class="input-box"
                  placeholder="Email"
                  required
                />
                <input
                  type="password"
                  name='password'
                  class="input-box"
                  placeholder="Password"
                  required
                />
                <input type="checkbox" class="rem-me" /><span>Remember Me</span>
                <button type="submit"  name="submit-login" class="submit-btn">Log in</button>
              </form>
              <button type="button" class="btn" onclick="openRegister()">
                Create a new account
              </button>
              <a href="">Forgot Password</a><br /><br />
              <a href="home.html">Go to Home Page</a>
            </div>
            <div class="card-back">
              <h3>Create an account</h3>
              <form action="Server.php" id="register-form" method="POST">
                <input
                  type="text"
                  name="username"
                  class="input-box"
                  placeholder="Username"                               
                  
                />
             
                <input
                  type="email"
                  name="email"
                  class="input-box"
                  placeholder="Email"
               
                />
                <input
                  type="password"
                  name="password"   
                  id = "register-password"      
                  class="input-box"
                  placeholder="Password"
                 
                />
            
                <button type="submit" name="submit" value='sumbit' class="submit-btn">
                  Create your account
                </button>
              </form>
              <button type="button" class="btn" onclick="openLogin()">
                I have an account
              </button>
              <a href="">Forgot Password</a><br /><br />
              <a href="home.html">Go to Home Page</a>
            </div>
          </div>
        </div>
      </div>
      <script>
        var card = document.getElementById("card");

        function openRegister() {
          card.style.transform = "rotateY(-180deg)";
        }
        function openLogin() {
          card.style.transform = "rotateY(0deg)";
        }
      </script>

    </section>

    <!--START OF FOOTER-->

    <footer>
    <?php include('nav/footer.php');?>
    </footer>
    <!--END OF FOOTER-->

    <!--START OF <TOP> BUTTON-->
    <a href="#"
      ><i class="gotopbtn" href="#"><i class="fa fa-arrow-circle-up"></i></i
    ></a>
    <!--END OF TOP BUTTON-->
  </body>
</html>
