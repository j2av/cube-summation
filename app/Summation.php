<?php

namespace App;

class Summation
{

  public function eval($lines)
  {
    $numberOfCases = $lines[0];
    $currentLine = 1;
    $output = array();
    for ($i = 0; $i < $numberOfCases; $i++) {
      list($n, $m) = explode(" ", $lines[$currentLine]);
      $matrix = array();      
      for ($j = $currentLine + 1; $j <= $currentLine + $m; $j++) {
        if (substr($lines[$j], 0, 6) === "UPDATE") {
          list($x, $y, $z, $w) = explode(" ", substr($lines[$j], 7));
          $matrix[$z][$x][$y] = $w;
        } else {
          list($x1, $y1, $z1, $x2, $y2, $z2) = explode(" ", substr($lines[$j], 6));
          $sum = 0;
          for ($a = $z1; $a <= $z2; $a++) {
            for($b = $x1; $b <= $x2; $b++) {
              for($c = $y1; $c <= $y2; $c++) {
                if (isset($matrix[$a][$b][$c])) {
                  $sum += $matrix[$a][$b][$c];
                }
              }
            }
          }
          $output[] = $sum;
        }
      }
      $currentLine += $m + 1;
    }
    return $output;
  }
}
