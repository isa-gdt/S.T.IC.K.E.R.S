
# S.T.I.C.K.E.R.S

El diccionario de la Real Academia Española define la palabra sticker como:

![image](https://user-images.githubusercontent.com/67797259/161443658-705d2be7-9de2-4f04-9e95-4fac0fa15d49.png)

Es por esto que cada vez más personas los ven como una herramienta imprescindible de comunicación o incluso como el último rayo de luz en esta luctuosa sociedad postpandémica que se asfixia inexorablemente bajo el lacerante yugo del capitalismo.

Y ahora todo esto será aún más fácil con S.T.I.C.K.E.R.S. Con esta novedosa e innovadora aplicación par ver, crear y compartir stickers no solo podrás ver, sino crear e incluso compartir stickers. 


## Funcionamiento

- En el main de la aplicación aparecerán todos los stickers organizados por sus respectivas categorías.
- Habrá una barra de búsqueda para poder filtrar la búsqueda de stickers por sus etiquetas.
- Existirá la opción de loguearse para los usuarios registrados y de registrarse para los no registrados.
- Cuando un usuario se loguea, depende del tipo de login que tenga (admin o premium) le aparecerán funcionalidades diferentes.
- Existirá un 'art station' donde los usuarios logueados podrán crear sus propios stickers.



## Usuarios

Usuario no registrado: 
   * Solo dispondrá de acceso a la main page de la aplicación.
   * Podrá ver los stickers ya disponibles en la página y utilizar el buscador.
   * No podrá crear ni descargar.

Usuario premium (registrado): 
   * Podrá acceder a la vista main, así como a su propio perfil de usuario y a la vista 'art station' para la creación de stickers.
   * Podrá crear y descargar.
   
Admin:
   * Podrá acceder a todas las vistas.
   * Tendrá una vista propia para admins que consistirá en un panel de control.
   * Podrá moderar usuarios de cualquier nivel, con poder para eliminar, banear, crear y dar permisos a cualquier cuenta.
   * Podrá gestionar los packetes de stickers y su contenido, pudiendo así mismo eliminar los que no cumplan con la normativa de uso de la página.

## BD

- Los usuarios se dividirán en anónimos (no registrados) y registrados.
- Los usuarios registrados se repartirán en admin y premium.
- Los usuarios admin gestionarán todos los usuarios así como los packs de stickers.
- Los usuarios premium podrán crear sticker y descargarlos. 
- Para que un usuario pueda crear un sticker primero tendrá de crear un pack donde poder ubicarlo.
- Un pack de stickers tendrá que tener siempre como mínimo un sticker.
- Todos los stickers tendrán entre una y muchas etiquetas identificatorias, así como cada etiqueta podrá utilizarse en uno o muchos stickers.


![bd_proyecto_pages-to-jpg-0001](https://user-images.githubusercontent.com/67797259/161443318-65f7b367-e76f-42f0-aea2-17439944e6e0.jpg)


## Tecnología utilizada

* FRONT:
    Javascript, AJAX, JQuery, SASS, CSS.
* BACK:
    PHP con el framework Laravel.

    
