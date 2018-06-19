<?php
# @Date:   2018-06-19T09:41:27+02:00
# @Last modified time: 2018-06-19T10:27:47+02:00

//A manager is for the CRUD

class AvatarManager {
  private $_db;

  public function __construct($db){
    $this->setDb($db);
  }

  public function add(Avatar $avatar){
    //INSERT INTO
    $insert = $this->_db->prepare('INSERT INTO avatar(name, life, dammage, level, experience)
                                   VALUES(:name, :life, :dammage, :level, :experience)');

    $insert->bindValue(':name', $avatar->name());
    $insert->bindValue(':life', $avatar->life(), PDO::PARAM_INT);
    $insert->bindValue(':dammage', $avatar->dammage(),  PDO::PARAM_INT);
    $insert->bindValue(':level', $avatar->level(), PDO::PARAM_INT);
    $insert->bindValue(':experience', $avatar->experience(), PDO::PARAM_INT);

    var_dump($avatar->life());

    $insert->execute();
  }

  public function get($id){
    // SELECT
  }

  public function getList(){
    // SELECT ALL Avatar
  }

  public function update(Avatar $avatar){
    // UPDATE
  }

  public function delete(Avatar $avatar){
    // DELETE
    $this->_db->exec('DELETE FROM avatar WHERE id = '.$avatar->id());
  }

  public function setDb(PDO $db){
    $this->_db = $db;
  }
}
