<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="flex-container">

       <div class="header">
           <?php include 'logo.php' ?>
           <?php include 'menu.php' ?>
        </div>

        <div class="about_me">
            <h1> <?php echo $p ?> </h1>

                <div class="data">
                    <div class="myImg">
                        <?php echo "<img src='img\php-logo.png'>"; ?>
                    </div>

                    <div class="fullname">
                        <p> My name is 
                        <?php echo $name, ' ', $surname . '<br>';
                              echo 'city', ' ', $city; ?>
                        </p>

                        <p> I'm
                        <?php echo $age; ?>
                        years old </p>
                        <p> We studied the variables </p>
                        <p> and learn how to use them </p>
                    </div>
                </div>

                <div class="knowledge">

                        <?php include "knowledge.php"; ?>
                        <?php
                        echo $a, ' ', $b, ' ', $c, $$c;
                        ?> <br>

                        <?php
                            $a = 10;
                            $b = 20;
                            $c = $a + $b;
                            echo "Sum of a & b is " . $c;
                        ?> <br>

                        <?php
                            echo $d;
                        ?>

                </div>

                <div class="article">
                    <p class="text">
                        Extremis malis
                        Extrema remedia
                    </p>
                </div>
        </div>

                <?php include 'footer.php' ?>
        
    </div>        
</body>
</html>