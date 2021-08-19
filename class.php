<?php

class dados
{
   function entrada()
   {
      $this->a;
      $this->b;
      $this->c;
   }

   function saida()
   {
    $this->delta;
    $this->x1;
    $this->x2;
   }
}



class delta
{
  function cal_delta()
    { 
      $this->ReDelta = ($this->b * $this->b) - (4 * $this->a * $this->c);
    }
}

class xs
{
  function x1()
  {
    $this->x1= (- $this->b + sqrt($this->delta)) / (2 * $this->a);
  }

  function x2()
  {
    $this->x2= (- $this->b - sqrt($this->delta)) / (2 * $this->a);
  }
}

 ?>