<?php
# @Date:   2018-06-14T09:18:39+02:00
# @Last modified time: 2018-06-19T09:03:46+02:00

class Avatar{
  private $_id;
  private $_name;
  private $_life;
  private $_dammage;
  private $_level;
  private $_experience;


  const LOW_DAMMAGE = 20;
  const HIGH_DAMMAGE = 50;

  public function __constructor($startDammage){
    $this->setDammage($startDammage);
  }

  public static function speak(){
    echo "Hello there !";
  }
  public function showExperience(){
    echo "Experience : ". $this->_experience;
  }
  public function showLife(){
    echo "Life: " . $this->_life;
  }
  public function showDammage(){
    echo "Dammage: " . $this->_dammage;
  }
  public function gainExperience(){
    $this->_experience += 1;
  }
  public function hit(Avatar $whosIsHited){

    $whosIsHited->_life -= $this->_dammage;
  }
  public function setDammage(){
    if (in_array($dammage, [self::LOW_DAMMAGE, self::HIGH_DAMMAGE])) {
      $this->_dammage = $dammge;
    }


  }
}
