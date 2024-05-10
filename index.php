<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/14dd55bd5d.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css" />
    <script src ='https://unpkg.com/axios@1.6.7/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="./js/script.js" type="module"></script>
    <title>Lista ingredienti pizzeria</title>

</head>

<body>

    <div id="app">


        <nav class="navbar navbar-expand-sm navbar-dark bg-white justify-content-between">
            <div id="container-logo" class="w-25">
                <img src="./img/img-pizza.gif" alt="Logo" class="img-fran">
            </div>
            <div class="text-bg-light p-3 d-flex justify-content-center align-items-center w-50">
                <h1 class="text-danger fw-bold">
                    Lista ingredienti Pizzeria per il weekend
                </h1>
            </div>
            <div class="mb-3 w-25 d-flex justify-content-end flex-column align-items-center">
                <label for="ingredientetext" class="form-label"></label>
                <input type="text" class="" id="ingredientetext" v-model="ingredienti.text" @keyup.enter="addIngredienti()">
                <button class="btn btn-success" @click="addIngredienti">Aggiungi</button>
                </div>

        </nav>
        <div class="container bg-white text-danger">
            <ul>
                <li v-for="(item, index) in ingredienti" :key="item.id" id="myList" class="d-flex justify-content-between p-3 ">
                    <span :class="{'text-decoration-line-through': item.acquistato}" @click="toggleAcquistato(item.id)"
                        class="pointer fw-normal fs-5">
                        {{ item.text }}
                    </span>
                    <i class="fa-thin fa-x pointer" @click="removeItem(item.id)"></i>
                </li>
            </ul>
        </div>

</body>

</html>

