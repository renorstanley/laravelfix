<?php $__env->startSection('content'); ?>

<?php if(Session::has('message')): ?>
	<span class="label label-success"><?php echo e(Session::get('message')); ?></span>
<?php endif; ?>
<p> </p>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Kelas</th>
<th>Action</th>
</tr>
<?php $no=1;?>
<?php foreach($siswa as $data): ?>
<tr>
<td><?php echo e($no++); ?> </td>
<td><?php echo e($data->nama); ?> </td>
<td><?php echo e($data->alamat); ?> </td>
<td><?php echo e($data->kelas); ?> </td>
<td><a href="hapus/<?php echo e($data->id); ?>">hapus</a></td>
<td><a href="">edit</a></td>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/t_index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>