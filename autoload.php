<?php
	class CargadorClases {
		# reemplazar por carpeta necesaria
		public static string $carpeta = "App/Controllers/";
		public static function incluir($clase)
		{
			include self::$carpetaClases.$clase;
		}
		public static function cargarClases()
		{
			return spl_autoload_register("self::incluir");
		}
	}
	# con este metodo estatico cargamos todas las clases
	# que nos dice la propiedad $carpeta
	CargadorClases::cargarClases();
?>