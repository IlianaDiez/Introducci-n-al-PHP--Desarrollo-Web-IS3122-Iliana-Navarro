Laboratorio #1 - Desarrollo Web

Instructor: Irina Fong
Grupo: 1S3122

Tecnología Utilizada
* PHP: Lenguaje utilizado para desarrollar los problemas prácticos.
* HTML5: Utilizado para crear la estructura de los formularios y páginas.
* CSS3: Utilizado para mejorar la presentación visual de los ejercicios.
* Git: Utilizado para el control de versiones del proyecto.
* GitHub: Utilizado para almacenar el repositorio del laboratorio.
* WampServer: Utilizado como servidor local para ejecutar y probar los archivos PHP.

Información relevante del laboratorio
-Durante el Laboratorio #1 - Desarrollo Web se revisaron y mejoraron los cinco problemas de código solicitados en la rúbrica. Se aplicaron validaciones de datos, saneamiento de entradas, manejo de errores, comentarios explicativos y mejoras visuales mediante CSS.

### 1. Área y Perímetro de un Círculo
-Se desarrolló el cálculo del área y perímetro de un círculo utilizando PHP.
-Se agregó validación del radio con filter_var(..., FILTER_VALIDATE_FLOAT), trim() para limpiar espacios, manejo de errores y htmlspecialchars() para proteger la salida. 
-También se agregaron comentarios explicativos y CSS.

### 2. Conversión de Pulgadas a Centímetros
-Se realizó la conversión de pulgadas a centímetros.
-Se agregó validación para comprobar que el valor sea numérico y no negativo, utilizando filter_var() y trim(). También se agregó manejo de errores, htmlspecialchars() y comentarios explicativos.

### 3. phpinfo()
-Se realizó el problema utilizando la función phpinfo() para mostrar información relacionada con la configuración y el entorno de PHP.
-Se agregó un comentario explicando su funcionamiento. Este archivo no requiere validación porque no recibe datos del usuario.

### 4. Imprimir Cadenas
-Se trabajó con diferentes funciones de manejo de cadenas en PHP, como trim(), ucfirst(), strtoupper(), strtolower() y strlen().
También se agregó htmlspecialchars() como buena práctica de seguridad, CSS para mejorar la presentación y comentarios explicativos.

### 5. Formulario HTML (Edad y Nombre)
-Se desarrolló un formulario para ingresar el nombre y la edad del usuario.
-Se agregó validación del nombre utilizando empty() e is_string(), además de una validación para permitir únicamente letras y espacios.
-Para la edad se utilizó filter_var(..., FILTER_VALIDATE_INT), estableciendo un rango válido de 0 a 120 años.
-También se agregó una lista de errores acumulados, htmlspecialchars() en la salida y comentarios explicativos.
-Como mejora adicional, se agregó mb_convert_case() para convertir automáticamente la primera letra de cada palabra del nombre en mayúscula. Por ejemplo, si el usuario escribe "juan perez", el sistema muestra "Juan Perez".

## Cumplimiento de lo solicitado
-Se realizaron los cinco problemas indicados en la hoja del laboratorio: área y perímetro de un círculo, conversión de pulgadas a centímetros, phpinfo(), impresión de cadenas y formulario HTML de edad y nombre.
-Los ejercicios fueron ejecutados y probados en tiempo real mediante un servidor local con WampServer.
-Se organizó el proyecto en un repositorio de GitHub para realizar la entrega correspondiente en Moodle.
-También se creó este archivo README.md para documentar la estructura, los problemas realizados, las tecnologías utilizadas y las mejoras aplicadas.
-Se incluyeron comentarios en los archivos PHP para explicar las partes principales del código.
-Como valor agregado, se incorporaron validaciones adicionales, saneamiento de entradas, manejo de errores, protección mediante htmlspecialchars(), mejoras de diseño con CSS y conversión automática de nombres a formato con iniciales mayúsculas.

## Conclusión
-El laboratorio permitió reforzar los conocimientos de PHP, HTML y CSS mediante la realización de diferentes problemas prácticos. Además, se aplicaron buenas prácticas de programación y seguridad para mejorar el funcionamiento, presentación y validación de los ejercicios.

6. README.md
Se documentó la estructura del repositorio, requisitos, instrucciones de ejecución y detalle de cada problema.
