<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style_SBT.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>Convey Your Ideas to Us</h1>
            <p>Contact us for questions, technical assistance, or collaboration opportunities via the contact information provided.</p>
            <p><i class="fas fa-phone-alt"></i>+63-909-210-8258</p>
            <p><i class="fas fa-envelope"></i>edane@incrementtechnologies.com</a></p>
            <p><i class="fas fa-map-marker-alt"></i>The Company Cebu, 8th Floor, Mabuhay Tower Cebu IT Park, Jose Maria Del Mar St., Lahug, Cebu City, Cebu, Philippines 6000</p>
        </div>
        <div class="right">
            <h2>Submit a Ticket</h2>
            <form action="submit_ticket.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>