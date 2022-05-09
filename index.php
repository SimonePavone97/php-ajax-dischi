<!--Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi.-->


<?php 
    include __DIR__ . './partials/integer.php'
?>


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
                <div class="row d-flex align-items-center">
                 <?php

                    foreach ($database as $data){
                    
                        echo "<div class='col'>";
                            echo "<h4>" . $data['title'] .  "</h4>" ;  
                            echo "<h5>" . $data['author'] .  "</h5>" ; 
                            echo "<img style='width: 190px;' src=\"" . $data['poster'] . "\">";
                            echo "<p>" . $data['year'] .  "</p>" ; 
                            echo "<p>" . $data['genre'] .  "</p>" ;
                        echo "</div>";
                    
                  
                    }
                
                ?>
                </div>

            </div>





        </div>
    </div>

    <!--Installazione vue.js-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!--Download Axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>