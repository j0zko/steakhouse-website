
<?php

if(!isset($pageTitle));
$pageTitle= "Joe crusty steak-house";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
    name = "description"
    content="Indulge in the finest cuts of steak in a luxurious ambiance at Your Steakhouse. Our restaurant
     is dedicated to delivering an exceptional-- dining experience,
      with a focus on quality, freshness, and attention to detail."
    >

    <title><?php echo $pageTitle;?></title>
    <link rel="stylesheet" href="/steakhouse-website/css/styles.css"/>
</head>
<body>
    <header class="navbar">
        <div class="container nav-container">
            <nav>
                <ul class="menu-items">
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul>
            </nav>
        </div>
    </header>  
</body>
</html>