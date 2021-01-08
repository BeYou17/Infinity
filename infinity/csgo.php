<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFINITY | PC-Games</title>
    <link rel="shortcut icon" href="./Images/INFINITY-LoGo.png">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./reg.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <a href="./content-page.php">
                    <img src="./Images/INFINITY-Logo-White.png" alt="INFINITY-LoGo">
                    <p>INFINITY</p>
                </a>
            </div>
            <div class="nav-links close">
                <ul>
                    <li><a href="./feedback-2.php">Contact</a></li>
                    <li><a href="./profile.php">My Profile</a></li>
                    <li><a href="./login.php">Logout</a></li>
                </ul>
            </div>
            <div class="nav-icon">
                <ion-icon name="menu"></ion-icon>
            </div>
        </nav>
    </header>
    <section class="mobile">
        <div class="table">
            <h1>Registration Form</h1>
           <form action="csgo-auth.php" method="POST">
                <div class="box">
                    <label for="">CS GO</label>
                </div>
              <div class="box">
                    <label for="one">Team Leader Name:</label>
                    <input required type="text" id="one"name='lname'>
                </div>
                <div class="box">
                    <label for="two">Team Leader Email:</label>
                    <input required type="text" id="two"name='lmail'>
                </div>
                <div class="box">
                    <label for="three">Team Leader Id:</label>
                    <input required type="text" id="three"name='lingameid'>
                </div>
                <div class="box">
                    <label for="four">Team Name:</label>
                    <input required type="text" id="four"name='tname'>
                </div>
                <button class="btn">Register</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="social-links">
            <a href="" class="twitter link">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="" class="facebook link">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="" class="instagram link">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
        </div>
        <div class="copyrights">&copy All rights reserved by INFINITY 2020.</div>
        <div class="contacts">
            <p>Email: infinity@gmail.com</p>
            <p>Phone: +91 000000000</p>
        </div>
    </footer>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="./cj.js"></script>
</body>

</html>