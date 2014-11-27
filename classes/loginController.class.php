<?php
class loginController {
  private $resp = false;
  private function formatResponse($data){
    $this->resp = json_encode($data,false);
  }
  public function getResponse(){
    return $this->resp;
  }
  public function __construct(){
    $auth = array(
      'id' => 'jk2l3n4hkh4n3rjk34nrtjk3tjkbjktb3kl4tbkj34btuk34<F3>jbt',
      'user' => 'mlopez',
      'nombre' => 'Margarita Lopez Lopez' 
    );
    $this->formatResponse($auth);
  }
}
?>
