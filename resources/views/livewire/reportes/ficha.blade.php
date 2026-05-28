<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="width: 100%; border: 0px">
		<tr style="margin-bottom: 10px;"><td><img style="width:80%" src="img/alcaldia.png"></td><td style="text-align: right;"><img style="width:50%; display:block; margin-left:auto;" src="img/fecea.png"></td></tr>
        <tr style="margin-bottom: 10px;"><td style="text-align: left; width: 33%"></td><td style="text-align: right; width: 64%">Nº de Registro: FECEA-{{$empresa->codigo}}/{{$empresa->created_at->format('Y')}}</td></tr>
    </table>
    <table style="width: 100%; border: 0px;" align="center" class="mb-20">
        <tr><td align="center"><h3>CONSTANCIA DE REGISTRO</h3></td></tr>
    </table>
    <table style="text-align: center; width: 100%" class="-mt-10" class="mb-20">
        <tbody>
			{{-- <tr><td style="text-align:justify"><br><br></td></tr> --}}
			<tr>
				<td style="text-align:justify; line-height: 2;">
					En atención a la receptoría <b>Nº R-{{$empresa->codigo}}</b> de fecha <b>{{$empresa->created_at->format('d/m/Y')}}</b>, mediante la cual solicita la inscripción en el <b>Registro Municipal Ambiental</b> de la denominación comercial 
					<b style="text-transform: uppercase;">{{$empresa->nombre}}</b>, con Registro Fiscal <b>{{$empresa->tipoRIF}}-{{$empresa->rif}}</b>;
					ubicada en <b style="text-transform: uppercase;">{{$empresa->direccion}}</b>; La Fundación para la Economía Circular y las Energías Alternativas; cumple en participarle que de acuerdo al informe de inspección realizado por personal técnico 
					adscrito a la Secretaria para el Ecosocialismo y Ciencia y Tecnología, y visto los recaudos que acompañan la solicitud; de conformidad con lo establecido en el Artículo 178 de la Constitución de la República Bolivariana de Venezuela;  Articulo 19 
					y 21 de la Ley Orgánica del Ambiente, Publicada en la G.O. E Nº 5.833, fecha 22-12-2006; Artículo 9, numeral 1,2 y articulo 99 de la Ley de Gestión Integral de la Basura. Publicada en la G.O. E Nº 6.017, fecha 30-12-2010; Artículo 56 literal “d” 
					de la Ley Orgánica del Poder Público Municipal; Articulo 70, 71 y 72 de la Ordenanza para la Gestión y Integral de los Residuos y Desechos Sólidos en Jurisdicción territorial del Municipio Bolivariano Libertador 
					(publicada en Gaceta Municipal Nº 5205-B de fecha 15/11/2024); le participa que la empresa <b style="text-transform: uppercase;">{{$empresa->nombre}}</b>, queda registrada bajo el número 
					<b>FECEA {{$empresa->parroquia->abreviatura}}-{{$empresa->codigo}}-{{$empresa->sucursal}}</b> de fecha <b>{{$empresa->created_at->format('d/m/Y')}}</b>, para realizar El Manejo de Materiales Susceptibles al Reciclaje (materiales no peligrosos), 
					debiendo dar cumplimiento a las siguientes condiciones:
				</td>
			</tr>
		</tbody>
	</table>
	<table style="text-align: center; width: 100%">
		<tbody>
			<tr>
				<td style="text-align:justify">
					<ul>
						{{-- <ol>1.	El transporte de residuos y desechos sólidos especiales (reciclables), se realizará conforme al contenido de la “Hoja de seguimiento” y la respectiva autorización emitida por este despacho.</ol> --}}
						<ol style="line-height: 2;">1.	<b>ORIGEN DE LOS MATERIALES:</b>Se prohíbe estrictamente la comercialización, adquisición, almacenamiento o transporte de residuos y desechos sólidos especiales (ferrosos o no ferrosos) pertenecientes a organismos estratégicos del Estado (CANTV, CORPOELEC, HIDROCAPITAL, MOPVI, entre otros), salvo que la empresa presente la autorización expresa y certificada del ente titular de dichos bienes.</ol>
						<ol style="line-height: 2;">2.	<b>CUMPLIMIENTO NORMATIVO DE TRANSPORTE:</b>Las unidades de transporte empleadas para la actividad deben cumplir con la Ley de Transporte Terrestre, su Reglamento, y las Normas COVENIN vigentes. Queda prohibido el uso de vehículos de carga de gran envergadura (gandolas) que dificulten la movilidad urbana en las zonas residenciales autorizadas.</ol>
						<ol style="line-height: 2;">3.	El presente registro no excluye cualesquiera otras medidas legales tendiente a evitar los actos violatorios al cumplimiento de las normas y leyes que rigen la materia.</ol>
						<ol style="line-height: 2;"><b>4.	REGISTRO VÁLIDO POR TRES (2) AÑOS A PARTIR DE LA FECHA DE SU EMISIÓN.<b></ol>
						<ol style="line-height: 2;"><b>5.	El Personal que labora en la empresa arriba identificada, deberá formarse en la Escuela de Economía Circular y Energía Alternativa en un plazo de 30 días, sin prorroga.</b></ol>
						<ol style="line-height: 2;">6.	El incumplimiento de las condiciones aquí establecidas dará lugar a la anulación o suspensión del presente registro, y a la apertura del correspondiente procedimiento administrativo.</ol>
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