<?php 
include 'db.php';
require 'session.php';
Session::start();
Session::set('id_item_edit',$_GET['id']);
if($_SERVER['REQUEST_METHOD'] == "POST"){ 

    /** Traitement Table Work */
        try{
            if(isset($_POST['name']) && isset($_POST['info']) && isset($_POST['image']) && isset($_POST['link'])){
                $id_item = Session::get('id_item_edit');
                $name = $db->quote($_POST['name']);
                $image = $_POST['image'];
                $description = $db->quote($_POST['info']);
                $link = $db->quote($_POST['link']);
                if(!empty($image)){
                    $query = "update projects set title=$name,info=$description,image='$image',link=$link where id=$id_item";

                }else{
                    $query = "update projects set title=$name,info=$description,link=$link where id=$id_item";

                }
                $msg=$query;
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:edit.php');                
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }
        /***************** */

        
       
}else{
    $msg ='Erreur POST';
}
$select = $db->query('SELECT id,title, info,image,link FROM projects where id = '.Session::get('id_item_edit'));
$items = $select->fetchAll();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <style>
        #imageWorks {
            width: 60% !important;
        }
        .input {
            background-color: transparent;
            border: 0px solid;
            height: 20px;
            width: 160px;
            color: #CCC;
        }
        .tdImg{
            display :grid;
            grid-template-columns: auto auto ;
            align-items: center;
                }
        .main{
            margin-top:10rem;
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
<?php foreach($items as $item):?>


<div class="container">
    <div class="row">
        <form method="POST" action="">
        <p><?php echo($msg);?></p>
            <div class="form-group">
                <label for="name">Nom du projet</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameItem"
                    placeholder="Entrer nom du projet" value="<?=$item['title']; ?>">
                <small id="nameItem" class="form-text text-muted">We'll never share name of project with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="description_">Description</label>
                <textarea type="text" class="form-control" id="description_" name="info" aria-describedby="description_c"
                    placeholder="l'information sur projet"><?=$item['info']; ?></textarea>
                <small id="description_c" class="form-text text-muted">We'll never share description anyone
                    else.</small>
            </div>
            <div class="form-group">
                        <label for="bref_des">Link in Github</label>
                        <input type="text" class="form-control" id="bref_des" name="link" aria-describedby="bref_desc"
                            placeholder="link for project">
                        <small id="bref_desc" class="form-text text-muted">We'll never share link anyone
                            else.</small>
                    </div>
            
            <div class="form-group">
            <img id="imageWorks" src="../img/<?=$item['image']; ?>" alt="">
                <label for="exampleFormControlFile1">image projet</label>
                <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" value="C:\Users\Youcode\Desktop\Nouveau dossier (2)\php_course\Symp - Responsive VCard Resume Template\img\<?=$item['image']; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary mt-2">Edit Projet</button>
        </form>
    </div>
</div>
<?php endforeach;?>
</main>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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