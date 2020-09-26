<?php


class Carro //TODAS las clases son UpperCamelCase.  Explicación: UpperCamelCase (MiClase, MiVariable, EstoEsUnTexto) y lowerCamelCase (miClase, miVariable, estoEsUnTexto)
{
    //Propiedades
    public string $marca; //Visibilidad (public, protected, private)
    public string $color = "Rojo"; //Tipos (boolean, int, float, null, array, object)
    public bool $cajaAutomatica = True; //lowerCase

    //Métodos
    public function saludar(?string $nombre = "usuario"): string { //Visibilidad, function, nombre del método, tipo de dato(si no se tiene claro se coloca ?), valor por defecto, (parámetros)
        return "Hola ".$nombre." cómo estás?";
    }
}

//testeo de la clase no va aquí sino el la vista o el controlador
$bmw = new Carro(); //crear el objeto bmw de la clase Carro, A esto se le llama instanciar
$mercedes = new Carro(); //segundo objeto de la clase Carro

//Obtener una propiedad
echo $bmw->color."<br/>"; //para obtener la propiedad de color
echo $mercedes->color."<br/>";

//Establecer una propiedad
$bmw->color = "Azul"; //para establecer una propiedad
$bmw->marca = "BMW";
echo "Soy un ".$bmw->marca." ".$bmw->color."<br/>";

$mercedes->color = "Negro";
$mercedes->marca = "Mercedes Benz";
echo "Soy un ".$mercedes->marca." ".$mercedes->color."<br/>";

//llamar a un método
