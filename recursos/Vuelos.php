<?php
	include "/entidades/Recorrido.php";
	include "/entidades/Vuelo.php";
	
	class Recurso_Vuelos{
		public $precioPrimera;
		public $precioEconomy;
		public $idVuelo;
		public $fecha;
		public $asientos_disponibles;

		private $origen;
		private $destino;
		private $entidadRecorrido;
		private $entidadVuelo;

		public function __construct($origen, $destino) {
			$this->entidadRecorrido = new Entidad_Recorrido();
			$this->entidadRecorrido->setOrigen($origen);
			$this->entidadRecorrido->setDestino($destino);
			$this->entidadVuelo = new Entidad_Vuelo();
		}

		public function obtener(){
			$recursos = array();
			$recorrido = $this->entidadRecorrido->obtener();
			if(count($recorrido) > 0){
				$vuelos = $this->entidadVuelo->obtener($recorrido[0]['id_recorrido']);
				$recursos = array();
				foreach ($vuelos as $key => $value) {
					//TODO: null en constructor
					$recurso = new Recurso_Vuelos(null, null);
					$recurso->precioPrimera = $recorrido[0]['precio_primera'];
					$recurso->precioEconomy = $recorrido[0]['precio_economy'];
					$recurso->idVuelo = $value['id_vuelo'];
					$recurso->fecha = $value['fecha'];
					$recurso->asientos_disponibles = $value['asientos_disponibles'];

					array_push($recursos, $recurso);
				}
			}
			return $recursos;
		}

	}
?>