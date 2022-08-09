### IF ELSE
- Operación
```
si(){.....
}en caso contrario{
    .....
}
```

### Constante
- Definimos una constante y le damos un valor
```
    define("NombreDeLaConstante","ValorDeLaConstante")
    echo NombreDeLaContaste //ValorDeLaConstante
```

### Operaciones relacionales
- Operación
```
    if($valor1 > $valor2){
        echo "Ok"
    } //Ok
```
- Posibilidades
```
    Mayor **>**
    Menor **<**
    Mayor o igual **>=**
    Menor o igual **<=**
    Diferente **!=**
    Igual **==**
```

### Operaciones lógicas
- Operación
```
    if($valor1 > $valor2) || ($valor3 > $valor4){
        echo "Ok"
    } //Ok
```
- Posibilidades
```
    and **&&** **and**
    or **||** **or**
    true si uno de los 2 es true (o los 2)
    xor **xor**
    true si solo uno de los 2 es true
    not **!** 
```

### SWITCH
- Operación
```
    if($_POST){                     //Si hay un envío con el método POST
        $dia= $_POST['eligeUnDia'];

        switch($dia){               //Evalúa $dia
            case lunes:
                echo "Hoy es lunes";
            break;                  //Acaba el caso lunes

            case martes:
                echo "Hoy es martes";
            break;

            case miercoles:
                echo "Hoy es miércoles";
            break;
        }
    }
    **HTML**
    <form post>
    <input type="submit" name="eligeUnDia" value="lunes">
    <input type="submit" name="eligeUnDia" value="martes">
    <input type="submit" name="eligeUnDia" value="miercoles">
    </form>
```
### Ciclos
#### FOR
- Operación
```
    for($numeroInicial=0;   //Declaramos un entero
        $numeroInicial<10;  //El entero tiene que ser menor a 10
        $numeroInicial++;   //Incrementamos el valor
    ){
        echo "Número ".$numeroInicial."<br>";    //Número 1
                                                 //Número 2...
                                                 //Número 9
    };
```

#### DO WHILE
- Operación
```
    $numeroInicial=0;                          //Declaramos un entero

    do{                                        //Haz esto:
        echo "Número ".$numeroInicial."<br>";
        $numeroInicial++;
    }while($numeroInicial<10);                  //Mientras:
```

#### WHILE
- Operación
```
    $numeroInicial=0;                           //Declaramos un entero

    while($numeroInicial<10){                    //Repite si:(Es menor que 10)
        echo "Número ".$numeroInicial."<br>";
        $numeroInicial++;
    }
```

### Funciones
- Operación
    - Si en el argumento apellido ponemos: $apellido=""
    nos permite dejarlo vació, de lo contrario nos dará error
```
    function imprimirNombre($nombre, $apellido){      //Función "imprimirNombre" Argumento"($nombre,$apellido)"
        echo "Hola ".$nombre." ".$apellido"<br>";
    }
    imprimirNombre("Oscar", "Martinez");
    imprimirNombre("Pedro", "Perez");
    imprimirNombre("Maria", "Vazquez");
``` 
    
### Arrays
-Operación
```
$dias= array(
    "Lunes",
    "Martes",
    "Miércoles"
);
print_r($frutas);

```