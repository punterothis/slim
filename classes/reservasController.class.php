<?php
class reservasController {
        private $resp = false;
        private function formatResponse($data){
          $this->resp = json_encode($data,false);
        }
        public function getResponse(){
          return $this->resp;
        }
		public function __construct(){
          $reservas = array(
            array(
              'id' => '678908',
              'bonoAgencia' => '7235678',
              'fecha' => '2014-11-24 15:00:00',
              'pickupplace' => 'ALC',
              'pickupName' => 'Aeropuerto de Alicante',
              'pickupdate' => '2014-12-15 09:00:00',
              'dropoffplace' => 'ALC',
              'dropoffName' => 'Aeropuerto de Alicante',
              'dropoffdate' => '2014-12-15 09:00:00',
              'grupo' => array(
                'codigo' => 'AA',
                'descripcion' => 'Ford Fiesta,Citroen DS',
                'categoria' => 'Economicos',
                'caracteristicas' => array(
                  'aire' => true,
                  'puertas' => 3,
                  'maletas' => 2
                ),
                'img' => array(
                  array(
                    'src' => 'https://s3-eu-west-1.amazonaws.com/goldcar/goldcarweb/img/grupos/AA/AA___Fiat_500.png',
                    'index' => 0,
                    'status' => 'active'
                  ),
                  array(
                    'src' => 'https://s3-eu-west-1.amazonaws.com/goldcar/goldcarweb/img/grupos/AA/AA___Opel_Adam.png',
                    'index' => 1,
                    'status' => ''
                  )
                )
              ),
              'estado' => 2,
              'total' => 120.50,
              'extras' => array(
                array(
                  'id' => '12',
                  'codigo' => 'BabySeat',
                  'descripcion' => 'Sillita de Bebe',
                  'cantidad' => 1,
                  'precio' => 8.50,
                  'total' => 8.50
                )
              ),
              'imagenes' => array(
                array(
                  'url' => '/images/slider/articulo.png',
                  'descr' => 'Grupo AA'
                ),
                array(
                  'url' => '/images/slider/articulo.png',
                  'descr' => 'Grupo AA'
                )
              )
            ),
            array(
              'id' => '678907',
              'fecha' => '2014-11-26 15:00:00',
              'pickupplace' => 'AGP',
              'pickupdate' => '2014-12-12 09:00:00',
              'grupo' => 'K',
              'estado' => 2
            ),
            array(
              'id' => '678909',
              'fecha' => '2014-11-22 15:00:00',
              'pickupplace' => 'BCN',
              'pickupdate' => '2014-11-23 09:00:00',
              'grupo' => 'CC',
              'estado' => 5
            )
          );
          $this->formatResponse($reservas);
        }
	}
?>
