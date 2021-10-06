<?php
/*
  Plugin Name: Car form
  Plugin URI: -
  Description: Form specific for a car registration and contact
  Version: 1.0
  Author: Maria de los Angeles Silva
  Author URI: https://github.com/madelans
 */
 

 add_shortcode('car_form','car_form_data'); 

 
 function car_form_data() {

   ob_start();

 ?>

   <form action="<?php get_the_permalink(); ?>" method="post" id="car_form"
class="car-form">
        <div class="form-input">
            <label for="año">año</label>
            <input type="text" name="año" id="año" required>
        </div>
        <div class="form-input">
            <label for='marca'>Marca</label>
            <input type="text" name="marca" id="marca" required>
        </div>
        <div class="form-input">
            <label for='version'>Version</label>
            <input type="text" name="version" id="version" required>
        </div>
        <div class="form-input">
            <label for="color">color</label>
            <input type="radio" name="color" value="1" required> Rojo
            <br><input type="radio" name="color" value="2" required> Negro
            <br><input type="radio" name="color" value="3" required> Plateado
            <br><input type="radio" name="color" value="4" required> Blanco
        </div>
        <div class="form-input">
            <label for='version'>Version</label>
            <input type="text" name="version" id="version" required>
        </div>
        
        <div class="form-input">
            <label for='nombre'>Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        
        <div class="form-input">
            <label for='telefono'>Telefono</label>
            <input type="number" name="telefono" id="telefono" required>
        </div>

        <div class="form-input">
            <label for='email'>Correo Electronico</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-input">
            <label for='ubicacion'>Ubicación</label>
            <input type="text" name="ubicacion" id="ubicacion" required>
        </div>
        
        <div class="form-input">
            <input type="submit" value="Cotizar">
        </div>

    </form>

 }

<?php


    add_action("admin_menu", "car_form_menu");

 /**
 * Agrega el menú del plugin al formulario de WordPress
 *
 * @return void
 */
 function car_form_menu()
 {
    add_menu_page("registros", 75);
 }

 function car_form_admin()
 { 
    global $wpdb;
    $tabla_registros = $wpdb->prefix . 'registro';
    $registros = $wpdb->get_results("SELECT * FROM $tabla_registros");
    echo '<div class="wrap"><h1>Lista de registros</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th width="30%">Nombre</th><th width="20%">Correo</th>';
    echo '<th>HTML</th><th>CSS</th><th>JS</th><th>PHP</th><th>WP</th><th>Total</th>';
    echo '</tr></thead>';
    echo '<tbody id="the-list">';
    echo '</tbody></table></div>';
 }
     
    // Devuelve el contenido del buffer de salida
    return ob_get_clean();
 }
 

?> 




