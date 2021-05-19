<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Entry</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/daily-entry.css" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="css/style.css" rel="stylesheet" type="text/css"> 
</head>
<body>
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
      <h1><span><img  src="img/jkuat-logo.png" width="50px" height="50px" alt=""></span><span>Internship</span></h1>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li><a href="index"><span class="las la-igloo"></span>
          <span>Dashboard</span></a>
        </li>
        <li><a href="daily-entry" class="active"><span class="las la-pen-nib"></span>
          <span>New Daily Entry</span></a>
        </li>
        <li><a href=""><span class="las la-list"></span>
          <span>View Daily Entries</span></a>
        </li>
        <li><a href="weekly-report"><span class="lar la-edit"></span>
          <span>Write Weekly Report</span></a>
        </li>
        <li><a href=""><span class="las la-clipboard-list"></span>
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
        <img src="img/img.png" width="50px" height="50px" alt="">
        <div>
          <h4>John Doe</h4>
          <small>Student Account</small>
        </div>
      </div>
    </header>


  
         <section>
            <div class="container">
                <div class="contactInfo">
                  <div>
                    <h2> Daily Entry </h2>
                    <h2><span class="las la-edit"></span>19/05/2021</h2>
                  </div>
                </div>
                <div class="contactForm">
                  <h2>Today's Entry</h2>
                  <div class="formBox">
                    <div class="inputBox w100">
                      <textarea required></textarea>
                      <span>Write your daily entry here...</span>
                    </div>
                    <div class="inputBox w100">
                      <input type="submit" value="Send">
                    </div>
                  </div>
                </div>
            </div>
         </section>

  </div>

</body>
</html>
