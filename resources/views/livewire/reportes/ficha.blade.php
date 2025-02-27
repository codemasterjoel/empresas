<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="width: 100%; border: 0px;">
        <tr><td style="text-align: left; width: 33%"></td><td style="text-align: right; width: 64%">Receptoría Nº R-{{$empresa->codigo}}</td></tr>
		<tr style="margin-top: -40px;"><td style="text-align: left; width: 33%; margin-top: -20px;">Ciudadano(a):</td><td style="text-align: right; width: 100%">SECA {{$empresa->parroquia->abreviatura}}-{{$empresa->codigo}}-{{$empresa->sucursal}}</td></tr>
		<tr><td style="text-align: left; width: 100%; text-transform: uppercase;">{{$empresa->nombres}} {{$empresa->apellidos}}</td></tr>
		<tr><td style="text-align: left; width: 100%; text-transform: uppercase;">Presidente de {{$empresa->nombre}}</td></tr>
		<tr><td>Presente.</td></tr>
    </table>
    <table style="width: 100%; border: 0px;" align="center">
        <tr><td align="center"><h3>CERTIFICADO DE REGISTRO</h3></td></tr>
    </table>
    <table style="text-align: center; width: 100%">
        <tbody>
			{{-- <tr><td style="text-align:justify"><br><br></td></tr> --}}
			<tr><td style="text-align:justify; text-indent: 2em;">Reciba un cordial saludo revolucionario y solidario en nombre del equipo de la Secretaría para el Ecosocialismo y Control Ambiental.</td></tr>
			<tr>
				<td style="text-align:justify; text-indent: 2em;">
					En atención a la receptoría <b>Nº R-{{$empresa->codigo}}</b> de fecha <b>{{$empresa->created_at->format('d/m/Y')}}</b>, mediante la cual solicita inscripción en el Registro de Empresas Recicladoras, Recuperadoras o afines del manejo de materiales 
					susceptibles al reciclaje, (materiales no peligrosos), la empresa <b style="text-transform: uppercase;">{{$empresa->nombre}}</b>, ubicada en <b style="text-transform: uppercase;">{{$empresa->direccion}}</b>; cumplo en participarle que de acuerdo al informe de inspección realizado por personal técnico adscrito 
					a este despacho, y visto los recaudos que acompañan la solicitud; esta Dirección de conformidad con lo establecido en el Artículo 178 de la Constitución de la República Bolivariana de Venezuela;  Artículo 56 literal “d” de la Ley Orgánica 
					del Poder Público Municipal; Artículo 14 numerales 1 y 2 y Artículo 68 de la Ley de Residuos y Desechos Sólidos y la Ordenanza para la Gestión y Tratamiento Integral de los Residuos y Desechos Sólidos en Jurisdicción Territorial del Municipio 
					Bolivariano Libertador (publicada en la Gaceta Municipal del Municipio Bolivariano Libertador Nº 4742-2 de fecha 25/10/2021), le participa que la empresa <b style="text-transform: uppercase;">{{$empresa->nombre}}</b> RIF. <b>{{$empresa->tipoRIF}}-{{$empresa->rif}}</b>, queda 
					registrada bajo el número <b>SECA {{$empresa->parroquia->abreviatura}}-{{$empresa->codigo}}-{{$empresa->sucursal}}</b> de fecha <b>{{$empresa->created_at->format('d/m/Y')}}</b>, para realizar ACOPIO, COMPRA, VENTA Y COMERCIALIZACIÓN DE MATERIALES SUSCEPTIBLES AL RECICLAJE, 
					debiendo dar cumplimiento a las siguientes condiciones:
				</td>
			</tr>
			<tr>
				<td style="text-align:justify">
					<ul>
						<ol>1.	El transporte de residuos y desechos sólidos especiales (reciclables), se realizará conforme al contenido de la “Hoja de seguimiento” y la respectiva autorización emitida por este despacho.</ol>
						<ol>2.	Se prohíbe la comercialización, compra, venta y transporte de residuos y desechos sólidos especiales (reciclables), pertenecientes a los organismos e instituciones del Estado (CANTV, CORPOELEC, HIDROCAPITAL, MOPVI, otros), salvo que posean las respectivas autorizaciones del ente correspondiente.</ol>
						<ol>3.	La carga y la unidad de transporte deben cumplir con las normas ambientales, de circulación de transporte pesado (Ley de Tránsito Terrestre y su Reglamento) y Normas COVENIN.</ol>
						<ol>4.	El chofer de la unidad de transporte de residuos y desechos sólidos especiales (reciclables), debe conocer y tener entrenamiento del Plan de Emergencia y/o Contingencia. La unidad de transporte debe disponer y tener en buen estado físico los equipos e instrumentos necesarios para atender emergencias.</ol>
						<ol>5.	El presente registro de empresas recicladoras, recuperadoras o afines del manejo de materiales susceptibles al reciclaje, (materiales no peligrosos), no exime al productor del cumplimiento de las normas y leyes que rigen la materia.</ol>
						<ol>6.	El incumplimiento de las condiciones aquí establecidas dará lugar a la anulación o suspensión del presente registro, y a la apertura del correspondiente procedimiento administrativo.</ol>
						<ol><b>7.	REGISTRO VÁLIDO POR UN LAPSO DE  (3) MESES A PARTIR DE LA FECHA DE SU EMISIÓN.</b></ol>
					</ul>
				</td>
			</tr>
			<tr>
				<td style="text-align: center; font-size:12pt"><br><br><br><br><br>
					______________________________________<br>
							<br>
							<i>Fundación Para la Economía Circular y Las Energías Renovables</i>
					
				</td>
			</tr>
            <tr>
                <td style="text-align:right">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('svg')->size(150)->generate('https://registro.fundaeco.com.ve/info/'.$empresa->id)) !!} "></td>
            </tr>
		</tbody>
	</table>
</body>
</html>