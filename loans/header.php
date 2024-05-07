<?php
session_start(); 
include '../connection.php'; 
$user = null;

if (isset($_SESSION['userid'])) {
    $m_id = $_SESSION['userid']; 
    $stmt = $conn->prepare("SELECT names FROM members WHERE MemberId = :user_id");
    $stmt->bindParam(':user_id',$m_id, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_SESSION['adminid'])) {
    $admin_id=$_SESSION['adminname'];

    $stmt = $conn->prepare("SELECT AdminNames FROM admin WHERE adminId = :admin_id");
    $stmt->bindParam(':admin_id',$admin_id, PDO::PARAM_INT);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
      
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        header .avatar {
            margin-right: auto;
        }
        header .avatar img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        header .user-info {
            margin-right: 10px;
            color: white;
            font-size: 14px;
        }
        header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        header ul li {
            margin-right: 40px;
        }
        header ul li a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

<header>
    <div class="avatar">
        <img src="profile.jpg" alt="Avatar">
        <div class="user-info">

        <?php  
            if (isset($_SESSION['usernames'])) {
                echo $_SESSION['usernames'];

            }elseif(isset($_SESSION['adminname'])){       
                echo $_SESSION['adminname'];
            }
        ?>
        
        </div>
    </div>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../contact_us.php">Contact Us</a></li>
            <li><a href="../about_us.php">About Us</a></li>
            <li><a href="../services.php">Services</a></li>
            <?php if (isset($_SESSION['userid']) || isset($_SESSION['adminid'])) : ?>
                <li><a href="./members/logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<!-- Your website content goes here -->

</body>
</html>
