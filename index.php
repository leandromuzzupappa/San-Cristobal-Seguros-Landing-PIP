<!-- Head -->
<?php include './includes/head.php'; ?>

    <div id="loading">
		<svg viewBox="0 0 70 70">
			<path class="st0" d="M35,69.5C16,69.5,0.5,54,0.5,35S16,0.5,35,0.5c1.4,0,2.5,1.1,2.5,2.5S36.4,5.5,35,5.5
			C18.7,5.5,5.5,18.7,5.5,35S18.7,64.5,35,64.5S64.5,51.3,64.5,35c0-2.3-0.3-4.7-0.8-7c-0.3-1.3,0.5-2.7,1.8-3s2.7,0.5,3,1.8
			c0.7,2.7,1,5.4,1,8.2C69.5,54,54,69.5,35,69.5z"/>
		</svg>
	</div>
    
    
    <div class="Intro">
        <div class="container">
            
            <div class="logos">
                <div class="col col-2 izq">
                    <img src="assets/images/logo-b.png" alt="">
                </div><!--
                --><div class="col col-2 der">
                    <img src="assets/images/logo-todosabordo.png" alt="">
                </div>
            </div>

            <div class="login" id="">
                <div class="container">

                    <div class="title">
                        <h1>
                            INGRESÁ TU <span>CÓDIGO
                            DE PRODUCTOR</span>
                        </h1>
                    </div>

                    <div class="formulario">
                        <form action="./assets/scripts/functions.php" method="POST" id="getCodigoProductor">
                            <input type="text" name="formCodigoProductor" id="formCodigoProductor" style="display: none;">
                            <label for="codigoProductor">Código de Productor*</label>
                            <input type="number" name="codigoProductor" id="codigoProductor" placeholder="Ej. 726659975">

                            <div class="form-group">
                                <div class="col col-2 izq">
                                    <button id="womenLogin" type="submit">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
        <?php if ( isset( $_SESSION['errores'] ) ): ?>
            <div class="loginError" id="codigoVacio" onclick="removeAlert('codigoVacio')">
                <p>
                    <?php echo $_SESSION['errores'];?>
                </p>
                <div class="cerrarAlerta">
                    <span></span>
                </div>
            </div>
            <?php session_destroy();?>
        <?php endif;?>
    </div>


<!-- Footer -->
<?php include './includes/footer.php'; ?>