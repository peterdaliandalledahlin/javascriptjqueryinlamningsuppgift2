<?php
    session_start();
    
    //print_r($_SESSION);
    if($_SESSION["id"] == null) {
        header("Location: http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/signin.php");
    }

    include "include/dbh.inc.php";

    /*$firstname = "";
    $lastname = "";
    $email = "";
    $addressline = "";
    $postalcode = "";
    $city = "";

    $sqlquery = "SELECT * FROM users WHERE id = ". $_SESSION["id"];
    $result = $dbconn->query($sqlquery);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $email = $row["email"];
            $addressline = $row["addressline"];
            $postalcode = $row["postalcode"];
            $city = $row["city"];            
        }
  
    }*/


    $dbconn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">  
  <link rel="stylesheet" href="vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body class="sidebar-light">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          
          <!-- Welcome bar and logout button -->
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card bg-white">
                <div class="card-body d-flex align-items-center justify-content-between">
                  <h4 class="mt-1 mb-1" id="fullname"></h4>
                  <!--<a class="btn btn-info d-none d-md-block" href="signout.php">Logout</a>-->
                  <a class="btn btn-info d-none d-md-block" href="signout.php">Logout</a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Total this month boxes -->
          <div class="row">

            <!-- green box -->
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-success">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-success icon-rounded-lg">
                      <i class="mdi mdi-arrow-top-right"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Sales</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1" id="totalSales"></h3>
                        <small class="mb-0"  id="totalSalesMonth"></small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- blue box -->
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-info">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-info icon-rounded-lg">
                      <i class="mdi mdi-basket"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Purchases</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1" id="totalPurchases"></h3>
                        <small class="mb-0" id="totalPurchasesMonth"></small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- red box -->
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-danger">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-danger icon-rounded-lg">
                      <i class="mdi mdi-chart-donut-variant"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Orders</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1" id="totalOrders"></h3>
                        <small class="mb-0" id="totalOrdersMonth"></small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- orange box -->
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-warning">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-warning icon-rounded-lg">
                      <i class="mdi mdi-chart-multiline"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Growth</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1" id="totalGrowth"></h3>
                        <small class="mb-0" id="totalGrowthMonth"></small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Distribution and Sale Report boxes -->
          <div class="row">

            <!-- distribution box -->
            <div class="col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-0" id="distribution">
                  <p class="card-title mb-xl-0">Distribution</p>
                </div>
                <canvas id="distribution-chart"></canvas>
                <div class="card-body">
                  <div id="distribution-legend" class="distribution-chart-legend pt-4 pb-3"></div>
                  <button class="btn btn-outline-light text-dark d-block mx-auto mt-2">View More</button>
                </div>
              </div>
            </div>

            <!-- sale report box -->
            <div class="col-xl-9 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-7 col-lg-6 col-xl-7">
                    <div class="card-body h-100 d-flex flex-column">
                      <p class="card-title">Sale report</p>
                      <p class="text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia id
                        beatae sint dolorum quod ducimus quisquam ut minima atque quaerat.</p>
                      <canvas id="sale-report-chart"></canvas>
                    </div>
                  </div>
                  <div class="col-md-5 col-lg-6 col-xl-5" id="salesReportOverview">
                    <div class="card-body">
                      <p class="card-title">Sales report overview</p>
                      <p class="pb-2 text-muted">Sale information on advertising, exhibitions, market research, online
                        media, customer desires, PR and much more</p>
                      <div class="d-flex flex-wrap justify-content-start mt-3 mr-4">
                        <div class="mr-3">
                          <p class="mb-0">Downloads</p>
                          <h4 id="salesReportOverviewDownloads" class="number"></h4>
                        </div>
                        <div class="mr-3">
                          <p class="mb-0">Purchases</p>
                          <h4 id="salesReportOverviewPurchases"></h4>
                        </div>
                        <div class="mr-3">
                          <p class="mb-0">Users</p>
                          <h4 id="salesReportOverviewUsers"></h4>
                        </div>
                      </div>
                      <div class="d-flex mb-3">
                        <i class="mdi mdi-arrow-expand-up mb-0 text-success mr-2 mt-1"></i>
                        <p class="mb-0 text-dark" id="salesReportOverviewGrowth"></p>
                      </div>
                      <div class="d-flex flex-wrap mb-5">
                        <button class="btn btn-info mt-3 mr-2">Update</button>
                        <button class="btn btn-outline-light mt-3 text-dark">More</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Total Sales Users Projects and Downloads boxes -->
          <div class="row">

            <!-- total sales box -->
            <div class="col-xl-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title" id="totalSales">Total Sales</p>
                  <p class="text-muted">Audience to which the users belonged while on the current date Audience to
                    which the users belonged while on the current date Audience to which the users belonged while on
                    the current date </p>
                  <div class="d-flex flex-wrap mb-4 mt-4 pb-4">
                    <div class="mr-4 mr-md-5">
                      <p class="mb-0">Revenue</p>
                      <h4 id="totalSalesRevenue"></h4>
                    </div>
                    <div class="mr-4 mr-md-5">
                      <p class="mb-0">Returns</p>
                      <h4 id="totalSalesReturns"></h4>
                    </div>
                    <div class="mr-4 mr-md-5">
                      <p class="mb-0">Queries</p>
                      <h4 id="totalSalesQueries"></h4>
                    </div>
                    <div class="mr-4 mr-md-5">
                      <p class="mb-0">Invoices</p>
                      <h4 id="totalSalesInvoices"></h4>
                    </div>
                  </div>
                  <canvas id="total-sales-chart"></canvas>
                </div>
              </div>
            </div>

            <!-- users projects and download boxes -->
            <div class="col-xl-6 grid-margin">
              <div class="row">

                <!-- users box -->
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Users</p>
                      <div class="d-flex flex-wrap align-items-baseline">
                        <h2 class="mr-3" id="userChartAmount"></h2>
                        <i class="mdi mdi-arrow-up mr-1 text-danger"></i><span>
                          <p class="mb-0 text-danger font-weight-medium" id="userChartGrowth"></p>
                        </span>
                      </div>
                      <p class="mb-0 text-muted">Total users world wide</p>
                    </div>
                    <canvas id="users-chart"></canvas>
                  </div>
                </div>

                <!-- projects box -->
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Projects</p>
                      <div class="d-flex flex-wrap align-items-baseline">
                        <h2 class="mr-3" id="projectChartProcent"></h2>
                        <i class="mdi mdi-arrow-up mr-1 text-success"></i><span>
                          <p class="mb-0 text-success font-weight-medium" id="projectChartGrowth"></p>
                        </span>
                      </div>
                      <p class="mb-0 text-muted">Total users world wide</p>
                    </div>
                    <canvas id="projects-chart"></canvas>
                  </div>
                </div>
              </div>
              <div class="row">

                <!-- downloads box -->
                <div class="col-md-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Downloads</p>
                      <p class="text-muted mb-2">Watching ice melt. This is fun. Only you could make those words cute.</p>
                      <div class="row mt-4">
                        <div class="col-md-6 stretch-card">
                          <div class="row d-flex align-items-center">
                            <div class="col-6">
                              <div id="offlineProgress"></div>
                            </div>
                            <div class="col-6 pl-0">
                              <p class="mb-0">Offline</p>
                              <h2>45,324</h2>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 stretch-card mt-4 mt-md-0">
                          <div class="row d-flex align-items-center">
                            <div class="col-6">
                              <div id="onlineProgress"></div>
                            </div>
                            <div class="col-6 pl-0">
                              <p class="mb-0">Online</p>
                              <h2>12,236</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- tickets and updates boxes -->
          <div class="row">

            <!-- tickets box -->
            <div class="col-xl-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-md-end flex-wrap">
                    <p class="card-title" id="tickets">Tickets</p>
                    <div class="dropdown mb-3 mb-md-0">
                      <button class="btn btn-sm btn-outline-light dropdown-toggle text-dark" type="button" id="dropdownMenuDate1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Välj ett år
                      </button>
                      <div id="dropdown-menu" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate1">

                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table tickets-table mb-2" id="ticketsTable">
                      <thead>
                        <th class="text-muted pl-0">
                          Name
                        </th>
                        <th></th>
                        <th class="text-muted">
                          Date
                        </th>
                        <th class="text-muted">
                          Projects
                        </th>
                      </thead>
                      <tbody id="ticket-table-body">
                      <tr><td colspan="4"><h4 class="text-primary text-center font-weight-medium">Inget år är valt...</h4></td></tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- updates box -->
            <div class="col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title" id="updates">Updates</p>
                  <ul id="updateBox" class="bullet-line-list mt-4">
                    <li>

                    </li>
                    <li>

                    </li>
                    <li>

                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- open invoices box -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <p class="card-title" id="openInvoices">Open Invoices</p>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-muted mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus,
                        quibusdam eum, totam ut minus dolor eaque alias ratione repellat voluptate, libero beatae nobis
                        facere quod. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque harum maxime
                        quaerat quasi earum totam consectetur eius quisquam deleniti et.</p>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr class="border-top-0">
                          <th class="text-muted">Invoice</th>
                          <th class="text-muted">Customer</th>
                          <th class="text-muted">Ship</th>
                          <th class="text-muted">Best Price</th>
                          <th class="text-muted">Purchsed Price</th>
                          <th class="text-muted">Status</th>
                        </tr>
                      </thead>
                      <tbody id="openInvoicesTable">
 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.epndata.com/" target="_blank">EPN Sverige AB</a>. All rights reserved.</span>
          </div>
        </footer>

      </div>
    </div>
  </div>

  <!-- javascript for graphs and charts -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/helpers.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/script.js"></script>
  <script src="js/sort_ticket_by_year.js"></script>
</body>
</html>