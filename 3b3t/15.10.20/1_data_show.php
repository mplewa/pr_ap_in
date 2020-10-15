<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane użytkownika</title>
</head>
<body>
    <h4>Dane z formularza</h4>
    <?php
        //echo '</pre>',print_r($_GET), '</pre>';
        $pass = $_GET['pass'];
        $color = $_GET['color'];
        $reg = $_GET['regulamin'];

        switch ($color) {
            case 'r':
            $color = 'czerwony';
            break;

            case 'g':
            $color = 'zielony';
            break;
            
            case 'b':
            $color = 'niebieski';
            break;
        }

        if (isset($_GET['regulamin']))
        {
            $reg = 'Regulamin zatwierdzony';
        }
        else
        {
            $reg = 'Regulamin niezatwierdzony. Zatwierdź';
        }

        echo <<< DATA
            Login: $_GET[login]
            <br>
            Hasło: {$_GET['pass']}
            <br>
            Hasło: $pass
            <br>
            Ulubiony kolor: $color
            <br>
            $reg
DATA;
    ?>
</body>
</html>