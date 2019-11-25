# CHUBB
CHUBB

## Instalación

Bajar el repositorio, abrir la consola e instalar el mismo, esto instalara Gulp + sus dependencias (requiere tener Node instalado)
[NODEJS](https://nodejs.org/es/download/). Se instala del siguiente modo:

```bash
npm install
```

## Iniciar proyecto

Despues de su instalación, iniciar el proyecto tipiando lo siguiente (se puede ver en la url [https://localhost:8020]("https://localhost:8020") ):

```bash
gulp
```

## Entorno del proyecto
Dentro de la carpeta del proyecto, hay 2 subcarpetas importantes, app/ y src/.
src/, es donde están todos los archivos que se modifican, como css y js, por ejemplo, lo q respecta a css, esta hecho con SASS. los archivos dentro de <code>src/css/*.scss</code>, que de modifiquen, se compilan y se sirven en la carpeta app/css/ceroKms.min.css; de igual manera pasa con el js.
Lo que respecta al .js funciona como se explica anteriormente, se modifican files en <code>src/scripts/*.js</code>, se compilan y se sirven, compilados y minificados en app/scripts/ceroKms.min.js.
El JS se se escribe en ES6, que si bien no es compatible con algunos navegadores no tan modernos, un plugin del compilador (BABEL) lo "traduce" a una version compatible para todos los mismo.

```bash
|-- ceroKms/
    |-- app/
    |   |-- css/
    |   |-- scripts/
    |   
    |-- scr/
        |-- css/
        |-- scripts/
 ```
