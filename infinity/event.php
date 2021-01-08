<?php 
   Session_start();
   include('database-config.php');

   $query = " select * from event where event_name = 'PUBG' ";
   $res = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFINITY | Login</title>
    <link rel="shortcut icon" href="./Images/INFINITY-LoGo.png">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="./event.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
</head>
<body>
    <main>
        <header>
            <nav class="nav-bar">
                <div class="logo">
                    <a href="index.html">
                        <img src="./Images/INFINITY-Logo-White.png" alt="INFINITY-LoGo">
                        <p>INFINITY</p>
                    </a>
                </div>
                <div class="nav-links close">
                    <ul>
                        <li><a href="./signup.html">Sign Up</a></li>
                        <li><a href="./content-page.html">Login</a></li>
                        <li><a href="./feedback-1.html">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-icon">
                    <ion-icon name="menu"></ion-icon>
                </div>
            </nav>
        </header>
        <section>
            <div class="container">
                <img src="./Images/1389406.jpg" width="100%" height="250px">
                <img src="./Images/COC-1.png" class="circle" width="306" height="246">
            </div>
            <div class="box">
                <?php 
                    while($rows = mysqli_fetch_assoc($res)) {
                ?>
                        <div class="box1">
                            <h1><?php echo $rows['event_name']; ?></h1>
                            <h2><?php echo $rows['event_id']; ?></h2>
                            <p><?php echo $rows['date']; ?></P>
                            <p><?php echo $rows['time']; ?></P>
                        </div>
                <?php
                    }
                ?>
            </div>
        </section>
        <footer>
            <div class="social-links">
                <a href="" class="twitter link" ><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="" class="facebook link"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="" class="instagram link"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
            <div class="copyrights">&copy All rights reserved by INFINITY 2020.</div>
            <div class="contacts">
                <p>Email: infinity@gmail.com</p>
                <p>Phone: +91 000000000</p>
            </div>
        </footer>
    </main>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>