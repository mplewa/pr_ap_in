<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Formularze</title>
</head>
<body>
        
    <?php
    //isset()
        if (!empty($_GET{'namesurname'}))
        {
            $namesurname = $_GET['namesurname'];
            echo "Wprowadziłeś dane: ";
            echo ucwords(strtolower($namesurname)),"<hr>";
            echo '<a href="./5_form_zad.php">Powrót do formularza</a>';
        }
            else
            {
                echo <<< FORM
                    <p>Wprowadź imię i nazwisko<p>
                    <form method="get">
                    <input type="text" name="namesurname" autofocus><br><br>
                    <input type="submit" value="Wyślij"><br>
                    </form>
        FORM;
            }
        ?>
    </body>
    </html>
