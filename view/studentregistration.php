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
      <h1 align="right" style="background-color:pink"><a href="php\logout.php">Logout</a>  </h1>
        <h1 class="text-center mt-5">Add Student  </h1>
        <div class="col-sm-4 shadow p-3 mt-3 mb-5 bg-body rounded">
          <div class="mb-3">
          
		
		<?php if ($_SESSION['TYPE'] != 'student') : ?>
        <label for="search">Search</label>
        <form method="post">
            <input type="text" name="search-field" placeholder="Search For Data">
            <button type="submit" name="search">Search</button>
        </form>
    <?php endif ?>
    <form method="post" class="teacher-registration" action="view\stuadd.php" enctype="multipart/form-data">
        <label for="Name">ID</label> <br>
        <input type="text" name="id" required><br>
        <label for="Name">Name</label> <br>
        <input type="text" name="name" required><br>
        <label for="Username">Username</label><br>
        <input type="text" name="username" required><br>
        <label for="Email">Email</label><br>
        <input type="email" name="email" required><br>
        <label for="CGPA">cgpa</label><br>
        <input type="text" name="cgpa" required><br>
        <label for="blood_group">Blood group</label><br>
        <input type="text" name="blood_group" required><br>
        <label for="religion">Religion</label><br>
        <input type="text" name="religion" required><br>
        <label for="dept">Department</label><br>
        <input type="text" name="dept" required><br>
        </select>
        <button type="submit">Register</button>
        </form>

        <script src="js\addTeacher.php "> </script>
    <script src="./js/updateStudent.js"></script>
    
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