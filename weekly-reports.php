<html lang="en">
<head>
  <title>Internship Program</title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  
  <input type="checkbox" id="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h1><span><img src="img/jkuat-logo.png" width="50px" height="50px" alt=""></span><span>Internship</span></h1>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li><a href="index"><span class="las la-igloo"></span>
          <span>Dashboard</span></a>
        </li>
        <li><a href="daily-entry"><span class="las la-pen-nib"></span>
          <span>New Daily Entry</span></a>
        </li>
        <li><a href="daily-entries"><span class="las la-list"></span>
          <span>View Daily Entries</span></a>
        </li>
        <li><a href="weekly-report"><span class="lar la-edit"></span>
          <span>Write Weekly Report</span></a>
        </li>
        <li><a href="weekly-reports" class="active"><span class="las la-clipboard-list"></span>
          <span>View Weekly Reports</span></a>
        </li>
      </ul>
    </div>
  </div>


  <div class="main-content">

    <header>
      <h2>
        <label for="nav-toggle">
          <span class="las la-bars"></span>
        </label>
        Dashboard
      </h2>
      <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here">
      </div>
      <div class="user-wrapper">
        <img src="img/img.png" width="40px" height="40px" alt="">
        <div>
          <h4>John Doe</h4>
          <small>Student Account</small>
        </div>
      </div>
    </header>


    <main>



      <div class="recent-grid">

        <div class="projects">

          <div class="card">

            <div class="card-header">
              <h2>Weekly Reports</h2>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table width="100%">
                  <thead>
                    <tr>
                      <td>Date</td>
                      <td>Report</td>
                      <td>Comments</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>23/05/2021</td>
                      <td>UI Team</td>
                      <td><span class="status purple"></span>
                        review
                      </td>
                    </tr>

                    <tr>
                      <td>30/05/2021</td>
                      <td>FrontEnd</td>
                      <td><span class="status pink"></span>
                        in progress
                      </td>
                    </tr>

                    <tr>
                      <td>7/06/2021</td>
                      <td>Mobile Team</td>
                      <td><span class="status orange"></span>
                        pending
                      </td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
          </div>

        </div>


        <div class="customers">

          <div class="card">

            <div class="card-header">
              <h2>Supervisors</h2>
              <button>See all<span class="las la-arrow-right"></span></button>
            </div>

            <div class="card-body">
              <div class="customer">
                <div class="info">
                  <img src="img/img2.png" width="40px" height="40px" alt="">
                  <div>
                    <h4>Jane Doe</h4>
                    <small>Chair Dpt</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div class="info">
                  <img src="img/img2.png" width="40px" height="40px" alt="">
                  <div>
                    <h4>Jane Doe</h4>
                    <small>Manager</small>
                  </div>
                </div>
                <div class="contact">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
 
    </main>
  </div>

</body>
</html>
