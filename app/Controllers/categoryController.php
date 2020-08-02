<?php namespace App\Controllers;

use App\Models\ProductModel;

class category extends BaseController
{
	public function index()
	{
		return view('inferno');
	}

	//--------------------------------------------------------------------

	public function agregar(){
		
		$productModel = new ProductModel();

		$nombre = $this->request->getPost('Nombre');
		$idcategoria = $this->request->getPost('Id_Categoria');
		$precioproducto = $this->request->getPost('Precio_Producto');

		$productModel->save([
			'Nombre'=>$nombre,
			'Id_Categoria'=>$idcategoria,
			'Precio_Producto'=>$precioproducto
		]);

		return redirect()->to(base_url('public/category'))->with('mensaje', 'animal registrado con éxito!');
	}

}