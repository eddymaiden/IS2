<?php include_once 'includes/templates/header_inicio.php';?>
<span class="anchor" id="sing_up"></span>
    <section class="sing_up">
      <div class="contenido_sing_up">
        <div class="contenedor_titulo">
          <h2 class="titulo">Registrate en Eat<span>Now</span></h2>
          <p class="desc">Escribe tus datos</p>
        </div>
        <div class="contenedor_formulario">
          <form class="formulario" id="formulario" action="validar_registro.php" method="POST">
            <div class="label clearfix">
              <label for="nombre" post=""></label>
              <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre" required>
            </div>
            <div class="label clearfix">
              <label for="apellidos"></label>
              <input type="text" id="apellidos" name="apellidos" placeholder="Tus apellidos" required>
            </div>
            <div class="label clearfix">
              <label for="email"></label>
              <input type="Email" name="email" id="email" placeholder="Email">
            </div>
            <div class="label clearfix">
              <label for="password" ></label>
              <input type="password"  id="password" placeholder="Contraseña" required>
            </div>
            <div class="label enviar">
              <input type="submit"  name = 'submit' value="Enviar">
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php include_once 'includes/templates/footer.php';?>