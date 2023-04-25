<?php
/**Ejercicio 3  */
class Transferencia{
    public function tipoPago($tipo, $cantidad){
        if($tipo == "tarjetaCredito"){
            return "Usted va pagar $$cantidad con tarjeta de credito";
        }
        if($tipo == "payPal"){
            return "Usted va pagar $$cantidad por medio PayPal";
        }
    }
}
?>

<?php
/** se resuelve por liskov substitution es hacer una abstracción correcta para cada clase y poder utilizar todos los métodos necesarios. */
interface tipo{
    public function Transferencia();
}

interface Cantidad{
    public function Transferencia();
}

class Tarjetadecredito implements tipo{

    public function Transferencia(){
        return "usted va pagar $$cantidad con tarjeta de credito";
    }
}
class Paypal implements tipo{

    public function Transferencia(){
        return "usted va pagar $$cantidad por medio de PayPal";
    }
}
?>