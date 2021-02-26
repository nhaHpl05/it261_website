

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- tittle will change on all of the pages-->
<title><?php echo $title;   ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
    
<body class="<?php echo $body;?>">
 <!-- Add your containers header, nav div id wrapper, main, aside and footer -->
      
    <header>
      <a href="index.php"><img id="logo" src="images/logo.png"
        alt="logo"></a>  
      <nav>
        <ul>
         <?php
            echo makeLinks($nav);
          ?>
          </ul>
        </nav>
    </header>