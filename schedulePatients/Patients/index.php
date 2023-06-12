<?php
include('../config/config.php');
include('Patient.php');
$p = new Patient();

$allPatients= $p->getAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->remove($_GET['id']);
    if ($remove) {
    header('Location: index.php');
} else {
    $msj = " <div class='alert alert-danger' rol-'alert' > Error al eliminar agenda. </div> ";
}
}

?>
<DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title> Administrador de pacientes </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<?php include ('../menu.php') ?>
<div class="container">
<h2 class="text-center ab-5"> Lista pacientes </h2>

<div class="row">
    <?php
    while ($usuarios = mysqli_fetch_object($allPatients)) {
      
        echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5>Nombre: $usuarios->firstName  $usuarios->lastName </h5>";
                echo "<p><b>Correo:</b> $usuarios->email 
                <br>
                <b> Celular: </b>  $usuarios->phone
                </p>";
                echo " <p> <b>Fecha:</b> ".date("D", strtotime($usuarios->sessionDate)) . " " . date("d-M-Y H:i", strtotime($usuarios->sessionDate)). " </p> ";
        echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/Patients/edit.php?id=$usuarios->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/Patients/index.php?id=$usuarios->id' >Eliminar</a> </div>";
        echo " </div> ";
        echo "</div>";
    }
    ?>
    </div>

    </div>
    <body>

    </html>