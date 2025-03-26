<?php
namespace app\models;


require_once 'app/models/GenericClass.php';
use app\models\GenericClass;
class CaisseModel extends GenericClass
{
    private $idCaisse;
    private $idAchat;


    public function __construct($id = null , $idCaisse = null , $idAchat = null) 
    {
            parent::__construct($id);
            $this->setidCaisse($idCaisse);
            $this->setIdAchat($idAchat);
    }
   
    public function setIdCaisse($idCaisse){
        $this->idCaisse=$idCaisse;
    }
    public function setIdAchat($idAchat){
        $this->idAchat=$idAchat;
    }
    public function getIdCaisse(){
        return $this->idCaisse;
    }
    public function getIdAchat(){
        return $this->idAchat;
    }
}
?>
