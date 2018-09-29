<html>
<body>
<head>
  <link rel="stylesheet" href="/app/css/bootstrap.css">
  <link rel="stylesheet" href="/app/css/bootstrap-theme.css">
</head>


<h2>Registrar Nuevo Proyecto</h2>
<div class="container">

   
    <div class="row">
    <div class="form-group">
        <label for="reg_nombre" class="col-sm-4 control-label">Nombre del Proyecto:</label>
        <div class="col">
            <input name="text_reg_nombreproyecto" id="reg_nombreproyecto" class="form-control" type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="reg_empresa" class="col-sm-4 control-label">Empresa:</label>
        <div class="col">
            <input name="text_reg_empresa" id="reg_empresa" class="form-control" type="text">
        </div>
    </div>
    </div>

    <div class="row">
    <div class="form-group">
        <label for="reg_finicio" class="col-sm-4 control-label">Fecha Inicio:</label>
        <div class="col">
            <input name="text_reg_finicio" id="reg_finicion" class="form-control" type="date">
        </div>
    </div>
    <div class="form-group">
        <label for="reg_departamento" class="col-sm-4 control-label">Propietario o Representante:</label>
        <div class="col">
            <input name="text_reg_propietario" id="reg_propietario" class="form-control" type="text">
        </div>
    </div>
    </div>

<div class="row">
    <div class="form-group">
        <label for="reg_ffinalizacion" class="col-sm-4 control-label">Fecha Finalizacion:</label>
        <div class="col">
            <input name="text_reg_ffinalizacion" id="reg_ffinalizacion" class="form-control" type="date">
        </div>
    </div>
    <div class="form-group">
        <label for="reg_direccion" class="col-sm-4 control-label">Direccion:</label>
        <div class="col">
            <input name="text_reg_direccion" id="reg_direccion" class="form-control"  type="text">
        </div>
    </div>
    </div>
    <div class="row">
    <div class="form-group">
        <label for="reg_tproyecto" class="col-sm-4 control-label">Tipo de Proyecto:</label>
        <div class="col">
            <input name="text_reg_proyecto" id="reg_proyecto" class="form-control"  type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="reg_telefono" class="col-sm-4 control-label"> Telefono:</label>
        <div class="col">
            <input name="text_reg_telefono" id="reg_telefono" class="form-control"  type="text">
        </div>
    </div>
    </div>
      <div class="row">
    <div class="form-group">
        <label for="reg_lprogramacion" class="col-sm-4 control-label">Lenguaje Programacion:</label>
        <div class="col">
            <input name="text_reg_lprogramacion" id="reg_lprogramacion" class="form-control"  type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="reg_eproyectio" class="col-sm-4 control-label">Encargado del Proyecto:</label>
        <div class="col">
            <input name="text_reg_eproyecto" id="reg_eproyecto" class="form-control"  type="text">
        </div>
    </div>
    </div>
            <input class="btn btn-default" name="btnguardar" type="submit" value="Registrar Nuevo Empleado">
            <input class="btn btn-default" name="btnenviar" type="submit" value="Guardar Proyecto">
    </div>

</div>
<script src="/app/js/bootstrap.js"></script>
</body>
</html>