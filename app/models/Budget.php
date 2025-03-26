<?php

namespace app\models;


require_once 'app/models/GenericClass.php';

use app\connection\UtilDb;
use app\models\GenericClass;
use PDO;
use PDOException;

class Budget extends GenericClass
{
    protected $idRubrique;
    protected $prevision;
    protected $realisation;
    protected $ecart;
    protected $validation;

    public function __construct($id = null, $idRubrique = null, $prevision = null, $realisation  = null, $ecart = null, $validation = null)
    {
        parent::__construct($id);
        $this->setIdRubrique($idRubrique);
        $this->setPrevision($prevision);
        $this->setRealisation($realisation);
        $this->setEcart($ecart);
        $this->setValidation($validation);
    }
    public function getIdRubrique()
    {
        return $this->idRubrique;
    }
    public function setIdRubrique($idRubrique)
    {
        $this->idRubrique = $idRubrique;
    }
    public function getPrevision()
    {
        return $this->prevision;
    }
    public function setPrevision($prevision)
    {
        $this->prevision = $prevision;
    }
    public function getRealisation()
    {
        return $this->realisation;
    }
    public function setRealisation($realisation)
    {
        $this->realisation = $realisation;
    }
    public function getEcart()
    {
        return $this->ecart;
    }
    public function setEcart($ecart)
    {
        $this->ecart = $ecart;
    }
    public function getValidation()
    {
        return $this->validation;
    }
    public function setValidation($validation)
    {
        $this->validation = $validation;
    }

    public function getBudgetInitial($annee, $mois)
    {
        $mois--;
        if($mois < 1){
            $mois=12;
            $annee--;
        }

        $tempPeriode = new Periode();
        $listePeriode = $tempPeriode->findAll();
        $budgetInitial = new Budget(null,0,0,0,0,false);

        foreach ($listePeriode as $periode) {
            if ($periode->getMois() == $mois && $periode->getAnnee() == $annee) {
                $budget = new Budget();
                $budget = $budget->getById($periode->getId());
                if ($budget->getIdRubrique() == 6) {
                    if ($budget->getValidation()){
                        $$budgetInitial = $budget;
                        break;
                    }
                }
                if($budget->getValidation()==6){
                    $budgetInitial = $budget;
                }
            }
        }
        return $budgetInitial;
    }
}
