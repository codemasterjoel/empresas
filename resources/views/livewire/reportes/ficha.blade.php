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
		<tr style="margin-top: -40px;"><td style="text-align: left; width: 33%; margin-top: -20px;">Ciudadano(a):</td><td style="text-align: right; width: 100%">FECEA {{$empresa->parroquia->abreviatura}}-{{$empresa->codigo}}-{{$empresa->sucursal}}</td></tr>
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
					En atención a la receptoría <b>Nº R-{{$empresa->codigo}}</b> de fecha <b>{{$empresa->created_at->format('d/m/Y')}}</b>, mediante la cual solicita la inscripción en el Registro de Empresa Recicladora, Recuperadora, Chatarreras u/o actividades 
					afines de Manejo de Materiales Susceptibles al Reciclaje (materiales no peligrosos), de la denominación comercial <b style="text-transform: uppercase;">{{$empresa->nombre}}</b>, con Registro Fiscal <b>{{$empresa->tipoRIF}}-{{$empresa->rif}}</b>;
					ubicada en <b style="text-transform: uppercase;">{{$empresa->direccion}}</b>; La Fundación para la Economía Circular y las Energías Alternativas; cumple en participarle que de acuerdo al informe de inspección realizado por personal técnico 
					adscrito a la Secretaria para el Ecosocialismo y Control ambiental, y visto los recaudos que acompañan la solicitud; de conformidad con lo establecido en el Artículo 178 de la Constitución de la República Bolivariana de Venezuela;  Articulo 19 
					y 21 de la Ley Orgánica del Ambiente, Publicada en la G.O. E Nº 5.833, fecha 22-12-2006; Artículo 9, numeral 1,2 y articulo 99 de la Ley de Gestión Integral de la Basura. Publicada en la G.O. E Nº 6.017, fecha 30-12-2010; Artículo 56 literal “d” 
					de la Ley Orgánica del Poder Público Municipal; Articulo 70 y 74 literal A y B de la Ordenanza para la Gestión y Tratamiento Integral de los Residuos y Desechos Sólidos en Jurisdicción territorial del Municipio Bolivariano Libertador del Distrito 
					Capital publicada en la Gaceta Municipal del Municipio Bolivariano Libertador Nº 4742-2 de fecha 25/10/2021); le participa que la empresa <b style="text-transform: uppercase;">{{$empresa->nombre}}</b>, queda registrada bajo el número 
					<b>FECEA {{$empresa->parroquia->abreviatura}}-{{$empresa->codigo}}-{{$empresa->sucursal}}</b> de fecha <b>{{$empresa->created_at->format('d/m/Y')}}</b>, para realizar El Manejo de Materiales Susceptibles al Reciclaje (materiales no peligrosos), 
					debiendo dar cumplimiento a las siguientes condiciones:
				</td>
			</tr>
			<tr>
				<td style="text-align:justify">
					<ul>
						{{-- <ol>1.	El transporte de residuos y desechos sólidos especiales (reciclables), se realizará conforme al contenido de la “Hoja de seguimiento” y la respectiva autorización emitida por este despacho.</ol> --}}
						<ol>1.	Se prohíbe la comercialización, compra, venta y transporte de residuos y desechos sólidos especiales (reciclables), pertenecientes a los organismos e instituciones del Estado (CANTV, CORPOELECT, HIDROCAPITAL, MOPVI, otros), salvo que posean las respectivas autorizaciones del ente correspondiente.</ol>
						<ol>2.	La carga y la unidad de transporte deben cumplir con las normas ambientales, de circulación de transporte pesado (Ley de Tránsito Terrestre y su Reglamento) y Normas COVENIN.</ol>
						<ol>3.	El presente registro no excluye cualesquiera otras medidas legales tendiente a evitar los actos violatorios al cumplimiento de las normas y leyes que rigen la materia.</ol>
						<ol><b>4.	REGISTRO VÁLIDO POR TRES (2) AÑOS A PARTIR DE LA FECHA DE SU EMISIÓN.<b></ol>
						<ol><b>5.	El Personal que labora en la empresa arriba identificada, deberá formarse en la Escuela de Economía Circular y Energía Alternativa en un plazo de 30 días, sin prorroga.</b></ol>
						<ol>6.	El incumplimiento de las condiciones aquí establecidas dará lugar a la anulación o suspensión del presente registro, y a la apertura del correspondiente procedimiento administrativo.</ol>
					</ul>
				</td>
			</tr>
			{{-- <tr>
				<td style="text-align:center; margin-bottom: -50%;">
					<img style="width:50%" src="img/firma_JL.svg">
				</td>
			</tr> --}}
			<tr>
				<td style="text-align: center; font-size:12pt"><br><br><br><br><br>
					<img style="width:30%; margin-bottom: -20px;" src="img/firma_JL.svg"><br>
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