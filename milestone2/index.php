<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajax dischi</title>
</head>

<body>

    <div id="app">

        <div class="container">

            <div class="text-center">
                <div class="row">
                    <div class="col-3" v-for="album in albums">
                        <img class="img-fluid" :src="album.poster" alt="Album Cover">
                        <h3 class="title">{{ album.title }}</h3>
                        <div class="author">{{ album.author }}</div>
                        <div class="year">{{ album.year }}</div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!--Installazione vue.js-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!--Download Axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>