<?php

class Calculadora {
    public $primerNumero;
    public $segundoNumero;

    public function __construct($num1 = 0, $num2 = 0) {
        echo $num1, "\n";
        echo $num2, "\n";
        $this->primerNumero = $num1;
        $this->segundoNumero = $num2;
    }

    public function sumar() {
        return $this->primerNumero + $this->segundoNumero;
    }

    public function restar() {
        return $this->primerNumero - $this->segundoNumero;
    }

    public function multiplicar() {
        return $this->primerNumero * $this->segundoNumero;
    }

    public function dividir() {
        
        if ($this->segundoNumero != 0) {
            return $this->primerNumero / $this->segundoNumero;
        } else {
            return "Error: División por cero";
        }
    }

    public function potencia() {
        return pow($this->primerNumero, $this->segundoNumero);
    }

    public function raiz() {
        return sqrt($this->primerNumero);
    }
}

$miCalculadora = new Calculadora(1, 2);
echo "Suma: " . $miCalculadora->sumar() . "<br>";
echo "Resta: " . $miCalculadora->restar() . "<br>";
echo "Multiplicación: " . $miCalculadora->multiplicar() . "<br>";
echo "División: " . $miCalculadora->dividir() . "<br>";
echo "Potencia: " . $miCalculadora->potencia() . "<br>";

?>
