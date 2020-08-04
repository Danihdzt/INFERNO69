<?php namespace App\Controllers;

use App\Models\InfernoModel;


class infernoController extends BaseController
{
	public function index()
	{
		$infernoModel = new InfernoModel();
        $busqueda = $infernoModel->asObject()->findAll();
		$datosParaVista = array('inferno'=>$busqueda);
		
		return view('inferno', $datosParaVista);
	}

	//--------------------------------------------------------------------

	public function agregar(){
		
		$infernoModel = new InfernoModel();
		
		$nombreCliente = $this->request->getPost('Nombre_Cliente');
		$telefono = $this->request->getPost('Telefono');
		$direccion = $this->request->getPost('Direccion');
		$contraseña = $this->request->getPost('Contraseña');
		$correo = $this->request->getPost('Correo');

		$infernoModel->save([
			'Nombre_Cliente'=>$nombreCliente,
			'Telefono'=>$telefono,
			'Direccion'=>$direccion,
			'Contraseña'=>$contraseña,
			'Correo'=>$correo
		]);

		return redirect()->to(base_url('public/inferno'))->with('mensaje', 'El producto ha sido registrado con éxito!');
		
	}

	public function eliminar($Id_Cliente){

		$infernoModel = new InfernoModel();

		$infernoModel ->where('Id_Producto',$Id_Cliente)->delete();

		return redirect()->to(base_url('public/inferno/'));

	}

	public function modificar($Id_Cliente){

		$infernoModel = new InfernoModel();

		$nombreCliente = $this->request->getPost('Nombre_Cliente2');
		$telefono = $this->request->getPost('Telefono2');
		$direccion = $this->request->getPost('Direccion2');
		$contraseña = $this->request->getPost('Contraseña2');
		$correo = $this->request->getPost('Correo2');


		$infernoModel->update($Id_Cliente,[
			'Nombre_Cliente2'=>$nombreCliente,
			'Telefono2'=>$telefono,
			'Direccion'=>$direccion,
			'Contraseña'=>$contraseña,
			'Correo2'=>$correo
		]);

		return redirect()->to(base_url('public/inferno/'));
		
	}
}