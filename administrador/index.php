<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!-- estilos de boostrap 5 -->
    <link rel="shortcut icon" href="https://is2-ssl.mzstatic.com/image/thumb/Purple113/v4/8d/4c/16/8d4c1661-2d64-8043-741b-7aea99a7268d/source/256x256bb.jpg"> <!-- logo en la pestaña -->
    <link rel="stylesheet" href="/administrador/style.css">
    <title>Administrador</title>
</head>
<body>
    <header class="bg-primary">
        <img class="d-flex mx-auto py-5 img-fluid" src="/administrador/img/Caja_logo.png" alt="Logo de la caja de seguro social">
        <nav class="bg-white border-top py-3 border-3 border-dark">
            <a href="/administrador/" class="nav-a mx-5 text-decoration-none fs-4 actual">Inicio</a>
        </nav>
    </header>

    <main class="my-4">
        <fieldset class="container-fluid">
            <legend class="fs-3">Opciones Administrador</legend>
            <div class="d-flex flex-column flex-sm-column flex-md-column flex-lg-row flex-xl-row flex-xxl-row">
                <div class="col">
                    <a href="/administrador/añadirClinicas/" class="text-center text-decoration-none fs-4 opcion">
                        <img class="img-fluid icono d-flex mx-auto mt-4" src="/administrador/img/clinica.png" alt="opcion añadir clinicas">
                        <p class="opcion-titulo mb-4">Añadir Clínicas</p>
                    </a>
                </div> <!--  opción Agregar Clínicas -->

                <div class="col">
                    <a href="/administrador/añadirEspecialidades/" class="text-center text-decoration-none fs-4 opcion">
                        <img class="img-fluid icono d-flex mx-auto mt-4" src="/administrador/img/especialidad.png" alt="opcion añadir especialidades">
                        <p class="opcion-titulo mb-4">Añadir Especialidades</p>
                    </a>
                </div> <!-- opción Agregar Especialidades -->

                <div class="col">
                    <a href="/administrador/añadirMedicos/" class="text-center text-decoration-none fs-4 opcion">
                        <img class="img-fluid icono d-flex mx-auto mt-4" src="/administrador/img/medico.png" alt="opcion añadir medicos">
                        <p class="opcion-titulo mb-5">Añadir Médicos</p>
                    </a>
                </div> <!-- opción Agregar Medicos -->
            </div>
        </fieldset>
    </main>

    <footer id="footer" class="text-center mt-5 align-bottom">
        <p class="p-2 mb-0 bg-primary fixed-bottom"><?php echo date("Y"); ?> &copy</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
</body>
</html>
