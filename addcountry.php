<!-- DATABASE CONNECTION -->

<?php
    include("connection.php");
    error_reporting(0);
?>
<html>
    <head>
        <title>Xplore | Add Country</title>
            <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>

        <!-- VIDEO BACKGROUND -->

        <div class="video">
            <video autoplay loop muted fixed>
                <source src="images&videos/video1.mp4">
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

        

        <!-- FORM CONTAINER -->

        <div class="addcountry-form">
            <form>
                <h2>Enter Country details:</h2>
                <table style="width:100%">
                    <tr>
                        <td class='fetched_h'>Country name:</td>
                        <td><input type="text" name="cname" class="textfeild"></td>
                    </tr>
                    <tr>
                        <td>Continent:</td>
                        <td>
                            <select name="continent" class="textfeild fetched_h">
                                <option value="">--- Select a Continent ---</option>
                                <option value="Africa">Africa</option>
                                <option value="Antartica">Antartica</option>
                                <option value="Asia">Asia</option>
                                <option value="Australia">Australia</option>
                                <option value="Europe">Europe</option>
                                <option value="North-America">North America</option>
                                <option value="South-America">South America</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class='fetched_h' style="height:100px;">
                            Hemisphere:
                        </td>
                        <td>
                            <input type="radio" name="hemisphere" value="Northern Hemisphere">Northern Hemisphere <br>
                            <input type="radio" name="hemisphere" value="Southern Hemisphere">Southern Hemisphere
                        </td>
                    </tr>
                    <tr>
                        <td class='fetched_h'>Captital City:</td>
                        <td><input type="text" name="capital" class="textfeild"></td>
                    </tr>
                    <tr>
                        <td class='fetched_h'>Currency:</td>
                        <td><input type="text" name="currency" class="textfeild"></td>
                    </tr>
                    <tr>
                        <td class='fetched_h'>TimeZone:</td>
                        <td><input type="text" name="timezone" class="textfeild"></td>
                    </tr>
                    <tr>
                        <td class='fetched_h'>Official Languages:</td>
                        <td><input type="text" name="languages" class="textfeild"></td>
                    </tr>
                    <tr>
                        <td class='fetched_h'>Population:</td>
                        <td><input type="text" name="population" class="textfeild"></td>
                    </tr>
                    <tr>
                        <td class='fetched_h'>Geographical Area:</td>
                        <td><input type="text" name="area" class="textfeild"></td>
                    </tr>
                    <tr>
                        <td class='fetched_h'>Famous Tourist Places:</td>
                        <td><input type="text" name="tplaces" placeholder="Enter Top-3 Tourist places of the country" class="textfeild"></td>
                    </tr>
                </table>
                <input class="button" type="submit" value="Submit">
            </form>
        </div>

        <!-- INSERTING INTO DATABASE -->

    <?php
        $cname=$_GET['cname'];
        $continent=$_GET['continent'];
        $hemisphere=$_GET['hemisphere'];
        $capital=$_GET['capital'];
        $currency=$_GET['currency'];
        $timezone=$_GET['timezone'];
        $languages=$_GET['languages'];
        $population=$_GET['population'];
        $area=$_GET['area'];
        $tplaces=$_GET['tplaces'];

        $query = "INSERT INTO COUNTRY_DETAILS VALUES ('$cname','$continent','$hemisphere','$capital','$currency','$timezone','$languages','$population','$area','$tplaces');";

        $data=mysqli_query($conn,$query);
    ?>
    </body>
</html>