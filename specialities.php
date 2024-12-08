<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head_links.php"; ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <?php include "includes/navbar.php"; ?>

    <div class="special-bg-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="doctor-heading text-white text-center">Specialities & Treatments</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h1 class="title text-center mt-5">Centre of Excellence</h1>
    </div>

    <!-- Content Section -->
    <div class="container mt-4">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-5 mb-4 mb-md-0">
                <img src="https://www.carehospitals.com/assets/images/main/left-image-care.webp" alt="Centre Image"
                    class="img-fluid rounded" />
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

    <div class="mt-5"></div>
    <h2 class="mb-3 mt-3 text-center">Our Hospitals</h2>
    <?php include "includes/address.php"; ?>
    <?php include "footer.php"; ?>
</body>

</html>