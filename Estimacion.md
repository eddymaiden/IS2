## R1- El sistema almacenará la información de los usarios registrados
* ILF=Usuario
    * Cod_Usuario
    * Nombre
    * dirección
    * Ciudad
    * Correo
## R1- Usuarios se pueden dar de alta con sus datos personales
* EI=AltaUsuario
    * Cod_Usuario
    * Nombre
    * dirección
    * Ciudad
    * Correo
    * Enviar(boton)
## R2- Usuarios se pueden dar de baja y editar perfil
* EI=editarUsuario
    * Cod_Usuario
    * Nombre
    * dirección
    * Ciudad
    * Correo
    * Editar(boton)
* EI=BajaUsuario
    * Baja(boton)
## R3- envío de correo electrónico
* EO=EnvioCorreo
    * DET
        * texto
        * link
        * correo
    * FTR
        * Usuario
## R4- El sistema almacenará los anuncios creados
* ILF= Anuncio
    * ID_anuncio
    * NombreAnuncio
    * Cod_Usuario
    * decripción
    * stock
    * foto
    * filtros
## R4- Crear anuncios
* EI=CrearAnuncio
    * NombreAnuncio
    * Cod_Usuario
    * decripción
    * stock
    * foto
    * filtros
## R5- Anuncios tienen información visual y descripciones textuales y cantidad en stock
## R6- Inclusión de campos para el filtrado de alimentos (gluten lactosa y mariscos)
## R7- Listado según localización
* EQ=Listado_localización
    * DET
        * Ciudad
    * FTR
        * Anuncio
        * Usuario
## R8- EL sistema almacenara Listado de chats (Abierto y cerrados)
*   ILF=chat
    * DET
        * ID_chat
        * ID_Anuncio
        * ID_Comprador
        * Estado

## R9-EL sistema almacenara los mensajes de cada chat
*   ILF=mensaje
    * DET
        * texto
        * ID_autor
        * ID_chat 
## R10- Decremento de alimentos
* EI
    * DET
        * Stock
    * FTR
        * Anuncio
R11-Encuesta de valoración después de vender
R12-cierre del Hilo indicando la cantidad vendida
R13- cierre del Hilo automáticamente informando al comprador de la falta de disponibilidad
R14- Recibir ofertas de vendedores
R15- El comprador hace propuesta indicando el número de porciones

Ranking de vendedores
R16- Ranking de vendedores por semana y mes acorde a su valoración
R17- panel de gestión de sus anuncios.


Búsqueda con filtros
R18-El comprador podrá aplicar filtros a su búsqueda.
