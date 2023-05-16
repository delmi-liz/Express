<?php
class Model_Productos extends CI_Model
{
    public function guardarProductos($descripcion, $existencia,  $precio, $nombre, $imagen, $usuarioAdiciono, $ip, $fecha)
    {

        $this->load->database();

        $query = $this->db->query("
      
        insert into RpCatProductos(
         descripcionProducto,
         ExitenciaProducto,
         Precio,
         Nombre,
         Imagen,
         usuarioIngreso,
         fechaIngreso,
         idEstados,
         ipIngreso
         )values(
          '" . $descripcion . "',
          '" . $existencia . "',
          '" . $precio . "',
          '" . $nombre . "',
          '" . $imagen . "',
          '" . $usuarioAdiciono . "',

           STR_TO_DATE('" . $fecha . "', '%d-%m-%Y %H:%i:%s'),
           1,
           '" . $ip . "'
           )
      
        ");
    }

    public function datosProductos()
    {
        $this->load->database();
        $query = $this->db->query("
    
        select prod.idProductos, prod.descripcionProducto, prod.ExitenciaProducto, prod.Precio, prod.Nombre, prod.imagen, prod.usuarioIngreso, prod.fechaIngreso, prod.ipIngreso, est.Nombrestado
        from RpCatProductos as prod 
        inner join Estados est    
        where est.Nombrestado = 'Activo'
    
          ");
        return $query->result();
    }
}
