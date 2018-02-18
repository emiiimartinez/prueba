Instalar Symfony 4: 
	+ Instalar XAMPP con PHP 7.2
	+ Instalar composer.
	+ Instalar el proyecto symfony corriendo el comando -> composer create-project symfony/website-skeleton nombreDelProyecto
	+ Dentro de la carpeta del proyecto
		+ Instalar el servidor de desarrollo -> composer require server --dev
		+ Instalar anottations (para las rutas) -> composer require annotations
		+ Instalar TWIG -> composer require twig
		+ Instalar barra de debug (opcional) -> composer require --dev profiler
		+ Instalar assets -> composer require symfony/asset
		+ Instalar Doctrine:
			+ Utilidad para generar codigo -> composer require doctrine maker
			+ Configuramos el archivo .env seteando los parametros de la DB.
			+ Generar entidades a partir de una DB existente (https://github.com/doctrine/DoctrineBundle/issues/729):
				+ php bin/console doctrine:mapping:convert --from-database annotation ./src/Entity
				+ Una vez generadas las entidades, es probable que haya que hacer los getters and setters.

TODAS LAS INSTALACIONES DE COMPOSER EN MENOS COMANDOS: 
	+ composer require annotations twig doctrine maker symfony/asset 
	+ composer require server --dev
	+ composer require --dev profiler


Utilidades Symfony:
	+ Dentro de la carpeta del proyecto
		+ Correr servidor de desarrollo -> php bin/console server:run
		+ Limpiar Cache:
			+ Dev -> php bin/console cache:clear
			+ Produccion -> php bin/console cache:clear --env=prod