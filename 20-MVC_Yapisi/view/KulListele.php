<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kullanıcı Listesi</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <h1>Kullanıcılar: </h1>
            <?php foreach ($veri as $deg): ?>
            <div class="col-md-4">
                <div class="p-3">
                    <div class="card">
                        <div class="card-header"><?= $deg['isim']; ?></div>
                        <div class="card-body"><?= $deg['eposta']; ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>