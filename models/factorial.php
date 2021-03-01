<?php
class factorial_model{
    private $data;
 
    public function __construct(){
        $this->data=array();
    }

    public function factorial($datos){
        $n=intval($datos['numero']);
        $f = 1;
        $proceso="";
        for ($i = $n; $i >= 1; $i--){ 
          $f = $f * $i;
          if($i==$n){
            $proceso.=$i;
          } else{
            $proceso.=" * ".$i;
          }
        } 
        $this->data['numero']=$datos['numero'];
        $this->data['resultado']=$f;
        $this->data['proceso']=$proceso;

        return $this->data;
    }
}
?>
