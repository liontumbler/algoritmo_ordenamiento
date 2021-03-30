<?php 
class organizar
{
  private $limite=0;
  private $narray= array();
  private $marray= array();

  private $o=0;

  public function burbuja($array,$i2,$x2)
  {   
    $tmn=count($array);
    $i=$i2;
    $x=$x2;

    if($x<$tmn&&$x>=0&&$i<$tmn&&$i>=0&&($i+1)<$tmn){

      if($array[$i] > $array[$i+1]){
          $tmp         = $array[$i];
          $array[$i]   = $array[$i+1];
          $array[$i+1] = $tmp;

          $i=$i+1;
          $this->burbuja($array,$i,$x);
          
      }else{
        $i=$i+1;
        $this->burbuja($array,$i,$x);
      }

      $limite=$tmn-$x-1;
      if ($i==$limite) {
        $x++;
        $this->burbuja($array,0,$x);
      }

      if($x==$tmn-1&&$i==$limite) {
        $this->narray=$array;

        echo "<br><br>este es el array organizado de menor a mayor<br>";
        print_r($this->narray);

        $this->o=count($this->narray);
        $this->mayor_menor($this->narray);
      }

    }

  }

  public function mayor_menor($array)
  {
    if ($this->o!=0) {
      array_push($this->marray, $array[$this->o-1]);
      $this->o--;
      $this->mayor_menor($array);
    }else{
      echo "<br><br>este es el array organizado de mayor a menor<br>";
      print_r($this->marray);
    }
  }

}// end class




$array_ver = array(15,1,3,8,24,31,5,9,10,2,0,45,300,23,45,23,45,1234545,34545,8,9,6,7,90);

echo "este es el array <br>";
print_r($array_ver);

$org=new organizar();
$org->burbuja($array_ver,0,0);






?>
