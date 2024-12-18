<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .card {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      margin: 15px auto;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card img {
      margin-top: 30px;
      border-radius: 50%;
      width: 50%;
      height: auto;
      object-fit: cover;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .card-body {
      padding: 15px;
      text-align: center;
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-text {
      font-size: 1rem;
      color: #555;
      margin: 10px 0;
    }

    .btn {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 15px;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    @media (max-width: 767px) {
      .card img {
        width: 70%;
      }
    }
  </style>
  <?php
  include "includes/head_links.php";
  ?>
</head>

<body>

  <?php
  include "../HMS/includes/navbar.php";
  ?>

  <div class="bg-container">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="doctor-heading text-white text-center">FIND A DOCTOR</h1>
        </div>
      </div>
    </div>
  </div>

  <?php include "includes/filter.php" ?>

  <div class="container">
    <div class="row">
      <!-- First Card -->
      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/dr.-(lt-col)-p.-prabhakar.webp"
            alt="Dr. (Lt Col) P. Prabhakar">
          <div class="card-body">
            <h5 class="card-title">Dr. (Lt Col) P. Prabhakar</h5>
            <p class="card-text">
              Associate Clinical Director<br>
              Speciality: Orthopaedics<br>
              Qualification: MBBS, DNB (Orthopedics), MNAMS, FIMSA<br>
              CARE Hospitals, Nampally, Hyderabad
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>

      <!-- Second Card -->
      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/best-pulmonologist-a-jayachandra.webp"
            alt="Dr. A Jayachandra">
          <div class="card-body">
            <h5 class="card-title">Dr. A Jayachandra</h5>
            <p class="card-text">
              Clinical Director<br>
              Speciality: Pulmonology<br>
              Qualification: MBBS, DTCD, FCCP<br>
              CARE Hospitals, Banjara Hills, Hyderabad
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>

      <!-- Third Card -->
      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/dr-a-k-jinsiwale.webp" alt="Dr. A K Jinsiwale">
          <div class="card-body">
            <h5 class="card-title">Dr. A K Jinsiwale</h5>
            <p class="card-text">
              Consultant Orthopedics<br>
              Speciality: Orthopaedics<br>
              Qualification: MBBS, MS (Ortho), Dip M.V.S (Sweden), F.S.O.S<br>
              CARE CHL Hospitals, Indore
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>

      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/dr-a-kanchana-lakshmi.webp"
            alt="Dr. A K Jinsiwale">
          <div class="card-body">
            <h5 class="card-title">Dr. A Kanchana Lakshmi Prasanna</h5>
            <p class="card-text">Sr. Consultant and Head of Department
              Speciality
              Lab Medicine
              Qualification
              MBBS, MD (Biochemistry)
              Hospital
              CARE Hospitals, Health City
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>

      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/dr-a-nagesh.webp" alt="Dr. A K Jinsiwale">
          <div class="card-body">
            <h5 class="card-title">Dr. A Nagesh</h5>
            <p class="card-text">
              Sr. Consultant - Cardio Thoracic & Heart Transplant Surgery
              Speciality
              Cardiac Surgery
              Qualification
              MBBS, MCh (CTVS)
              Hospital
              Ramkrishna CARE Hospitals
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>

      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/aem-harika.webp" alt="Dr. A K Jinsiwale">
          <div class="card-body">
            <h5 class="card-title">Dr. A R M Harika</h5>
            <p class="card-text">
              Consultant
              Speciality
              Paediatrics, Neonatology<br>
              Qualification
              MBBS, MD
              Hospital
              CARE Hospital, Hyderabad
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>

      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/dr-a-r-vikram-sharma.webp" alt="Dr. A K Jinsiwale">
          <div class="card-body">
            <h5 class="card-title">Dr. A R Vikram Sharma</h5>
            <p class="card-text">
              Jr. Consultant
              Speciality
              General Surgery
              Qualification
              MBBS, MS
              Hospital
              Ramkrishna CARE Hospitals, Raipur
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>

      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/dr.-a.-s.-v.-narayana-rao.webp"
            alt="Dr. A K Jinsiwale">
          <div class="card-body">
            <h5 class="card-title">Dr. A. S. V. Narayana Rao</h5>
            <p class="card-text">
              Sr. Consultant Cardiologist
              Speciality
              Cardiology
              Qualification
              MBBS, MD
              Hospital
              CARE Hospitals, Hyderabad
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>

      <div class="col-xs-10 col-md-4 mt-4">
        <div class="card">
          <img src="https://www.carehospitals.com/assets/images/main/kidney-doctor-a-v-venu-gopal.webp"
            alt="Dr. A K Jinsiwale">
          <div class="card-body">
            <h5 class="card-title">Dr. A. V. Venugopal</h5>
            <p class="card-text">
              Sr. Consultant and Head of the Dept
              Speciality
              Nephrology, Renal Transplant
              Qualification
              MBBS, MD, DM (Nephrology)
              Hospital
              CARE Hospitals, Visakhapatnam
            </p>
            <a href="appointment.php">
              <button class="btn btn-primary">Book an Appointment</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include "footer.php";
  ?>

</body>

</html>
