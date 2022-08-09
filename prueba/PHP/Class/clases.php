<?php
class persona{          //Nombre de la clase
    //Propiedades
    public string $nombre;    //Propiedad tipo cadena   
    public string $apellido;  //Propiedad tipo cadena
    public int $edad;         //Propiedad tipo entero

    
    //Función Pública (Acciones o métodos)
    public function nuevaPersona(string $nuevoNombre, string $nuevoApellido, int $nuevoEdad){
        $this->nombre=$nuevoNombre;
        $this->apellido=$nuevoApellido;
        $this->edad=$nuevoEdad;
    }
    public function imprimirPersona(){
        echo "Nombre: ".$this->nombre."<br>";
        echo "Apellido: ".$this->apellido."<br>";
        echo "Edad: ".$this->edad."<br>";
    }
}    
        //Prueba
        $persona1= new persona();    //Instancia o creación de objeto
        $persona1->nuevaPersona(     //Llamando un método
        "Jhoanes","Villarroel","20");

        
        $persona1->imprimirPersona();    //Imprimimos mediante funció
        //echo $persona1->nombre."<br>";  //Imprimimos una propiedad
        //echo $persona1->edad;    //Imprimimos una propiedad
        

