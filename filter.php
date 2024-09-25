<?php
//carrega as classes necessárias
include_once 'TExpression.class.php';
include_once 'TFilter.class.php';

//criar um filtro por data(string)
$filter=new TFilter('data','=','2007-06-02');
echo$filter1->dump();
echo "<br>\n";

//cria um filtro do salario (integer){
$filter2=new Tfilter('salario','>',3000);
echo $filter2->dump();
echo "<br>\n";

//cria um filtro por genero(array)
$filter3=new TFilter('genero','IN', ARRAY("M","F"));
echo "<br>\n";

//cria um filtro por contrato(NULL)
$filter4 = new TFilter('contrato','IS NOT',NULL);
echo $filter4->dump();
echo "<br>\n";

//cria um filtro por ativo(booleano)
$filter5= new TFilter('ativo','=',TRUE);
echo $filter5->dump();
echo "<br>\n";

?>