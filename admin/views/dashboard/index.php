<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $totalProduct ?></h3>

                <p>Số lượng sản phẩm</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>$<?= number_format($totalProfit, 0, ',', '.') ?></h3>
                <p>Tổng doanh thu</p>
            </div>
            <div class="icon">
                <i class="fas fa-money-bill-wave"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $totalCustomer ?></h3>
                <p>Khách hàng</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-injured"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thống kê</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="chart">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 444px;" width="666" height="375" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<!-- Script thống kê -->
<script>
    $(document).ready(function() {
        showGraph();
    });

    function showGraph() {
        $.post("revenue_statistics.php",
            function(data) {
                console.log(data);
                var labels = [];
                var revenues = [];
                var quantitys = [];
                var orders = [];
                for (var i in data) {
                    labels.push(data[i].order_date);
                    revenues.push(data[i].revenue);
                    quantitys.push(data[i].quantity);
                    orders.push(data[i].order);
                    // console.log(result)
                }
                var ctx = document.getElementById("areaChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                                label: 'Doanh thu (đ)', // Name the series
                                data: revenues,
                                fill: true,
                                borderColor: '#2196f3', // Add custom color border (Line)
                                backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                                borderWidth: 1 // Specify bar border width
                            },
                            {
                                label: 'Số lượng trà sữa đã bán', // Name the series
                                data: quantitys,
                                fill: true,
                                borderColor: '#4CAF50', // Add custom color border (Line)
                                backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
                                borderWidth: 1 // Specify bar border width
                            },
                            {
                                label: 'Số lượt đặt hàng', // Name the series
                                data: orders,
                                fill: true,
                                borderColor: '#ffa400', // Add custom color border (Line)
                                backgroundColor: '#ffa400', // Add custom color background (Points and Fill)
                                borderWidth: 1 // Specify bar border width
                            }
                        ]
                    },
                    options: {
                        responsive: true, // Instruct chart js to respond nicely.
                        maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
                    }
                });
            });
    }
</script>