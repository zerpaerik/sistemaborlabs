<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">					
					<span>
						<strong>Laboratorio:</strong> {{$analisis->nombre}}
					</span>
				</div>
			</div>
			<div class="box-content">

            </div>

              {{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="name" name="nombre" value="{{$analisis->nombre}}" placeholder="Nombre de Analisis">
                  </div>
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" class="form-control" id="email" name="precio" value="{{$analisis->precio}}" placeholder="Descripción">
                  </div>
                


                  </div>

                  <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Costo</label>
                    <input type="float" class="form-control" id="email" name="costo" value="{{$analisis->costo}}" placeholder="Precio">
                  </div>
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Porcentaje</label>
                    <input type="text" class="form-control" id="name" name="porcentaje" value="{{$analisis->porcentaje}}" placeholder="Nombre de Analisis">
                  </div>
              
                  </div>

                  <div class="row">

                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Tiempo de Respuesta</label>
                    <input type="text" class="form-control" id="email" name="tiempo" value="{{$analisis->tiempo}}" placeholder="Descripción">
                  </div>
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Tipo de Tubo</label>
                    <input type="float" class="form-control" id="email" name="material" value="{{$analisis->material}}" placeholder="Precio">
                  </div>

                  </div>

                  <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Còdigo</label>
                    <input type="float" class="form-control" id="name" name="codigo" placeholder="Còdigo"  value="{{$analisis->codigo}}">
                  </div>
                
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Condiciones Pre Analiticas Pacientes</label>
                    <input type="text" class="form-control" id="email" name="condiciones" placeholder="" onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{$analisis->condiciones}}">
                  </div>
               

                 
                  </div>

                  <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Condiciones Pre Analiticas Referencias</label>
                    <input type="float" class="form-control" id="name" name="condiciones1" placeholder="" value="{{$analisis->condiciones1}}">
                  </div>

                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Tipo de Muestra</label>
                    <input type="text" class="form-control" id="email" name="muestra" placeholder="" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$analisis->muestra}}">
                  </div>

                  </div>

                  <div class="row">
                
               

                  <div class="col-md-12">
                    <label for="exampleInputEmail1">Observaciones </label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre"   name="observaciones" value="{{$analisis->observaciones}}">
                   </div>
           

                 
                  </div>
                  
                  <br>
                </div>

			
			
				
			
			</div>
		</div>
	</div>
</div>
