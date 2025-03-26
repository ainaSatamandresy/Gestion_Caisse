<?php
namespace app\models;

require_once 'app/models/BaseObject.php';
use app\models\BaseObject;
use app\connection\UtilDb;
use PDO;
use PDOException;
use ReflectionClass;
use ReflectionProperty;


class GenericClass extends BaseObject {

    public function __construct($id = null) {
        parent::__construct($id); // Appel du constructeur de la classe parente
    }

    /**
     * Retourne le nom de la table en fonction du nom de la classe (sans le namespace).
     */
    protected function getTableName() {
        $className = (new ReflectionClass($this))->getShortName(); // Nom de la classe sans namespace
        return ($className); // Nom de la table en minuscules
    }

    /**
     * Retourne les propriétés déclarées dans la classe parente (BaseObject).
     */
    protected function getDeclaredFields() {
        $fields = [];
        $seenNames = [];
        $reflection = new ReflectionClass($this);
    
        do {
            foreach ($reflection->getProperties(
                ReflectionProperty::IS_PUBLIC |
                ReflectionProperty::IS_PROTECTED |
                ReflectionProperty::IS_PRIVATE
            ) as $property) {
                $name = $property->getName();
                if (!isset($seenNames[$name])) {
                    $fields[] = $property;
                    $seenNames[$name] = true;
                }
            }
            $reflection = $reflection->getParentClass();
        } while ($reflection);
    
        return $fields;
    }
    

    public function findAll() {
        $tableName = $this->getTableName(); // Utilisation de getTableName()
        $sql = "SELECT * FROM $tableName";
        $pdo = UtilDb::getCon();

        try {
            $stmt = $pdo->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $objects = [];
            foreach ($result as $row) {
                $obj = new static(); // Crée une instance de la classe courante
                foreach ($row as $columnName => $value) {
                    if (property_exists($obj, $columnName)) {
                        $obj->$columnName = $value;
                    } else {
                        echo "Field not found: $columnName\n";
                    }
                }
                $objects[] = $obj;
            }

            return $objects;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des données : " . $e->getMessage();
            throw $e;
        }
    }

    public function save() {
        $tableName = $this->getTableName(); // Utilisation de getTableName()
        $pdo = UtilDb::getCon();

        $fields = [];
        $placeholders = [];
        $values = [];

        // Parcours des propriétés déclarées dans la classe parente (BaseObject)
        foreach ($this->getDeclaredFields() as $property) {
            $property->setAccessible(true);
            $fieldName = $property->getName();

            if ($fieldName === 'id' && $this->id === null) {
                continue; // Ignore l'ID s'il est null (auto-incrément)
            }

            $fields[] = $fieldName;
            $placeholders[] = '?';
            $values[] = $property->getValue($this);
        }

        if (empty($fields)) {
            throw new PDOException("Aucune colonne à insérer (peut-être un problème avec les champs de la classe).");
        }

        $sql = "INSERT INTO $tableName (" . implode(', ', $fields) . ") VALUES (" . implode(', ', $placeholders) . ")";
        echo "Requête SQL générée : $sql\n";

        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute($values);

            if ($stmt->rowCount() > 0) {
                $this->id = $pdo->lastInsertId();
                echo "$tableName ajouté avec succès !\n";
            }
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout : " . $e->getMessage();
            throw $e;
        }
    }

    public function getById($id) {
        $tableName = $this->getTableName(); // Utilisation de getTableName()
        $sql = "SELECT * FROM $tableName WHERE id = ?";
        $pdo = UtilDb::getCon();

        echo "Requête SQL générée : $sql\n";

        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                $obj = new static(); // Crée une instance de la classe courante
                foreach ($row as $columnName => $value) {
                    if (property_exists($obj, $columnName)) {
                        $obj->$columnName = $value;
                    } else {
                        echo "Champ non trouvé : $columnName\n";
                    }
                }
                return $obj;
            } else {
                echo "Aucun résultat trouvé avec l'ID : $id\n";
                return null;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération par ID : " . $e->getMessage();
            throw $e;
        }
    }

    public function update() {
        $tableName = $this->getTableName(); // Utilisation de getTableName()
        $pdo = UtilDb::getCon();

        $fields = [];
        $values = [];

        // Parcours des propriétés déclarées dans la classe parente (BaseObject)
        foreach ($this->getDeclaredFields() as $property) {
            $property->setAccessible(true);
            $fieldName = $property->getName();

            if ($fieldName !== 'id' && $property->getValue($this) !== null) {
                $fields[] = "$fieldName = ?";
                $values[] = $property->getValue($this);
            }
        }

        if (empty($fields)) {
            throw new PDOException("Aucune colonne à mettre à jour.");
        }

        $sql = "UPDATE $tableName SET " . implode(', ', $fields) . " WHERE id = ?";
        $values[] = $this->id;

        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute($values);

            if ($stmt->rowCount() == 0) {
                throw new PDOException("Aucune ligne mise à jour. Vérifiez l'ID.");
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
            throw $e;
        }
    }

    public function delete() {
        $tableName = $this->getTableName(); // Utilisation de getTableName()
        $pdo = UtilDb::getCon();

        if ($this->id == 0) {
            throw new PDOException("L'ID de l'objet n'est pas défini.");
        }

        $sql = "DELETE FROM $tableName WHERE id = ?";
        echo "Requête SQL générée : $sql\n";

        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$this->id]);

            if ($stmt->rowCount() > 0) {
                echo "$tableName supprimé avec succès !\n";
            } else {
                echo "Aucun $tableName trouvé avec l'ID spécifié.\n";
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression : " . $e->getMessage();
            throw $e;
        }
    }

    public function findAllPaginated($index, $count) {
        $tableName = $this->getTableName(); // Utilisation de getTableName()
        $sql = "SELECT * FROM $tableName LIMIT ? OFFSET ?";
        $pdo = UtilDb::getCon();

        echo "Requête SQL générée : $sql\n";

        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$count, $index]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $objects = [];
            foreach ($result as $row) {
                $obj = new static(); // Crée une instance de la classe courante
                foreach ($row as $columnName => $value) {
                    if (property_exists($obj, $columnName)) {
                        $obj->$columnName = $value;
                    } else {
                        echo "Field not found: $columnName\n";
                    }
                }
                $objects[] = $obj;
            }

            return $objects;
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des données paginées : " . $e->getMessage();
            throw $e;
        }
    }
}