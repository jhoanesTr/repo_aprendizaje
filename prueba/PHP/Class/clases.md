# Class
Una clase completa contiene:
- Tipos de Propiedades:
    >A las propiedades se puede acceder usando ($this->)
    * *public*: Se puede acceder desde donde sea
    * *protected*: Se puede acceder solo desde la misma clase
    * *private*: Se puede acceder desde la clase que los definió
    >[Ver mas información](https://diego.com.es/modificadores-y-herencia-de-clases-en-php#:~:text=Public%3A%20la%20propiedad%20o%20m%C3%A9todo,pertenece%20y%20por%20sus%20descendientes.)

    >A las propiedades estáticas se puede acceder usando(self::)
    * *static*: 
- Herencia
```
class NombreDeLaClase extends AnotherClass implements Interface{ 
    public
    protected
    private
}
```
## Funciones dentro de las clases
```
public function NombreDeLaFunción(Type $var = null){
}
```

