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

		return redirect()->to(base_url('public/category'))->with('mensaje', 'El producto ha sido registrado con éxito!');
	}

	public function eliminar($id){

		$productModel = new ProductModel();

		$productModel ->where('id',$id)->delete();

		return redirect()->to(base_url('public/category/'));

	}

	public function modificar($id){

		$productModel = new ProductModel();

		$nombre = $this->request->getPost('Nombre');
		$idcategoria = $this->request->getPost('Id_Categoria');
		$precioproducto = $this->request->getPost('Precio_Producto');


		$productModel->update([
			'Nombre'=>$nombre,
			'Id_Categoria'=>$idcategoria,
			'Precio_Producto'=>$precioproducto
		]);

		return redirect()->to(base_url('public/category/'));
		
	}

}