<?php
class viaje{
    private $codigo;
    private $destino;
    private $cantPasajeros;
    private $pasajerosViaje=[];

public function __construct($codigo,$destino,$cantPasajeros)
{
    $this->codigo=$codigo;
    $this->destino=$destino;
    $this->cantPasajeros=$cantPasajeros;
    
    
}    
public function getCodigo(){
    return $this->codigo;
}
public function setCodigo($codigo){
    $this->codigo=$codigo;
}
public function getDestino(){
    return $this->destino;
}
public function setDestino($destino){
    $this->destino=$destino;
}
public function getCantPasajeros(){
    return $this->cantPasajeros;
}
public function setCantPasajeros($cantPasajeros){
    $this->cantPasajeros=$cantPasajeros;
}
public function getPasajerosViaje(){
    return $this->pasajerosViaje;
}
public function setPasajerosViaje($pasajerosViaje){
    $this->pasajerosViaje=$pasajerosViaje;
}
public function __toString()
{
    return "El codigo del viaje es: ".$this->getCodigo()."\n"."El destino es: ".$this->getDestino()."\n"."La cantidad de pasajeros es: ".$this->getCantPasajeros();

}
public function agregarPasajero($pasajero){
    
    $arrayNuevo = $this->getPasajerosViaje();
    array_push($arrayNuevo, $pasajero);
    $this->setPasajerosViaje($arrayNuevo);

    
    return $this->getPasajerosViaje();
}
public function quitarPasajero($pasajero){
    
    $arregloPasajeros=$this->getPasajerosViaje();
    $n=count($arregloPasajeros);

    for($i=0;$i<$n;$i++){
        if($pasajero==$arregloPasajeros[$i]["dni"]){
            array_splice($arregloPasajeros,$i,1);
            $this->setPasajerosViaje($arregloPasajeros);
            
        }
    }
    return $arregloPasajeros;
}
public function modificarDatosPasajero($pasajero, $pasajero2){
    $arregloPasajeros=$this->getPasajerosViaje();
    $n=count($arregloPasajeros);
    for($i=0;$i<$n;$i++){
        if($pasajero==$arregloPasajeros[$i]["dni"]){
            array_splice($arregloPasajeros,$i,1);
            array_push($arregloPasajeros,$pasajero2);
            $this->setPasajerosViaje($arregloPasajeros);
            print_r($arregloPasajeros);
        }
    }
    return $arregloPasajeros;

}
}
