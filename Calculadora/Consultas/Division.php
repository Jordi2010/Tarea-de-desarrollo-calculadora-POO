<!--Tarea de desarrollo.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.-->

<?php
    echo "número 1 es: ".$_POST['numero1'];
    echo "<br>";
    echo "número 2 es: ".$_POST['numero2'];
    echo "<br><br>";

    class Division{
        public $n1;
        public $n2;
        public $resultado;

        public function __construct($n1,$n2)
        {
            $this->n1=$n1;
            $this->n2=$n2;
            $this->resultado=$n1/$n2;
        }

        public function dividir(){

            echo "El cociente de ".$this->n1." dividido entre ".$this->n2." es: ".$this->resultado;
        }
    }
    $total=new Division($_POST['numero1'], $_POST['numero2']);
    $total->dividir();
?>