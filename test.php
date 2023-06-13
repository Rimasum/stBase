<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>This is Heading</h1>
    <?php
    $sArr = array("Home", "Services", "About", "Contact us", "Rayeed", "Rizwan");
    $link = array("https://www.google.com", "https://www.facebook.com", "/stbase/index", "Contact us", "Rayeed");
    // echo count($sArr);
    // $st = 'Students';
    // $list = '';
    // for ($i = 0; $i < count($sArr); $i++) {
    //     // echo "<br>" . $st;
    //     $list .= '<li>' . $sArr[$i] . '</li>';
    // }
    // echo '<ul class="list">' . $list . '</ul> <br>';
    ?>

    <ul class="list" id="notification">
        <?php
        for ($i = 0; $i < count($sArr); $i++) {
        ?>
            <!-- <li><a href="<?php echo $link[$i] . ".php"; ?>"><?php echo $sArr[$i]; ?></a></li> -->
            <li><a href="#"><?php echo $sArr[$i]; ?></a></li>
        <?php
        }
        ?>
    </ul>
    <!-- <script src="main.js"></script> -->
</body>

</html>