<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/dna.css')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="svg" href="{{asset('/startup/logo/Logotipo_idovela_negro_fondo_transparente.svg')}}" />

    <title>iDovela</title>
</head>

<body>
    <!-- Just an image -->
    <nav class="navbar navbar-light  white p-0">
        <a class="navbar-brand" href="#">
            <img class="logo w-50 ms-5 p-2" src="{{asset('startup/ArchivosSVG/Logo/Logotipo_idovela_negro_fondo_transparente.svg')}}">
        </a>
    </nav>
    <section>
        <div class="row d-flex h-100">
            <div class=" col-md-6 col-sm-12 gray p-md-5 d-flex justify-content-center align-content-center flex-wrap">
                <div class="col-md-10 col-sm-12 m-5 p-sm-5">
                    <h2><strong>Idovela Colombia.</strong></h2>
                    <h2><strong>El progreso es habitable.</strong></h2>
                    <p>Simplificamos la manera en cómo elegir, sentir y obtener el espacio habitable de ensueño.</p>
                    <p><small>Sé uno de los primeros en tener la membresía Idovela.</small></p>
                    <div class="mb-3 col-12">
                        <input class="inputtext-idovela form-control" type="email" name="email_sb" id="email_sb" placeholder="Escribe aquí tu correo electrónico">
                    </div>
                    <div class="mb-3">
                        <a href="#" class="btn btn-idovela from-control">Inscríbete en la lista de espera <span class="glyphicon glyphicon-search ms-1"><img src="{{asset('startup/ArchivosSVG/Iconografia/icon/icon_blanco/Continuar-icon-blanco.svg')}}" width="24px"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 black d-flex text-center">
                <img class="w-100 h-auto img-fluid h-100" src="{{asset('startup/ArchivosSVG/Portadas/Puerta_de_dovela-fondo_negro.svg')}}">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <img class="w-50" src="{{asset('startup/ArchivosSVG/Portadas/menosIgualMas-FondoBlanco.svg')}}" style="width: 10rem;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 order-sm-2">
                <img class="w-100 h-auto img-fluid h-100" src="{{asset('startup/Imagenes/Salon-dovela.png')}}">
            </div>
            <div class="col-md-6 black p-md-5 py-5 d-flex justify-content-center align-content-center flex-wrap order-sm-1">
                <div class="col-md-10 col-sm-12 mx-5 p-sm-5">
                    <h2 class=""><strong>La mayoría soñamos con un espacio habitable reconfortante.</strong></h2>
                    <p>Es por eso que en Idovela proponemos:</p>
                    <h2>Menos dificultad</h2>
                    <p>consistenciaSabemos lo difícil que puede ser el elegir productos con plena confianza y visión objetiva.</p>
                    <h2>Menos frustración</h2>
                    <p>Conocemos lo frustrante que es el intentar conectar con un servicio al estar creando nuestro espacio ideal.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 m-0">
                <img class="w-100 h-auto img-fluid h-100" src="{{asset('startup/Imagenes/Conforatable.png')}}">
            </div>
            <div class="col-md-6 gray d-flex justify-content-center align-content-center flex-wrap">
                <div class="col-md-10 col-sm-12 m-5 p-sm-5 ">
                    <p>La solución Idovela</p>
                    <h2>Más contacto</h2>
                    <p>Creemos en la calidez del talento humano cuando acompaña a nuestros clientes en la búsqueda del espacio habitable ideal.</p>
                    <h2>Más cuidado</h2>
                    <p>Analizamos con datos el ciclo de nuestros productos y servicios para crear buenas experiencias a nuestros clientes.</p>
                    <h2>Más consistencia</h2>
                    <p>Nacimos con el objetivo de eliminar la complejidad a la hora de elegir, sentir y obtener el espacio habitable ideal.</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 gray d-flex justify-content-center align-content-center flex-wrap">
                <div class="col-md-10 col-sm-12 m-5 p-sm-5">
                    <h2><strong>Idovela esta en desarrollo</strong></h2>
                    <p>Estamos en estudio y desarrollo de una solución tecnológica efectiva para el mercado Colombiano que conecte a clientes con espacios habitables.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="w-100 h-auto img-fluid h-100" src="{{asset('startup/ArchivosSVG/Portadas/Contruccion_logo-fondo_blanco.svg')}}">
            </div>
        </div>
    </section>

    <footer class="black p-4">
        <div class="row pt-5">
            <div class="col-12">
                <div class="ms-4">
                    <p>CONTACTO</p>
                    <P>Soporte@idovela.com</P>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p><img class="w-25 ms-4" src="{{asset('startup/ArchivosSVG/Logo/Logotipo_idovela_blanco_fondo_transparente.svg')}}"><span class="mx-3">© iDOVELA S.A.S 2021</span></p>
            </div>
            <div class="col-md-3">
                <div class="row ">
                    <div class="col-2">
                        <img class="w-100 p-0 m-0" src="{{asset('startup/ArchivosSVG/Iconografia/icon/icon_blanco/twitter-icon-blanco.svg')}}">
                    </div>
                    <div class="col-2">
                        <img class="w-100 p-0 m-0" src="{{asset('startup/ArchivosSVG/Iconografia/icon/icon_blanco/Linkedin-icon-blanco.svg')}}">
                    </div>
                    <div class="col-2">
                        <img class="w-100 p-0 m-0" src="{{asset('startup/ArchivosSVG/Iconografia/icon/icon_blanco/Instagram-icon-blanco.svg')}}">
                    </div>
                    <div class="col-2">
                        <img class="w-100 p-0 m-0" src="{{asset('startup/ArchivosSVG/Iconografia/icon/icon_blanco/Facebook-icon-blanco.svg')}}">
                    </div>
                    <div class="col-2">
                        <img class="w-100 p-0 m-0" src="{{asset('startup/ArchivosSVG/Iconografia/icon/icon_blanco/Spotify-icon-blanco.svg')}}">
                    </div>
                    <div class="col-2">
                        <img class="w-100 p-0 m-0" src="{{asset('startup/ArchivosSVG/Iconografia/icon/icon_blanco/Youtube-icon-blanco.svg')}}">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="text-center"><img class="p-0 m-0 h-auto img-fluid" style="width: 25px;" src="{{asset('startup/ArchivosSVG/Iconografia/icon/icon_blanco/Mundo-icon-blanco.svg')}}"> Bogotá, Colombia</p>
            </div>
        </div>

    </footer>

    <script src="{{asset('public/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/bootstrap/dist/js/app.js')}}"></script>
</body>

</html>