<?php
sleep(4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Launching...</title>
    <link rel="stylesheet" href="/assets/intro.css">
    <meta http-equiv="refresh" content="3; url=/play">
</head>
<body>
    <div class="container">
        <div class="loader">
        </div>
        <h1 style="color: white;">Please wait while the server is rendering the game</h1>
        <h2 style="color: white;">Loading Graphics...</h2>
    </div>
    <script>
        document.cookie="render=ok";
    </script>
</body>
</html>