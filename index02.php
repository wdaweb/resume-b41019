<?php
include_once "base.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .prof {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            background: lightgoldenrodyellow;
        }
    </style>
</head>

<body>
    <div class="prof">
        <?php
        $prof = $Prof->all(["sh"=>1]);
        foreach ($prof as $p) {
        ?>
            <div style="margin:10%;display:flex; border:1px solid #ccc">
                <div><?= $p['text']; ?></div>
                <div><img src="img/<?= $p['img']; ?>" style="width:200px"></div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>