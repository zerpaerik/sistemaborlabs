<head>
    <style type="text/css">
      {
        margin: 0;
        padding: 0;
      }
      .table-main{
       margin-left:-40px;
       margin-right:-56px;
      }
      .cl{
        margin: 0;
        padding: 0;

      }
      .truncate {
        width: 1px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      @page {
        header: page-header;
        footer: page-footer;
      }
      footer {
        border:solid red;
      }
    </style>

    <meta charset="utf-8">

  </head>

    <body style="width:100%; position:fixed: top: 1px; ">

    <br><br>


    <div  style="font-size: 15px; text-align: center;margin-bottom:-60px;margin-top: -30px;">
    <div class="" style="font-size: 35px; text-align: center;margin-bottom: 15px;">
		<img src="/var/www/html/sistemaborlabs/public/logo_ borlabs_1.png"  style="width: 40%; color: black;"/>
	</div>

		<p><strong>BORLABS MEDIC-{{Session::get('sedeName')}}</strong></p>




    <p style="margin-top: -20px;"><strong>________________________________________________________</strong>  </p>
    <p style="margin-top: -15px;font-size: 14px;text-align: center;"><strong>NÚMERO DE RECIBO ELECTRÓNICO:0000{{ $header->id_atec}}</strong></p>
    <p style="margin-top: -30px;"><strong>________________________________________________________</strong>  </p>

    <p style="margin-left: -80px;font-size: 14px;"><strong>FECHA:</strong> {{$header->created_at}} </p>


	

	</div>
    <br><br>
    <div  style="font-size: 15px; text-align: left;margin-bottom:-20px;margin-top: 20px;">
		<p style="margin-left: -40px;"><strong>PACIENTE:</strong> {{ $header->apellidos}},{{ $header->nombres}}</p>
    <p style="margin-left: -40px;margin-top: -10px;"><strong>DNI:</strong> {{ $header->dni}}</p>
    <p style="margin-left: -40px;margin-top: -10px;margin-bottom: 30px;"><strong>TIPO PAGO:</strong> {{ $header->tipo_pago}} {{ $header->tipo_pago1}}</p>

	
	</div>

  
  <table width="100%" class="table-main">
      <thead>
        <tr>
          <th style="font-size: 15px"><center>Detalle.<center></th>
          <th style="font-size: 15px"><center>Monto.<center></th>
        </tr>
      </thead>
      <tbody>
      @foreach($ticket as $at)
          <tr>
            <td style="font-size: 15px; line-height: 30px;" align="center">{{ $at->detalle}}</td>
            <td style="font-size: 15px; line-height: 30px;" align="center">{{ $at->abono}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>

    <p style="font-size: 15px;margin-left:10px;">TOTAL: {{ $total->monto}}</p>
    <p style="font-size: 15px;margin-left:10px;">PAGADO: {{ $abono->monto}}</p>
    <p style="font-size: 15px;margin-left:10px;">RESTA: {{ $resta->monto}}</p>



    </body>
