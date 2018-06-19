<?php
# @Date:   2018-06-19T09:01:09+02:00
# @Last modified time: 2018-06-19T09:40:26+02:00

// Questions que l'on doit se poser pour établir le plan de notre classe :
//   Quelles seront les caractéristiques de mes objets ?
//   Quelles seront les fonctionnalités de mes objets ?

class Avatar{
  private $_id;
  private $_name;
  private $_life;
  private $_dammage;
  private $_level;
  private $_experience;


//==========================================
// Cette fonction est très importante,
// vous la retrouverez dans de nombreux codes (parfois sous des formes différentes)
// provenant de plusieurs développeurs. Gardez-là donc dans un coin de votre tête.

  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value){
      $method = 'set'.ucfirst($key);

      if (method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }
//==========================================

  // Liste des getters
  public function id(){
      return $this->_id;
  }
  public function name(){
      return $this->_name;
  }
  public function life(){
      return $this->_life;
  }
  public function dammage(){
    return $this->_dammage;
  }
  public function level(){
    return $this->_level;
  }
  public function experience(){
    return $this->_experience;
  }

  // Liste des setters
  public function setId($id){
    // On convertit l'argument en nombre entier.
    $id = (int) $id;

    // On vérifie ensuite si ce nombre est bien strictement positif.
    if ($id > 0)
    {
      // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
      $this->_id = $id;
    }
  }

  public function setName($name){
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($name))
    {
      $this->_name = $name;
    }
    }
  public function setLife($life){
    $life = (int) $life;

    if ($life >= 1 && $life <= 100)
    {
      $this->_life = $life;
    }
  }
  public function setDammage($dammage){
    $dammage = (int) $dammage;

    if ($dammage >= 0 && $dammage <= 100)
    {
      $this->_dammage = $dammage;
    }
  }
  public function setLevel($level){
    $level = (int) $level;

    if ($level >= 1 && $level <= 200)
    {
      $this->_level = $level;
    }
  }
  public function setExperience($experience){
    $experience = (int) $experience;

    if ($experience >= 1 && $experience <= 100)
    {
      $this->_experience = $experience;
    }
  }

}
