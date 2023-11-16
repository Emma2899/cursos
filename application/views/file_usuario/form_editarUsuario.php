<div class="container-fluid">
	<div class="page-header">
		<h1 class="text-titles">ADMINISTRACION <small></small></h1>
	</div>
	
</div>
<div class class="container-fluid">
	<h3 align="center">FORMULARIO NUEVO USUARIO</h3>
	<form id="guardarNuevoUsuario" method="post">
	<div class="row">
		<div class="col-lg-3">
			<div class="from-group">
				<label for="">CARNET</label>
				<input type="text" name="ci" id="ci" onkeyup="validar_ci(this.value)" class="form-control" required placeholder="ingresar carnet...">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="from-group">
				<label for="">EXPEDIDO</label>
				<select name="expedido" id="expedido" class="form-control">
				<option></option>
				<option value="LP">LP</option>
				<option value="CBB">CBB</option>
				<option value="TJ">TJ</option>
				<option value="PD">PD</option>
				<option value="BN">BN</option>
				<option value="STC">STC</option>
				<option value="O">O</option>
				</select>
			</div>
		</div>
			<div class="col-lg-3">
			<div class="from-group">
				<label for="">NOMBRE</label>
				<input type="text" name="nombre" id="nombre" class="form-control" required placeholder="ingresar nombre...">
			</div>
		</div>
			<div class="col-lg-3">
			<div class="from-group">
				<label for="">APELLIDO PATERNO</label>
				<input type="text" name="paterno" id="paterno" class="form-control" required placeholder="apellido paterno...">
			</div>
		</div>
			<div class="col-lg-3">
			<div class="from-group">
				<label for="">APELLIDO MATERNO</label>
				<input type="text" name="materno" id="materno" class="form-control" required placeholder="apellido materno">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="from-group">
				<label for="">CELULAR</label>
				<input type="text" name="celular" id="celular" class="form-control" required placeholder="celular" maxlength="8">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="from-group">
				<label for="">IMAGEN</label>
				<input type="file" name="imagen" id="imagen" accept="image/*" >
			</div>
		</div>
		<div class="col-lg-3">
			<div class="from-group">
				<label for="">SELECCIONE ROL</label>
				<select name="idrol" id="idrol" class="form-control" required>
				<option></option>
				<?php foreach ($this->db->get('rol') ->result() as $obj) { ?>
				
					<option value="<?php echo $obj->idrol ?>"><?php echo $obj->roles ?></option>
				
				<?php } ?>
				</select>
			</div>
		</div>
		
	</div>
	<button type="submit" id="boton" class="btn btn-primary btn-raised">GUARDAR DATOS</button>
	<a href="adminUsuario" class="btn btn-danger btn-raised">SALIR</a>


	</form>
</div>
<script>
	
$("#guardarNuevoUsuario").submit(function(event){
	event.preventDefault();
	var formData=new FormData($("#guardarNuevoUsuario")[0]);
	$.ajax({
		url:'guardarNuevoUsuario',
		type:'post',
		data:formData,
		cache:false,
		processData:false,
		contentType:false,
		success:function(){
			alert('USUARIO REGISTRADO EXITOSAMENTE')
			window.location='<?php echo base_url(); ?>adminUsuario';
		}
	});
});

</script> 


	