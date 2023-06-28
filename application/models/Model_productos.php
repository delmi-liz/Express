<?php
class Model_Productos extends CI_Model
{
    public function guardarProductos($nombre, $descripcionProducto, $ExistenciaProducto, $precio, $usuarioAdiciono, $ip, $fecha)
    {

        $this->load->database();

        $query = $this->db->query("
      
        insert into RpCatProductos(
         nombre,
         descripcionProducto,
         ExitenciaProducto,
         precio,
         usuarioIngreso,
         fechaIngreso,
         idEstados,
         ipIngreso
         )values(
           '" . $nombre . "',
           '" . $descripcionProducto . "',
           '" . $ExitenciaProducto . "',
           '" . $precio . "',
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
    
        select prod.idProductos, prod.nombre, prod.descripcionProducto, prod.ExitenciaProducto, 
        prod.precio, prod.usuarioIngreso, prod.fechaIngreso, prod.ipIngreso, est.Nombrestado
        from RpCatProductos as prod 
        inner join Estados est    
        where est.Nombrestado = 'Activo'
    
          ");
        return $query->result();
    }
}

