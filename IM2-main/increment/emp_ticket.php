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
                <a href="emp_dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="emp_message.php"><i class="fas fa-envelope"></i> Messages</a>
                <a href="emp_ticket.php" class="active"><i class="fas fa-ticket-alt"></i> Tickets</a>
                <a href="emp_account.php"><i class="fa-solid fa-user"></i> Account</a>
                <a href="#"><i class="fa-solid fa-cog"></i> Settings</a>
                <a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i> Log Out</a>
            </div>
            <div class="profile1">
                <img src="img/employee.jpg" alt="Profile Picture">
                <div class="profile-info">
                    <h2><?php echo $user['fname'] . ' ' . $user['lname']; ?></h2>
                    <p>Employee</p>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                Tickets
            </div>
            <div class="container">
                <div class="content">
                    <h2>Ticket List</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Date Created</th>
                                <th>Subject</th>
                                <th>Client ID</th>
                                <th>Service Type</th>
                                <th>Assigned To</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Troubleshooting Login Issues</td>
                                <td>000123</td>
                                <td>Software Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Web Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Software Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Web Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Web Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Software Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Software Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Web Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Software Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Web Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>IT-001</td>
                                <td>2024-07-09</td>
                                <td>Khem.24</td>
                                <td>000123</td>
                                <td>Web Development</td>
                                <td>
                                    <select>
                                        <option>Select Employee</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Closed</option>
                                        <option>In Progress</option>
                                        <option>On Hold</option>
                                        <option>Cancelled</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>