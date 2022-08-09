<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="src/css.css">
</head>
<body class="bg-img">
<?php include "components/header.php" ?>
    <main>
            <!--Contenedor 2 Columnas-->
        <div class="container px-5 pt-4 d-flex">
                <!--Columna 1-->
            <div class="container-fluid col-xl-8 col-lg-8">
                    <!--Formulario-->
                <form action="" method="post" id="form-contacto">
                    <h2 class="text-secondary">Ayudanos a ayudarte ;)</h2>

                            <!--Fila-->
<!--VERIFICAR-->        <div class="row row-cols-xl-3 row-cols-xs-2">
                                <!--Nombre-->
                            <div class="col-xl-2 col-5">
                                <label for="Nombre" class="form-label">Nombre:</label>
                                <input type="text" id="Nombre" class="form-control mb-2" required>
                            </div>

                                <!--Correo-->
                            <div class="col-xl-5 col-11">
                                <label for="Correo" class="form-label">Correo:</label>
                                <input type="email" id="Correo" class="form-control mb-2" required>
                            </div>

                                <!--Ciudad-->
                            <div class="col-xl-5 col-7">
                                <label for="Ciudad" class="form-label">Ciudad:</label>
                                <select name="" id="Ciudad" class="form-select mb-2" required>
                                    <option value="" disabled>Escoge</option>
                                    <option value="">...</option>
                                    <option value="">Pontevedra</option>
                                    <option value="">Vigo</option>
                                    <option value="">A Coruña</option>
                                    <option value="">Santiago de Compostela</option>
                                </select>
                            </div>

                                <!--CP-->
                            <div class="col-xl-2 col-4">
                                <label for="CP" class="form-label">CP:</label>
                                <input type="text" id="CP" class="form-control mb-2" required>
                            </div>

                                <!--Dirección-->
                            <div class="col-xl-6">
                                <label for="Direccion" class="form-label">Dirección:</label>
                                <input type="text" id="Direccion" class="form-control mb-2">
                            </div>

                                <!--Motivo-->
                            <div class="col-xl-4 col-6">
                                <label for="Motivo" class="form-label">Motivo:</label>
                                <select name="" id="" class="form-select mb-2" required>
                                    <option value="" disabled>Escoge:</option>
                                    <option value="">...</option>
                                    <option value="">Averia</option>
                                    <option value="">Renovación</option>
                                    <option value="">Instalación nueva</option>
                                </select>
                            </div>

                                <!--Teléfono-->
                            <div class="col-xl-3 col-6">
                                <label for="Telefono" class="form-label">Teléfono:</label>
                                <input type="tel" id="Telefono" class="form-control mb-2" required>
                            </div>
                        </div>
                            <button type="submit" class="btn-secondary mt-2 rounded-3 border-0">Enviar</button>
                </form>
            </div>

                <!--Columna 2--> <!--Oculta para teléfonos-->
            <div class="container-fluid d-none d-xl-block d-lg-block">
                <div class="container-fluid pt-1 bg-secondary" id="fondo-contactenos">
                    <h2 class="text-primary text-center">Contáctenos!</h2>
                            
                        <!--Teléfono-->
                        <div class="row ps-2 pt-2 me-0">
                                <!--Icono-->
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16" id="telefono">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                            </div>
                                <!--Enlace-->
                            <div class="col-auto">
                                <a href="tel:+34635158366" class=" link-white text-decoration-none">+34635158366</a>
                            </div>
                        </div>

                        <!--WhatsApp-->
                        <div class="row ps-2 pt-3 me-0">
                                    <!--Icono-->
                                <div class="col-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" id="whatsapp">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                    </svg>
                                </div>
                                    <!--Enlace-->
                                <div class="col-auto">
                                    <a href="https://wa.me/+34635158366" class=" link-white text-decoration-none">+34635158366</a>
                                </div>
                        </div>
                        
                        <!--Telegram-->
                        <div class="row ps-2 pt-3 me-0 pb-3">
                                    <!--Icono-->
                                <div class="col-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16" id="telegram">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                                    </svg>
                                </div>
                                    <!--Enlace-->
                                <div class="col-auto">
                                    <a href="https://t.me/+34635158366" class=" link-white text-decoration-none">+34635158366</a>
                                </div>
                        </div>
                    
                        <!--Mapa-->
                        <div class="container-fluid">
                            <iframe src="https://maps.google.com/maps?q=rios%20teis&t=&z=15&ie=UTF8&iwloc=&output=embed" height="300px" width="300px">
                            </iframe>
                        </div>
                </div>
            </div>

        </div>
    </main>

    
    
<?php include "components/footer.php" ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>