<?php

class ControladorPlantilla
{
	/*Llamamos a la plantilla*/

	public function plantilla()
	{
		include "vistas/plantilla.php";
	}



	/* Traemos los estilos dinaminos de la plantilla*/
	public function ctrEstiloPlantilla()
	{
		$tabla="plantilla";

		$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

		return $respuesta;

	}

	
}