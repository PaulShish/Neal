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
                <a href="cus_message.php" class="active"><i class="fas fa-envelope"></i> Messages</a>
                <a href="cus_ticket.php"><i class="fas fa-ticket-alt"></i> Tickets</a>
                <a href="cus_account.php"><i class="fa-solid fa-user"></i> Account</a>
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
                <div class="header_message">
                    Messages
                </div>
                <div class="container_message">
                <div class="content_message">
                    <div class="left-pane">
                        <div class="message-section">
                            <h2>Troubleshooting Login Issues</h2>
                            <div class="messages">
                                <div class="message-bubble left">
                                    <p class="sender">Jolan Olmo</p>
                                    <p class="text">Thank you for reaching out. To better assist you, could you please provide more details about the error message you’re receiving? This will help us diagnose and resolve the issue promptly.</p>
                                </div>
                                <div class="message-bubble right">
                                    <p class="sender"><?php echo $user['fname'] . ' ' . $user['lname']; ?></p>
                                    <p class="text">I'm encountering an error when trying to log in. The system is not allowing me to access my account. Could you please assist with resolving this issue?</p>
                                </div>
                            </div>
                            <div class="input-section">
                                <div class="input-container">
                                    <input type="text" placeholder="Type a message...">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px">
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M2.01 21L23 12 2.01 3v7l15 2-15 2z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-pane">
                        <div class="inbox">
                            <h3>Inbox: Troubleshooting Login Issues</h3>
                            <p>You received a message.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>