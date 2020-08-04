<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model{

    protected $table= 'producto';
    protected $primaryKey = 'Id_Producto';

    protected $allowedFields = ['Nombre','Id_Categoria','Precio_Producto'];
    

}