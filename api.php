<?php
header('Access-Control-Allow-Origin: *');
// Glosario de PHP
// Camel-case: Técnica usada popularmente por programadores, para nombrar clases, métodos, variables o archivos. Se aplica para frases o palabras compuestas, donde el uso de mayúsculas a lo largo de las palabras se asemeja a las jorobas de un camello. Se pude usar UpperCamelCase, donde la primera letra va en mayúscula, o lowerCamelCase, donde la primera letra va en minúscula.
// Estructura básica de los lenguajes de programación: Las tres estructuras básicas de la programación, secuencias, selectores y ciclos.  Las secuencias son una serie de acciones que son completadas en un orden especifico, hasta que todas las acciones de la secuencia son completadas. Selector es una pregunta para determinar que camino de acción tomar. Los ciclos al igual que los selectores usan una pregunta, la misma pregunta una y otra vez, hasta que cierta tarea este completada.
// Que es un seudo-Lenguaje programación:  es un lenguaje de especificación de algoritmos. Se utiliza como un primer borrador del programa en la fase de diseño, para "perfilar" el código fuente, centrándose en la lógica y los puntos de control de éste sin tener que ceñirse a las restricciones sintácticas de un lenguaje de programación. El pseudocódigo no puede ser ejecutado por un computador.
// Lenguaje de programación: Conjunto de instrucciones escritas en un lenguaje especifico (C++,java, php…), para ejecutar una tarea especifica. Un lenguaje de programación es un lenguaje informático que los programadores utilizan para desarrollar programas de software, scripts u otros conjuntos de instrucciones para que los ejecuten las computadoras.
// Código limpio / Código sucio: El clean code no es un conjunto de reglas estrictas, sino una serie de principios que ayudan a producir código intuitivo y fácil de modificar. En este contexto, intuitivo significa que cualquier desarrollador profesional pueda entenderlo de inmediato. Utilizar variables que tienen unos nombres no adecuados, clases y métodos que son enormes, cadenas y números mágicos, eso es código sucio.
// Variables: En programación una variable es un valor que puede cambiar, dependiente de las condiciones o de la información que correo en el programa. 
// Maneras de escribir las variables en PHP: En PHP las variables se representan con un signo de dólar seguido por el nombre de la variable. El nombre de la variable es sensible a minúsculas y mayúsculas. Los nombres de variables siguen las mismas reglas que otras etiquetas en PHP. Un nombre de variable válido tiene que empezar con una letra o un carácter de subrayado (underscore), seguido de cualquier número de letras, números y caracteres de subrayado.
// tipos de datos y tipos de datos primitivos en PHP (7): boolean, entero, flotante, cadena, matriz, objeto y recurso
// Declarar de Variable / inicialización de Variable: En PHP las variables siempre son declaradas e inicializadas en una sola sentencia. Tampoco es necesario indicar el tipo de dato que va a contener la variable. A diferencia de otros lenguajes, PHP posee una gran flexibilidad a la hora de operar con variables. En efecto, cuando definimos una variable asignándole un valor, el ordenador le atribuye un tipo. Si por ejemplo definimos una variable entre comillas, la variable será considerada de tipo cadena.
// Punto y coma: PHP requiere que las instrucciones terminen en punto y coma al final de cada sentencia
// palabras reservadas del sistema: Las palabras reservadas en programación, o palabras clave, tienen un significado especial para el compilador de cualquier lenguaje de programación. Estas palabras pueden identificar los tipos de datos que se pueden usar, además de las diferentes rutinas de programación que permite cada lenguaje. Las palabras reservadas son instrucciones que se utilizan en PHP para controlar la ejecución de los programas. Entre las palabras reservadas se encuentran, además de echo, instrucciones como if, for, do, include, return, exit o die. A diferencia de las funciones, en este caso no se necesitan los paréntesis. 
// Que son los operadores: Un operador es algo que toma uno más valores (o expresiones, en la jerga de programación) y produce otro valor (de modo que la construcción en si misma se convierte en una expresión). Los operadores se pueden agrupar de acuerdo con el número de valores que toman. Los operadores unarios toman sólo un valor, por ejemplo ! (el operador lógico de negación) o ++ (el operador de incremento). Los operadores binarios toman dos valores, como los familiares operadores aritméticos + (suma) y - (resta), y la mayoría de los operadores de PHP entran en esta categoría. Finalmente, hay sólo un operador ternario, ? :, el cual toma tres valores; usualmente a este se le refiere simplemente como "el operador ternario" (aunque podría tal vez llamarse más correctamente como el operador condicional).
// Items en las colecciones de datos PHP: la única forma de garantizar que almacenamos en un array objetos de un tipo determinado, y siempre del mismo, es controlarlo en el momento de añadirlo, pero también en el de usarlo ya que entre un punto y otro del flujo puede haber pasado cualquier cosa con nuestro array. Una solución es encapsular el array en algún tipo de objeto Collection, que se encargue de asegurar que solo incorporamos objetos válidos y que pueda realizar ciertas operaciones con ellos, garantizándonos la coherencia de los datos en todo momento.
// Imprimir en pantalla con PHP   -- -echo / var_dump / print_r : Funciones vs constructores de lenguaje
//La primera gran diferencia es que  print_r y var_dump son funciones reales mientras que echo y print son constructores de lenguaje, no son verdaderamente funciones. Los constructores de lenguaje son partes de un programa formados por uno o varios símbolos léxicos que responden a las reglas del lenguaje de programación; como símbolos léxicos, no se pueden descomponer en otros, es decir, un constructor de lenguaje no puede subdividirse en otros constructores. Por su parte, una función es una parte definida de un programa (no del lenguaje de programación) que realiza una determinada tarea. Cada lenguaje de programación suele proveer de una biblioteca de funciones predefinidas, como es el caso de print_r y var_dump en PHP. print imprime una cadena, echo puede imprimir más de una separadas por coma. print devuelve un valor int que según la documentación siempre es 1, por lo que puede ser utilizado en expresiones mientras que echo es tipo void, no hay valor devuelto y no puede ser utilizado en expresiones. Estas dos funciones imprimen los detalles de una variable, incluyendo su valor, en un formato legible por el humano. Si es un array o un objeto también imprimen los detalles de cada elemento. Se utilizan frecuentemente durante la depuración de código, situación en la que var_dump suele ser más útil por la mayor información que proporciona. 



$primerNombre="Jennifer";
$nombreCompleto="Jennifer Melissa Russi Castillo";
$edad=32;
$altura= 1.55;
$soyAlumno= true;
$pasaTiempo=["Ver peliculas","viajar"];
$misDirecciones = new stdClass();
$misDirecciones->principal= "Cigarras";
$misDirecciones->secundario= "Cabecera";
$misTelefonos= (object)[];
 

echo $primerNombre;
echo ("<br>"); 
echo $nombreCompleto;
echo ("<br>"); 
echo $edad;
echo ("<br>");
echo $altura;
echo ("<br>");
echo ("Mi pasatiempo es: ".$pasaTiempo[1]);

var_dump ($soyAlumno);
echo ("<br>");


echo $pasaTiempo[1];

var_dump($pasaTiempo);
var_dump($misTelefonos);
var_dump($misDirecciones);
echo ("<br>");
echo "Soy el servisor variables   ".$_SERVER['HTTP_HOST']." gracias por conectarme :)";
?>
