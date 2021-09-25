# PatronesDiseno
    Este es el proyecto de patrones de diseño:
    *modelo----las clases donde se definen las funciones: 
        **conexion.php----clase conexion, nos da conexion a la base de datos y se le aplica el patron singleton 
        **productos----clase productos, con las funciones para insertarlos , borrarlos de la base de datos y sus atributos
        **usuarios----clase usuarios, con sus funciones de insertar a y consultar  
        **super----clase super y sus funciones de extraer los productos de la base de datos
    *vista----la pagina donde el usuario interactua: 
        **footer ,header ,head----objetos que requerimos en la paginas de vista  
        **index----pagina de incio donde inicias sesion , ves los productos , te registras, aqui es donde llamamos a la clase 
            super y con el objeto creado super con su contructor nombre, le aplicamos la funcion de extarer los productos de la 
            base de datos
        **cliente.php----pagina a la que se llega cuando se inicia sesion como cliente , puede ver el precio de los productos ,
            cosa que en el index no, aqui es donde llamamos a la clase super y con el objeto creado super con su contructor nombre,
            le aplicamos la funcion de extarer los productos de la base de datos pero con precio
        **empleados.php----pagina que se accede cuando se inicia como un empleado, puedes insertar productos nuevos 
            y borrar los ya existentes 
        **mensajecorrecto----mensaje cuando accion de productos funciona 
        **mensajecorrectoindex----cuando no se completa el registro 
        **mensajeerroneo----mensaje cuando accion de productos va mal 
        **mensajeerroneoindex----cuando no se completa el registro
        **cerrarsesionempleado----cierra sesion con un mensaje de confirmacion previo para el empleado
        **cerrarSesion----cierra sesion con un mensaje de confirmacion previo para el cliente
        **inicio----pag de partida
    *controlador----las pagina que concectan la vista con los modelos , osea , dan funcionalidad:
        **crearproducto----partiendo de un formulario en empleado, crea un objeto con estos datos y hace llamada a una funcion 
            creada en productos para crearlo en base de datos
        **borrarprodcuto----partiendo de un formulario en empleado que pide nombre , crea un objeto con este dato y hace 
            llamada a una funcion creada en productos para borrarlos en base de datos
        **registro----pagina a la que se llega desde el formulario de inicio,crea el objeto con estos datos y
            requiriendo de la funcion adapter segun su tipo de usuarios lo inserta en base de datos
        **iniciarsesion----pag donde partiendo del formulario crea un objeto y se le aplica la funcion pertinente que lo que 
            hace es consultar en la base de datos el tipo de usuario redirecciona a la pagina 
    *los patrones de diseño utilizados son: 
        **adapter----segun su el tipo de cliente le aplicara una funcion u otra 
        **singleton----este patron consiste en que solo se puede instanciar una vez un objeto ,en nuestro 
            caso la conexion de base de datos , que lo que hace es que si no esta creado lo crea y si esta creado no hace nada 
        **mvc----Este patron sirve para dar una estyructura coherente a nuestro proyecto e indicarnos su coonexion
    *este es el link de nuestra pagina https://markblazquez.informaticailiberis.com/practica%20de%20grupo/vista/index.php
