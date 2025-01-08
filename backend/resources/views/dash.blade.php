@extends('dashboard')

@section('content')

<div class="row">

  <!-- Left side columns -->
  <div class="col-lg-12">
    <div class="row">

      <!-- Sales Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Sales <span>| Today</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cart"></i>
              </div>
              <div class="ps-3">
                <h6>145</h6>
                <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Sales Card -->

      <!-- Revenue Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Revenue <span>| This Month</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-currency-dollar"></i>
              </div>
              <div class="ps-3">
                <h6>$3,264</h6>
                <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

              </div>
            </div>
          </div>

        </div>
      </div><!-- End Revenue Card -->

      <!-- Customers Card -->
      <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Customers <span>| This Year</span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>1244</h6>
                <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

              </div>
            </div>

          </div>
        </div>

      </div><!-- End Customers Card -->

      <!-- Reports -->
      <div class="col-12">
        <div class="card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Reports <span>/Today</span></h5>

            <!-- Line Chart -->
            <div id="reportsChart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#reportsChart"), {
                  series: [{
                    name: 'Sales',
                    data: [31, 40, 28, 51, 42, 82, 56],
                  }, {
                    name: 'Revenue',
                    data: [11, 32, 45, 32, 34, 52, 41]
                  }, {
                    name: 'Customers',
                    data: [15, 11, 32, 18, 9, 24, 11]
                  }],
                  chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                      show: false
                    },
                  },
                  markers: {
                    size: 4
                  },
                  colors: ['#4154f1', '#2eca6a', '#ff771d'],
                  fill: {
                    type: "gradient",
                    gradient: {
                      shadeIntensity: 1,
                      opacityFrom: 0.3,
                      opacityTo: 0.4,
                      stops: [0, 90, 100]
                    }
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    curve: 'smooth',
                    width: 2
                  },
                  xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                  },
                  tooltip: {
                    x: {
                      format: 'dd/MM/yy HH:mm'
                    },
                  }
                }).render();
              });
            </script>
            <!-- End Line Chart -->

          </div>

        </div>
      </div><!-- End Reports -->

    </div>
  </div><!-- End Left side columns -->

</div>

<div class="col-lg-12">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Table with stripped rows</h5>

      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Age</th>
            <th scope="col">Start Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td>28</td>
            <td>2016-05-25</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Bridie Kessler</td>
            <td>Developer</td>
            <td>35</td>
            <td>2014-12-05</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ashleigh Langosh</td>
            <td>Finance</td>
            <td>45</td>
            <td>2011-08-12</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Angus Grady</td>
            <td>HR</td>
            <td>34</td>
            <td>2012-06-11</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Raheem Lehner</td>
            <td>Dynamic Division Officer</td>
            <td>47</td>
            <td>2011-04-19</td>
          </tr>
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>

</div>

<div class="col-lg-8">

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Vertical Form</h5>

      <!-- Vertical Form -->
      <form class="row g-3">
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="inputNanme4">
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
</div>


<div class="col-lg-12">

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Default Buttons</h5>

      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-secondary">Secondary</button>
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-light">Light</button>
      <button type="button" class="btn btn-dark">Dark</button>
      <button type="button" class="btn btn-link">Link</button>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Rounded Buttons</h5>

      <button type="button" class="btn btn-primary rounded-pill">Primary</button>
      <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
      <button type="button" class="btn btn-success rounded-pill">Success</button>
      <button type="button" class="btn btn-danger rounded-pill">Danger</button>
      <button type="button" class="btn btn-warning rounded-pill">Warning</button>
      <button type="button" class="btn btn-info rounded-pill">Info</button>
      <button type="button" class="btn btn-light rounded-pill">Light</button>
      <button type="button" class="btn btn-dark rounded-pill">Dark</button>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Icon Buttons</h5>

      <button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i> With Text</button>
      <button type="button" class="btn btn-secondary"><i class="bi bi-collection"></i></button>
      <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button>
      <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
      <button type="button" class="btn btn-warning"><i class="bi bi-exclamation-triangle"></i></button>
      <button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button>
      <button type="button" class="btn btn-dark"><i class="bi bi-folder"></i></button>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Button Groups</h5>

      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
      </div>

      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger">Left</button>
        <button type="button" class="btn btn-warning">Middle</button>
        <button type="button" class="btn btn-success">Right</button>
      </div>

      <div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-primary">Left</button>
        <button type="button" class="btn btn-outline-primary">Middle</button>
        <button type="button" class="btn btn-outline-primary">Right</button>
      </div>

    </div>
  </div>

</div>

</div>
@endsection