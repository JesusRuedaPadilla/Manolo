 **Tabla de multiplicar**

​	Los dos archivos (**multiplicar.php** y **multiplicar2.php**) constituyen un programa para realizar tablas de multiplicar.

 - El archivo **libreria.php** es una libreria que incluye la **funcion de tabla de multiplicar**, donde , por medio del archivo multiplicar2.php, accederemos a ella dandole 2 valores, un valor "a" y un valor "b".
 - El valor "a" es la tabla que queremos consultar, y el valor "b", el numero de multiplicaciones que haremos.
 - multiplicar.php es un archivo que contiene la libreria **tabla de multiplicar**.
 - El valor "b" del archivo multiplicar2.php se dará en el propio codigo.
 - El valor "a" se dará a traves de la ruta escribiendo **?a=numero que deseemos**
 - En el archivo multiplicar.php solo daremos a través de la ruta el parámetro "a", puesto que el parámetro "b" esta predeterminado a "10".



**Ejemplos**

​		En la funcion a continuacion se puede ver como podemos dar valores a "b" en el caso del archivo **multiplicar2.php**

​		- 	**echo tabla_multiplicar($_GET['a'],10);**  (El valor 10 se modifica por el numero que queramos)



