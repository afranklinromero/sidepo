<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
        body {
            /* Altura del navbar en vista web */
          
            /* Altura del navbar */
    
        }

        @media (max-width: 991.98px) {
            body {
                padding-top: 0; /* Elimina el espacio extra en vista móvil */
            }
        }
       
            .team-boxed .item img {
    max-width: 160px;
    }.rounded-circle {
    border-radius: 50%!important;
    }.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    }
    .bg-c-blue {
        background: linear-gradient(45deg,#146414,#268736);
    }
    .bg-nav {
    background: #2f6c1b;

    }
    @keyframes fadeIn {
                0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
            .animated-text {
           
            animation: fadeIn 3s ease-in-out;
            animation-iteration-count: infinite; /* Repetir indefinidamente */
        }

        .part1 {
            animation-delay: 0.2s;
        }

        .part2 {
            animation-delay: 0.3s;
        }

        .part3 {
            animation-delay: 0.4s;
            
        }
        .bold-text {
    font-weight: bold;
    }
    .color-text{
        color: gray;
    }
    .card {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }
</style> 

    <title>SIDEPO</title>

        <!-- Fonts -->
       
       
<!-- Fonts -->
        
    
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> 
    
        <!-- Styles -->
       
         <!-- Scripts -->
   
    </head>
    <body>
        



        

      <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top" style="position: absolute">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="#mision">Misión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#vision">Visión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contactos">Contactos telefónicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#requisitos">Requisitos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#oficinas">Oficinas</a>
                        </li>
                    

                        
                    </ul>
                    <div class="ms-auto">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </div>
                </div>
            </div>
        </nav>
            <div id="carouselExample" class="carousel slide mt-5" data-bs-ride="carousel" >
                <div class="carousel-inner" style="padding-top:8px">
                    <div class="carousel-item active">
                        <img src="img/baner/1.jpg" class="d-block w-100" alt="...">
               
           
                    </div>
                    <div class="carousel-item" >
                        <img src="img/baner/2.jpg" class="d-block w-100" alt="...">
                        
                          
                        
                    </div>
                    <div class="carousel-item" > 
                                <img src="img/baner/3.jpg" class="d-block w-100" alt="...">
                              
                                    
                                   
                    </div>
                </div>
            </div>
<!-- Contenido -->

<div class=container>
    <section id="inicio">
        <h1 class="text-center mt-1">
            <span class="animated-text part1">DI.</span>
            <span class="animated-text part2">PRO.</span>
            <span class="animated-text part3">VE.</span>
        </h1>
                    <p class="text-center" style="color: gray"> La Dirección de Prevención e Investigación de Robo de Vehículos, tiene por misión y visión </p>

    </section>   
    <section id="mision">
        <h2>Misión</h2>
       
            <p class="m-3 color-text">La Dirección de Prevención e Investigación de Robo de Vehículos, tiene por misión prevenir, 
                detectar e investigar el robo, hurto, receptación y abandono de vehículos, accesorios y 
                autopartes, asimismo, la persecución, detención y remisión al Ministerio Público de personas 
                vinculadas a estas actividades ilícitas, a nivel nacional e internacional, basando su accionar 
                en la normativa legal vigente.</p>
    <br>
       
    </section>

    <section id="vision">
        <h2>Visión</h2>
        
            <p class="m-3 color-text">Ser un organismo confiable, basado en la eficiencia, disciplina y honestidad, consolidada como
                 una unidad de servicio a la sociedad mediante la prevención e investigación de ilícitos, 
                 influyendo en la población hacia un mejor ordenamiento, estructural y documental del parque
                  automotor, desarrollando nuestra labor específica y fortaleciendo los conceptos preventivos 
                  para mejorar las condiciones de seguridad ciudadana en todo el territorio.</p>
    </section>

    <section id="contactos">
        <h2>Contactos telefónicos</h2>
        <!-- Contenido de la sección Contactos telefónicos -->

       <p class="m-3" style="font-size: 35px; color: gray" > 64888777 <a href="https://wa.me/59164888777" target="_blank"> <img src="img/whatsapp.jpg" style="width:30px">  </a></p>
    </section>

    <section id="requisitos">
        <h2>Requisitos</h2>
        <div class="team-boxed">
			<div>
				<div class="intro">
					<h2 class="text-center">Tramites </h2>
					<p class="text-center" style="color: gray">Tramites que se realizan en las distintas Direciones Departamentales de
						DI.PRO.VE.</p>
				</div>
				<div class="row people">
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="img/logo/logo1.png">
							<h3 class="name">Cambio de Color</h3>
							<p class="title">REQUISITOS</p>
							<div class="pricing-body">
								<ul>
									<li>Ruat</li>
									<li>Poliza de importacion y F.R.V.</li>
									<li>Fotocopia de C.I. del propietario</li>
									<li>Poder notariado</li>
									<li>Factura e informe del chapista</li>
									<li>Deposito de 30 Bs.</li>
									<li>Presencia fisica del vehiculo</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="img/logo/logo1.png">
							<h3 class="name">Cambio de Motor</h3>
							<p class="title">REQUISITOS</p>
							<div class="pricing-body">
								<ul>
									<li>Ruat</li>
									<li>Poliza de importacion y F.R.V.</li>
									<li>Fotocopia de C.I. del propietario</li>
									<li>Poder notariado</li>
									<li>Factura de compra y poliza del motor</li>
									<li>Deposito de 30 Bs.</li>
									<li>Presencia fisica del vehiculo</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="img/logo/logo1.png">
							<h3 class="name">Inscripcion Nueva</h3>
							<p class="title">REQUISITOS</p>
							<div class="pricing-body">
								<ul>
									<li>Poliza de importacion y F.R.V. y/o declaracion de mercaderia de importacion
										(D.I.M.)</li>
									<li>Inpuesta a la inscripcion nueva G.A.M.</li>
									<li>Fotocopia de C.I. del propietario</li>
									<li>Deposito de 70 Bs.</li>
									<li>Presencia fisica del vehiculo</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--CARDS End-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


		<!--CARDS INITIAL-->
		<div class="team-boxed">
			<div>
				<div class="row people">
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="img/logo/logo1.png">
							<h3 class="name">Transferencia</h3>
							<p class="title">REQUISITOS</p>
							<div class="pricing-body">
								<ul>
									<li>Ruat</li>
									<li>Poliza de importacion y F.R.V.</li>
									<li>Poder notariado y/o minuta</li>
									<li>Fotocopia de C.I. del comprador y vendedor</li>
									<li>Inpuesta a la inscripcion nueva G.A.M.</li>
									<li>Deposito de 70 Bs.</li>
									<li>Presencia fisica del vehiculo</li>
								</ul><br><br><br>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="img/logo/logo1.png">
							<h3 class="name">Revenido Quimico</h3>
							<p class="title">REQUISITOS</p>
							<div class="pricing-body">
								<ul>
									<li>Ruat</li>
									<li>Poliza de importacion y F.R.V.</li>
									<li>Fotocopia de C.I. del propietario</li>
									<li>Poder notariado y/o minuta (en caso de de que el RUAT no se
										encuentre registrado a nombre del solicitante)</li>
									<li>Memorial dirigido al Sr. Director Deptal. Diprove.</li>
									<li></li>
								</ul><br><br><br>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="img/logo/logo1.png">
							<h3 class="name">Cambio de Estructura</h3>
							<p class="title">REQUISITOS</p>
							<div class="pricing-body">
								<ul>
									<li>Ruat</li>
									<li>Poliza de importacion y F.R.V.</li>
									<li>Resolucion de inscripcion del vehiculo</li>
									<li>Minuta de transferencia y/o poder notariado</li>
									<li>Contrato de trabajo </li>
									<li>Fotocopia de CI. de propietario </li>
									<li>Memorial dirigido al Sr. Dir. Dptal. de Diprove</li>
									<li>Deposito de 30 Bs.</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--CARDS End-->
		<!--CARDS INITIAL-->

		<div class="team-boxed">
			<div>
				<div class="row people">
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="img/logo/logo1.png">
							<h3 class="name">Certificado de Autenticidad</h3>
							<p class="title">REQUISITOS</p>
							<div class="pricing-body">
								<ul>
									<li>Ruat</li>
									<li>Poliza de importacion y F.R.V.</li>
									<li>Cedula de Identidad</li>
									<li>Poder notariado y/o minuta (en caso de de que el RUAT no se
										encuentre registrado a nombre del solicitante)</li>
									<li>Memorial dirigido al Sr. Director Deptal. Diprove.</li>
									<li>Deposito de 110 Bs.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="{{ asset('img/logo/logo1.png')}}">
                     
							<h3 class="name">Extravio de Placa</h3>
							<p class="title">REQUISITOS</p>
							<div class="pricing-body">
								<ul>
									<li>Ruat</li>
									<li>Poliza de importacion y F.R.V.</li>
									<li>Cedula de Identidad</li>
									<li>Poder notariado y/o minuta (en caso de de que el RUAT no se
										encuentre registrado a nombre del solicitante)</li>
									<li>Memorial dirigido al Sr. Director Deptal. Diprove.</li>
									<li>Deposito de 70 Bs.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="box"><img class="rounded-circle" src="img/logo/d2.png">
							<h3 class="name">DONDE PAGAR</h3>
							<p class="title">NRO DE CUENTA</p>
							<div class="pricing-body">
								<h3 style="text-align: center;">EN CUALQUIR SUCURSAL DEL BANCO UNION A NIVEL NACIONAL, BUSCANDO EL NUMERO DE CUENTA DE SU CIUDAD O REGION </h3><br>
								<h3 style="text-align: center;"><a style="color: darkgreen; font-size: 24px;" href="https://bancounion.com.bo/AgenciasAtm/AgenciasAtms">click aqui para buscar su banco</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--CARDS End-->
	
		<div class="text-center m-5">
			<div class="row">
				
				
				<div class="col">
					<div class="card bg-c-blue order-card">
						<div class="card-block">
							<h6  style="font-size: 22px; color: white;">SANTA CRUZ</h6>
							<h2  style="color: white;"><i class="fa fa-credit-card f-left"></i><span>1-4584674</span></h2>
							<p class="m-b-0 text-white">Numero de Cuenta Banco Union</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    </section>


    <section id="recomendaciones">
        <h2>Recomendaciones</h2>
        
        <h3>Motocicletas medidas preventivas</h3>

        <br> <p class="bold-text">SISTEMA DE ALARMAS PARA MOTOCICLETAS </p>
        <p class="color-text"> Es un método eficaz que funciona de forma similar al sistema de alarmas de autos. Si alguien intenta manipular tu moto, se activará la alarma, sorprendiendo al ladrón y llamando la atención de quienes estén alrededor y la tuya, por supuesto. 
            Si escuchas la alarma de tu moto, podrás actuar de forma inmediata para evitar el robo de tu moto </p>

        <p class="bold-text">SISTEMA ANTIROBO</p>
        <p class="color-text">Es un sistema eficaz que ayuda a reducir el robo de tu motocicleta, las cadenas, candados de discos, horquillas para ruedas y bloqueadores de manillar son una buena opción para cuidar de tu motorizado, si usas más de un método, será para el ladrón más difícil robar tu motocicleta. </p>

        <p class="bold-text">SISTEMA DE LOCALIZACION GPS.</p>
        <p class="color-text">Con ella puedes conocer, principalmente, la ubicación de tu vehículo</p>

        <p class="bold-text">RECOMENDACIONES</p>
        <ul class="color-text">
            <li>Estaciona en lugares habilitados, busca estacionamientos cerca de tu lugar de trabajo, estudio o en donde llegaras para así tener tu motocicleta en un lugar seguro, si la dejas en la calle o en la vereda, es muy probable que alguien aproveche tu ausencia para robarla.
            <li>Evita dejar tu motocicleta expuesta en lugares solitarios y con poca afluencia de personas.
            <li>Reconoce los lugares donde se han producido robos y evitarlos.
            <li>No dejes la documentación de tu motocicleta en la maletera. En caso de robo, es mejor que tengas los documentos a mano para cuando pongas la denuncia.
        </ul>

        <h3>Prevenir el robo de su vehiculo</h3>
            <ul class="color-text">
                    <li>Cuando se encuentre trabajando evite recoger personas en estado de ebriedad.
                    <li>Cuando quiera descansar en horas de la noche estaciones su vehículo en inmediaciones de un recinto policial o en una estación de gasolina.
                    <li>No recoja personas sospechosas ni traslade a zona alejadas previniendo de esta manera ser atracado y poner en riesgo su vida.
                    <li>Si realiza un viaje en horas de la noche con tres o más pasajeros a una localidad fuera de la ciudad haga conocer del mismo a un recinto policial cercano.
                    <li>Si durante su trabajo nota lago extraño o personas en actitud sospechosa en un vehículo haga conocer a la policía ya que puede tratarse de un colega suyo que se encuentra en peligro de ser atracado.
                    <li>Cuando abandone su vehículo momentáneamente no deje por ningún motivo las llaves en switch asi sea por breves minutos, porque puede ser objeto de robo de su motorizado.
                    <li>Si sospecha que es seguido por otro vehículo, solicite el apoyo de un policía y recura aun recinto policial cercano.
            </ul>


    </section>

    <section id="oficinas" class="">
        <h2>Oficinas</h2>
        <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/oficinas/central.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Central</h5>
                        <p> Telefono: 64888777 <p>
                    
                        <div class="text-center">
                        <a  href="https://www.google.com/maps?q=-17.7998385,-63.16407&z=17&hl=es" target="_blank"> <img src="img/oficinas/gps.png" style="width:35px"></a> 
                        </div>
                </div>
            </div>
        </div>
        <div class="col">

            <div class="card" style="width: 18rem;">
                <img src="img/oficinas/yapacani.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Yapacani</h5>
                    <p> Telefono: 69047735 <p>
                    <div class="text-center"><a href="https://www.google.com/maps?q=-17.41954803466797,-63.88384246826172&z=17&hl=es" target="_blank"><img src="img/oficinas/gps.png" style="width:35px"></a> 
                    </div>
                    </div>
            </div>
        </div>

        <div class="col">

            <div class="card" style="width: 18rem;">
                <img src="img/oficinas/sanignacio.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">San Ignacio</h5>
                
                <p> Telefono:  <p>

                <div class="text-center"> <a href="" ><img src="img/oficinas/gps.png" style="width:35px"></a> 
                </div>
            </div>
            
        </div>

        
        </div>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/oficinas/puerto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Puerto Suarez</h5>
                        <p> Telefono: 74445900 <p>
                        <div class="text-center"><a href="https://www.google.com/maps?q=-17.6036574,-63.1414213&z=17&hl=es" target="_blank"><img src="img/oficinas/gps.png" style="width:35px"></a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/oficinas/warnes.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Warnes</h5>
                        <p> Telefono:  <p>
                        <div class="text-center"> <a href="https://www.google.com/maps/place/17%C2%B036'13.2%22S+63%C2%B008'29.1%22W/@-17.6075178,-63.1467965,15z/data=!4m4!3m3!8m2!3d-17.6036574!4d-63.1414213?hl=es&entry=ttu" target="_blank"><img src="img/oficinas/gps.png" style="width:35px"></a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/oficinas/montero.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Montero</h5>
                        <p> Telefono: 39210046 <p>
                        <div class="text-center"> <a href="https://www.google.com/maps/place/17%C2%B020'31.8%22S+63%C2%B015'09.4%22W/@-17.3421653,-63.2551911,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-17.3421653!4d-63.2526162?hl=es&entry=ttu" target="_blank"><img src="img/oficinas/gps.png" style="width:35px"></a> 
                        </div>
                    </div>
                </div>
            </div>
        
        
        


        </div>
        <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/oficinas/laguardia.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">La Guardia</h5>
                        <p> Telefono: 64447660 <p>
                        <div class="text-center"><a href="https://www.google.com/maps/place/FELCC+FELCV+DIPROVE-+LA+GUARDIA/@-17.8884788,-63.3226579,3a,75y/data=!3m8!1e2!3m6!1sAF1QipMDn--OgsdkRp6AZiAvhXna91Gpf5-oJOrPm5AF!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMDn--OgsdkRp6AZiAvhXna91Gpf5-oJOrPm5AF%3Dw203-h270-k-no!7i3024!8i4032!4m16!1m8!3m7!1s0x93f1c74e3674f2e7:0x1f39ac4bae122be3!2sFELCC+FELCV+DIPROVE-+LA+GUARDIA!8m2!3d-17.8884788!4d-63.3226579!10e5!16s%2Fg%2F11fsx5v2rr!3m6!1s0x93f1c74e3674f2e7:0x1f39ac4bae122be3!8m2!3d-17.8884788!4d-63.3226579!10e5!16s%2Fg%2F11fsx5v2rr?hl=es&entry=ttu" target="_blank"><img src="img/oficinas/gps.png" style="width:35px"></a> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/oficinas/cotoca.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cotoca</h5>
                            <p> Telefono: 64488332 <p>
                        
                            <div class="text-center">
                            <a  href="https://www.google.com/maps/place/17%C2%B045'02.0%22S+62%C2%B059'32.8%22W/@-17.7505761,-62.9926211,20z/data=!4m4!3m3!8m2!3d-17.7505556!4d-62.9924444?hl=es&entry=ttu" target="_blank"> <img src="img/oficinas/gps.png" style="width:35px"></a> 
                            </div>
                    </div>
                </div>
            </div>

        <div class="row">

        </div>
        <div style ="width:10" class="text-center md-5">
        <iframe  width="550" height="315" src="https://www.youtube.com/embed/E8VSjtecu3w?modestbranding=1" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>
<br>
<br>
<br>
<br>


</div>




<!-- Footer -->
<footer class="bg-nav text-white text-center p-3 fixed-bottom">
 "CONTRA EL MAL, POR EL BIEN DE TODOS"     DIPROVE SANTA CRUZ 2023
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll(".card");

        // Opciones para el Intersection Observer
        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.5 // Se activa cuando el 50% del elemento es visible
        };

        // Crear el Intersection Observer con la función de callback
        const observer = new IntersectionObserver(callback, options);

        // Observar cada tarjeta
        cards.forEach(card => {
            observer.observe(card);
        });

        // Callback que se ejecuta cuando una tarjeta es visible
        function callback(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Mostrar gradualmente la tarjeta
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                    // Dejar de observar después de mostrar la tarjeta
                    observer.unobserve(entry.target);
                }
            });
        }
    });
</script>

<!-- Scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">


</body>
</html>
