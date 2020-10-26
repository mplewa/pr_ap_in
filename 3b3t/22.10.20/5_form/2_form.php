<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dane użytkownika</h4>
    <!-- <form action="./2_form_dane.php" method="post" novalidate> -->
    <form action="./2_form_dane.php" method="post">
        <input type="text" name="surname" placeholder="Nazwisko" autofocus required pattern="[a-ząćęłńóśźżA-ZĄĆĘŁŃÓŚŹŻ]{2,5}" autocomplete="on"><br><br>
        <select name="gender">
            <option hidden disable selected>Wybierz opcję</option>
            <option value="m">Mężczyzna</option>
            <option value="k">Kobieta</option>
            <!-- <option value="k">Kobieta</option> -->
        </select><br><br>
        <input type="submit" value="Wyślij formularz">
    </form>
</body>
</html>