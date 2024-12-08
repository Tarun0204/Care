<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "includes/head_links.php" ?>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .app-form {
      margin-left: 30%;
    }

    .lab-bg-container {
      background-image: url("https://report.carehospitals.com/Images/download-report-banner.png");
      height: 50vh;
      background-size: cover;
    }

    .form {
      margin-left: 35%;
    }
  </style>
</head>

<body>
  <?php
  include "includes/navbar.php"
    ?>
  <div class="lab-bg-container">
    <h1 class="text-left ml-5 text-white pt-5">Download Your Lab Reports</h1>
  </div>

  <div class="lab-form">
    <div class="d-flex flex-row">
      <form class="form mt-5 mb-4">
        <input type="text" placeholder="Enter UHID.">
        <input type="text" placeholder="Enter Lab No.">
      </form>
    </div>
    <div class="text-center">
      <button class="btn btn-info">View Details</button>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Disclaimer</h1>
        <p>Availability of reports online is an additional service provided by CARE Hospitals. CARE Hospitals puts in
          the best efforts to publish reports on-line however availability of reports on-line is not binding upon CARE
          Hospitals. Some reports may be not be available on-line due to technical constraints or otherwise. All
          reports, including the reports not available on-line, can be collected from the Collection Counter of the
          respective unit where the patient underwent the tests. There may be some special reports which has Graphics
          and other Annexures, we advice you to collect the physical reports from the Lab as per your doctor’s advice.
          Kindly note the reports related to OPD visit only can be downloaded through this portal.</p>
      </div>
    </div>
  </div>
  <?php include "footer.php" ?>
</body>

</html>