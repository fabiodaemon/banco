<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP com MySQL</title>
</head>

<body>
    
    <?php
    
        require 'config.php';
        require 'connection.php';
    
        $link = DBConnect();
    
        DBClose($link);

?>



</body>
</html>