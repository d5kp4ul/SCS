

<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['user']==1) {
  header("Location:asesor.php");
}
    require("conexion.php");
  $query = "SELECT id, nombre FROM departamento ORDER BY nombre";
  $resultado=$mysqli->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asesor Creditos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="font-awesome.css">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">
  <link rel="stylesheet" href="main.css">

  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/fontawesome-all.min.js"></script>
  <script language="javascript" src="../js/jquery-3.1.1.min.js"></script>
  <script language="javascript" src="../js/jquery-2.1.4.js"></script>
  <script language="javascript">
			$(document).ready(function(){
				$("#cbx_estado").change(function () {

					$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_estado option:selected").each(function () {
						id = $(this).val();
						$.post("getMunicipio.php", { id: id }, function(data){
							$("#cbx_municipio").html(data);
						});            
					});
				})
			});
			
			$(document).ready(function(){
				$("#cbx_municipio").change(function () {
					$("#cbx_municipio option:selected").each(function () {
						municipio_id = $(this).val();
						$.post("getLocalidad.php", { municipio_id: municipio_id }, function(data){
							$("#cbx_localidad").html(data);
						});            
					});
				})
			});
		</script>
    <nav class="navbar navbar-light" style="background-color: #2980B9;">
    <h4 class="text-white">Bienvenid@: <?php echo $_SESSION['user'];?></h4>
  <form class="form-inline my-2 my-lg-0" method="post" action="cerrarsesion.php">

      <!--<button type="button" class="btn btn-dark">Bienvenid@: <?php echo $_SESSION['user'];?></button>
      <button class="btn btn btn-dark my-2 my-sm-0" type="submit">Salir</button>-->
  </form>
   </nav>

 
</head>
<body>
<!--Menu-->
<div id="vcliente">
<form action="cliente.php" method="post">
<div class="container-fluid">
   <div class="row">
    <div class="col-lg-3">
  
    <div class="menu">
    <ul>
      <li><a name="use" href=""><span class="fas fa-child"></span> SICUA</a></li>
      
      <li><a href=""><span class="fas fa-users"></span> Registrar Socios</a>
        <ul>
          <li><a href="asesor.php"><span class="fa fa-plus"></span> Nuevo </a></li>
          <li><a href="updateA.php"><span class="fa fa-edit"></span> Actualizar</a></li>
        </ul>
      </li>
      <li><a href=""><span class="fas fa-file-alt"></span> Solicitud Credito</a>
         <ul>
          <li><a href="solicitud.php"><span class="fa fa-plus"></span> Crear Solicitud </a></li>
          <li><a href="estadoSoli.php"><span class="fa fa-edit"></span> Status Solicitud </a></li>
        </ul>

      </li>

      <li><a href=""><span class="fab fa-btc"></span> Ahorros</a>
         <ul>
          <li><a href="ahorro.php"><span class="fa fa-plus"></span> Crear Cuenta Ahorro </a></li>
          <li><a href="infantil.php"><span class="fa fa-edit"></span> Ahorro Infantil </a></li>
          <li><a href=""><span class="fa fa-edit"></span> Status Ahorro </a></li>
        </ul>
      </li>
      <li><a href="pdfsolicitud.php">Contacto</a></li>
      <li><a href="cerrarsesion.php"><span class="fa fa-home"></span> Cerrar Sesion </a></li>
    </ul>
    
  </div>
    </div>
          <!---Primer Bloque Registro clientes-->
    <div class="col-xs-6 col-sm-3">
    <br>
    <h5>Registrar Cliente</h5>
       <div class="col-lg-10">
       <input value="<?php echo $_SESSION['user'];?>" name="empleado" type="hidden" class="form-control form-control-sm" id="validationServer01" required>
        </div> 
    <hr>
        <div class="form-group">
        <div class="col-lg-10">
        <label>DPI</label>
        <input name="dpi" type="number" class="form-control-sm form-control" id="validationServer01" pattern="[0-9]{13,13}" title="Username should only contain lowercase letters. e.g. john" placeholder="0000000000000" required>
        </div>
         <div class="col-lg-10">
        <label>Lugar Emisión</label>
        <input name="emision" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
         <div class="col-lg-10">
        <label>NIT</label>
        <input name="nit" type="number" class="form-control form-control-sm" id="validationServer01" pattern="[0-9]{8}"  required>
        </div>
         <div class="col-lg-10">
        <label>Primer Nombre</label>
        <input name="nom1" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
         <div class="col-lg-10">
        <label>Segundo Nombre</label>
        <input name="nom2" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        <div class="col-lg-10">
        <label>Primer Apellido</label>
        <input name="ape1" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
         <div class="col-lg-10">
        <label>Segundo Apellido</label>
        <input name="ape2" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        <div class="col-lg-10">
        <label>Apellido Casada</label>
        <input name="apec" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
         </div>
      </div>
     <!---Segundo Bloque Registro clientes-->
       <br>
    <div class="col-xs-6 col-sm-3">
           <div class="form-group">
           <br><br><br>
        <div class="col-lg-10">
        <label>Fecha Nacimiento</label>
        <input name="nacimiento" type="date" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        <div class="col-lg-10">
        <label>Profesión u oficio</label>
        <input name="profesion" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
            <div class="col-lg-10">
        <label>Correo Electrónico</label>
        <input name="email" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        <div class="col-lg-10">
        <label>Estado Civil</label>
         <select name="civil" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Escoger...</option>
        <option value="Soltero">Soltero </option>
        <option value="Casado">Casado</option>
        <option value="Viud@">Viudo</option>
        <option value="Divorciado">Divorciado</option>
        </select>
        </div>
         <div class="col-lg-10">
        <label>Sexo</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="opcion" id="exampleRadios1" value="Hombre" checked>
          <label class="form-check-label" for="exampleRadios1">Hombre</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="opcion" id="exampleRadios1" value="Mujer">
          <label class="form-check-label" for="exampleRadios2">Mujer</label>
        </div>
        </div>
          <div class="col-lg-10">
        <label>Tipo Vivienda</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="vivi" id="exampleRadios1" value="Propia" checked>
          <label class="form-check-label" for="exampleRadios1">Propia</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="vivi" id="exampleRadios1" value="Alquilada">
          <label class="form-check-label" for="exampleRadios2">Alquilada</label>
        </div>
        </div>
             <div class="col-lg-10">
        <label>Tiempo de residir en la vivienda</label>
        <input name="vivienda" type="number" class="form-control form-control-sm" id="validationServer01" pattern="[0-9]{8}"  required>
        </div>

        
        </div>
       </div>

     <!---Tercer Bloque Registro clientes-->
     
<br>
     <div class="col-xs-6 col-sm-3">
         <br><br>
        <div class="form-group">
           <br>
             <div class="col-lg-10">
        <label>Número Telefono</label>
        <input name="tel5" type="number" class="form-control form-control-sm" id="validationServer01" pattern="[0-9]{8}"  required>
        </div>
       
         <div class="col-lg-10">
        <label>Número Telefono Casa</label>
        <input name="tel2" type="text" class="form-control form-control-sm" id="validationServer01" pattern="[0-9]{8}"  required>
        </div>
         <div class="col-lg-10">
        <label>Nacionalidad</label>
         <select name="nacion" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Escoger...</option>
        <option value="Guatemalteco">Guatemalteco</option>
        </select>
        </div>
          <div class="col-lg-10">
        <label>Dirección Domicilio</label>
        <input name="direcc" type="text" class="form-control form-control-sm" id="validationServer01" required>
        </div>
        <div class="col-lg-10">
        <label>Departamento</label>
        <select name="cbx_estado" class="custom-select mr-sm-2" id="cbx_estado">
				<option value="0">Departamento</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
				<?php } ?>
		</select>
        </div>     
         <div class="col-lg-10">
        <label>Municipio</label><br>
       <select class="custom-select mr-sm-2" name="cbx_municipio" id="cbx_municipio"><option selected>Escoger...</option></select>
        </div>     
        <div class="col-lg-10">
        <label>Aldea</label><br>
        <select class="custom-select mr-sm-2" name="cbx_localidad" id="cbx_localidad"> <option selected>Escoger...</option></select>
        </div>     
        <br>
        <div class="col-lg-9">
            <button id="bahorro" name="Gaurdar" type="submit" class="btn btn-outline-info">Guardar</button>

        </div>
        </div>
    </div>
      </div>
  </div>
  </form>
  </div>
<script src="../js/main.js"></script>

</body>
</html>