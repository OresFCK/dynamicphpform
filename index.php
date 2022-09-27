<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

    </div>
    <div>
        <form action="form1.php" method="post">
            <h2>Mapa do celów projektowych</h2>
            Opcja 1: <input type="checkbox" name="option1"><br>
            Opcja 2: <input type="checkbox" name="option2"><br>
            <input type="number" placeholder="ilosc hektarów" name="powierzchnia"><br>
            <input type="submit">
        </form>
    </div>
    <div>
        <form action="form2.php" method="post">
            <h2>Goedyzjna inwetaryzacja obiektów budowlanych</h2>
            MAPA DO ODBIORU BUDYNKU MIESZKALNEGO JEDNORODZINNEGO+<br>
            WODA PRĄD KANALIZACJA:<input type="checkbox" name="option3"><br>
            Gaz:<input type="checkbox" name="addons[]" value="50"><br>
            Pompa Ciepła:<input type="checkbox" name="addons[]" value="60"><br>
            Światłowód:<input type="checkbox"  name="addons[]" value="90"><br>
            Garaż:<input type="checkbox"  name="addons[]" value="250"><br>
            <hr>
            inwetaryzacja lokali : <input type="checkbox" name="option4"><br>
            <input type="number" name="lokale"><br>
            <input type="submit" name="submit"><br>
            <hr>
            Inne: <input type="checkbox"><br>
            <input type="textarea">
        </form>
    </div>
</body>
</html>