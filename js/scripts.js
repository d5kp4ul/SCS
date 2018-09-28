$(document).on('ready', Iniciar);

function Iniciar()
{

	$varAsesor=$('#asesor')


	$varAsesor.show();


	$('#basesor').on('click',asesores);



}

function asesores()
{

	$varAsesor.hide();

}

