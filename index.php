<?php

require_once __DIR__ . '/bootstrap.php';

// Een rood vierkant van 100x100 px, linkerbovenhoek op (50, 50)
$shape = new Shape('red', 50, 50, 100, 100);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Fake Figma</title>
    <style>
        .canvas {
            position: relative; /* de vormen worden geplaatst t.o.v. dit vlak */
            width: 800px;
            height: 600px;
            border: 1px solid #ccc;
        }

        .shape {
            position: absolute; /* left/top = x/y van de linkerbovenhoek */
        }
    </style>
</head>
<body>
    <div class="canvas">
        <div class="shape" style="
            left: <?= $shape->getX() ?>px;
            top: <?= $shape->getY() ?>px;
            width: <?= $shape->getWidth() ?>px;
            height: <?= $shape->getHeight() ?>px;
            background-color: <?= htmlspecialchars($shape->getColor()) ?>;
        "></div>
    </div>
</body>
</html>
