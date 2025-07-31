<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $json_string = file_get_contents('./musicRecords.json');
    $musicRecords = json_decode($json_string, true);
    echo "<pre>";
    var_dump($musicRecords);
    echo "</pre>";
    $ciao = "ciao"
    ?>
    <h1><?php echo $ciao ?></h1>
    <ul>
        <?php
        foreach ($musicRecords as $currentMusicRecord) {
            foreach ($currentMusicRecord as $key => $value) {
                echo "<li>$key : $value</li>";
            }
        }
        ?>


    </ul>

</body>

</html>