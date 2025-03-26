<?php
namespace app\models;


require_once 'app/models/GenericClass.php';
use app\models\GenericClass;
class DepartementUtilisateur extends GenericClass
{
    protected $idDepartement;
    protected $idUtilisateur;


    public function __construct($id = null , $idDepartement = null , $idUtilisateur = null) 
    {
            parent::__construct($id);
            $this->setIdDepartement($idDepartement);
            $this->setIdUtilisateur($idUtilisateur);
    }
    public function setIdUtilisateur($idDepartement){
        $this->idDepartement=$idDepartement;
    }
    public function setIdDepartement($idDepartement){
        $this->idDepartement=$idDepartement;
    }
    public function getIdUtilisateur(){
        return $this->idUtilisateur;
    }
    public function getIdUlisateur (){
        return $this->idUtilisateur;
    }
}
?>
