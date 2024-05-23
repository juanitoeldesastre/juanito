<?php

interface Figura {
    public function calcularArea();
}

class Triangulo implements Figura {
    public $base;
    public $altura;

    public function __construct($b, $h) {
        $this->base = $b;
        $this->altura = $h;
    }

    public function calcularArea() {
        $area = ($this->base * $this->altura) / 2;
        return $area;
    }
}

class Rectangulo implements Figura {
    public $base;
    public $altura;

    public function __construct($b, $a) {
        $this->base = $b;
        $this->altura = $a;
    }

    public function calcularArea() {
        $area = ($this->base * $this->altura);
        return $area;
    }
}

class Cuadrado implements Figura {
    public $lado;

    public function __construct($l) {
        $this->lado = $l;
    }

    public function calcularArea() {
        $area = $this->lado * $this->lado;
        return $area;
    }
}

class Circulo implements Figura {
    public $radio;

    public function __construct($r) {
        $this->radio = $r;
    }

    public function calcularArea() {
        $area = M_PI * $this->radio * $this->radio;
        return $area;
    }
}