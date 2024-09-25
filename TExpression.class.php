<?php
/*classe TExpression
* Classse abstrata para gerenciar expressôes*/

abstract class TExpression{
    //operadores lógicos
    
    const AND_OPERATOR='AND';
    const OR_OPERATOR= 'OR';

    //marca método dump cpomo OBRIGATÓRIO
    abstract public function dump();
}




?>