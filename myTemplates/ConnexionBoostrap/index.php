<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/main.css">

  </head>
  <body>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"> 
  <div id="login-card" class="card">

    <div class="card-body">
      <h1>Sign in</h1>

      <form class="myForm" action="script_signin.php" method="POST">

        <div class="form-group">
          <label for="email">E-mail</label>
          <input class="form-control" type="text" id="email" name="email" placeholder="E-mail">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" id="password" name="password" placeholder="Password">

        </div>


        <p>Not a user ? <a href="inscription.php">Suscribe !</a></p>

        <div>
          <button id="go" class="btn btn-primary" >
            <span>
              Go
            </span>
          </button>
        </div>
      </form>
    </div>
</div>

</div>


  </body>
</html>
