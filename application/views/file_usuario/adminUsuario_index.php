<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<div class="container-fluid">
	<div class="page-header">
		<h1 class="text-titles">ADMINISTRACION <small></small></h1>
	</div>
</div>
<div>
	<h3 align="center">ADMINSITRACION DE USUARIOS</h3>

	<a href="<?php echo base_url();?>nuevoUsuario" class="btn btn-success btn-raised">NUEVO USUARIO</a>
	<a href="" target="_black" class="btn btn-warning btn-raised">REPORTE PDF</a>
	<a href="" target="_black" class="btn btn-primary btn-raised">REPORTE EXCEL</a>

<div class="table-responsive">
	<table class="table table-hover" id="myTable">
	<thead>
		<tr>
			<td>#</td>
			<td>IMAGEN</td>
			<td>CARNET</td>
			<td>NOMBRE y AP</td>
			<td>ROL</td>
			<td>ESTADO</td>
			<td>FECHA</td>

			<td>ACCION</td>

		</tr>
	</thead>
	<tbody>
		<?php $cont=1; foreach ($this->Model_usuario->listar_usuarios() as  $objecto) { ?>
	
		<tr>
			<td><?php echo $cont++; ?></td>
			<td><img width="40" src="<?php echo base_url(); ?>assets/imagenes/<?php echo $objecto->imagen; ?>" alt=""></td>
			<td><?php echo $objecto->ci.' '.$objecto->expedido; ?></td>
			<td><?php echo $objecto->nombre.' '.$objecto->paterno.' '.$objecto->materno; ?></td>
			<td><?php echo $objecto->roles; ?></td>
			<td>
				<?php if ($objecto->estado =='activo') {?>
					<button type="boton" class="btn btn-success btn-raised" onclick="cambiar_estado_usuario('<?php echo $objecto->idusuario;?>','1')" >ACTIVO</button>
				 <?php } else {?>
					<button type="boton" class="btn btn-danger btn-raised" onclick="cambiar_estado_usuario('<?php echo $objecto->idusuario;?>','0')" >INACTIVO</button>

				<?php  } ?>
			</td>
			<td><?php echo $objecto->fecha_reg; ?></td>
			<td>
			<a href="<?php echo base_url() ?>editarUsuario/<?php echo $objecto->idusuario; ?>" class="btn btn-info btn-raised">Editar</a>
			<a href="javascript:;" class="btn btn-danger btn-raised" onclick="eliminar_usuario('<?php echo $objecto->idusuario;?>')" >Eliminar</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
	
</div>
</div>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );

	function cambiar_estado_usuario(idusuario,estado){
		//alert(idusuario+' '+estado)
		$.post('cambiar_estado_usuario', {idusuario,estado}, function() {
			window.location='';
		});

	}

function eliminar_usuario(idusuario){
	swal({
		  	title: 'ESTAS SEGURO DE ELIMINAR EL USUARIO',
		  	text: "*******************************",
		  	type: 'warning',
		  	showCancelButton: true,
		  	confirmButtonColor: '#03A9F4',
		  	cancelButtonColor: '#F44336',
		  	confirmButtonText: '<i class="zmdi zmdi-run"></i>ACEPTAR',
		  	cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> CANCELAR'
		}).then(function () {
			  // Swal.fire({
		      // title: "Deleted!",
		      // text: "Your file has been deleted.",
		      // icon: "success"
      $.post('eliminar_usuario', {idusuario}, function() {
			window.location='';
    });
  });
	
}

</script>