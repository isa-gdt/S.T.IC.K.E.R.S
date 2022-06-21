
# S.T.I.C.K.E.R.S

El diccionario de la Real Academia Española define la palabra sticker como:

![image](https://user-images.githubusercontent.com/67797259/161443658-705d2be7-9de2-4f04-9e95-4fac0fa15d49.png)

Es por esto que cada vez más personas los ven como una herramienta imprescindible de comunicación o incluso como el último rayo de luz en esta luctuosa sociedad postpandémica que se asfixia inexorablemente bajo el desalmado yugo del capitalismo.

Y ahora todo esto será aún más fácil con S.T.I.C.K.E.R.S. Con esta novedosa e innovadora aplicación para ver, crear y compartir stickers no solo podrás ver, sino crear e incluso compartir stickers. 


## Funcionamiento

- En el main de la aplicación aparecerán todos los stickers organizados por sus respectivas categorías.
- Existirá la opción de loguearse para los usuarios registrados y de registrarse para los no registrados.
- Cuando un usuario se loguea, depende del tipo de login que tenga (admin o premium) le aparecerán funcionalidades diferentes.
- Existirá un 'art station' donde los usuarios logueados podrán crear sus propios stickers.



## Usuarios

Usuario no registrado: 
   * Solo dispondrá de acceso a la main page de la aplicación.
   * Podrá ver los stickers ya disponibles en la página.
   * No podrá crear.

Usuario premium (registrado): 
   * Podrá acceder a la vista main, así como a su propio perfil de usuario y a la vista 'art station' para la creación de stickers.
   * Podrá crear.
   
Admin:
   * Podrá acceder a todas las vistas.
   * Tendrá una vista propia para admins que consistirá en un panel de control.
   * Podrá moderar usuarios de cualquier nivel, con poder para eliminar y dar permisos a cualquier cuenta.
   * Podrá gestionar los packetes de stickers, pudiendo así mismo eliminar los que no cumplan con la normativa de uso de la página.

## BD (MySQL)

- Los usuarios se dividirán en anónimos (no registrados) y registrados.
- Los usuarios registrados se repartirán en admin y premium.
- Los usuarios admin gestionarán todos los usuarios así como los packs de stickers.
- Los usuarios premium podrán crear sticker. 
- Para que un usuario pueda crear un sticker primero tendrá de crear un pack donde poder ubicarlo.
- Todos los stickers tendrán entre una y muchas etiquetas identificatorias, así como cada etiqueta podrá utilizarse en uno o muchos stickers.


![bd_proyecto_pages-to-jpg-0001](https://user-images.githubusercontent.com/67797259/161443318-65f7b367-e76f-42f0-aea2-17439944e6e0.jpg)


## Tecnología utilizada

* FRONT:
    Javascript, AJAX, JQuery, SASS, CSS.
* BACK:
    PHP con el framework Laravel.
* Despliegue:
   La aplicación ha sido desplegada en Hostinger.
   http://daw.isastickers.online/main

    
 ## Checkpoint 13/05
 https://www.youtube.com/watch?v=zXwCWhote74
 
 
 ## Mockup
 Prototipo de la aplicación realizado en Figma
https://www.figma.com/file/qAaPn4DeMbarmVMGnSH9T0/Stickers?node-id=0%3A1

 ## How to use
 * Main page:
 El usuario se puede encontrar la opción de registro y login
 ![image](https://user-images.githubusercontent.com/67797259/174910614-4c5f8737-686e-40d1-8f7a-9530c17b0083.png)
 
 * Registro:
 El usuario podrá registrarse con su nombre, email y contraseña (minimo 8 carácteres). Al registrarse, será directamente redirigido a la página principal.
![image](https://user-images.githubusercontent.com/67797259/174910685-ae36a67b-9ad1-461f-bef6-c929ff0e30ad.png)

 * Login:
 El usuario podrá loguearse con su enamil y contraseña
![image](https://user-images.githubusercontent.com/67797259/174910777-2a7df936-2153-4f5f-ac7b-bcf1a219c039.png)

* Main (logueado):
 Si el usuario que se ha logueado NO es admin, aparecerá un banner de bienvenida, así como las opciónes: Mi perfil, Art Station, Mi colección y Logout en la barra de navegación. 
 ![image](https://user-images.githubusercontent.com/67797259/174911015-3643d03a-ac51-4d0a-bc6b-19b67cb5f737.png)
 
 Si el usuario es de tipo admin, en la barra de navegación encontrará una opción más, llamada Admin panel. Así como el titulo de Admin main.
 ![image](https://user-images.githubusercontent.com/67797259/174911144-599cc39a-ff86-482d-ad17-43dc67a48077.png)

 A su vez, el usuario encontrará un listado de todos los stickers disponibles por categorías. 
![image](https://user-images.githubusercontent.com/67797259/174911161-0ff7675b-cf90-4c13-83e3-60c55c4d42a9.png)

* Mi perfil:
 El usuario verá los datos de tu perfil y podrá bien modificarlos o eliminar su cuenta.
![image](https://user-images.githubusercontent.com/67797259/174911227-ba572121-21fa-4de7-a815-e897c31a4937.png)

* Art Station:
Aquí el usuario podrá crear los stickers, para ello:
1- Cargará la imagen en el input (importante!! siempre de tipo png).
2- La recortará a su gusto.
3- la añadirá a un pack y creará
![image](https://user-images.githubusercontent.com/67797259/174911314-264689e1-dc4b-43cb-be5a-5505d36d1e45.png)


* Mi colección:
En este apartado el usuario podrá ver todos los packs de los que dispone, así como crear nuevos packs o eliminar los ya existentes
![image](https://user-images.githubusercontent.com/67797259/174911451-4ff07aec-15dc-42b5-a45d-ea37ff902657.png)

* Admin panel:

Si el usuario es de tipo admin, tendrá acceso al admin panel, donde podrá:
![image](https://user-images.githubusercontent.com/67797259/174911760-4e869ce3-5bbc-4735-80b9-bf332089244c.png)

1- Ver la lista de usuarios que tiene la aplicación, editarlos y/o eliminarlos.
![image](https://user-images.githubusercontent.com/67797259/174911795-f7a7e844-8dba-4225-9fe9-6f2a5d2c17de.png)
![image](https://user-images.githubusercontent.com/67797259/174911848-c54014fd-a73a-4ffc-b97a-680b03eda2e0.png)

2- Ver la lista de todos los packs, editarlos y/o eliminarlos.
![image](https://user-images.githubusercontent.com/67797259/174911817-851bdfc3-e7b8-412b-887a-90efedf86353.png)
![image](https://user-images.githubusercontent.com/67797259/174911873-89f2d48b-70f0-4231-b3f4-349c01869de4.png)


3- Navegar a una vista que contiene el video excplitativo de la aplicación.
![image](https://user-images.githubusercontent.com/67797259/174911837-282aee84-8485-470e-95e2-d79895dc2e06.png)


 ## Video del uso de la aplicación
 https://youtu.be/Acxp3GIcvts

 ## Bibliografía
 Documentación de Laravel 8 : https://laravel.com/docs/8.x/readme
 https://www.w3schools.com/
 Documentación Hostinger: https://www.hostinger.com/tutorials/


