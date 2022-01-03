<!-- <!DOCTYPE html>
<html>
<body style="background-color:#E5E4E2">
    <div class="header">
        <h1 style="background-color:white">Smart University System </h1>
    </div>
    <form method="post" autocomplete="off">
        <input type="text" name="username" id="username" placeholder="Email or Id">
        <input type="password" name="pwd" id="password" placeholder="Password">
        <input type="submit" id="submit" name=submit value="Log In">
    </form>
    <br><br><br><br><br><br>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <h1 align="center" style="background-color:pink"><b>Smart University</b>  </h1>
        <h1 class="text-center mt-5">Login</h1>
        <div class="col-sm-4 shadow p-3 mt-3 mb-5 bg-body rounded">
          <div class="mb-3">
          <form method="post" autocomplete="off">
            <input
              type="text"
              name="username"
              class="form-control"
              id="username"
              placeholder="Enter email"
            />
          </div>
          <div class="mb-3">
            <input
              type="password"
              name="pwd"
              class="form-control"
              id="username"
              placeholder="Enter password"
            />
          </div>
          <div class="d-grid">
            <!-- <button class="btn btn-primary">Login</button> -->
            <input type="submit" class="btn btn-primary" id="submit" name=submit value="Log In">
          </div>
          </form>
          <p>Recover Password<a href="./signup.html">Forger Password</a></p>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
