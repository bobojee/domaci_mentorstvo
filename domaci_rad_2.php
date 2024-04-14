<?php

    $site_name = "Postani programer"; 
    $a_tags = [
                "Glavna" => "home.php",
                "O nama" => "about us.php",
                "Kontakt" => "contact.php"
            ];
    
    $current_year = date('Y');  

?>


<html>
        <head>
            <title><?php echo $site_name; ?></title>
        </head>
        <body>
            <h1>Postani programer</h1>
            <nav>
                <a href="<?php echo $a_tags["Glavna"]?>"><?php echo array_search("home.php", $a_tags); ?></a>
                <a href="<?php echo $a_tags["O nama"]?>"><?php echo array_search("about us.php", $a_tags); ?></a>
                <a href="<?php echo $a_tags["Kontakt"]?>"><?php echo array_search("contact.php", $a_tags); ?></a>
            </nav>
            <footer>
                <p><?php echo "Copyright © $site_name $current_year";?></p>
            </footer>
        </body>
</html>
