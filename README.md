Laboratorio #1 - Desarrollo Web
Instructor: Irina Fong
Grupo: 1S3122

Se revisaron y mejoraron los 5 problemas de código del laboratorio, aplicando validación de datos, saneamiento de entradas y comentarios explicativos en cada archivo.

Cambios realizados
1. area_perimetro_circulo.php
Se agregó validación del radio con filter_var(..., FILTER_VALIDATE_FLOAT) en lugar de confiar solo en el atributo min del HTML.
Se agregó trim() para limpiar espacios en blanco del input.
Se agregó bloque de error visual cuando el valor ingresado no es válido.
Se agregó htmlspecialchars() para prevenir inyección de HTML/JS (XSS).
Se agregaron comentarios explicando cada paso.

2. pulgadas_a_centimetros.php
Se aplicó la misma validación con filter_var(FILTER_VALIDATE_FLOAT) y trim().
Se agregó manejo de error para valores no numéricos o negativos.
Se agregó htmlspecialchars() en la salida.

3. phpinfo.php
Se agregó comentario aclarando que no requiere validación al no recibir datos del usuario.

4. imprimir_cadenas.php
Se reemplazó el echo simple por ejemplos reales de funciones de cadena: trim, ucfirst, strtoupper, strtolower, strlen.
Se agregó htmlspecialchars() como buena práctica en la salida.
Se agregó CSS para mejor presentación.

5. formulario_nombre_edad.php
Se agregó validación del nombre con empty() e is_string().
Se agregó validación de la edad con filter_var(..., FILTER_VALIDATE_INT) (rango 0–120).
Se agregó lista de errores acumulados en caso de que falle más de un campo.
Se agregó htmlspecialchars() en toda la salida.

6. README.md
Se documentó la estructura del repositorio, requisitos, instrucciones de ejecución y detalle de cada problema.
