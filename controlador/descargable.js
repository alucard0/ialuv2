
jQuery(function($){
	/*recupera el id*/
	$("#contentDescarga div[id]").click(function() {
		var id = $(this).attr("id");
        /*confirm("id_boton: " + id + " URL " + href);*/
        
	    /*switch de descarga*/
		switch(id)
		{
		  	/*Galeria*/
		   	case 'todo_galeria':
		   		//window.location.href = 'modelo/DescargaArchivo.php?file=../descargables/galeria.zip';
		   		ga('send', {hitType: 'event',eventCategory: 'Descarga la galería',  eventAction: 'download', eventLabel: 'Informe Rector'});
		   		
		   		var file_path = 'descargables/galeria.zip';
				var a = document.createElement('A');
				a.href = file_path;
				a.download = file_path.substr(file_path.lastIndexOf('/') + 1);
				document.body.appendChild(a);
				a.click();
				document.body.removeChild(a);

		   	break;

		   	default:
		   		alert("No tiene ID asociado");
		   	break
		}
	});
});