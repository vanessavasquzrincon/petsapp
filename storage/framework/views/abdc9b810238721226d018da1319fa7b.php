<?php if($paginator->hasPages()): ?>
<nav>
    <ul class="pagination">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="disabled" aria-disabled="true">
                <span>
                    &larr;
                </span>
            </li>
        <?php else: ?>
            <li>
                <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">
                    &larr;
                </a>
            </li>
        <?php endif; ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li>
                <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">
                    &rarr;
                </a>
            </li>
        <?php else: ?>
            <li class="disabled" aria-disabled="true">
                <span>
                    &rarr;
                </span>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<?php endif; ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/layouts/paginator.blade.php ENDPATH**/ ?>