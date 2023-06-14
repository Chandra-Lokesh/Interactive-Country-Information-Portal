<?php 
    session_start();
    error_reporting(0);
?>
<html>
    <head>
        <title>Xplore | Home</title>
            <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>

        <!-- VIDEO BACKGROUND -->

        <div class="video">
            <video autoplay loop muted>
                <source src="images&videos/video.mp4">
            </video>
        </div>

        <!-- NAVBAR -->

        <div class="navbar">
            <h1>Xplore</h1>
            <div class="navsections">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="maps.html">Maps</a></li>
                    <li><a href="flags.html">Flags</a></li>
                    <li><a href="addcountry.php">Add Country</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                </ul>
            </div>
        </div>

        <!-- MAIN CONTAINER -->

        <div class="main">
            <form>
                <span>Enter Country Name : </span>
                <input type="text" name="cname" class="text">
                <br>
                <input type="submit" name="sumbit" class="button" value="Search">
                <?php
                    if(isset($_GET['cname']))
                    {
                        $cname = $_GET['cname'];
                        $_SESSION['session_cname']=$cname;
                        header('location:fetched_data.php');
                    }
                ?>
            </form>
        </div>

        <!-- CAPTION / TITLE -->

        <h1 class="caption">Explore Your Favorite <br><span class="auto-type" style="color:red;"></span></h1>

        <!-- TYPED JS CDN -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".auto-type",{
                strings: ["Countries.", "Places.", "Cities."],
                typeSpeed: 150,
                backSpeed: 150, 
                loop: true
            });
        </script>
    </body>
</html>