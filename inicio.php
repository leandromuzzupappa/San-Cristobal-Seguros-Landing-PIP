<?php include './includes/head.php'; ?>

<div id="loading">
    <svg viewBox="0 0 70 70">
        <path class="st0" d="M35,69.5C16,69.5,0.5,54,0.5,35S16,0.5,35,0.5c1.4,0,2.5,1.1,2.5,2.5S36.4,5.5,35,5.5
        C18.7,5.5,5.5,18.7,5.5,35S18.7,64.5,35,64.5S64.5,51.3,64.5,35c0-2.3-0.3-4.7-0.8-7c-0.3-1.3,0.5-2.7,1.8-3s2.7,0.5,3,1.8
        c0.7,2.7,1,5.4,1,8.2C69.5,54,54,69.5,35,69.5z"/>
    </svg>
</div>

<div class="Main">
    
    <div class="header">
        <div class="container">
            
            <div class="logos">
                <div class="col col-2 izq">
                    <img src="assets/images/logo-b.png" alt="">
                </div><!--
                --><div class="col col-2 der">
                    <img src="assets/images/logo-todosabordo.png" alt="">
                </div>
            </div>

            <div class="title">
                <h1>
                Prepará tu equipaje y <br>
                tus ganas de disfrutar, este <br>
                viaje está por comenzar.
                </h1>
            </div>

        </div>
    </div>

    <div class="seccion1">

        <div class="container">
            <div class="title">
                <h2>
                    ¡Completá los datos <span>para tu viaje!</span>
                </h2>
            </div>
            <div class="bajada">
                <p>
                    Ingresá los datos solicitados en el formulario para poder participar en el sorteo de los camarotes del crucero.
                </p>
            </div>

            <form action="./assets/scripts/functions.php" method="POST" id="getUserData">
                <input type="text" name="formRegistroUsuarios" id="formRegistroUsuarios" style="display: none;">
                <div class="col col-2 form-group">

                    <label for="nombre">Nombre*</label>
                    <input type="text" name="nombre" id="nombre">

                </div><!--
                --><div class="col col-2 form-group">

                    <label for="apellido">Apellido*</label>
                    <input type="text" name="apellido" id="apellido">

                </div><!--
                --><div class="col col-1 form-group">

                    <label for="documento">Número de documento*</label>

                    <div class="inputs">
                        <div class="select">
                            <div class="dropdown">
                                <select name="tipoDocumento" id="tipoDocumento">
                                    <option value="dni">DNI</option>
                                    <option value="dni">Pasaporte</option>
                                    <option value="dni"></option>
                                </select>
                                <div class="flechita">
                                    <img src="./assets/images/arrow.svg" alt="">
                                </div>
                            </div>
                        </div><!--
                        --><input type="number" name="numeroDocumento" id="numeroDocumento">
                    </div>

                </div><!--
                --><div class="col col-2 form-group">

                    <label for="tel">Teléfono*</label>
                    <input type="tel" name="tel" id="tel">

                </div><!--
                --><div class="col col-2 form-group">

                    <label for="email">Correo electrónico*</label>
                    <input type="email" name="email" id="email">

                </div><!--
                --><div class="col col-1 form-group fg-1">

                    <label for="direccion">Dirección*</label>
                    <input type="text" name="direccion" id="direccion">

                </div><!--
                --><div class="col col-1 form-group fg-1">

                    <label for="pais">País*</label>
                    <div class="dropdown">
                        <select name="pais" id="pais">
                            <option value="argentina">Argentina</option>
                        </select>
                        <div class="flechita">
                            <img src="./assets/images/arrow.svg" alt="">
                        </div>
                    </div>

                </div><!--
                --><div class="col col-2 form-group">

                    <label for="provincia">Provincia*</label>
                    <div class="dropdown">
                        <select name="provincia" id="provincia">
                            <option value="default"></option>
                            <option value="CABA">CABA</option>
                        </select>
                        <div class="flechita">
                            <img src="./assets/images/arrow.svg" alt="">
                        </div>
                    </div>

                </div><!--
                --><div class="col col-2 form-group">

                    <label for="ciudad">Ciudad*</label>
                    <div class="dropdown">
                        <select name="ciudad" id="ciudad">
                            <option value="default"></option>
                            <option value="Palermo">Palermo</option>
                        </select>
                        <div class="flechita">
                            <img src="./assets/images/arrow.svg" alt="">
                        </div>
                    </div>
                </div><!--
                --><div class="col col-1 form-group fg-1">

                    <label >Adjuntar pasaporte*</label>
                    <input type="file" name="pasaporte" id="pasaporte">

                </div><!--
                --><div class="col col-1 form-group fg-1">

                    <label >Adjuntar ficha de cobertura médica*</label>
                    <input type="file" name="fichaMedica" id="fichaMedica">

                </div><!--
                --> <div class="col col-1 form-group fg-1" style="text-align: center;">
                    <button type="submit" id="sendUserData">Enviar</button>
                </div>

            </form>
        </div>

    </div>

    <div class="seccion2 s2disabled">
        <div class="container">

            <div class="col col-3 texto">
                <div class="title">
                    <h3>
                        ¡Participá del <span>sorteo de los camarotes!</span>
                    </h3>
                </div>
                <div class="bajada">
                    <p>
                        Hacé click en el botón Sortear para conocer cuál será tu camarote en el crucero. ¡Muchas Suerte!
                    </p>
                </div>
            </div>

            <div class="col col-3 contador">
                <div class="title">
                    <h4>
                        Camarote Nº
                    </h4>
                </div>
                <div class="numero-camarote" id="numero-de-camarote">
                    <h2>
                        0000
                    </h2>
                </div>
                <div class="cta">
                    <button id="sorteoButton">Sortear</button>
                </div>
            </div>

            <div class="col col-3 barco">
                <img src="./assets/images/barco-disabled.png" alt="">
            </div>

        </div>
    </div>

    <div class="seccion3 s3disabled">
        <div class="container">
            
            <div class="title">
                <h2>
                    Un viaje <span>a tu medida</span>
                </h2>
            </div>
            <div class="bajada">
                <p>
                    ¿Qué actividad te gustaría realizar en el transcurso de tu viaje? Conocelas y contanos.
                </p>
            </div>

            <div class="actividades">

                <div class="col col-2 item">
                    <img src="./assets/images/location1.png" alt="">
                    <div class="overlay"></div>
                    <div class="data">
                        <div class="title">
                            <h4>
                                Lorem Ipsum
                            </h4>
                        </div>
                        <div class="bajada">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div><!--
                --><div class="col col-2 item">
                <img src="./assets/images/location2.png" alt="">
                    <div class="overlay"></div>
                    <div class="data">
                        <div class="title">
                            <h4>
                                Lorem Ipsum
                            </h4>
                        </div>
                        <div class="bajada">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div><!--
                --><div class="col col-2 item">
                <img src="./assets/images/location3.png" alt="">
                    <div class="overlay"></div>
                    <div class="data">
                        <div class="title">
                            <h4>
                                Lorem Ipsum
                            </h4>
                        </div>
                        <div class="bajada">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div><!--
                --><div class="col col-2 item">
                <img src="./assets/images/location4.png" alt="">
                    <div class="overlay"></div>
                    <div class="data">
                        <div class="title">
                            <h4>
                                Lorem Ipsum
                            </h4>
                        </div>
                        <div class="bajada">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div><!--
                --><div class="col col-2 item">
                <img src="./assets/images/location5.png" alt="">
                    <div class="overlay"></div>
                    <div class="data">
                        <div class="title">
                            <h4>
                                Lorem Ipsum
                            </h4>
                        </div>
                        <div class="bajada">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div><!--
                --><div class="col col-2 item">
                <img src="./assets/images/location6.png" alt="">
                    <div class="overlay"></div>
                    <div class="data">
                        <div class="title">
                            <h4>
                                Lorem Ipsum
                            </h4>
                        </div>
                        <div class="bajada">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="seccion4 s4disabled">
        <div class="container">
            
            <div class="title">
                <h2>
                    Descargate toda la <span>información necesaria</span>
                </h2>
            </div>
            <div class="bajada">
                <p>
                    Haciendo click en el siguiente botón vas a poder acceder a toda la documentación de tu viaje tales como el número de camarote, excursiones y demás.
                </p>
            </div>

            <div class="descargar">
                <button id="getAllUserData">Descargar</button>
            </div>

        </div>
    </div>

    <div class="seccion5 s5disabled">
        <div class="container">
            <img src="./assets/images/logo-color.png" alt="Seguros San Cristóbal">
        </div>
    </div>

</div>

<?php include './includes/footer.php'; ?>