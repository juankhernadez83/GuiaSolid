<?php
/**Ejercicio 2*/
class Adulto {
    public function pago(){
        echo "Es mayor de edad puede pagar";
    }
}

class Niño extends Adulto{
    public function pago()
    {
        throw new Exception("el ni;os no puede pagar es menor de edad");
    }
}
?>

<?php
/**se resuelve si aplicamos el principio Open-Closed que nos indica que las clases están abiertas a extensiones y cerradas a modificaciones. */
interface Cliente{
    public function pago();
}
class Adulto implements cliente{
    public function pago(){
    }
}
class Niño implements cliente{
    public function pago()
    {
        throw new Exception("el ni;o no puede pagar, porque es menor de edad");
    }
}
?>