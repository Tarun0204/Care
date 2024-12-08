<!DOCTYPE html>
<html>

<head>
  <?php include "includes/head_links.php" ?>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
    }

    .header {
      background-color: #e9ecef;
      border-radius: 10px;
    }

    .header img {
      max-width: 100%;
      border-radius: 10px;
    }

    .header h1 {
      color: #333;
      margin-top: 20px;
    }

    .form {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form label {
      font-size: 1.2rem;
      color: #333;
    }

    .form-check-label {
      font-size: 0.9rem;
      color: #555;
    }

    .form input[type="number"],
    .form input[type="checkbox"] {
      margin-top: 10px;
      font-size: 1rem;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-secondary:disabled {
      background-color: #6c757d;
      border: none;
    }

    .form p {
      margin-top: 15px;
      font-size: 0.9rem;
    }

    .form .text-primary {
      color: #007bff;
    }

    .form a.btn-primary {
      text-decoration: none;
    }

    .content {
      background-color: #fff;
      padding: 30px;
      margin-top: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .content h1,
    .content h2 {
      color: #333;
    }

    .content p {
      font-size: 1rem;
      color: #555;
      margin-bottom: 15px;
    }

    .content li {
      color: #333;
      margin-bottom: 10px;
      font-size: 1rem;
      list-style-type: number;
    }

    .content h1.mt-4 {
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .header .row {
        flex-direction: column;
        text-align: center;
      }

      .form {
        margin-top: 20px;
      }
    }
  </style>
</head>

<body>
  <?php include "includes/navbar.php" ?>

  <div class="shadow m-5 header">
    <div class="container p-5">
      <div class="row">
        <div class="col">
          <img src="https://www.carehospitals.com/assets/images/speciality/pulmonology-08.webp">
          <h1>Pulmnology</h1>
        </div>
        <div class="col bg-white p-3 form">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">Register Now</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number/PSID">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              By submitting this form I agree to the <span class="text-primary">T&C Privacy Policy</span> and to receive
              SMS, whatsApp & call comunication.
            </label>
          </div>
          <div class="d-grid gap-2 mt-3">
            <button class="btn btn-secondary" disabled type="button">Verify Mobile Number</button>
          </div>
          <p class="text-dark mt-3">Already Registered? <a href="login.php" class="btn btn-primary">Log in</a> </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container content mt-5">
    <div class="row">
      <div class="col-12">
        <h1>Pulmonology</h1>
        <h2>Best Lungs & Pulmonology Hospital in Hyderabad</h2>
        <p>Pulmonology is the discipline of medical sciences dealing with the ailments of the respiratory system. CARE
          Hospitals is regarded as the best pulmonology hospital in Hyderabad and offers an unparalleled range of
          holistic health care services for patients with respiratory disorders. At CARE Hospitals, our Pulmonologists
          are well proficient in the pulmonology department and are dedicated to working round the clock towards
          diagnosis, treatment and management of Pulmonary illnesses in patients of all ages with a wide spectrum of
          medical needs.</p>
        <p>Pulmonologists at CARE Hospitals are well adept with the latest technology and techniques for the treatment
          of Pulmonary problems, including interventional pulmonology, multidisciplinary management of rheumatological
          conditions such as interstitial lung disease, ailments involving the heart and lungs such as pulmonary
          hypertension among others. </p>
        <p>We provide unique respiratory care, and our Pulmonologists are well experienced and prepared to treat and
          manage critically ill patients with the latest tests, procedures, services, and minimally invasive treatments.
          We also provide rehabilitation for patients to improve lung function and closely monitor patients during their
          hospital stay for identifying any postoperative complications. We offer comprehensive end-to-end care for
          faster recovery and overall improvement of health.</p>

        <h1>CARE Advanced Bronchoscopy Suite</h1>
        <p>Bronchoscopy is the visual examination of the inside of the airways, using a bronchoscope (flexible
          instrument with a light and lens). Bronchoscopy services at CARE Hospitals are backed by high-end equipment
          such as ultrathin flexible bronchoscopy that can reach the peripheries of the lung and the latest EVIS X1
          platform for AI-aided visibility and precision diagnosis of pulmonary disorders. This state-of-the-art
          equipment is the first-ever installation in India by Olympus, the world leader in Endoscopy technologies.</p>
        <p>The Bronchoscopy services are highly advanced and the availability of cutting edge technology enable the
          teams to perform complex diagnostic and therapeutic procedures with utmost care and precision. We can
          efficiently perform a wide range of interventional pulmonology procedures for treatments such as:</p>

        <ul>
          <li>Opening up the airways</li>
          <li>Removal of tumor in air passages</li>
          <li>Airway stent placement</li>
          <li>Closure of airway fistulas</li>
          <li>Removal of foreign body from the airway</li>
        </ul>
      </div>
    </div>
  </div>


  <?php include "footer.php" ?>
</body>

</html>