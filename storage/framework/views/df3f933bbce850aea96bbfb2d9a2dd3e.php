

<footer class="footer pr-hide sticky <?php echo e(getCustomizationSetting('footer_style')); ?>">
  <div class="footer-body">
      <div class="left-panel">
          <a href="<?php echo e(route('backend.home')); ?>"><?php echo e(setting('app_name')); ?></a>.
          <?php echo e(setting('copyright_text')); ?>

      </div>
      <div class="center-panel">
          <?php echo setting('footer_text'); ?>

      </div>
      <div class="end-panel">
        <?php echo setting('ui_text'); ?>

      </div>
  </div>
</footer>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/includes/footer.blade.php ENDPATH**/ ?>