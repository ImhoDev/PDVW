<header class="pb-3 mb-4 border-bottom">
	<a href="/" class="d-flex align-items-center text-dark text-decoration-none">
		<img width="60" height="60" src="https://cdn-icons-png.flaticon.com/512/3408/3408740.png" class="custom-logo"></img>
		<span class="pt-8 mt-4">  </span>
	</a>
</header>

<div class="p-5 mb-4 bg-light rounded-3">
	<div class="container-fluid py-5">
		<h1 class="display-5 fw-bold">Punto de venta web</h1>
		<p class="col-md-8 fs-4">Punto de venta creado en php usando laravel, muy siemple aun, vamos en desarrollo</p>
		<button class="btn btn-primary btn-lg" type="button">Web oficial del proyecto</button>
        <p> https://ventasweb.ml </p>
        
	</div>
</div>

<div class="row align-items-md-stretch">
	<div class="col-md-6">
		<div class="h-100 p-5 text-white bg-dark rounded-3">
			<h2>Soporte</h2>
			<p>Se irá actualizando constantemente para ver que realmente este punto de venta contenga todas las funcionalidades de requiera un punto de venta covencional</p>
			<button class="btn btn-outline-light" type="button">Documentación</button>
		</div>
	</div>
	<div class="col-md-6">
		<div class="h-100 p-5 bg-light border rounded-3">
			<h2>Contribuciones</h2>
			<p>Actualmente el proyecto se encuentra en proceso de desarrollo, por lo que si quieres aportar eres bienvenido</p>
			<button href="ventasweb.ml" class="btn btn-outline-secondary" type="button">Ejemplos</button>
            <h2>Actualizaciones</h2>
			<p>Las actualizaciones serán constantes, en la versión develop, solo las caracteristicas ya probadas y estables serás subidas a la rama principal </p>
            <h2>Contáctame </h2>
			<p>Si quieres asesoria y/o soporte contáctame</p>
		</div>
	</div>
</div>

<footer class="pt-3 mt-4 text-muted border-top">
	Derechos reservados &copy; 2021 - 2022
</footer>


## Acerca del projecto

Pasos para inmplementar el proyecto

<p>1-. Descargar/instalar laragon</p>
<p>2-. Decargar/instalar git</p>
<p>3-. Abrir git en el directorio www de laragon</p>
<p>4-. clonar repositorio "git clone https://github.com/ImhoDev/ventasweb.git"</p>
<p>5-. Desde la terminal de laragon/ventasweb instalar las dependencias de PHP "composer install"</p>
<p>6-. Desde la terminal de laragon/ventasweb instalar las dependencias de JS "npm install && npm run dev"</p>
<p>7-. Crear la base de datos "ventasweb" recomiendo usar phpmyadmin para crear la base de datos, o usar la consola de laragon "CREATE DATABASE ventasweb;"</p>
<p>8-. Duplicar y renombrar .env.example a .env</o>
<p>9-. Configurar el archivo .env con los datos de mysql</p>
<p>10-. Reinciar laragon desde la consola con "reload laragon" desde el escritorio principal de laragon que habitualmente es C:\laragon </p>
<p>11-. Vistar "http://ventasweb.test" desde cualquier navegador.</p>
<p>12-. Vemos que sale un error, hay que generar el key ejecuentado "php artisan key:generate"</p>
<p>13-. Sale error porque no hemos realizado las migraciones, para solucionar ejecutar las migraciones. </p>
<p>14-. Generar las migraciones
</div> php artisan migrate    
<p>15-. El el proyecto ya deberia de estár corriendo en http://ventasweb.test



