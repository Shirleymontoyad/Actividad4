<?php
include('../config/config.php');
include('Patient.php');

if (isset($_POST) && !empty($_POST)){
    $patient = new Patient();

    $save= $patient->save($_POST);
    if ($save){
        $error= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
    }else{
       $error = '<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
  }

    }

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title> Calendario </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
        <div class="container-fluid">
          <img src="../imagenes/logo.png" alt="icono" width="50" class="img-fluid mx-auto py-2">
          <a class="navbar-brand" href="#">SHIRLEY MONTOYA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../perfil.html">Perfil</a>
                <!-- <a class="nav-link" href="#">Perfil</a> -->
              </li>
              
    <li class="nav-item">
                <a class="nav-link" href="./add.php">Contáctanos</a>
                <!-- <a class="nav-link" href="#">Perfil</a> -->
              </li>
    
                      </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

 	<div class="container">
    	<?php
 			if (isset($error)){
 				echo $error;
 			}
		?>
 		<h2 class="text-center mb-5"> Creación de agenda </h2>
 		<form method="POST" enctype="multipart/form-data">
 			<div class="row mb-2">
 				<div class="col">
 					<input type="text" name="firstName" id="firstName" placeholder="Nombre paciente" require class="form-control" />
 				</div>
 				<div class="col">
 					<input type="text" name="lastName" id="lastName" placeholder="Apellido paciente" require class="form-control" />
 				</div>
			</div>

 			<div class="row mb-2">
				<div class="col">
					<input type="email" name="email" id="email" placeholder="Email paciente" require class="form-control" />
 			</div>
                <div class="col">
                    <input type="number" name="phone" id="phone" placeholder="Número celular paciente" require class="form-control" />
                    </div>
                </div>

            <div class="row mb-2">
                <div class="col">
                    <textarea name="diseases" id="diseases" placeholder="enfermedad 1, enfermedad 2, ..." require class="form-control"></textarea>
                    <b> Debes separar las enfermedades con una coma </b>
                </div>
            </div>
            
            <div class="row mb-2">
            <div class="col">
                <input type="datetime-local" name="sessionDate" id="sessionDate" require class="form-control" />
            </div>
            <div class="col">
                <input type="text" name="duration" id="duration" placeholder="Duración de la sesión" require class="form-control" />
            </div>
        </div>

        

            <button class="btn btn-success"> Registrar </button>
        </form>
    </div>
</body>

</html>