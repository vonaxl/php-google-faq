<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <?php 
    include 'data.php';
    ?>
<body>
<div class="row"></div>
    <div class="container">
        <?php 
            foreach ($faq as $value) {
                echo '<div class="row">';
                echo '<h3>'.$value['domanda'].'</h3>';
                echo '<p>'.$value['risposta'].'</p>';
                echo '</div>';
            }
        
        ?>
    </div>
</body>
</html>