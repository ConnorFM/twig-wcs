<?php
require ('../vendor/autoload.php');

$products=array('products'=>[['name'=>'product1'], ['name'=>'product2'],['name'=>'product3'], ['name'=>'product4'],['name'=>'product5']]);


$loader = new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader);
echo $twig->render('index.html.twig',$products);
