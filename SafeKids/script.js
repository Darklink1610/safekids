const funcionInit = () => {
	if (!"geolocation" in navigator) {
		return alert("Tu navegador no soporta el acceso a la ubicación. Intenta con otro");
	}

	const RUTA_API = "./loguear.php";
	let idWatcher = null;

	const $latitud = document.querySelector("#latitud"),
		$longitud = document.querySelector("#longitud"),
		$btnIniciar = document.querySelector("#btnIniciar"),
		$btnDetener = document.querySelector("#btnDetener"),
		$log = document.querySelector("#log");


	const onUbicacionConcedida = ubicacion => {
		console.log(ubicacion);
		const coordenadas = ubicacion.coords;
		$latitud.innerText = coordenadas.latitude;
		$longitud.innerText = coordenadas.longitude;
		loguear(`${ubicacion.timestamp}: ${coordenadas.latitude},${coordenadas.longitude}`);
		enviarAServidor(ubicacion);

		
	}

	const enviarAServidor = ubicacion => {
		const otraUbicacion = {
			coordenadas: {
				latitud: ubicacion.coords.latitude,
				longitud: ubicacion.coords.longitude,
			},
			timestamp: ubicacion.timestamp,
		};
		console.log("Enviando: ", otraUbicacion);
		fetch(RUTA_API, {
			method: "POST",
			body: JSON.stringify(otraUbicacion),
		}); 
	};


	const loguear = texto => {
		document.getElementById("lat").value = latitud.innerText;
		document.getElementById("lon").value = longitud.innerText;


	};

	const onErrorDeUbicacion = err => {

		$latitud.innerText = "Error obteniendo ubicación: " + err.message;
		$longitud.innerText = "Error obteniendo ubicación: " + err.message;
		console.log("Error obteniendo ubicación: ", err);
	}

	const detenerWatcher = () => {
		if (idWatcher) {
			navigator.geolocation.clearWatch(idWatcher);
			idWatcher = null;
		}
	}

	const opcionesDeSolicitud = {
		enableHighAccuracy: true,
		maximumAge: 0, 
		timeout: 1000 
	};


	$btnIniciar.addEventListener("click", () => {
		detenerWatcher();
		idWatcher = navigator.geolocation.watchPosition(onUbicacionConcedida, onErrorDeUbicacion, opcionesDeSolicitud);
	});

	$btnDetener.addEventListener("click", detenerWatcher);

	$latitud.innerText = "Cargando...";
	$longitud.innerText = "Cargando...";


};
document.addEventListener("DOMContentLoaded", funcionInit);
