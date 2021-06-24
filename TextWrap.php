<?php

namespace Drupal\textwrap;

/**
 * Implemente sua resolução nessa classe.
 *
 * Depois disso:
 * - [ ] Crie um PR no github com seu código
 * - [ ] Veja o resultado da correção automática do seu código
 * - [ ] Commit até os testes passarem
 * - [ ] Passou tudo, melhore a cobertura dos testes
 * - [ ] Ficou satisfeito, envie seu exercício para a gente! <3
 *
 * Boa sorte :D
 */

class TextWrap implements TextWrapInterface 
{
  /**
   * {@inheritdoc
   * }
   */

  public function wrap(string $text, int $length): array 
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
}