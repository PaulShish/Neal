<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="st_SBT.css">
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
                <a href="cus_ticket.php" class="active"><i class="fas fa-ticket-alt"></i> Tickets</a>
                <a href="cus_account.php"><i class="fa-solid fa-user"></i> Account</a>
                <a href="#"><i class="fa-solid fa-cog"></i> Settings</a>
                <a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i> Log Out</a>
            </div>
            <div class="profile1">
                <img src="img/profile.jpg" alt="Profile Picture">
                <div class="profile-info">
                    <h2>Moon Ito</h2>
                    <p>Client</p>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="container">
                <h1>Submit a Ticket</h1>
                <p class="instructions">Fill out all the information below and click submit.</p>
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="input-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="details">Project Details</label>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea id="details" name="details" rows="6" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>