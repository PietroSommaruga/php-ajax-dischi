<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>
    <div id="app">
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="spotify logo" class="logo"/>
        </header>
        <main>
                <div class="card" v-for="disk in discs" :disk="disk">
                    <img :src="disk.poster" alt="">
                    <strong>{{disk.title}}</strong>
                    <div class="name">{{disk.author}}</div>
                    <div class="date">{{disk.year}}</div>
                </div>
        </main>
    </div>
    <script src="./script.js"></script>
</body>
</html>