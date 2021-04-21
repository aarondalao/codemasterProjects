<?php
    require("../php/initialisation/config.php");
    require("../php/initialisation/functions.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lanscape Images of AJDee </title>
</head>
<body>

    <header>
        <h1 class="header_logo">
            <a href="/">
                AJDee Photography
            </a>
        </h1>

    </header>


    <main id="main_content" class="">
        <article class="asset_image" id="">
            <div>
                <a href="">
                    <img src="/Images/Lanscape/<?php echo $row['photoFileName']; ?>" alt="<?php echo $row['photoName']; ?>">
                </a>
            </div>

            <div class="asset_description">
                <p>

                </p>
            </div>
        </article>
    </main>
</body>
</html>