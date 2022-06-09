<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php echo $msg  //Echo normal de php para printear una variable pasada por el Route::get ?>
    <?= $msg //Echo abreviado ?>
    {{ $msg }}  <!-- // Realizar un echo a una variable a traves del motor de templates de Blade/Laravel -->

</body>
</html>
