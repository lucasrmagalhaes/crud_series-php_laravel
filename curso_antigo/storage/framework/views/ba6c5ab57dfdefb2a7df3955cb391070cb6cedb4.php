<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => ['title' => 'Nova Série']]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Nova Série']); ?>
    <form action="/series/salvar" method="post">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label
                for="nome"
                class="form-label"
            >
                Nome:
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                class="form-control"
            />
        </div>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Adicionar
        </button>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Lucas\Desktop\crud_series-php_laravel\resources\views/series/create.blade.php ENDPATH**/ ?>