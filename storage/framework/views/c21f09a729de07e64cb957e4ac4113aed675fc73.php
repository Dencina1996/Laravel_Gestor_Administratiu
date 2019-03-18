<html>
	<head>
		<title>Listado de Clientes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/listaClientes.css')); ?>">
		<link rel="shortcut icon" href="<?php echo e(asset('svg/favicon.png')); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo e(asset('js/clientList.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('js/min.js')); ?>"></script>
	</head>
	<body>
		<?php $__env->startSection('content'); ?>
		<br><br><br>
		<table>
			<tr>
				<td>ID Venta</td>
				<td>Descripcion</td>
				<td>Estado</td>
				<td>ID Cliente</td>
			</tr>
			<?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($venta->ID_Venta); ?></td>
				<td><?php echo e($venta->Descripcion); ?></td>
				<td><?php echo e($venta->Estado); ?></td>
				<td><?php echo e($venta->ID_Cliente); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
		<br><br><br>
			<table>
				<tr>
					<td>ID Archivo</td>
					<td>ID Cliente</td>
					<td>ID Venta</td>
					<td>Ruta Archivo</td>
				</tr>
				<?php $__currentLoopData = $archivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($archivo->ID_Archivo); ?></td>
					<td><?php echo e($archivo->ID_Cliente); ?></td>
					<td><?php echo e($archivo->ID_Venta); ?></td>
					<td><?php echo e($archivo->Ruta_Archivo); ?></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>

			<form action="addFile" method="post" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<input type="number" name="idCliente" style="visibility: hidden;">
		        <input type="file" name="archivo" id="archivo">>
		        <input type="submit" value="Subir archivo">
	        </form>
			<?php $__env->stopSection(); ?>
			<?php echo csrf_field(); ?>
		</div>
	</body>
</html>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>