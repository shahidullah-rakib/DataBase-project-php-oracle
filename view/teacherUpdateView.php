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
        <h1 class="text-center mt-5">Update Teachers Information </h1>
        <div class="col-sm-4 shadow p-3 mt-3 mb-5 bg-body rounded">
          <div class="mb-3">
          
		
		<?php if ($_SESSION['TYPE'] != 'student') : ?>
        <label for="search">Search</label>
        <form method="post">
            <input type="text" name="search-field" placeholder="Search For Data">
            <button type="submit" name="search">Search</button>
        </form>
    <?php endif ?>
    <form method="post" class="teacher-registration" action="view\add.php" enctype="multipart/form-data">
        <label for="name">Name</label> <br>
        <input type="text" name="name" value="<?php if(isset($result['NAME'])) {echo $result['NAME'];}?>"> <br>
        <label for="username">Username</label> <br>
        <input type="text" name="username" value="<?php if(isset($result['USERNAME'])) {echo $result['USERNAME'];}?>" <?php if($_SESSION['TYPE'] !== 'admin') {echo 'disabled';} ?>> <br>
        <label for="email">Email</label> <br>
        <input type="email" name="email" value="<?php if(isset($result['EMAIL'])) {echo $result['EMAIL'];}?>"> <br>
        <label for="blood_group">Blood group</label> <br>
        <input type="text" name="blood_group" id="blood_group" value="<?php if(isset($result['BLOOD_GROUP'])) {echo $result['BLOOD_GROUP'];}?>"> <br>
        <label for="religion">Religion</label> <br>
        <input type="text" name="religion" id="religion" value="<?php if(isset($result['RELIGION'])) {echo $result['RELIGION'];}?>"> <br>
        <label for="salary">Salary</label> <br>
        <input type="number" name="salary" id="salary" value="<?php if(isset($result['SALARY'])) {echo $result['SALARY'];}?>"> <br>
        <label for="dept">Dept</label> <br>
        <input type="text" name="dept" id="dept" value="<?php if(isset($result['DEPT'])) {echo $result['DEPT'];}?>"> <br>
        <button type="submit" name="update" <?php if($_SESSION['TYPE'] == 'student') {echo 'disabled';} ?>>Update</button>
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