<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EDIT ME</h1>
    <form method="post" class="update-admin" enctype="multipart/form-data">
    <label for="name">NAME</label>
    <input type="text" name="name" value="<?php echo $_SESSION['NAME']?>" placeholder="<?php echo $_SESSION['NAME']?>">
    <label for="Email">Email</label>
    <input type="text" name="email" value="<?php echo $_SESSION['EMAIL']?>" placeholder="<?php echo $_SESSION['EMAIL']?>">
    <input type="submit" value="Update" name="update">
    </form>
    <script src="./js/updateProfileAdmin.js"></script>
</body>
</html>