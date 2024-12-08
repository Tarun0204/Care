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
          <img src="https://www.carehospitals.com/assets/images/speciality/gastroenterology-02-02.webp">
          <h1 class="mt-3">Gastro Sciences</h1>
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

  <div class="container mt-5 content">
    <div class="row">
      <div class="col-12">
        <h1>Gastro Sciences</h1>
        <h2>Best Gastroenterology Hospital in Hyderabad</h2>
        <p>Gastro Sciences is the branch of medical sciences that deals with the diagnosis and treatment of the
          disorders and diseases of the digestive system and the hepatobiliary system. Hepatology and Gastroenterology
          units at CARE Hospitals in Hyderabad are among the best in the entire country, providing expert care in
          medical gastroenterology, surgical gastroenterology and hepatology (liver along with the gallbladder), in both
          adults and children.</p>
        <p>CARE Hospitals is the most trusted and best gastroenterology hospital in Hyderabad. Gastroenterology
          specialists of CARE Hospitals deal with all problems and complications associated with stomach, liver, bile
          ducts, oesophagus, colon, pancreas, and the rectum using the latest and minimally invasive as well as
          non-invasive diagnostic, medical, and surgical procedures. The Gastroenterology unit is equipped with
          state-of-the-art infrastructure with advanced intensive care units for providing comprehensive end-to-end care
          to patients of all ages catering to their individual medical requirements. </p>
        <p>The highly skilled Gastroenterologists of CARE Hospitals in Hyderabad offer comprehensive gastroenterology
          and gastrointestinal surgical treatment for ailments like gastrointestinal and liver cancer, colon polyps,
          jaundice, liver cirrhosis, gastroesophageal reflux (commonly known as heartburn), peptic ulcer disease,
          gallbladder and biliary tract diseases, liver problems, irritable bowel syndrome (IBS), and pancreatitis etc.
        </p>
      </div>
    </div>
  </div>


  <?php include "footer.php" ?>
</body>

</html>