<?php
    session_start();
    error_reporting(0);
    include("connection.php"); 
?>

<html>
    <head>
        <title>Xplore | Home</title>
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>

        <!-- BACKGROUND IMAGE -->
        <img src="images&videos/bg.jpg" class="bg" style="position: fixed;">

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

        <!-- Data CONTAINER -->

        <div class="data">
            <table class="fetched_table">
                <?php
                    $q="select * from country_details where cname="."'".$_SESSION['session_cname']."'";
                    $d=mysqli_query($conn,$q);
                    $r=mysqli_fetch_assoc($d);
                    if($r)
                    {
                        echo "
                        <tr>
                            <th class='fetched_h'>Country Name</th>
                            <td class='fetched_d'>".$r['cname']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Continent</th>
                            <td class='fetched_d'>".$r['continent']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Hemisphere</th>
                            <td class='fetched_d'>".$r['hemisphere']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Capital</th>
                            <td class='fetched_d'>".$r['capital']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Currency</th>
                            <td class='fetched_d'>".$r['currency']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Timezone</th>
                            <td class='fetched_d'>".$r['timezone']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Languages</th>
                            <td class='fetched_d'>".$r['languages']."</td>
                        </tr>
                        
                        <tr>
                            <th class='fetched_h'>Population</th>
                            <td class='fetched_d'>".$r['population']."</td>
                        </tr>
                        
                        
                        <tr>
                            <th class='fetched_h'>Area</th>
                            <td class='fetched_d'>".$r['area']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Tourist Places</th>
                            <td class='fetched_d'>".$r['tplaces']."</td>
                        </tr>
                        ";
                    }
                    else 
                        echo "Country not found";
                ?>
            </table>
        </div>
        <!-- 
                        <tr>
                            <th class='fetched_h'>GDP</th>
                            <td class='fetched_d'>".$r['gdp']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Sex-Ratio</th>
                            <td class='fetched_d'>".$r['sexratio']."</td>
                        </tr>
                        <tr>
                            <th class='fetched_h'>Literacy</th>
                            <td class='fetched_d'>".$r['literacy']."</td>
                        </tr>
         -->
        <div class="c_image">

        </div>
        <div class="t_places">

        </div>
    </body>
</html>