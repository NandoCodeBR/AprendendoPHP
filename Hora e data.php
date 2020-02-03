<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
       setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
       date_default_timezone_set( 'America/Sao_Paulo' );
       echo strftime( '%Y-%m-%d', strtotime('today'));
       echo "<br>"; 
       echo date('H:i');
 
    ?>
</body>
</html>