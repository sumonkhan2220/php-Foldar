<?php 
$fonts = "verdana";
$bgcolor = "#444";
$fontcolor = "#FC8C41";
$errname = $erremail = $errweb = $errgender = "";

$name = $email = $website = $comment = $gender = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    if (empty($_POST["name"])) {
                        $errname = "<span style='color:red'>Name is required.</span>";
                    }else {
                        $name       = validate($_POST["name"]);
                    }



                    if (empty($_POST["email"])) {
                        $erremail = "<span style='color:red'>E-mail is required.</span>";
                    }
                    elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                         $erremail = "<span style='color:red'>Invalid E-mail Format.</span>";
                    }
                    else {
                       $email      = validate($_POST["email"]);
                    }


                    if (empty($_POST["website"])) {
                        $errweb = "<span style='color:red'>Website is required.</span>";
                    }elseif(!filter_var($_POST["website"],FILTER_VALIDATE_URL)){
                          $errweb = "<span style='color:red'>Invalid Website Format.</span>";
                    }else {
                       $website    = validate($_POST["website"]);
                    }
                    

                    if (empty($_POST["gender"])) {
                        $errgender = "<span style='color:red'>Gender is required.</span>";
                    }else {
                       $gender     = validate($_POST["gender"]);
                    }
                    
                    
                    $comment    = validate($_POST["comment"]);
                   

                    // echo "Name: ".$name."<br>";
                    // echo "E-mail: ".$email."<br>";
                    // echo "Website: ".$website."<br>";
                    // echo "Comment: ".$comment."<br>";
                    // echo "Gender: ".$gender."<br>";
                }

                function validate($data){
                    $data = trim($data);
                    $data = stripcslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP syntax</title>
    <style>
        body {font-family: <?php echo $fonts;?>}
        .phpcoding{width: 900px; margin: 0 auto;background:<?php echo "#ddd"?>;}
        .headeroption, .footeroption {background:<?php echo $bgcolor;?>;color:<?php echo $fontcolor;?>;text-align:center;padding:20px;}
        .headeroption h2, .footeroption h2{margin:0px}
        .maincontent{min-height:400px;padding:20px;}
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "PHP Fundamentals Training"; ?></h2>
        </section>
        
        <section class="maincontent">
            <hr>
            PHP form validation
            <hr>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <p style="color:red">* Required field</p>
            <table>
                <tr>
                    <td>Name </td>
                    <td><input type="text" name="name">* <?php echo $errname; ?> </td>
                </tr>

                <tr>
                    <td>E-mail </td>
                    <td><input type="email" name="email">* <?php echo $erremail; ?> </td>
                </tr>

                <tr>
                    <td>Website </td>
                    <td><input type="text" name="website">* <?php echo $erremail; ?> </td>
                </tr>

                <tr>
                    <td>Comment </td>
                    <td><textarea name="comment" id="" rows="5" cols="40"></textarea></td>
                </tr>

                <tr>
                    <td>Gender </td>
                    <td>
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="male">Male
                        * <?php echo $errgender; ?>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
            </form>


            <?php
                echo "Name: ".$name."<br>";
                echo "E-mail: ".$email."<br>";
                echo "Website: ".$website."<br>";
                echo "Comment: ".$comment."<br>";
                echo "Gender: ".$gender."<br>";
            ?>
        </section>

        <section class="footeroption">
            <h2><?php echo "www.trainingwithliveproject.com"; ?></h2>
        </section>
    </div>
</body>
</html>