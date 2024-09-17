<?php

const API_URL = "https://www.whenisthenextmcufilm.com/api";
# Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
# Indicar que queremos recibir el resultado de la petición y no mostrarlo por pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición
y guardar el resultado

*/
$result = curl_exec($ch);

// una alternativa a la función anterior es usar la función curl_exec() que ejecuta la petición y devuelve el resultado
// $result = file_get_contents(API_URL); //si solo quieres hacer el get de una API
$data = json_decode($result, true);
# Cerrar la sesión de cURL
curl_close($ch);
?>

<head>
    <meta charset="utf-8">
    <title>La próxima producción de marvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"];?>" style = "border-radius: 16px" width= 200px alt="Poster de <?= $data["title"];?>" />
    </section>
    <hgroup>
        <h3><?= $data["title"];?> se estrena en <?= $data["days_until"];?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"];?></p>
        <p>La siguiente producción de Marvel es <?= $data["following_production"]["title"];?></p>
    </hgroup>

</main>
<style>
    :root{
        color-scheme: dark;
    }
    body{
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        /* text-align: center; */
    }
    hgroup{
        display:flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    img{
        margin: 0 auto;
    }
</style>