<?php namespace App\Models;

use CodeIgniter\Model;

class InfernoModel extends Model{

    protected $table= 'cliente';
    protected $primaryKey = 'Id_Cliente';

    protected $allowedFields = ['Nombre_Cliente','Telefono','Direccion','Contraseña','Correo'];
    

}