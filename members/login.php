<?php
session_start();
include '../connection.php';

$error = ''; 

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $query = "SELECT * FROM members WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['userid'] =$row['MemberId'] ;
            $_SESSION['usernames']=$row['names'] ;
   
            header('Location: ../index.php'); 
            exit();
        } else {
            $error = "No user found with the provided email and password.";
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }

    try {
        $query = "SELECT * FROM admin WHERE AdminEmail = :email AND AdminPassword = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['adminid'] =$row['adminId'] ;
            $_SESSION['adminname']=$row['AdminNames'] ;

            header('Location: ../index.php'); 
            exit();
        } else {
            $error = "No user found with the provided email and password.";
        }
    } catch (PDOException $e) {

        die("Error: " . $e->getMessage());
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            margin: 50px auto;
            max-width: 600px;
        }

        .container {
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form method="post">
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" required placeholder="Enter user email">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required placeholder="Enter Password">
                </div>
                <?php if (!empty($error)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <a href="register.php" class="btn btn-primary">Create Account</a>
                <a href="../index.php" class="btn btn-primary">Go back to Dashboard</a>
            </form>
        </div>
    </div>
    <?php 
    // Check if $_SESSION['user'] is set before accessing its keys
    // if (isset($_SESSION['userid'])) {
    //     echo $_SESSION['userid']['names'];
    // } elseif(isset($_SESSION['adminname'])){       
    //         echo $_SESSION['adminname'];
    // }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include 'footer.php'; ?>

</html>
