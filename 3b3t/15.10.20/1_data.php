<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
</head>
<body>
    <table>
    <form action="./1_data_show.php" method="get">
    <tr>
        <th>Name</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><input type="text" name="imie" autofocus></td>
    </tr>
    <tr>
        <td>Sex</td>
        <td>
        <input type="radio" name="plec" value="k">Kobieta<br>
        <input type="radio" name="plec" value="m">Mężczyzna
        </td>
    </tr>
    <tr>
        <td>Eye color</td>
        <td>
            <select name="color">
            <option>Czerwony</option>
            <option>Zielony</option>
            <option>Niebieski</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Chech all that apply</td>
        <td>
        <input type="checkbox" name="checkbox" value="wzrost">Over 6 feet tall<br>
        <input type="checkbox" name="checkbox" value="waga">Over 200 pounds
        </td>
    </tr>
    <tr>
        <td colspan="2">Describe your athletic ability:
        <br>
        <textarea name="opis" cols="40" rows="5"></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2">    
        <input type="submit" value="Wyślij dane">
        </td>
    </tr>
        
  
    
    </table>

</body>
</html>