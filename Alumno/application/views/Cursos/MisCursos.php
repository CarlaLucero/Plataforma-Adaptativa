<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Cursos</title>
    <link rel="stylesheet" href="<?php echo base_url();?>app-assets/css/diseñoMicurso.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>app-assets/css/bootstrap.css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>       

    <style>
        * {
            text-decoration: none;
            color: black;
        }

        .filterDiv {
            float: left;
            display: none;
        }

        .show {
            display: block;
        }
    </style>
</head>
<body>



<!--<div id="mySidenav" class="elsidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="row ">
        <div class="row col-12">
            <div class="col-3">
                    <a href="/../Login.html"> <span class="fas fa-user-circle fa-5x" style="color: #66ccff;"></span></a>
            </div>
            <div class="col-9 text-left" style="color: #1381b8;">
                    <h4>Nombre de usuario</h4>
                    <h5>correo electronico</h5>
            </div>
        </div>
        <hr>
        <hr>
        <button class="btn btn-light col-12 text-left"> <a href="<?php echo site_url();?>/alumno/MisCursos"><span class="far fa-folder fa-2x pull-left offset-4" style="color: white;"></span> <h4>Mis cursos </h4></a></button>
        <button class="btn btn-light col-12 text-left"> <a href="Cursos.php"><span class="fas fa-folder-plus fa-2x pull-left offset-4" style="color: white;"></span> <h4>Nuevo curso </h4> </a> </button>
        <button class="btn btn-light col-12 text-left"> <a href=""><span class="fas fa-bell fa-2x pull-left offset-4" style="color: white;"></span> <h4>Notificación </h4></a></button>
        <button class="btn btn-light col-12 text-left"> <a href=""><span class="fas  fa-info-circle fa-2x pull-left offset-4" style="color: white;"></span> <h4>Ayuda </h4></a></button>
        <button class="btn btn-light col-12 text-left"> <a href="CerrarSesion.php"><span class="fas fas fa-sign-out-alt fa-2x pull-left offset-4" style="color: white;"></span> <h4>Salir </h4></a></button>
    </div>
</div>

<div class="shadow rounded">
 <nav class="navbar navbar-expand-lg navbar-light bg-light" >
         <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon" style="color:white;"></span>
         </button>
         <a class="navbar-brand" href="<?php echo site_url();?>/alumno/MisCursos">
             <img class="login-img text-left" src="<?php echo base_url();?>app-assets/imagenes/logo.png" style="width: 50%; margin: 0;">
         </a>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <form class="form-inline my-2 my-lg-0">
             <div class="input-group">
               <input type="search" class="buscar form-control" placeholder="Buscar">
               <div class="input-group-append">
                 <button class="bustcar btn btn-outline-info" type="button">
                   <span class="fa fa-search form-control-feedback"></span>
                 </button>
               </div>
           </div>
           </form>
           <ul class="navbar-nav offset-lg-1 offset-xl-3">
             <li class="nav-item">
                <a class="nav-link" style="color: #07ad90;" href="Cursos.php">Nuevos cursos</a>
             </li>
               <li class="dropdown">
                   <a href="" class="btn" data-toggle="dropdown" >
                       <span class="far fa-bell fa-2x" style="color: #07ad90;" title="Notificaciones"></span>
                   </a>
                   <ul class="dropdown-menu">

                   </ul>
               </li>
               <li class="dropdown">
                   <a href="" class="btn" data-toggle="dropdown" >
                       <span class="far fa-user fa-2x" style="color: #07ad90;"  title="Perfil"></span>
                   </a>
                   <ul class="dropdown-menu">
                       <li>
                           <a href="#">
                               <span class="fas fa-user-circle fa-2x" style="color: #07ad90;" title="Perfil"></span>
                                Nombre de usuario
                           </a>
                       </li>
                       <li>
                           <button class="btn btn-light col-12 text-left"> <a href="MisCursos.php"> <span class="far fa-folder pull-left " style="color: #07ad90;font-size: 16px;"></span><pre>  Mis cursos</pre></a></button>
                       </li>
                       <li>
                            <button class="btn btn-light col-12 text-left"> <a href="Cursos.php"><span class="fas fa-folder-plus pull-left " style="color: #07ad90;"></span> <pre>  Nuevo curso</pre>   </a> </button>
                       </li>
                       <li>
                           <button class="btn btn-light col-12 text-left"> <a href=""><span class="fas  fa-info-circle  pull-left" style="color: #07ad90;"></span><pre>  Ayuda</pre>  </a></button>
                       </li>
                       <li>
                           <button class="btn btn-light col-12 text-left"> <a href="CerrarSesion.php"><span class=" fas fa-sign-out-alt  pull-left" style="color: #07ad90;"></span><pre>  Salir</pre>  </a></button>
                       </li>
                   </ul>
               </li>
           </ul>
       </div>
  </nav>
</div>-->



    

    <div class="filtrar">
        <div class="row">
            <div class="col-4">
                <h6>Ordenar por</h6>
                <div class="ordenar">
                    <div class="dropdown text-left">
                        <button type="button" class="btn btn-primary dropdown-toggle btnDrop" data-toggle="dropdown">Ordenar por</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Titulo: de A a Z</a>
                            <a class="dropdown-item" href="#">Titulo: de Z a A</a>
                            <a class="dropdown-item" href="#">Completado: del 0% a 100%</a>
                            <a class="dropdown-item" href="#">Completado: del 100% a 0%</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h6>Filtrar por</h6>
                <div class=" dropdown text-left">                
                    <button type="button" class="btn btn-primary dropdown-toggle btnDrop" data-toggle="dropdown">Categoria</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Redes</a>
                        <a class="dropdown-item" href="#">Programacion</a>
                        <a class="dropdown-item" href="#">Base de datos</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h6>Filtrar por</h6>
                <div class=" dropdown text-left BtnContainer">
                    <button type="button" class="btn btn-primary dropdown-toggle btnDrop" data-toggle="dropdown">Progreso</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item pointer" onclick="filterSelection('todos')">Todos</a>
                        <a class="dropdown-item pointer" onclick="filterSelection('Completos')">Completos</a>
                        <a class="dropdown-item pointer" onclick="filterSelection('EnCurso')">En Curso</a>    
                        <a class="dropdown-item pointer" onclick="filterSelection('SinEmpezar')">Sin empezar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3>Mis Cursos</h3>
    <div class="ContenedorCursos" style="margin-top: 20px; left: 25px;">

        
        <?php
        error_reporting(0);
        session_start();
        $varsesion = $_SESSION['usuario'];
        if($varsesion == null|| $varsesion == '')
        {
            header("location:index.php");
        }
        $Con = mysqli_connect('localhost','root','','plataforma');
        
    	$consulta = "SELECT *
        FROM `Inscrito`
        RIGHT JOIN `Cursos`
        ON Inscrito.clave_curso = Cursos.clave
        WHERE Inscrito.clave_alumno = '$varsesion';
        ";
    
    $rs = $Con->query($consulta);
    while($row = $rs ->fetch_assoc())
    {
        
        if($row['avance'] > 99){$avance = "Completos";}
        if($row['avance'] >= 1 && $row['avance'] <=99){$avance = "EnCurso";}
        if($row['avance'] < 1){$avance = "SinEmpezar";}
        
        ?>
        <div class="card-deck" style="margin-left: 20px;">
            <div class="filterDiv <?php echo $avance; ?>">
            <a href="video.php?curso=<?php echo $row['clave']?>" style="text-decoration:none ">
                <div class="card" style="width: 250px; min-height: 450px; max-height: 450px; ">
                    <img class="card-img-top" style="max-height: 250px;"  src="data:image/jpg;base64,<?php echo ($row['foto']); ?>" alt="Card image cap">
                    <div class="card-body">
                    <ul class="list-group list-group-flush" style="margin-top: -15px;">
                        <li class="list-group-item"><?php echo $row['nombre']?></li>
                    </ul>
                    <div class="Porcentaje" style="margin-top: 10px;"><?php echo $row['avance']?>%<div class="progress"><div class="bar" style="width: <?php echo $row['avance']?>%"></div></div> </div> 
                        
                        <p class="card-text" style="margin-top: 10px;"><?php echo $row['descripcion']?></p>
                    </div>
                </div>
            </a>
        </div>


        <?php
            }
        ?>        
        </div>            
    </div>


    <script>
        filterSelection("todos");
        
        function filterSelection(c) 
        {
              var x, i;
              x = document.getElementsByClassName("filterDiv");
              if (c == "todos") c = "";
              for (i = 0; i < x.length; i++) 
              {
                    RemoverClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) AgregarClass(x[i], "show");
              }
        }
        
        function AgregarClass(element, name) 
        {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) 
              {
                    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
              }
        }
        
        function RemoverClass(element, name) 
        {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) 
            {
                while (arr1.indexOf(arr2[i]) > -1) 
                {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);     
                }
            }
            element.className = arr1.join(" ");
        }
        
        var btnContainer = document.getElementById("BtnContainer");
        var btns = btnContainer.getElementsByC
        lassName("btn");
        for (var i = 0; i < btns.length; i++) 
        {
            btns[i].addEventListener("click", function()
            {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
        </script>


        <script src="<?php echo base_url();?>app-assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url();?>app-assets/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>app-assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>app-assets/js/myjs.js"></script>

    

</body>

</html>