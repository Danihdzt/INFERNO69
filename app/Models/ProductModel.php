<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{

    protected $table= 'producto';
    protected $primaryKey = 'id';

    protected $allowedFields = ['Nombre','Id_categoria','Precio_Producto'];
    

}