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
          <img src="https://www.carehospitals.com/assets/images/speciality/nephrology-03.webp">
          <h1>Nephrology</h1>
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
        <h1>Nephrology</h1>
        <h2>Kidney & Nephrology Hospitals in Hyderabad</h2>
        <p>CARE Hospitals is one of the best nephrology hospitals in Hyderabad. We are known for our expertise in the
          treatment of the most complex kidney related diseases. With a team of highly qualified and board-certified
          doctors, advanced procedures, and state-of-the-art infrastructure, we offer comprehensive nephrological
          treatment for adults and children with best possible outcomes. </p>
        <p>CARE Hospitals provide diagnosis, treatment, prognosis and management of a wide spectrum of ailments like
          kidney stones, kidney failures, prostate gland disorders, Addison's disease, male infertility, erectile
          dysfunction, and urinary incontinence under the speciality of Nephrology and Urology. We also offer diagnosis,
          treatment, and management for kidney diseases associated with other illnesses and conditions such as
          hypertension and diabetes.</p>
        <p>CARE Hospitals offer post-surgical end-to-end care and support for treatments of kidney cancer, prostate
          cancer, kidney transplant, and kidney failure. The minimally invasive surgeries ensure minimal postoperative
          recovery time and hospitalization along with rehabilitation for strict monitoring of patients undergoing
          kidney transplant surgery. </p>
      </div>
    </div>
  </div>


  <?php include "footer.php" ?>
</body>

</html>