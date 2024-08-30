<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <?php
    include_once "./admin/view/left_nav.php";
    ?>
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container mt-5">
          <div class="row tm-content-row">

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
              <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                <div class="tm-product-table-container">
                  <div id="piechart" style="width: 900px; height: 500px;"></div>

                </div>
                <!-- table container -->

              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);
  <?php
  // extract($result_bill);  
  // extract($result_products);  
  ?>

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Quantity'],
      ['Sản phẩn đã bán', <?= $result_bill ?>],
      ['Sản phẩm còn lại', <?= $result_products ?>]

    ]);

    var options = {
      title: 'Thống kê số lượng sản phẩm còn lại và đã bán',
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>