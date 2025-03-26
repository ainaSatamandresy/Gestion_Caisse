<?php
namespace app\models;


require_once 'app/models/GenericClass.php';
use app\models\GenericClass;
class Departement extends GenericClass
{

    protected $nom;
    public function __construct($id = null, $nom = null)
    {
            parent::__construct($id);
            $this->nom = $nom;
    }
    public function getNom (){
        return $this->nom;
    }
    public function setNom ($nom) {
        $this->nom = $nom;
    }
}
?>
