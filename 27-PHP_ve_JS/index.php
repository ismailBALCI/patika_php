<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ve JS</title>
</head>
<body>
   
    <h1><?= "PHP ve JS"?></h1>
<!--  
    <script>
        alert('<?= "Bu php ile yazıldı!" ?>');
        <?= 'console.log("Selam")'?>
    </script> -->

    <div id="app">
        <input type="text" v-model="grup_adi"><br>
        <button type="button" @click.prevent.stop="ekle">Ekle</button>
        <div>
            <ul>
                <li v-for="eklenen in eklenenler":key="eklenen.id">{{eklenen.name}}</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.min.js"></script>
    
    <script src="app.js"></script>

</body>
</html>