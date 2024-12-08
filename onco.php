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
          <img src="https://www.carehospitals.com/assets/images/speciality/oncology-icon-16.webp">
          <h1>Oncology</h1>
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
        <h1>Oncology</h1>
        <h2>Best Cancer Hospital in Hyderabad</h2>
        <p>CARE Hospitals is regarded as the best cancer hospital in Hyderabad. CARE Cancer Institute consists of the
          best medical, radiation, and surgical oncologists, and offers unparalleled cancer treatment including
          prevention and rehabilitation. They cover a wide spectrum of subspecialties including Head and Neck Oncology,
          Thoracic Oncology, Orthopaedic Oncology, Gynaecological Oncology, and Nephrological & Urological Oncology
          among others.</p>
        <p>Our best cancer specialists in Hyderabad are internationally renowned and provide treatment with a
          multidisciplinary approach ensuring comprehensive and personalized cancer care. We use the most advanced
          treatment modalities, minimally invasive surgical and non-surgical procedures to treat cancer patients and
          provide them with the best cancer care in Hyderabad. We are equipped with cutting-edge technology that can
          provide precise diagnoses and tailored treatment plans. We focus on holistic care, addressing the emotional as
          well as psychological needs of the patient.</p>
        <p>The range of cancers that CARE Hospitals' specialists address is extensive and encompasses a broad spectrum
          of conditions. From brain tumours to oral cancer, breast cancer to gastrointestinal cancer, and bone cancer to
          rectal cancer, the institute's specialists are equipped to handle a diverse range of cases. Furthermore, they
          are adept at treating cervical cancer, skin cancer, blood cancer (leukaemia), prostate cancer, and lung
          cancer, demonstrating their versatility and expertise across various forms of the disease.</p>
        <p>CARE Hospitals in Hyderabad stands as a beacon of excellence in cancer treatment, with its CARE Cancer
          Institute offering a multidisciplinary approach that spans prevention, diagnosis, treatment, and
          rehabilitation. The institute's team of globally respected specialists employs state-of-the-art techniques to
          address an extensive array of cancer conditions, ensuring that patients receive the finest care available.</p>
        <p>The oncology department is staffed with highly experienced radiation, medical, and surgical oncologists who
          have years of expertise and knowledge in this field. With years of practice under their belts, they offer
          top-notch care that is centred around the well-being of the patients. These dedicated doctors are always ready
          to have open discussions about treatments, their potential side effects, and any concerns with both patients
          and their families. They make themselves available to clear up any uncertainties and fears. Furthermore, the
          department is supported by skilled medical physicists and radiotherapy technologists who play a crucial role
          in planning and administering radiotherapy. Their expertise ensures that the treatment process is
          well-organised and effective, adding an extra layer of precision to the patient's care.</p>
      </div>
    </div>
  </div>


  <?php include "footer.php" ?>
</body>

</html>