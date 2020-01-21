<?php 
    $name = "Redgie Gravador";
    $version = getenv('APP_VERSION')?: 1.0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AWS Training Activity</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 1em;
                display: flex;
                flex-direction: column;
                align-content: space-between;
            }

            footer{
                align-self: flex-end;
            }
        </style>
    </head>
    <body>
        <main>
            <h3>Hi, I am <?php echo $name ?></h3>
            <p>and I am a proud PN student!</p>
        </main>
        <footer><i>version: <?php echo $version?></i></footer>
    </body>
</html>
