<?php $__env->startSection('content'); ?>



<div class="container">
<p></p>
<div class="panel panel-default">
	<div class="panel-heading">
Tambah Data</div>
	<div class="panel body">
		<!-- <?php echo Form::open(['url' => '/prosestambah']); ?> -->
		<form method = 'POST' action ='<?php echo e(url("/prosestambah")); ?>'  >

			<input type='hidden' name='_token' value='<?php echo csrf_token();?>'>

		Nama: 
		<?php echo Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control']); ?>

		Alamat: 
		<?php echo Form::text('alamat', '', ['placeholder' => 'Alamat', 'class' => 'form-control']); ?>

		Kelas:
		<?php echo Form::text('kelas', '', ['placeholder' => 'Kelas', 'class' => 'form-control']); ?>

		<p></p>
		<?php echo Form::submit('Tambah Data', ['class' => 'btn btn-danger']); ?>

		<?php echo Form::close(); ?>

		<?php $__env->stopSection(); ?>
	</div>
</div>
</div>

<?php echo $__env->make('template/t_index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>