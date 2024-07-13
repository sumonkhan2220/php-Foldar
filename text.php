<?php 
$fonts = "verdana";
$bgcolor = "#444";
$fontcolor = "#FC8C41";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP syntax</title>
    <style>
    body {
        font-family: <?php echo $fonts;
        ?>
    }

    .phpcoding {
        width: 900px;
        margin: 0 auto;
        background: <?php echo "#ddd"?>;
    }

    .headeroption,
    .footeroption {
        background: <?php echo $bgcolor;
        ?>;
        color: <?php echo $fontcolor;
        ?>;
        text-align: center;
        padding: 20px;
    }

    .headeroption h2,
    .footeroption h2 {
        margin: 0px
    }

    .maincontent {
        min-height: 400px;
        padding: 20px;
    }

    p {
        margin: 0px;
    }
    </style>
</head>

<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "PHP Fundamentals Training"; ?></h2>
        </section>
        <?php
            session_start();
            setcookie('visited', "", time() -3600);
            ?>
        <section class="maincontent">
            <hr>
            PHP DATE AND TIME
            <span style="float:right"><?php
            date_default_timezone_set('Asia/Dhaka');
                echo " Time ".date("h:i:sa");
            ?></span>
            <hr>

            <?php

                /*if(isset($_FILES['image'])){
                    $filename = $_FILES['image']['name'];
                    $filetmp = $_FILES['image']['tmp_name'];
                    move_uploaded_file($filetmp,"images/".$filename);
                    echo "Image uploaded Successfully";
                }*/

                /*$_SESSION['user'] = "sumon";
                // session_unset();
                $_SESSION['password'] = "1234";

                echo "Username is ".$_SESSION['user']."<br>";
                echo "Password is ".$_SESSION['password'];
                session_destroy(); */


                // setcookie(name, value, expire, path, domain, secure, httponly);
                

                /*if (!isset($_COOKIE['visited'])) {
                    setcookie("visited", "I", time()+86400, "/") OR die("could not set cookie ");
                    echo "This is your first visit in this website";
                }else{
                    echo "You are our old visitor.";
                }*/

                echo "Cookies is deleted";
                   
            ?>

            <!-- <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
                <input type="file" name="image" />
                <input type="submit" value="Submit" />
            </form> -->
        </section>

        <section class="footeroption">
            <p>&copy; <?php echo date("Y");?> Training With Live Project</p>
            <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
        </section>
    </div>
</body>

</html>