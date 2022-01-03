<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
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
        <h1 class="text-center mt-5">Welcome Teacher <a href="?p=editme"><?php echo $_SESSION['NAME']?></a>  </h1>
        <div class="col-sm-4 shadow p-3 mt-3 mb-5 bg-body rounded">
          <div class="mb-3">
          <a href="php\logout.php">Logout</a>
    <form method="GET">
    <input type="text" name="query">
    <button type="submit">Search</button>
    </form>
    <ul>
        <li><a href="?p=editme">UPDATE PROFILE</a></li>
        
    
        <li><a href="?p=add-Student">ADD STUDENT</a></li>
        <li><a href="?p=info-student">STUDENT INFORMATION</a></li>

       
    </ul>
          </div>
          <div class="d-grid">
            
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>