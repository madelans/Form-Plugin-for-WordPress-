<!DOCTYPE html>
<html>
    <body>
      <div class="container">
          <h2 class="">Formulario de multiples pasos venta auto ESTE DEBERIA SER</h2>
          <div class="progress">
              <div class="progress-bar progress-bar-circle active" role="progressbar"  aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="alert alert-success hide"></div> 
              <form action="<?php get_the_permalink(); ?>" method="post" id="car_form" class="car-form">

                  <!--PASOS-->  
                  <!--AÑO-->
                  <fieldset>
                      <h2>Selecciona el año</h2>
                      <div id="answere"><p>dar click</p></div>
                      <div class="options next_form" id="">
                        <button class="button next-form" id="" type="button" name="">
                            <div class="button-content">
                                <img src="" alt="" class="img-button">
                                <p class="text-button"></p>
                            </div>
                        </button>
                      </div>
                  </fieldset>
                  <!--MARCA-->
                  <fieldset>
                    <h2>Marca</h2>
                    <div class="options next_form">
                      <button class="button" id="" type="button" name="">
                          <div class="button-content">
                              <img src="" alt="" class="img-button">
                              <p class="text-button"></p>
                          </div>
                      </button>
                    </div>
                  </fieldset>
                 <!--MODELO-->
                   <fieldset>
                    <h2>Modelo</h2>
                    <div class="options next_form">
                      <button class="button" id="" type="button" name="">
                          <div class="button-content">
                              <img src="" alt="" class="img-button">
                              <p class="text-button"></p>
                          </div>
                      </button>
                    </div>
                  </fieldset>
                  <!--VERSION-->
                  <fieldset>
                    <h2>Versión</h2>
                    <div class="options next_form">
                      <button class="button" id="" type="button" name="">
                          <div class="button-content">
                              <img src="" alt="" class="img-button">
                              <p class="text-button"></p>
                          </div>
                      </button>
                    </div>
                   </fieldset>
                   <!--COLOR-->
                  <fieldset>
                    <h2>Color</h2>
                    <div class="options next_form">
                      <button class="button" id="" type="button" name="">
                          <div class="button-content">
                              <img src="" alt="" class="img-button">
                              <p class="text-button"></p>
                          </div>
                      </button>
                    </div>
                  </fieldset>
                  <!--KILOMETRAJE-->
                   <fieldset>
                    <h2>Kilometraje</h2>
                    <div class="options next_form">
                      <button class="button" id="" type="button" name="">
                          <div class="button-content">
                              <img src="" alt="" class="img-button">
                              <p class="text-button"></p>
                          </div>
                      </button>
                    </div>
                   </fieldset>

                 <!--DATOS CONTACTO-->
                   <fieldset>
                      <h2>Datos Personales</h2>
                    
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
                   
                   </fieldset>  
               </form>
            </div> 

            <style type="text/css">
                #car_form fieldset:not(:first-of-type) {
                display: none;
                }
                </style>
    </body>
</html>