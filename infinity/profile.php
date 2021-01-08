<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFINITY | Profile</title>
    <link rel="shortcut icon" href="./Images/INFINITY-LoGo.png">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./profile.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <main>
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
                        <li><a class="active" href="./profile.php">My Profile</a></li>
                        <li><a href="./login.php">Logout</a></li>
                    </ul>
                </div>
                <div class="nav-icon">
                    <ion-icon name="menu"></ion-icon>
                </div>
            </nav>
        </header>
        <section>
            <div class="form" >
                <img src="./Images/DP.png" alt="DP">
                <form action="profile-auth.php" method="POST">
                    <div class="box">
                        <label for="name">Name:</label>
                        <input required type="text" name='name' id="name">
                    </div>
                    <div class="box">
                        <label for="email">Email:</label>
                        <input required type="email" name="email" id="email">
                    </div>
                    <div class="box">
                        <label for="mobile">Mobile:</label>
                        <input required type="text" name="mobile" id="mobile">
                    </div>
                    <div class="box">
                        <label for="dob">DOB</label>
                        <input required type="text" name="dob" id="dob">
                    </div>
                    <button type="submit" style="width: 42%;align-self: center;margin-top:15px;">Save</button>
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
    </main>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="./cj.js"></script>
</body>
</html>