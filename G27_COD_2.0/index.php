<?php include_once 'includes/templates/header_inicio.php';?>
 
    <span class="anchor" id="login"></span>

    <section class="login">
      <div class="contenido_login">
        <div class="contenedor_titulo">
          <h2 class="titulo">Inicia Sesión en Eat<span>Now</span></h2>
          <p class="desc">Escribe tus datos</p>
        </div>
        <div class="contenedor_formulario">
          <form class="formulario" action="validar_sesion.php" method="POST">
            <div class="label clearfix">
              <label for="Email"></label>
              <input type="Email" name="email" id="email" placeholder="Email">
            </div>
            <div class="label clearfix">
              <label for="password"></label>
              <input type="password"  placeholder="Contraseña">
            </div>
            <div class="label enviar clearfix">
              <input type="submit" name='submit' value="Iniciar">
            </div>
          </form>
        </div>
      </div>
    </section>
<?php include_once 'includes/templates/footer.php';?>




  