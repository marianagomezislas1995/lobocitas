<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language ="javascript" src="validacion.js"></script>


<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->

</style>





</head>


<body  bgcolor="#F7FFE9" background="registro.jpg">

<?php 
 
 if (!IsSet($_POST['btnEnviar'])) 
   {
?>

<div align="center" class="style1">REGISTRO DE USUARIOS
</div>
<form action="registro.php" method="post" name="form" id="form" onSubmit="return validacion();">
<table width="600" border="0" align="center">
  <tr>
    <td width="150">Nombre</td>
    <td><input name="txtNombre" type="text" id="txtNombre" size="30" maxlength="60"></td>
	<td width="300"><div id="error-name"></div></td>
  </tr>
  <tr>
    <td>Apellido Paterno</td>
    <td><input name="txtApellidoP" type="text" id="txtApellidoP" size="30" maxlength="60"></td>
	<td><div id="error-paterno"></div></td>
  </tr>
  <tr>
    <td>Apellido Materno</td>
    <td><input name="txtApellidoM" type="text" id="txtApellidoM" size="30" maxlength="60"></td>
	<td><div id="error-materno"></div></td>
  </tr>
  <tr>
    <td>Sexo</td>
    <td><select name="txtSexo" id="txtSexo">
	<option selected disabled value="ninguno">Sexo</option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
        </select> 
    </td>
	<td><div id="error-sexo"></div></td>
  </tr>
  <tr>
    <td>Correo electronico</td>
    <td><input name="txtEmail" type="text" id="txtEmail" size="30" maxlength="60"></td>
	<td><div id="error-correo"></div></td>
  </tr>
  <tr>
    <td>Fecha de Nacimiento</td>
    <td><input name="txtFechaN" type="text" placeholder="ej. 1995/08/25"  id="txtFechaN" size="30" maxlength="60"></td>
	<td><div id="error-fecha"></div></td>
  </tr>
  <tr>
    <td>Contrase&ntilde;a</td>
    <td><input name="txtPass" type="password" id="txtPass" size="30" maxlength="60"></td>
	<td><div id="error-pass"></div></td>
  </tr>
  <tr>
  <tr>
    <td>Comfirmar contrase&ntilde;a</td>
    <td><input name="txtPass2" type="password" id="txtPass2" size="30"  maxlength="60"></td>
	<td><div id="error-pass2"></div></td>
  </tr>
  <tr>
	<textarea name="txtDescripcion" cols="30" rows="3">Escribe aqu&iacute; tu opini&oacute;n o sugerencia...</textarea>
  </tr>
  <tr height="15"></tr>

  <tr>
    <td><input name="btnLimpiar" type="reset" id="btnLimpiar" value="Limpiar Formulario"></td>
    <td><input name="btnEnviar" type="submit" id="btnEnviar" value="Enviar Datos"></td>
  </tr>
</table>
</form>
<?php 
}
else
 {
   $nombre=$_POST["txtNombre"];
   $apellidoP=$_POST["txtApellidoP"];
   $apellidoM=$_POST["txtApellidoM"];
   $sexo=$_POST["txtSexo"];
   $correo=$_POST["txtEmail"];
   $fechaN=$_POST["txtFechaN"];
   $descripcion=$_POST["txtDescripcion"];
   $pass=$_POST["txtPass"];


   $mysqli = new mysqli('127.0.0.1', 'root', '', 'lobo_citas');
   $sql = "INSERT INTO usuarios(nombre,apellidoP,apellidoM,sexo,correo,fechaNacimiento,descripcion,password) VALUES('".
            $nombre."','".$apellidoP."','".$apellidoM.
      "','".$sexo."','".$correo."','".$fechaN."','".$descripcion."','".$pass."');";

  $mysqli->query($sql);

  $mysqli->close();
   
}
 ?>

</body>
</html>
