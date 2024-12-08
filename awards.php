<!DOCTYPE html>
<html>

<head>
    <?php include "includes/head_links.php" ?>
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
            margin-top: 3%;
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
    <?php include "includes/navbar.php" ?>
    <h1 class="text-center mt-5">Awards</h1>
    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="../HMS/awards/award1.jpg" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">4th Edition of The Economic Times Promising Brands 2021</div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="../HMS/awards/award2.jpg" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">5th Edition of The Economic Times Best Healthcare Brands 2022</div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="../HMS/awards/award3.jpg" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">Best Hospital Chain Award (National) 2021</div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="../HMS/awards/award2.jpg" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">4th Edition of The Economic Times Best Healthcare Brands 2021</div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://www.carehospitals.com/assets/images/main/times-network.jpg" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">For Excellence in Healthcare 2017</div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://www.carehospitals.com/assets/images/main/gcc-award.jpg" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">World’s Greatest Brands & Leaders 2016 -17 ASIA & GCC</div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://www.carehospitals.com/assets/images/main/week-ac.jpg" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">Best Speciality Hospital in Hyderabad 2016 as per The Week-AC Nielsen
                    Survey</div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://www.carehospitals.com/assets/images/main/awards02.png" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">Telangana Best Employer Brand Award 2022</div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="https://www.carehospitals.com/assets/images/main/awards01.png" class="w-75" />
        </div>
        <div class="content-container col-md-8">
            <div class="detail-container">
                <div class="property-name mt-5">Most Preferred Workplace 2022-23</div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>

</body>

</html>