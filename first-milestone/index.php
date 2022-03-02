<?php

include './includes/data/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Dischi</title>
</head>

<body>
    <header class="d-flex align-items-center">
        <img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/768px-Spotify_logo_without_text.svg.png" alt="logo">
    </header>
    <main>
        <div class="container album-gallery">
            <div class="row row-cols-5 g-4">
                <?php foreach ($database as $album) { ?>
                    <div class="col">
                        <div class="card d-flex flex-column align-items-center p-3">
                            <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>" class="img-fluid">
                            <h5 class="text-uppercase text-center"><?= $album['title'] ?></h5>
                            <span class="text-muted"><?= $album['author'] ?></span>
                            <span class="text-muted"><?= $album['year'] ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>