<?php $__env->startSection('title'); ?> <?php echo e('Dashboard'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
  <div class="d-flex justify-content-between align-items-center mb-4">
      <h3><?php echo e(__('dashboard.lbl_performance')); ?></h3>
      <div class="d-flex  align-items-center">
        <form action="<?php echo e(route('backend.home')); ?>" class="d-flex align-items-center gap-2">
          <div class="form-group my-0 ms-3">
            <input type="text" name="date_range" value="<?php echo e($date_range); ?>" class="form-control dashboard-date-range"
              placeholder="24 may 2023 to 25 June 2023" readonly="readonly">
          </div>
          <button type="submit" name="action" value="filter" class="btn " data-bs-toggle="tooltip"
            data-bs-title="<?php echo e(__('messages.submit_date_filter')); ?>"><?php echo e(__('dashboard.lbl_submit')); ?></button>
          
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-2">
        <div class="card dashboard-cards appointments"
          style="background-image: url(<?php echo e(asset('img/dashboard/appointment.svg')); ?>)">
          <a href="<?php echo e(route('backend.bookings.datatable_view')); ?>" class="card-body">
            <div class="d-flex align-items-start justify-content-end mb-1">
                <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-title="<?php echo e(__('messages.total_appointment_count')); ?>"></i>
              </div>
              <h3 class="mb-2"><?php echo e($data['total_appointments']); ?></h3>
              <p class="mb-0"><?php echo e(__('dashboard.lbl_appointment')); ?></p>
            </div>
          </a>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card dashboard-cards services"
          style="background-image: url(<?php echo e(asset('img/dashboard/services.svg')); ?>)">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-end mb-1">
              <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-title="<?php echo e(__('messages.total_revenue')); ?>"></i>
            </div>
            <h3 class="mb-2"><?php echo e($data['total_revenue']); ?></h3>
            <p class="mb-0"><?php echo e(__('dashboard.lbl_tot_revenue')); ?></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card dashboard-cards revenue"
          style="background-image: url(<?php echo e(asset('img/dashboard/revenue.svg')); ?>)">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-end mb-1">
              <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-title="<?php echo e(__('messages.total_paid_commission')); ?>"></i>
            </div>
            <h3 class="mb-2"><?php echo e($data['total_commission']); ?></h3>
            <p class="mb-0"><?php echo e(__('dashboard.lbl_sales_commission')); ?></p>
          </div>

        </div>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card dashboard-cards new-customer"
          style="background-image: url(<?php echo e(asset('img/dashboard/new-users.svg')); ?>)">
          <a href="<?php echo e(route('backend.customers.index')); ?>" class="card-body">
            <div class="d-flex align-items-start justify-content-end mb-1">
              <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-title="<?php echo e(__('messages.total_new_customers')); ?>"></i>
            </div>
            <h3 class="mb-2"><?php echo e($data['total_new_customers']); ?></h3>
            <p class="mb-0"><?php echo e(__('dashboard.lbl_new_customer')); ?></p>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card dashboard-cards new-customer"
          style="background-image: url(<?php echo e(asset('img/dashboard/new-users.svg')); ?>)">
          <a href="<?php echo e(route('backend.orders.index')); ?>" class="card-body">
            <div class="d-flex align-items-start justify-content-end mb-1">
              <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-title="<?php echo e(__('messages.total_new_sales')); ?>"></i>
            </div>
            <h3 class="mb-2"><?php echo e($data['total_orders']); ?></h3>
            <p class="mb-0"><?php echo e(__('dashboard.lbl_orders')); ?></p>
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card dashboard-cards new-customer"
          style="background-image: url(<?php echo e(asset('img/dashboard/new-users.svg')); ?>)">
          <a href="<?php echo e(route('backend.reports.order-report')); ?>" class="card-body">
            <div class="d-flex align-items-start justify-content-end mb-1">
              <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" data-bs-title="<?php echo e(__('messages.total_product_revenue')); ?>"></i>
            </div>
            <h3 class="mb-2"><?php echo e($data['product_sales']); ?></h3>
            <p class="mb-0"><?php echo e(__('dashboard.lbl_product_sales')); ?></p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-8">
    <div class="col-lg-12">
      <div class="card card-block card-stretch card-height">
        <div class="card-body">
          <div id="chart-01"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="card-title"><?php echo e(__('dashboard.lbl_upcoming_appointment')); ?> </h4>
      <a href="<?php echo e(route('backend.bookings.index')); ?>"><?php echo e(__('messages.view_all')); ?></a>
    </div>
    <div class="card">

      <div
        class="card-body py-0 upcoming-appointments <?php echo e(count($data['upcomming_appointments']) > 0 ? '' : 'iq-upcomming'); ?>">
        <ul class="list-group list-group-flush ">
          <?php $__empty_1 = true; $__currentLoopData = $data['upcomming_appointments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <li class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex">
                <img src="<?php echo e($booking->user->profile_image ?? default_user_avatar()); ?>" alt="01"
                  class="rounded-pill avatar avatar-60" loading="lazy">
                <div class="ms-3">
                  <h5 class="mb-2"><?php echo e($booking->user->full_name ?? default_user_name()); ?></h5>
                  <p class="mb-0 col-md-8"><?php echo e(date('M d | g:i A', strtotime($booking->start_date_time))); ?> | <?php echo e($booking->branch->name); ?></p>
                </div>
              </div>
              <div class="d-flex align-items-center text-info col-5">
                <i class="fa-regular fa-clock me-2"></i>
                <?php
                    $timezone = setting('default_time_zone') ?? 'UTC';
                    $currentDateTime = Carbon\Carbon::now($timezone);
                    $dateTime = Carbon\Carbon::parse($booking->start_date_time, $timezone);
                    $humanTimeDifference = $dateTime->diffForHumans($currentDateTime);
                    $timeUntil = $currentDateTime->copy()->add($dateTime->diff())->diffForHumans(null, true);
                ?>

                In <?php echo e($timeUntil); ?>

              </div>
              <div class="dropdown">
                <a href="<?php echo e(route('backend.bookings.index', ['booking_id' => $booking->id])); ?>" class="text-primary">
                  <i class="fa-solid fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p class="text-center"><?php echo e(__('dashboard.lbl_upcoming_bookings')); ?></p>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card card-block card-stretch card-height">
      <div class="card-body">
        <div class=" d-flex justify-content-between  flex-wrap">
          <h4 class="card-title"><?php echo e(__('dashboard.lbl_appointment_revenue')); ?> </h4>
        </div>
        <div id="chart-02"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card card-block card-stretch card-height">
      <div class="card-header">
        <h4 class="card-title"><?php echo e(__('dashboard.lbl_top_services')); ?> </h4>
      </div>
      <div class="card-body">
        <div class="table-responsive border rounded">
          <table class="table table-lg m-0">
            <thead>
              <tr class="text-white bg-primary">
                <th scope="col"><?php echo e(__('messages.service')); ?></th>
                <th scope="col"><?php echo e(__('messages.total_count')); ?></th>
                <th scope="col"><?php echo e(__('messages.total_amount')); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $__empty_1 = true; $__currentLoopData = $data['top_services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>
                <td><?php echo e($service->service->name); ?></td>
                <td><?php echo e($service->total_service_count); ?></td>
                <td><?php echo e(Currency::format($service->total_service_price)); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td class="text-center" colspan="3"><?php echo e(__('messages.top_service_notfound')); ?></td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('after-styles'); ?>
<style>
  #chart-01 {
    height: 28.5rem;
  }

  #chart-02 {
    height: 22.5rem;
  }

  .list-group {
    --bs-list-group-item-padding-y: 1.5rem;
    --bs-list-group-color: inherit !important;
  }

  .date-calender {
    display: flex;
    justify-content: space-between;
  }

  .date-calender .date {
    width: 12%;
    display: flex;
    align-items: center;
    flex-direction: column
  }

  .upcoming-appointments {
    min-height: 28rem;
    max-height: 28rem;
    overflow-y: scroll;


  }

  .iq-upcomming {
    display: flex !important;
    justify-content: center;
    align-items: center;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.40.0/apexcharts.min.css"
  integrity="sha512-tJYqW5NWrT0JEkWYxrI4IK2jvT7PAiOwElIGTjALSyr8ZrilUQf+gjw2z6woWGSZqeXASyBXUr+WbtqiQgxUYg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('after-scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.40.0/apexcharts.min.js"
  integrity="sha512-Kr1p/vGF2i84dZQTkoYZ2do8xHRaiqIa7ysnDugwoOcG0SbIx98erNekP/qms/hBDiBxj336//77d0dv53Jmew=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function(){
        Scrollbar.init(document.querySelector('.upcoming-appointments'), {
          continuousScrolling: false,
          alwaysShowTracks: false
        })
        const range_flatpicker = document.querySelectorAll('.dashboard-date-range')
          Array.from(range_flatpicker, (elem) => {
            if (typeof flatpickr !== typeof undefined) {
              flatpickr(elem, {
                mode: "range",
              })
            }
          })
        if (document.querySelectorAll("#chart-01").length) {
            const variableColors = IQUtils.getVariableColor();
            const colors = [variableColors.primary, variableColors.secondary];
            const options = {
              series: [
                  {
                    name: "Sales",
                    data: <?php echo json_encode($data['revenue_chart']['total_price'], 15, 512) ?>,
                  },
              ],
              colors: colors,
              chart: {
                  height: "100%",
                  type: "line",
                  toolbar: {
                    show: false,
                  },
              },
              stroke: {
                  width: 3,
                  curve: 'smooth',
                  lineCap: 'butt',
              },
              grid: {
                  show: true,
                  strokeDashArray: 7,
              },
              markers: {
                  size: 6,
                  colors: "#FFFFFF",
                  strokeColors: colors,
                  strokeWidth: 2,
                  strokeOpacity: 0.9,
                  strokeDashArray: 0,
                  fillOpacity: 0,
                  shape: "circle",
                  radius: 2,
                  offsetX: 0,
                  offsetY: 0,
              },
              xaxis: {
                  categories: <?php echo json_encode($data['revenue_chart']['xaxis'], 15, 512) ?>,
                  labels: {
                    minHeight: 20,
                    maxHeight: 20,
                  },
                  axisBorder: {
                    show: false,
                  },
                  axisTicks: {
                    show: false,
                  },
                  tooltip: {
                    enabled: false,
                  },
              },
              yaxis: {
                labels: {
                    minWidth: 19,
                    maxWidth: 19,
                },
                tickAmount: 3
              }
            };

            const chart = new ApexCharts(
            document.querySelector("#chart-01"),
                options
            );
            chart.render();
        }
        if (document.querySelectorAll('#chart-02').length) {
          const variableColors = IQUtils.getVariableColor();
          const colors = [variableColors.secondary, variableColors.primary];
          const options = {
            series: [
              {
                name: "Sales",
                type: 'line',
                data: <?php echo json_encode($data['revenue_chart']['total_price'], 15, 512) ?>,
              },
              {
                name: "Total Appointments",
                type: 'column',
                data: <?php echo json_encode($data['revenue_chart']['total_bookings'], 15, 512) ?>,
              }
            ],
            colors: colors,
            chart: {
              height: "75%",
              type: "line",
              toolbar: {
                show: false,
              },
            },
            dataLabels: {
              enabled: true,
              enabledOnSeries: [0]
            },
            legend: {
              show:false,
            },
            stroke: {
              show: true,
              curve: 'smooth',
              lineCap: 'butt',
              width: 3
            },
            grid: {
              show: true,
              strokeDashArray: 3,
            },
            xaxis: {
              categories: <?php echo json_encode($data['revenue_chart']['xaxis'], 15, 512) ?>,
              labels: {
                    minHeight: 20,
                    maxHeight: 20,
                  },
              axisBorder: {
                show: false,

            }
            },
            yaxis: [{
              title: {
                text: 'Sales',
              },
              labels: {
                    minWidth: 19,
                    maxWidth: 19,
                },
              tickAmount: 3,
              min: 0
            }, {
              title: {
                text: 'Appointments',
              },
              opposite: true,
              tickAmount: 3,
              min: 0
            }]
          };

          const chart = new ApexCharts(document.querySelector("#chart-02"), options);
          chart.render();
        }
    })

</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', ['isBanner' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/index.blade.php ENDPATH**/ ?>