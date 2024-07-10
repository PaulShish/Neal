<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: signup.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style_format.css">
    <title>Tickets</title>
</head>
<body>
    <div class="app-container">
        <div class="sideNavBar">
            <div class="increment">
                <h1 class="incre">incre</h1>
                <h1 class="ment">ment</h1>
            </div>
            <div class="nav-links">
                <a href="cus_dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="cus_message.php"><i class="fas fa-envelope"></i> Messages</a>
                <a href="cus_ticket.php"><i class="fas fa-ticket-alt"></i> Tickets</a>
                <a href="cus_account.php" class="active"><i class="fa-solid fa-user"></i> Account</a>
                <a href="#"><i class="fa-solid fa-cog"></i> Settings</a>
                <a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i> Log Out</a>
            </div>
            <div class="profile1">
                <img src="img/profile.jpg" alt="Profile Picture">
                <div class="profile-info">
                    <h2><?php echo $user['fname'] . ' ' . $user['lname']; ?></h2>
                    <p>Client</p>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                Account
            </div>
            <div class="container">
                <div class="content">
                    <div class="profile1"><img src="img/profile.jpg" alt="Profile Picture"><h1><u><?php echo $user['fname'] . ' ' . $user['lname']; ?></u></h1></div>
                        <p>Client ID: </p>
                        <p>First Name: <?php echo $user['fname']; ?></p>
                        <p>Last Name: <?php echo $user['lname']; ?></p>
                        <p>Contact Number: <?php echo $user['phone']; ?></p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>