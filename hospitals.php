<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "includes/head_links.php" ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .property-card {
            background-color: #ffffff;
            border-radius: 2px;
            padding: 15px 0px;
            margin-left: 20%;
            margin-right: 20%;
            margin-bottom: 2%;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .property-card:focus,
        .property-card:hover {
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
        }

        .image-container {
            text-align: center;
        }

        @media (max-width: 768px) {
            .image-container {
                padding-bottom: 12px;
            }
        }

        .image-container img {
            width: 100%;
            max-width: 300px;
        }

        .star-container i {
            color: #EA322E;
            font-size: 10px;
            margin-right: 6px;
        }

        .interested-container {
            text-align: center;
        }

        .interested-container i {
            color: #EA322E;
            font-size: 20px;
            cursor: pointer;
        }

        .interested-text {
            font-size: 10px;
        }

        .detail-container {
            padding-bottom: 10px;
        }

        .property-name {
            font-size: 18px;
            font-weight: 600;
        }

        .property-address {
            color: #6f6f6f;
            font-size: 13px;
            padding-bottom: 5px;
        }

        .property-gender img {
            width: 40px;
        }

        .rent-container {
            display: flex;
            align-items: center;
        }

        .rent {
            font-size: 18px;
            font-weight: bold;
            padding-right: 10px;
        }

        .rent-unit {
            color: #6f6f6f;
            font-size: 12px;
        }

        .button-container .btn {
            font-size: 14px;
            border-radius: 0px;
            width: 140px;
            float: right;
        }
    </style>
</head>

<body>
    <?php
    include "includes/navbar.php"
        ?>

    <div class="special-bg-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="doctor-heading text-white text-center">Hospitals & Directions</h1>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/filter.php" ?>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://www.carehospitals.com/assets/images/main/banjarahills.png" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="4.5">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="detail-container">
                <div class="property-name">CARE Hospitals, Banjara Hills, Hyderabad</div>
                <div class="property-address">Road No.1, Banjara Hills, Hyderabad, Telangana - 500034</div>
            </div>
            <div class="row no-gutters">
                <div class="rent-container col-6">
                    <div class="rent"><a href="https://maps.app.goo.gl/mAQZ7mPBmH5urEVXA">Get Directions</a></div>
                </div>
                <div class="button-container col-6">
                    <a href="appointment.php" class="btn btn-primary">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://www.carehospitals.com/assets/images/main/bhubaneswar.jpg" />
        </div>
        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="4.8">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="detail-container">
                <div class="property-name">CARE Hospitals, Bhubaneswar</div>
                <div class="property-address">Unit No.42, Plot No. 324, Prachi Enclave Rd, Rail Vihar, Chandrasekharpur,
                    Bhubaneswar, Odisha - 751016</div>
            </div>
            <div class="row no-gutters">
                <div class="rent-container col-6">
                    <div class="rent"><a href="https://maps.app.goo.gl/FxAFH4dvK9PwQQzdA">Get Directions</a></div>
                </div>
                <div class="button-container col-6">
                    <a href="appointment.php" class="btn btn-primary">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://i.ytimg.com/vi/buMAYjaDsN4/maxresdefault.jpg" />
        </div>
        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="3.5">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="detail-container">
                <div class="property-name">CARE Hospitals, Ramnagar, Visakhapatnam</div>
                <div class="property-address">10-50-11/5, AS Raja Complex, Waltair Main Road, Ramnagar, Visakhapatnam,
                    Andhra Pradesh – 530002</div>
            </div>
            <div class="row no-gutters">
                <div class="rent-container col-6">
                    <div class="rent"><a href="https://maps.app.goo.gl/FxAFH4dvK9PwQQzdA">Get Directions</a></div>
                </div>
                <div class="button-container col-6">
                    <a href="appointment.php" class="btn btn-primary">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://www.carehospitals.com/assets/images/main/banjarahills.png" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="4.5">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="detail-container">
                <div class="property-name">CARE Hospitals, Banjara Hills, Hyderabad</div>
                <div class="property-address">BabuKhan Chambers, Road No.10, Banjara Hills, Hyderabad, Telangana -
                    500034</div>
            </div>
            <div class="row no-gutters">
                <div class="rent-container col-6">
                    <div class="rent"><a href="https://maps.app.goo.gl/mAQZ7mPBmH5urEVXA">Get Directions</a></div>
                </div>
                <div class="button-container col-6">
                    <a href="appointment.php" class="btn btn-primary">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div>


    <?php
    include "footer.php";
    ?>
</body>

</html>