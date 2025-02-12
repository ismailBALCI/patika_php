<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Kullımı</title>
</head>
<body>

<form action="request.php?getle='veri'" method="post">
    <input type="text" name="isim" placeholder="İsim"><br>
    <input type="text" name="soyisim" placeholder="Soyisim"><br>

    <button type="submit">Gönder</button>
    <hr>
    <label>Diller</label><br>
    <label>PHP</label>
    <input type="checkbox" value="php" name="dil[]"></input><br>
    <label>NODEJS</label>
    <input type="checkbox" value="node" name="dil[]"></input><br>
    <label>JS</label>
    <input type="checkbox" value="js" name="dil[]"></input><br>

</form>

</body>
</html>