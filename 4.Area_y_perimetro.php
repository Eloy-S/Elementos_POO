<?php
class Circulo {
    //definimos la constante de clase
    //private const PI = 3.1416;

    private float $radio;

    public function __construct(float $radio){
        $this->radio = $radio;
    }
    public function calcularArea(){
        //Accedemos a la constante usando self::
        //return self::PI*($this->radio * $this->radio);
        return M_PI * ($this->radio * $this->radio);
    }
    public function calcularPerimetro(){
        //tambien la podemos usar aqui sin problemas
        return 2 * M_PI *$this->radio;
    }
}

//---Ejemplo de uso ---
$miCirculo = new Circulo(4);

//number_format($numero, cantidad_decimales, 'separador_decimal', 'separador_miles')

echo "\n";                      //Resultado; 
echo "Area del circulo: \t".number_format($miCirculo->calcularArea(), 2, ".", ",");
echo "\n";
echo "Perimetro del circulo: \t" .number_format($miCirculo->calcularPerimetro(), 2, ".", ",");

