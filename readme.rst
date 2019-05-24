
###################
CodeIgniter con React Creado por DesarrolloIMAS
###################

El código de CodeIgniter se ha cambiado un poco para adaptarse a la estructura de temática. También se han realizado cambios significativos y algunos están en curso, para admitir la representación con React JS.

Los cambios se realizan de tal manera, que ponen a este repositorio en el estado, en el que se puede usar de varias maneras, siendo el valor predeterminado la visualización de las vistas con React y también es compatible con las vistas de CodeIgniter predeterminadas.

###################
Cómo empezar
###################
Simplemente verifique la aplicación / controllers / Welcome.php, y llame a `$ this-> render_view (cadena $ view_name,? Array $ vars); función '` para representar cualquier vista.

El archivo de vista en reaccion debe residir en `asset / js / react / components / $ view_name.js`



###################
¿Qué es CodeIgniter?
###################

CodeIgniter es un marco de desarrollo de aplicaciones, un conjunto de herramientas, para personas
quienes construyen sitios web usando PHP. Su objetivo es permitirte desarrollar proyectos.
mucho más rápido de lo que podría si estuviera escribiendo código desde cero, proporcionando
un rico conjunto de bibliotecas para tareas comúnmente necesarias, así como un simple
Interfaz y estructura lógica para acceder a estas bibliotecas. CodeIgniter permite
se enfoca creativamente en su proyecto al minimizar la cantidad de código necesario
para una tarea dada.

*******************
Información de liberación
*******************

Este repositorio contiene código en desarrollo para futuras versiones. Para descargar el
última versión estable por favor visite el `CodeIgniter Downloads
<https://codeigniter.com/download> `_ page.

**************************
Changelog y nuevas características
**************************

Puede encontrar una lista de todos los cambios para cada versión en `user
guia de registro de cambios <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst> `_.

*******************
Requisitos del servidor
*******************

Se recomienda la versión de PHP 5.6 o más reciente.

También debería funcionar en 5.3.7, pero le recomendamos encarecidamente que NO ejecute
Tales versiones antiguas de PHP, debido a la potencial seguridad y rendimiento
problemas, así como las características que faltan.

************
Instalación
************

Consulte la sección `instalación <https://codeigniter.com/user_guide/installation/index.html>` _
de la guía de usuario de CodeIgniter.