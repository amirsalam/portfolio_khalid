<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    
    <link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' id="bootstrap-css">
    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/dash.css">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">
</head>
<body>


<!------ Include the above in your HEAD tag ---------->

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">
                <img src="img/Dashboard-logo21.png" alt="LOGO">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="Admin/view.php" ><i class="ion-compose"></i>  View <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                
                </li>
                <li>
                    <h1 class='pro'><i class="ion-speedometer"></i> Projects</h1>
                   
                </li>
                <li>
                    <a href="Admin/add.php"><i class="ion-arrow-return-right"></i>  Add</a>
                </li>
                <li>
                    <a href="Admin/edit.php"><i class="ion-arrow-swap"></i> Update</a>
                </li>
                <li>
                    <a href="Admin/delete.php"><i class="ion-trash-b"></i> Delete</a>
                </li>
                <li>
                    <a href="Admin/logout.php"><i class="ion-log-out"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Welcome Khalid Esserhir</h1>
                </div>
                <img src="img/dash.png" class="center-block">
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<!--<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>-->
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


