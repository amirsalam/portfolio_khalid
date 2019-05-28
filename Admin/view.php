<?php 
include 'db.php';
require 'session.php';
Session::start();

$select = $db->query("SELECT id, title,image,info FROM projects");
$items = $select->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    
    <link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dash.css">
    <!--<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' id="bootstrap-css">-->
    <style>
        
        .main {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top:20rem;
            
        }
        .imgstyle{
            width:40%;
        }
    
    </style>
    
</head>
<body>
<header>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
    
                    <li class="nav-item">
                        <a class="nav-link" href="../dash">Dashboard Khalid Esserhir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0 mr-3">Search</button>
                    <a href="logout.php"> logout</a>
                </form>
            </div>

        </nav>


    </header>
<main class="main">

        <table class="table" border="1">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Info</th>
            </thead>

            <tbody>
                <?php foreach($items as $item):?>
                <tr>
                    <td><?= $item['id'];?></td>
                    <td><?= $item['title'];?></td>
                    <td><?= $item['image'];?></td>
                    <td><?= $item['info'];?></td>
                    <td class="d-flex justify-content-center mt-2"><img class="imgstyle" src="../img/<?= $item['image'];?>" alt=""></td>
                </tr>
                <?php endforeach;?>
            </tbody>
    </table>   
    
    </main>
<!--
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    
</body>
</html>