<?php namespace App\Controllers;

use App\Models\ProductModel;

class categoryController extends BaseController
{
	public function index()
	{
		$productModel = new ProductModel();
        $busqueda = $productModel->asObject()->findAll();
		$datosParaVista = array('category'=>$busqueda);
		
		return view('category', $datosParaVista);
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

		return redirect()->to(base_url('public/category'));
		
	}

	public function eliminar($Id_Producto){

		$productModel = new ProductModel();

		$productModel ->where('Id_Producto',$Id_Producto)->delete();

		return redirect()->to(base_url('public/category/'));

	}

	public function modificar($Id_Producto){

		$productModel = new ProductModel();

		$nombre = $this->request->getPost('Nombre2');
		$idcategoria = $this->request->getPost('Id_Categoria2');
		$precioproducto = $this->request->getPost('Precio_Producto2');


		$productModel->update($Id_Producto,[
			'Nombre'=>$nombre,
			'Id_Categoria'=>$idcategoria,
			'Precio_Producto'=>$precioproducto
		]);

		return redirect()->to(base_url('public/category/'));
		
	}

}