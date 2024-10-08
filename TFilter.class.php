<?php
/*classe TFilter
*Esta classe prove a interface para definição de filtros de seleção*/

class TFilter extends TExpression {
    private $variable;  //variavel
    private $operador; //operador
    private $value; //valor

/*métod__construct()
*intancia um novo filtro
* @param $variable=variável
 @param $operator = operdador
 @param $value = valor a ser comparado
 **/

public function __construct($variable, $operador, $value) {
$this->variable= $variable;
$this->operador=$operador; 
$this->value=$value;
//transforma o valor de acordo com certas regras
//antes de atribuir à propriedade $this->value

$this->value=$this->transform($value);
}

/*Método Transform()
*recebe um valor e faz as modificações necessárias
*para ele ser implentado pelo banco de dados
*podendo ser um integer/string/boolean ou array
*@param $value= valor a ser transformado
*/
private function transform($value) {
    //caso seja um array
    if (is_array($value)) {

    //percorre os valores
    foreach($value as $x){
        //se for um inteiro 
        if(is_integer($x)){
            $foo[]=$x;
    }
    else if(is_string($x)){
        //se for string adiciona aspas
        $foo[]="'$x'";
    }}
    //converte o array em string separada por ","
    $result='('.implode(',',$foo).')';
    }
    //caso seja uma string
    else if(is_string($value)){
//adiciona aspas
$result='$value';
    }
    //caso seja um valor nulo
    else if(is_null($value)){
        //armanena nulo
        $result= 'NULL';
    }
    //caso seja um booleano
    else if(is_bool($value)){  
        //armazeza TRUE ou FALSE
        $result= $value? 'true':'false';
    }
    else{
        $result= $value;
    }
    //retorna vaklor
    return $result;
}
/*
* metodo dump()
*retorna o filtro em forma de eexpressão
*/
public function dump() {
    //concatena a expressão
    return "{$this->variable} {$this->operator} {$this->value}";
}
}
?>