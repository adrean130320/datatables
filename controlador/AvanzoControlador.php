<?php
require_once 'modelo/AvanzoModelo.php';
/**
 *
 */
class AvanzoControlador
{
private  $model;
  function __construct()
  {
    $this->model=new AvanzoModelo();
  }
  public function listar()
  {
    return $this->model->listar();;
  }
}




 ?>
