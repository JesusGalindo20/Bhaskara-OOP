<?php
include_once 'class.php';
echo '<pre>';

$dado = new dados;

$dado->a=(int)$_POST['a'];
$dado->b=(int)$_POST['b'];
$dado->c=(int)$_POST['c'];

$dado->entrada();

// ==================================
$delta = new delta;

$delta->b=$dado->b;
$delta->a=$dado->a;
$delta->c=$dado->c;

$delta->cal_delta();



// ==================================
$x = new xs;

$x->a=$dado->a;
$x->b=$dado->b;
$x->delta=$delta->ReDelta;

$x->x1();
$x->x2();


// ==================================
$dado->delta=$delta->ReDelta;
$dado->x1=$x->x1;
$dado->x2=$x->x2;

$dado->saida();

var_dump($dado);

?>