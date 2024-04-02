<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción registrada exitosamente.</title>

    <link rel="stylesheet" href="{{asset('style/foundation/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/styleIncripciones.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

</head>

<body>
    
    <section class="row">
        <div class="registrado">
            <div class="registrado-titulo">
                <h2 class="animated fadeInDown pacifico">¡Gracias!</h2>
            </div>
            <div class="registrado-mensaje">
                <p>Hemos registrado correctamente tus datos para participar
                    en el congreso.</p>
                <p class="registrado-nota">Para cualquier información: <a href="mailto:dgpip@untrm.edu.pe">administrador@fisme.untrm.edu.pe</a></p>
            </div>
            <div class=" text-center">
                <a href="{{route('welcome.index')}}" class="button alert addButton">Regresar</a>
            </div>

        </div>

    </section>
</body>

</html>