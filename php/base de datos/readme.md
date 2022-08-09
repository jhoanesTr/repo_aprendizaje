**Creando una base de datos con PHP PDO**
1. USUARIO phpMyAdmin: lucas lucas123 
2. Base de datos: unadbpdo
3. Columnas: id | Nombre | Usuario | Clave

UNSIGNED : Se utiliza para tipos de numeros, limita los datos almacenados a numeros positivos y cero
AUTO_INCREMENT : Aunmenta automáticamente e l valor del campo en 1 cada vez que se agrega un nuevo registro
PRIMARY KEY : se utiliza para identificar de forma exclusiva las filas de una tabla. La columna con la configuración PRIMARY KEY suele ser un número de identificación y, a menudo, se usa con AUTO_INCREMENT "id"
NOT NULL : no admite campos vacios

Si se lanza una excepción dentro del bloque try{ }, el script deja de ejecutarse y fluye directamente al primer bloque catch(){ }. En el bloque catch de arriba hacemos eco de la instrucción SQL y el mensaje de error generado.

**Metiendo datos en la Base de Datos**
1. Meto un nuevo dato
    1.1. Nombre: Juan
    1.2. Usuario: juanito1
    1.3. Clave: perez0
2. Si escribimos lo mismo vuelve a crear el mismo usuario
3. Si borro algun usuario el id no vuelve un numero atras

**Metiendo datos multiples**
1. beginTransaction(); Indica el inicion de una transaccion
2. commit(); Confirma el conjunto de transacciones convirtiendolas en definitivas