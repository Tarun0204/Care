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
          <img src="https://www.carehospitals.com/assets/images/speciality/pediatrics-07.webp">
          <h1>Paediatrics</h1>
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
        <h1>Paediatrics</h1>
        <h2>Best Childrens & Pediatric Hospital in Hyderabad</h2>
        <p>CARE Hospitals is one of the best pediatric hospitals in Hyderabad with a comprehensive approach towards
          treating children of all ages from neonates to adolescents. The department of paediatrics comprises of many
          subspecialities including paediatric oncology, paediatric neurology, paediatric orthopaedics, paediatric
          endocrinology, kidney transplants, paediatric surgery and urology, physiotherapy and rehabilitation, and
          paediatric gastroenterology and liver diseases.</p>
        <p>CARE Hospitals in Hyderabad provdies best paediatric care services and are the trusted partners for your
          child’s health. We aim to put ourselves in parents’ shoes to endeavour primarily on a child's health. Our
          doctors are known as the best paediatricians in Hyderabad with extensive knowledge and experience. We want the
          best holistic development of your child at physical, emotional and social levels. </p>
        <p>The department has performed many complex procedures and surgeries succesfully with excellent outcomes.
          Common conditions that are frequently treated are allergies, dyslexia, asthma, seizures, cerebral palsy, and
          congenital heart defects such as Patent ductus arteriosus (PDA) and atrial septal defect (ASD) etc.</p>
      </div>
    </div>
  </div>


  <?php include "footer.php" ?>
</body>

</html>