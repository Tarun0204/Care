<!DOCTYPE html>
<html lang="en">

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
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="https://www.carehospitals.com/assets/images/speciality/cardiac-sciences-14.webp" alt="Cardiac Sciences">
          <h1>Cardiac Sciences</h1>
        </div>
        <div class="col-md-6 bg-white p-4 form">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold">Register Now</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number/PSID">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              By submitting this form I agree to the <span class="text-primary">T&C Privacy Policy</span> and to receive
              SMS, WhatsApp & call communication.
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

  <div class="container mt-5 content">
    <h1>Cardiac Sciences</h1>
    <h2>Best Heart/Cardiology Hospital in Hyderabad</h2>
    <p>CARE Hospitals provides comprehensive cardiac care for patients with heart-related ailments. Our adept cardiac
      specialists with globally acclaimed clinical skills and international certifications offer minimally invasive
      diagnostic, non-surgical, and surgical procedures that are at par with international standards, establishing us as
      the best cardiology hospitals in India.</p>
    <p>CARE Hospitals undertake a wide range of surgical treatments for both adult and paediatric patients, including
      cardiac bypass surgery, heart valve replacement surgery, heart transplantation, heart valve surgery, and advanced
      minimally invasive surgical procedures. The cardiology units at CARE Hospitals are equipped with state-of-the-art
      Catheterization lab (Cath Lab), advanced operation theaters, and dedicated intensive care units (ICUs).</p>
    <p>CARE Hospitals also provides a wide range of treatment options in Interventional Cardiology, Non-Invasive
      Cardiology, Electrophysiology (EP), and Paediatric Cardiology. The cardiothoracic and vascular surgeons have
      expertise in performing some of the most complicated cardiothoracic and cardiovascular surgeries, such as thoracic
      wall reconstruction, thoracic trauma, aortic aneurysm, and peripheral vascular surgery.</p>
    <p>CARE Hospitals have the most dedicated paediatric cardiology centre which offers extensive cardiac treatments for
      several complicated heart diseases in children, including neonates and infants. A few of the many complex
      paediatric surgeries performed by our paediatric cardiac and cardiothoracic specialists include arterial switch
      operations with transposition of great arteries, single-stage correction, perimembranous Ventricular Septal Defect
      (VSD) device closure, and valvuloplasty in newborns and children.</p>
    <p>CARE Hospitals provide comprehensive end-to-end care, 24-hour cardiac emergencies care, preventative and
      rehabilitation care, and other services to patients of all ages based on their individual needs.</p>

    <h1 class="mt-4">Milestones</h1>
    <ul>
      <li>1st Hospital to develop India's first Indigenous Coronary Stent.</li>
      <li>1st Hospital to perform Fetal Heart Procedure in India.</li>
      <li>1st Hospital in Eastern India to perform Awake Open Heart Surgery.</li>
      <li>Over 1,00,000 Heart Surgeries performed with incredible success rates.</li>
      <li>One of the firsts in South India to perform Heart Transplantation.</li>
      <li>1st Atrial Fibrillation Clinic in India.</li>
      <li>The highest number of children with heart diseases treated through the Afghan Red Cross Society.</li>
    </ul>
  </div>

  <?php include "footer.php" ?>
</body>

</html>
