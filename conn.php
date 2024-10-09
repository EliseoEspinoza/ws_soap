<?php 
class DB extends PDO{
    public function _contruct($dsn,$username=NULL,$pasword=NULL,$options=[]){
        $defauld_options = [
            PDO::ATTR_DEFAULD_FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
        ];
        $options = array_replace($defauld_options,$options);
        parent::__construct($dsn,$username,$pasword,$options);
    }

    public function run($sql,$args=Null){
        if($args){
            return $this->query($sql);
        }
        $stmt = $this->prepare($sql);
        $stmt->execute($args);
        $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
}
?>