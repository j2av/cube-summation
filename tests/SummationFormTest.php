<?php

use App\Summation;

class SummationFormTest extends TestCase
{

  public function testInputView()
  {
    $this->visit("/input")
      ->see("Input");
  }

  public function testAnalyze()
  {
    $this->visit("/input")
      ->press("Analyze")
      ->assertViewHas("results")
      ->see('Output');

  }
}
