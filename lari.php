<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello welcome to second page</h1>
    <?php 
        // echo $_SERVER['PHP_SELF'];;
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = $_SERVER['HTTP_REFERER'];
            echo "<h3>You reached here from the home page</h3> ";
            echo "<a href=\"".$referer."\">click me to return</a>";
        } else {
            $referer = 'You accessed the page directly ;)';
            echo $referer;
        }
    ?>
</body>
</html>