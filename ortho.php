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
          <img src="https://www.carehospitals.com/assets/images/speciality/orthopedics-06.webp">
          <h1>Orthopaedics</h1>
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
        <h1>Orthopaedics</h1>
        <h2>Best Orthopaedic Hospital in Hyderabad</h2>
        <p>Orthopaedic surgeons are specialists who deal with different types of bone problems. They specialize in
          treating conditions of the musculoskeletal system, including degenerative diseases, trauma, sports injuries,
          and tumours. CARE Hospitals has a comprehensive team of orthopaedic surgeons and orthopaedic physicians geared
          up to handle the toughest of bone and spine-related disorders with the right approach to get you back on your
          feet as quickly as possible.</p>
        <p>The department of orthopaedics combines extensive expertise with cutting-edge technology. Being the top
          orthopaedic hospital in Hyderabad, we offer an interdisciplinary solution for a full spectrum of acute and
          chronic musculoskeletal disorders, state-of-the-art trauma & accident surgery, sports medicine, arthroscopy,
          joint replacements, limb deformity correction, reconstruction ortho oncology, hand, wrist, and paediatric
          ortho care.</p>
        <p>Orthopaedics Department at CARE Hospitals provides services for both general and surgical treatments. Our
          general orthopaedic services encompass shoulder, knee, sports medicine, trauma, paediatrics, joint replacement
          surgery, physiotherapy, and total hip replacement. The scope of our surgery includes arthroplasty, orth
          biologics, cartilage regeneration and joint preservation procedures, fracture surgeries, including complex
          articular reconstructions, and salvage procedures for neglected trauma.</p>
        <p>We offer subspeciality surgeries to treat developmental and congenital disorders in children, limb
          preservation, cancer reconstruction, hand and wrist disorders, and as many minimally invasive procedures as
          possible to reduce painful recovery. In order to help patients recover from surgery more quickly, the medical,
          surgical, and nursing departments provide pre and post-surgical assistance.</p>
        <p>CARE Hospitals is regarded as the best orthopaedic hospital in Hyderabad. We provide high-quality care to
          improve the quality of life that can be negatively impacted by orthopaedic conditions like arthritis, ligament
          tears, and cubital tunnel syndrome. Get in touch with our orthopaedic specialists in Hyderabad today for more
          information about orthopaedic problems.</p>
      </div>
    </div>
  </div>


  <?php include "footer.php" ?>
</body>

</html>