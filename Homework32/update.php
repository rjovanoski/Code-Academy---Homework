<?php

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    
    $host = 'localhost';
    $user = 'predator';
    $pass = 'Marko';
    $db = 'crud_app';
 
    $link = mysqli_connect($host, $user, $pass, $db);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];    

    $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname' WHERE id=".$_GET['id'];
    
    mysqli_query($link, $sql);

    mysqli_close($link);

    header("Location: index.php");

};


if (isset($_GET['id'])) {
    
    $host = 'localhost';
    $user = 'predator';
    $pass = 'Marko';
    $db = 'crud_app';
 
    $link = mysqli_connect($host, $user, $pass, $db);

    $sql = "SELECT * FROM users WHERE id=".$_GET['id'];
    
    $query = mysqli_query($link, $sql);

    $result = mysqli_fetch_row($query);

    mysqli_close($link);

    
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Update Users</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="create.php">Create</a>
                <a class="dropdown-item" href="#">Update</a>
                <a class="dropdown-item" href="index.php">View</a>
                </div>
            </li>
            </ul>
        </div>
        </nav>    
    <div>
        <h1>Update user id : <?php echo $_GET['id']; ?></h1>
        <form class="needs-validation" action="" method="POST">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01" value="<?php echo $result[1]; ?>" name="firstname" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" value="<?php echo $result[2]; ?>" name="lastname" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Update user</button>
        </form>
    </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>