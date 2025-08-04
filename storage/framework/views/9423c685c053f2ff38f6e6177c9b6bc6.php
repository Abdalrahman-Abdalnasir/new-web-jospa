<link href="https://fonts.cdnfonts.com/css/lama-sans" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    body{
font-family: 'Lama Sans', sans-serif !important;
font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic' : 'normal'); ?>;
}
</style>
<section class="py-5">
    <div class="container" id="bookNaw"  style="padding: 0 5rem;font-family: 'Lama Sans', sans-serif !important;font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic' : 'normal'); ?>;">
        <h2 class="mb-5 mt-3 text-center" style="font-size: 45px;color: var(--primary-color);font-weight: bold;">
            <?php echo e(__('messagess.our_service_categories')); ?>

        </h2>
<div style="display: flex; align-items: center; justify-content: center; width: 100%; margin: 30px 0 45px;">
  <div style="height: 2px; width: 50px; background: #bc9a69; border-radius: 2px;"></div>
  <div style="margin: 0 10px; color: #bc9a69; font-size: 25px;">
    &#10048;
  </div>
  <div style="height: 2px; width: 50px; background: #bc9a69; border-radius: 2px;"></div>
</div>



        <?php if(isset($categories) && $categories->count() > 0): ?>
            <div class="row g-4">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo e($index * 100); ?>">
                        <?php echo $__env->make('components.frontend.category-card', [
                            'image' => $category->av2,
                            'name' => $category->name,
                            'price_range' => $category->services && $category->services->count() > 0 && $category->services->whereNotNull('default_price')->count() > 0 ?
                                'SR ' . number_format($category->services->whereNotNull('default_price')->min('default_price'), 2) . ' - SR ' . number_format($category->services->whereNotNull('default_price')->max('default_price'), 2) :
                                __('messagess.contact_for_pricing'),
                            'category_id' => $category->id
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <p class="text-muted"><?php echo e(__('messagess.no_service_categories')); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Pricing Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pricingModalLabel"><?php echo e(__('messagess.category_services_pricing')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo e(__('messagess.close')); ?>"></button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <div id="pricingTable">
                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden"><?php echo e(__('messagess.loading_services')); ?></span>
                        </div>
                        <p class="mt-2"><?php echo e(__('messagess.loading_services')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Details Modal -->
<div class="modal fade" id="serviceDetailsModal" tabindex="-1" aria-labelledby="serviceDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceDetailsModalLabel"><?php echo e(__('messagess.service_details')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?php echo e(__('messagess.close')); ?>"></button>
            </div>
            <div class="modal-body">
                <div id="serviceDetailsContent">
                    <div class="text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden"><?php echo e(__('messagess.loading_service_details')); ?></span>
                        </div>
                        <p class="mt-2"><?php echo e(__('messagess.loading_service_details')); ?></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('messagess.close')); ?></button>
                <button type="button" class="btn btn-primary"><?php echo e(__('messagess.book_this_service')); ?></button>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const currentLang = '<?php echo e(app()->getLocale()); ?>'; // ar أو en
</script>

<script>
    AOS.init({ once: true });

function showCategoryServices(categoryId) {
    const modal = new bootstrap.Modal(document.getElementById('pricingModal'));
    const contentDiv = document.getElementById('pricingTable');

    contentDiv.innerHTML = `
      <div class="text-center">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">${currentLang === 'ar' ? 'جارٍ تحميل الخدمات...' : 'Loading services...'}</span>
        </div>
        <p class="mt-2">${currentLang === 'ar' ? 'جارٍ تحميل الخدمات...' : 'Loading services...'}</p>
      </div>
    `;

    modal.show();

    fetch(`/api/v1/services?category_id=${categoryId}`)
        .then(response => response.json())
        .then(data => {
            if (data.status && data.data && data.data.length > 0) {
                const services = data.data;
                let tableRows = '';

                services.forEach(service => {
                    const serviceName = service.name[currentLang] ?? service.name['en'];
                    const categoryName = service.category?.name?.[currentLang] ?? service.category?.name?.['en'] ?? '-';

                    tableRows += `
                      <tr>
                        <td>${serviceName}</td>
                        <td>${categoryName}</td>
                        <td>${parseFloat(service.default_price).toFixed(2)}</td>
                        <td>${service.duration_min}</td>
                      </tr>
                    `;
                });

                contentDiv.innerHTML = `
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>${currentLang === 'ar' ? 'الخدمة' : 'Service'}</th>
                      <th>${currentLang === 'ar' ? 'الفئة' : 'Category'}</th>
                      <th>${currentLang === 'ar' ? 'السعر' : 'Price'}</th>
                      <th>${currentLang === 'ar' ? 'المدة' : 'Duration'}</th>
                    </tr>
                  </thead>
                  <tbody>
                    ${tableRows}
                  </tbody>
                </table>
              `;
            } else {
                contentDiv.innerHTML = `<div class="text-center text-muted"><p>${currentLang === 'ar' ? 'لا توجد خدمات متاحة' : 'No services available'}</p></div>`;
            }
        })
        .catch(() => {
            contentDiv.innerHTML = `<div class="text-center text-danger"><p>${currentLang === 'ar' ? 'حدث خطأ أثناء تحميل الخدمات' : 'Error loading services'}</p></div>`;
        });
}

    document.addEventListener('DOMContentLoaded', function() {
        const pricingModal = document.getElementById('pricingModal');

        if (pricingModal) {
            pricingModal.addEventListener('hidden.bs.modal', function () {
                document.querySelectorAll('.modal-backdrop').forEach(backdrop => backdrop.remove());
                document.body.classList.remove('modal-open');
                document.body.style.paddingRight = '';
                document.body.style.overflow = '';

                const contentDiv = document.getElementById('pricingTable');
                if (contentDiv) {
                    contentDiv.innerHTML = `
            <div class="text-center">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden"><?php echo e(__('messagess.loading_services')); ?></span>
              </div>
              <p class="mt-2"><?php echo e(__('messagess.loading_services')); ?></p>
            </div>
          `;
                }
            });
        }
    });

    function showServiceDetails(serviceId) {
        const modal = new bootstrap.Modal(document.getElementById('serviceDetailsModal'));
        const contentDiv = document.getElementById('serviceDetailsContent');

        contentDiv.innerHTML = `
      <div class="text-center">
        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden"><?php echo e(__('messagess.loading_service_details')); ?></span>
        </div>
        <p class="mt-2"><?php echo e(__('messagess.loading_service_details')); ?></p>
      </div>
    `;

        modal.show();

        fetch(`/api/v1/services/${serviceId}`)
            .then(response => response.json())
            .then(data => {
                if (data.status && data.data) {
                    const service = data.data;
                    contentDiv.innerHTML = `
            <div class="row">
              <div class="col-md-6">
                <img src="${service.feature_image}" alt="${service.name}" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
              </div>
              <div class="col-md-6">
                <h4 class="text-primary mb-3">${service.name}</h4>
                <p class="text-muted mb-3">${service.description || '<?php echo e(__('messagess.no_description_available')); ?>'}</p>
                <div class="row mb-3">
                  <div class="col-6">
                    <strong><?php echo e(__('messagess.price_label')); ?></strong><br>
                    <span class="text-primary h5">SR ${parseFloat(service.default_price).toFixed(2)}</span>
                  </div>
                  <div class="col-6">
                    <strong><?php echo e(__('messagess.duration_label')); ?></strong><br>
                    <span class="text-muted">${service.duration_min} <?php echo e(__('messagess.minutes')); ?></span>
                  </div>
                </div>
                <div class="mb-3">
                  <strong><?php echo e(__('messagess.category')); ?></strong><br>
                  <span class="badge bg-secondary">${service.category ? service.category.name : '<?php echo e(__('messagess.general')); ?>'}</span>
                </div>
                ${service.sub_category ? `
                <div class="mb-3">
                  <strong><?php echo e(__('messagess.sub_category')); ?></strong><br>
                  <span class="badge bg-light text-dark">${service.sub_category.name}</span>
                </div>` : ''}
              </div>
            </div>
          `;
                } else {
                    contentDiv.innerHTML = `<div class="text-center text-danger"><p><?php echo e(__('messagess.error_loading_services')); ?></p></div>`;
                }
            })
            .catch(() => {
                contentDiv.innerHTML = `<div class="text-center text-danger"><p><?php echo e(__('messagess.error_loading_services')); ?></p></div>`;
            });
    }
</script>
<?php /**PATH C:\laragon\www\jospa\resources\views/components/frontend/services-section.blade.php ENDPATH**/ ?>