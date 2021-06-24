<?php


$frase = "oi como vai voce eu vou muito obrigado bem obrigado";
$_n = 7;



function test($ff, $nn)
{
  $arr = array();
  $res = array();
  $elemento = "";

  $item = "";
  $j = 0;
  for($i = 0; $i < strlen($ff); $i++)
  {
    if($ff[$i] != ' ')$item = $item . $ff[$i];
    $j++;
    if($ff[$i] == ' ' || $j == $nn)
    {
      array_push($arr, $item);
      $item = "";
      $j = 0;
    }
    
  }
  if(strlen($item) > 0)array_push($arr, $item);

  
  for($i = 0;$i < count($arr); $i++)
  {
    if(strlen($arr[$i]) + 1 + strlen($elemento) <= $nn)
    {
      if(strlen($elemento) > 0) $elemento = $elemento . ' ';
      $elemento = $elemento . $arr[$i];
    }
    else
    {
      array_push($res, $elemento);
      if(strlen($elemento) > 0) $elemento = $elemento . ' ';
      $elemento = $arr[$i];
    }
  }
  if(strlen($elemento) > 0)array_push($res, $elemento);

  return $res;
}
  $oioi = array();
  $oioi =  test($frase, $_n);

  for($i = 0;$i < count($oioi); $i++)
  {
    echo $oioi[$i] . " - " . strlen($oioi[$i]) . '...<br>';
  }


?> 
	  