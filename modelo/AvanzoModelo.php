<?php
require_once 'modelo/Conexion.php';
/**
 *
 */
class AvanzoModelo extends Conexion
{

  function __construct()
  {

  }

  public function listar()
  {
  $sql="select saba_id,saba_empresa,saba_estado_credito,saba_dif,saba_full_name from sabana";
  $datos=$this->conectar()->prepare($sql);
  $datos->execute();
  while ($filas[]=$datos->fetch(PDO::FETCH_OBJ)) { }
  $datos->closeCursor();
  $datos=null;
  return $filas;
}

public function informe($desde,$hasta)
{
  $sql="select saba_id,saba_empresa,saba_estado_credito,saba_dif,saba_full_name,saba_fecha_desembolso
  from sabana
  where saba_fecha_desembolso between :desde and :hasta";
  $datos=$this->conectar()->prepare($sql);
  bind_value(":desde",$desde);
  bind_value(":hasta",$hasta);
  $datos->execute();
  while ($filas[]=$datos->fetch(PDO::FETCH_OBJ)) { }
  $datos->closeCursor();
  $datos=null;
  return $filas;

}


  }






 ?>
