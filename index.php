<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/ac42c3b1f7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
  <style>
    body {
      background-color: #f1f5f9 !important;
      text-decoration: none;
    }

    .carousel,
    .carousel-item,
    .card {
      background-color: #fff !important;
    }


    .title {
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
      font-size: 2rem;
      color: #000000;
      margin-bottom: 20px;
    }

    .arrow-icon {
      color: blue;
      margin-right: 10px;
    }

    .card-title {
      font-weight: bold;
      font-size: 1.25rem;
      margin-top: 10px;
    }

    .blog-title {
      font-weight: bold;
    }

    .blog-image {
      width: 100%;
      height: auto;
      object-fit: cover;
      margin-bottom: 10px;
      border-radius: 12px;
    }

    .blog-column {
      margin-bottom: 30px;
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
    }

    .news-card {
      display: flex;
      margin-bottom: 20px;
    }

    .news-card img {
      width: 40%;
      object-fit: cover;
      margin-right: 20px;
    }

    .news-card .card-body {
      flex: 1;
    }

    .arrow-link {
      text-decoration: none;
      color: #000;
      font-family: Arial, sans-serif;
      display: inline-block;
    }

    .arrow-link:hover {
      color: blue;
      text-decoration: underline;
    }

    .accordion-button {
      background-color: #ffffff !important;
      color: #000000;
      border: 1px solid #ddd;
    }

    .accordion-button:not(.collapsed) {
      background-color: #ffffff !important;
      color: #000000;
    }

    .accordion-body {
      background-color: #ffffff;
    }

    .accordion-item {
      border: 1px solid #ddd;
    }

    .location-para {
      text-align: center;
      margin-left: 50px;
      margin-right: 50px;
    }

    @media screen and (max-width: 767px) {
      .carousel-image {
        height: 40vh !important;
      }
    }

    @media (max-width: 768px) {
      .blog-column {
        flex-direction: column;
      }

      .blog-image {
        margin-bottom: 10px;
      }

      .title {
        font-size: 1.5rem;
      }

      .blog-title {
        font-size: 1.25rem;
      }
    }

    @media (max-width: 480px) {
      .container {
        padding-left: 10px;
        padding-right: 10px;
      }

      .title {
        font-size: 1.2rem;
        text-align: center;
      }

      .blog-title {
        font-size: 1rem;
      }

      .blog-image {
        max-width: 100%;
      }
    }

    .news-media-container {
      width: 100%;
      margin-top: 5rem;
    }

    .news-media-title {
      font-size: 2rem;
      text-align: center;
    }

    .news-media-row {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      justify-content: space-between;
    }

    .news-card-container {
      flex: 1 1 45%;
      display: flex;
      justify-content: center;
    }

    .news-card {
      display: flex;
      flex-direction: row;
      border: 1px solid #ccc;
      padding: 1rem;
      width: 100%;
    }

    .news-image {
      width: 150px;
      height: 120px;
      object-fit: cover;
      margin-right: 1rem;
    }

    .news-card-body {
      flex: 1;
    }

    .news-date {
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    .news-text {
      font-size: 1rem;
    }

    @media (max-width: 768px) {
      .news-card-container {
        flex: 1 1 100%;
      }

      .news-card {
        flex-direction: column;
        align-items: center;
      }

      .news-image {
        width: 100%;
        height: auto;
      }

      .news-card-body {
        text-align: center;
      }
    }

    @media (max-width: 480px) {
      .news-media-title {
        font-size: 1.5rem;
      }
    }

    .news-image3 {
      width: 100px !important; 
    }
  </style>

</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mb-5">
    <a class="navbar-brand" href="index.php"><img src="https://www.carehospitals.com/assets/images/cares-logo.webp"
        class="w-25 ms-3" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="doctor.php"><i class="fa-solid fa-user-doctor"></i> Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="specialities.php"><i class="fa-solid fa-stethoscope"></i> Specialities &
            Treatments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hospitals.php"><i class="fa-solid fa-map-pin"></i> Hospitals & Directions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointment.php"><i class="fa-solid fa-calendar-days"></i> Book an Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php"><i class="fa-solid fa-address-book"></i> Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="mt-3"></div><br>
  <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 carousel-image"
          src="https://www.carehospitals.com/assets/images/banners/banner-sunri-desk-2.webp" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel-image"
          src="https://www.carehospitals.com/assets/images/banners/banner-digi.webp" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel-image"
          src="https://www.carehospitals.com/assets/images/banners/web-banners-robotic-1920x450.webp" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  <!-- Title -->
  <div class="container">
    <h1 class="title">Centre of Excellence</h1>
  </div>

  <!-- Content Section -->
  <div class="container mt-4">
    <div class="row align-items-center">
      <!-- Image Section -->
      <div class="col-md-5 mb-4 mb-md-0">
        <img src="https://www.carehospitals.com/assets/images/main/left-image-care.webp" alt="Centre Image"
          class="img-fluid rounded excellent-img" />
      </div>
      <!-- Points Section -->
      <div class="col-md-7">
        <div class="row">
          <!-- Points -->
          <div class="col-sm-4 mb-3">
            <a href="./cardiac.php" class="arrow-link">
              <span class="arrow-icon">➔</span> Cardiac Sciences
            </a>
          </div>
          <div class="col-sm-4 mb-3">
            <a href="./gastro.php" class="arrow-link">
              <span class="arrow-icon">➔</span> Gastro Sciences
            </a>
          </div>
          <div class="col-sm-4 mb-3">
            <a href="./nephro.php" class="arrow-link">
              <span class="arrow-icon">➔</span> Nephrology
            </a>
          </div>
          <div class="col-sm-4 mb-3">
            <a href="./neuro.php" class="arrow-link">
              <span class="arrow-icon">➔</span> Neurosciences
            </a>
          </div>
          <div class="col-sm-4 mb-3">
            <a href="./onco.php" class="arrow-link">
              <span class="arrow-icon">➔</span> Oncology
            </a>
          </div>
          <div class="col-sm-4 mb-3">
            <a href="./ortho.php" class="arrow-link">
              <span class="arrow-icon">➔</span> Orthopedics
            </a>
          </div>
          <div class="col-sm-4 mb-3">
            <a href="./paed.php" class="arrow-link">
              <span class="arrow-icon">➔</span> Pediatrics
            </a>
          </div>
          <div class="col-sm-4 mb-3">
            <a href="./pulm.php" class="arrow-link">
              <span class="arrow-icon">➔</span> Pulmonology
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div class="container mt-5">
    <h2 class="title">Why Care Hospitals ?</h2>
    <div class="row mt-4">
      <!-- First Card -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="https://www.carehospitals.com/assets/images/main/care-hospitals-treatments-2.webp"
            alt="Leading Doctors" class="card-img-top mx-auto mt-3" />
          <div class="card-body">
            <h5 class="card-title">Leading Doctors</h5>
            <p class="card-text">
              A pool of over 1400 doctors to provide you modern and
              world-class treatment.
            </p>
          </div>
        </div>
      </div>
      <!-- Second Card -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="https://www.carehospitals.com/assets/images/main/care-hospitals-treatments-3.webp"
            alt="Treatment Options" class="card-img-top mx-auto mt-3" />
          <div class="card-body">
            <h5 class="card-title">Treatment Options</h5>
            <p class="card-text">
              We provide services in over 30+ medical specialties with
              state-of-the-art infrastructure and the highest standards of
              care.
            </p>
          </div>
        </div>
      </div>
      <!-- Third Card -->
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <img src="https://www.carehospitals.com/assets/images/main/care-hospitals-treatments-1.webp"
            alt="Accreditations" class="card-img-top mx-auto mt-3" />
          <div class="card-body">
            <h5 class="card-title">Accreditations</h5>
            <p class="card-text">
              Our highest standards of care, safe and hygienic practices are
              reflected in our Awards and Accreditations.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Location -->
  <?php include "location.php" ?>


  <!-- Latest Blogs Section -->
  <div class="container mt-5">
    <h2 class="title">Latest Blogs</h2>
    <div class="row mt-4">
      <!-- First Half -->
      <div class="col-md-6">
        <div class="mb-4 blog-column">
          <img src="https://www.carehospitals.com/assets/images/main/chronic-obstructive-pulmonary-disease.webp"
            alt="Blog Image 1" class="blog-image">
          <p class="blog-title">COPD: Causes, Symptoms, Diagnosis, Treatment & Prevention</p>
          <p>Chronic Obstructive Pulmonary Disease (or COPD) is a lung condition that affects the breathing of a person.
            People with COPD find it difficult to breathe normally, and as the disease progresses, doing simple daily
            tasks can also become hard.</p>
        </div>
        <div class="d-flex mb-4 blog-column">
          <img
            src="https://www.carehospitals.com/assets/images/main/can-you-overdose-on-vitamins-everthing-you-need-to-know-mobile.webp"
            alt="Blog Image 2" class="img-fluid me-3 blog-image">
          <div>
            <p class="blog-title">Can You Overdose on Vitamins: Everything You Need To Know</p>
            <p>Millions of individuals throughout the world take vitamins on a daily basis. Though most supplement
              bottles include dose guidelines, it's standard practice to take more than what's recommended.</p>
          </div>
        </div>
      </div>
      <!-- Second Half -->
      <div class="col-md-6">
        <div class="d-flex mb-4 blog-column">
          <img src="https://www.carehospitals.com/assets/images/main/how-i-improve-my-childs-eating-habits-mobile.webp"
            alt="Blog Image 4" class="img-fluid me-3 blog-image">
          <div>
            <p class="blog-title">How Can I Improve My Child's Eating Habits?</p>
            <p>You may support your children in maintaining a healthy weight and normal growth by creating appropriate
              eating patterns for them and teaching them its benefits.</p>
          </div>
        </div>
        <div class="d-flex blog-column">
          <img
            src="https://www.carehospitals.com/assets/images/main/how-does-calcium-deficiency-affect-bone-health-mobile.webp"
            alt="Blog Image 5" class="img-fluid me-3 blog-image">
          <div>
            <p class="blog-title">How does calcium deficiency affect bone health?</p>
            <p>Our bones depend on a balanced diet and a continuous supply of nutrients, especially calcium and vitamin
              D, for their health and strength. People require calcium to develop and maintain healthy bones and teeth.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Awards -->
  <div class="hosp-why-section mt-5" style="font-family: Arial, sans-serif;">
    <div class="text-center">
      <h1 class="hosp-main-heading mb-5 title">Awards and Accreditations</h1>
    </div>

    <div id="awardsCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row d-flex justify-content-center">
            <div class="card mx-3 mb-3" style="width: 18rem;">
              <img class="card-img-top"
                src="https://www.carehospitals.com/assets/images/main/most_preferred_workplace.webp"
                alt="Most Preferred Workplace">
              <div class="card-body text-center">
                <p class="card-text">Most Preferred Workplace For 2024-25 By 4th Edition Of India Today's Esteemed
                  Marksmen Daily.</p>
              </div>
            </div>
            <div class="card mx-3 mb-3" style="width: 18rem;">
              <img class="card-img-top"
                src="https://www.carehospitals.com/assets/images/main/healthcare-best-1-2024.webp"
                alt="Best Healthcare Brands">
              <div class="card-body text-center">
                <p class="card-text">7th Edition of The Economic Times Best Healthcare Brands 2024</p>
              </div>
            </div>
            <div class="card mx-3 mb-3" style="width: 18rem;">
              <img class="card-img-top" src="https://www.carehospitals.com/assets/images/main/promising-brand.webp"
                alt="Promising Brands">
              <div class="card-body text-center">
                <p class="card-text">4th Edition of The Economic Times Promising Brands 2021</p>
              </div>
            </div>
            <div class="card mx-3 mb-3" style="width: 18rem;">
              <img class="card-img-top" src="https://www.carehospitals.com/assets/images/main/week-ac.webp"
                alt="Promising Brands">
              <div class="card-body text-center">
                <p class="card-text">Best Speciality Hospital in Hyderabad 2016 as per The Week-AC Nielsen Survey</p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row d-flex justify-content-center">
            <div class="card mx-3 mb-3" style="width: 18rem;">
              <img class="card-img-top"
                src="https://www.carehospitals.com/assets/images/main/best-hospitalchain-award.webp"
                alt="Another Award 1">
              <div class="card-body text-center">
                <p class="card-text">Best Hospital Chain Award (National) 2021 by The Economic Times of India</p>
              </div>
            </div>
            <div class="card mx-3 mb-3" style="width: 18rem;">
              <img class="card-img-top" src="https://www.carehospitals.com/assets/images/main/times-network.webp"
                alt="Another Award 2">
              <div class="card-body text-center">
                <p class="card-text">Excellence in Healthcare 2017 by Times Network</p>
              </div>
            </div>
            <div class="card mx-3 mb-3" style="width: 18rem;">
              <img class="card-img-top" src="https://www.carehospitals.com/assets/images/main/gcc-award.jpg"
                alt="Another Award 3">
              <div class="card-body text-center">
                <p class="card-text">World’s Greatest Brands & Leaders 2016 -17 ASIA & GCC</p>
              </div>
            </div>
            <div class="card mx-3 mb-3" style="width: 18rem;">
              <img class="card-img-top" src="https://www.carehospitals.com/assets/images/main/epihc_new.webp"
                alt="Promising Brands">
              <div class="card-body text-center">
                <p class="card-text">Member of Ethical Principles in Health Care (EPiHC)</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#awardsCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#awardsCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- News and Media Section -->
  <div class="news-media-container mt-5">
    <h2 class="news-media-title title">News and Media</h2>
    <div class="news-media-row mt-4">
      <!-- First Card -->
      <div class="news-card-container mb-4">
        <div class="news-card d-flex flex-row">
          <img src="https://www.carehospitals.com/assets/images/main/andhra-prabha.webp" alt="News Image 1"
            class="news-image">
          <div class="news-card-body">
            <p class="news-date">1 May 2024</p>
            <p class="news-text">CARE Institute of Digestive Diseases launched in Hyderabad News Coverage in
              AndhraPrabha</p>
          </div>
        </div>
      </div>
      <!-- Second Card -->
      <div class="news-card-container mb-4">
        <div class="news-card d-flex flex-row">
          <img src="https://www.carehospitals.com/assets/images/main/ennadu.webp" alt="News Image 2" class="news-image">
          <div class="news-card-body">
            <p class="news-date">27 April 2024</p>
            <p class="news-text">Diabetes Reversal in High BMI by CARE Hospital Doctors News Coverage in EEnadu</p>
          </div>
        </div>
      </div>
      <!-- Third Card -->
      <div class="news-card-container mb-4">
        <div class="news-card d-flex flex-row">
          <img
            src="https://content.jdmagicbox.com/v2/comp/chhindwara/f6/9999p7162.7162.140306133106.a8f6/catalogue/divya-express-chhindwara-ho-chhindwara-newspaper-publishers-intrcfxemz.jpg"
            alt="News Image 3" class="news-image3">
          <div class="news-card-body">
            <p class="news-date">23 March 2024</p>
            <p class="news-text">CARE Hospitals Banjara Hills Launches Diabetic Foot Clinic News Coverage in Hindi Milap
              on 23rd March 2024</p>
          </div>
        </div>
      </div>
      <!-- Fourth Card -->
      <div class="news-card-container mb-4">
        <div class="news-card d-flex flex-row">
          <img
            src="https://yt3.googleusercontent.com/rm8Rz8rasALCUE3bPrc3t0OF9UwmwJEU-75p4b-8FlS3rVlm2fLxFhdK-3xLuvGlN9MdlygB=s900-c-k-c0x00ffffff-no-rj"
            alt="News Image 4" class="news-image3">
          <div class="news-card-body">
            <p class="news-date">29 July 2024</p>
            <p class="news-text">CARE Hospitals Hitech City Organizes Fitness and Awareness Session on Hepatitis Day
              News Coverage in Deccan Vision</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Frequently Asked Questions Section -->
  <div class="container mt-5">
    <h2 class="title">Frequently Asked Questions</h2>
    <div class="accordion mt-4" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            How many CARE Hospitals are there in India?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            CARE Hospitals is a prominent healthcare organization with a network of 17 healthcare facilities. As one of
            the largest hospital chains in India, CARE Hospitals offers a wide range of medical services across various
            specialties.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo">
            Why CARE Hospitals are considered as best hospitals in India?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            CARE Hospitals Group is a multi-speciality healthcare provider in India. CARE Hospitals delivers
            comprehensive care in over 30 clinical specialties, such as Cardiac Sciences, Oncology, Neurosciences, Renal
            Sciences, Gastroenterology & Hepatology, Orthopaedics & Joint Replacement, ENT, Vascular Surgery, Emergency
            & Trauma, and Integrated Organ Transplants to name a few.
            CARE Group of Hospitals are well equipped with advanced facilities and modern infrastructure and with the
            most experienced and skilled doctors. With its state-of-the-art infrastructure, the
            internationally-certified team of eminent doctors, and a caring environment, CARE Hospitals Group is one of
            the best and preferred healthcare destinations in India.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
            aria-expanded="false" aria-controls="collapseThree">
            Which is the best multi-speciality Hospital chain in Hyderabad, India?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The CARE Hospitals Group has 7 hospitals in Hyderabad and is one of the best multi-speciality hospital
            chains in Hyderabad. Our hospitals provide services in over 30 medical specialities like cardiology,
            neurology, cardiac surgery, urology, nephrology, gastroenterology, pulmonology, gynaecology, neurosurgery,
            renal transplant, heart transplant, orthopaedics, paediatrics etc..
            With a multi-disciplinary team of eminent doctors and care providers, our hospitals in Hyderabad provide
            sophisticated treatment plans for our patients and are considered among the best multi-speciality hospital
            chains in Hyderabad.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
            aria-expanded="false" aria-controls="collapseFour">
            Which is the best hospital in Hyderabad?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Established in 1997, CARE Hospitals is considered as the best hospital in Hyderabad with 7 state-of-the-art
            hospitals serving patients in and around Hyderabad, Telangana. Our hospitals are equipped with modern
            technology and infrastructure. A Multi-disciplinary team of doctors provides effective and personalized
            treatment plans based on individual needs.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
            aria-expanded="false" aria-controls="collapseFive">
            Do all CARE Hospitals provide International Patient services?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            CARE Hospitals flagship centres for international patients are located in Hyderabad and Bhubaneswar, the
            leading destinations for healthcare in the world.
            CARE International Patient Program offers a wide range of services to the patients visiting the hospital
            from locations outside India. Combining excellent clinical expertise with the latest technology and
            cost-effective services, the program addresses the diverse needs of international patients. Right from the
            time they arrive at the airport, our International Patient Team ensures a comfortable stay, convenient
            services, and a world-class treatment experience.
            We use the best and the latest technology to adapt to the changing healthcare needs and bring patients an
            experience of the highest possible degree in medical care. Our focus is on improving the healthcare system
            of the country, elevating CARE Hospitals head and shoulder above others, and establishing India as the
            preferred destination for healthcare needs.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-5"></div>
  <?php
  include "footer.php"
    ?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>