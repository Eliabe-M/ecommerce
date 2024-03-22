<?php
class DBService
{
    private $conexao;
    public function __construct($conexao)
    {
        $this->conexao = $conexao->conectar();
    }
    public function createDB($table, $fields, $values)
    {
        $fieldsStr = implode(',', $fields);
        $valuesStr = implode(',', array_fill(0, count($values), '?'));

        $query = "INSERT INTO $table ($fieldsStr) VALUES ($valuesStr);";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute($values);
    }
    public function readDB($table)
    {
        $query = "SELECT * FROM $table";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateDB($table, $fields, $values, $field, $value)
    {
        $fieldsStr = implode('=?,', $fields) . '=?';
        $query = "UPDATE $table SET $fieldsStr WHERE $field = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array_merge($values, [$value]));
    }
    public function deleteDB($table, $field, $value)
    {
        $query = "DELETE FROM $table WHERE $field = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute([$value]);
    }
    public function getByAtributeDB($table, $attribute, $value) {
        $query = "SELECT * FROM $table WHERE $attribute = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute([$value]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
