<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function generateUrlImage($width, $height) {
            return "https://picsum.photos/id/$width/$height";
        }

        $imageUrl = generateUrlImage(rand(300,1500), rand(300, 1500));

        echo "<img src='$imageUrl' alt='Random Image'>";
    ?>


</body>
</html>