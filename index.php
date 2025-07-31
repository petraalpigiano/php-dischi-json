<?php
require_once './server.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-3">Dischi</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach ($musicRecords as $currentMusicRecord) {
                echo "<div class='col'> 
                        <div class='card h-100'>
                        <img src='{$currentMusicRecord['cover']}' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$currentMusicRecord['title']}</h5>
                            <p class='card-text'>{$currentMusicRecord['artist']}</p>
                            <p class='card-text'>{$currentMusicRecord['genre']}</p>
                            <p class='card-text'>{$currentMusicRecord['year']}</p>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</body>

</html>