<?php 
namespace app\models;
abstract class BaseObject {
    protected $id;

    public function __construct($id = null) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }


    abstract public function findAll();
    abstract public function save();
    abstract public function getById($id);
    abstract public function update();
    abstract public function delete();
    abstract public function findAllPaginated($index, $count);
}