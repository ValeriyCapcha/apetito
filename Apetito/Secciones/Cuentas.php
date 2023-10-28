<section class="section1">
        <div class="container" id="container">
            <div class="form-container crear-cuenta-container">
                <form action="#">
                    <h1>Crear cuenta</h1>
                    <input type="text" placeholder="Nombre" />
                    <input type="text" placeholder="Telefono" />
                    <input type="email" placeholder="Correo" />
                    <input type="password" placeholder="Contraseña" />
                    <button>Registrarse</button>
                    <div class="sesionGoogle">
                        <a href=""><img src="imgs/ico_google.png" alt=""></a>
                    </div>
                </form>
            </div>
            <div class="form-container iniciar-sesion-container">
                <form action="../Apetito/login.php" method="get">
                    <h1>Iniciar Sesión</h1>
                    <input type="email" name="txtEmail" placeholder="Correo">
                    <input type="password" name="txtPassword" placeholder="Contraseña">
                    <a href="#">olvidaste tu contraseña?</a>
                    <input type="submit" class="button" onclick="mostrarMensaje()" value="Iniciar Sesión">
                    <div class="sesionGoogle">
                        <a href=""><img src="imgs/ico_google.png" alt=""></a>
                    </div>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-izquierdo">
                        <h1>Bienvenido otra vez!</h1>
                        <p>Para mantenerse al tanto de las novedades que ofrecemos, inicie sesión.</p>
                        <button class="btn" id="iniciar">Iniciar Sesión</button>
                    </div>
                    <div class="overlay-panel overlay-derecho">
                        <h1>Hola!</h1>
                        <p>Registra tus datos personales y ofrecele una mejor experiencia a tu mascota.</p>
                        <button class="btn" id="regist">Registrarse</button>
                    </div>
                </div>
            </div>
            <div id="mensaje"><div class="TextoIncorrecto">DATOS INCORRECTOS</div></div>
        </div>
    </section>