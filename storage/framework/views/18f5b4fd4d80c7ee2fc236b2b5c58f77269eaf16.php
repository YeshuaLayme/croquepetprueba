<li>
    <a href="javascript:void(0);" class="container-refresh">
        <i class="fa fa-refresh"></i>
    </a>
</li>
<script>
    $('.container-refresh').off('click').on('click', function() {
        $.admin.reload();
        $.admin.toastr.success('<?php echo e(__('admin.refresh_succeeded'), false); ?>', '', {positionClass:"toast-top-center"});
    });
</script>
<?php /**PATH E:\Tareas de Tecsup\Tecsup ciclo 6\Emprendimiento\App PROYECTO\ProjectEmpV4 - copia\vendor\encore\laravel-admin\src/../resources/views/components/refresh-btn.blade.php ENDPATH**/ ?>