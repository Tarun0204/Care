<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Hospital Management System</title>

    <style>
        .location-para {
            text-align: center;
            margin-left: 50px;
            margin-right: 50px;
            font-weight: 400;
            font-size: 16px;
        }

        .city-name {
            display: flex;
            justify-content: space-around;
            list-style-type: none;
            font-weight: 600;
            font-size: 20px;
        }

        .active {
            background-color: aqua;
            color: #fff;
            padding: 5px;
        }

        /* Hospital Cards */
        .care-care-hosp-card-container {
            display: flex;
            margin: 10px;
            flex-wrap: wrap;
        }

        .care-hosp-card {
            position: relative;
            width: 30%;
            height: 300px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .care-hosp-card-image img {
            width: 100%;
            height: 50vh;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .care-hosp-card-content {
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 20px;
            background-color: darkturquoise;
            color: whitesmoke;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .care-hosp-card:hover .care-hosp-card-image img {
            opacity: 0.3;
        }

        .care-hosp-card:hover .care-hosp-card-content {
            opacity: 1;
            visibility: visible;
        }

        @media screen and (max-width: 768px) {
            .care-hosp-card {
                width: 100%;
                height: 250px;
            }
        }

        @media screen and (min-width: 769px) {
            .care-hosp-card {
                width: 30%;
                height: 350px;
                margin: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Location -->
    <div class="location-container mt-5">
        <div class="location-content text-center">
            <h1 class="title">Our Locations</h1>
            <p class="text-center location-para">
                CARE Hospitals, a part of the Quality Care India Limited, brings international quality healthcare to
                serve patients across the world. With 17 healthcare facilities serving 7 cities across 6 states in
                India, we are counted among the top 5 pan-Indian hospital chains.
            </p>
        </div>
    </div>

    <!-- Desktop Bar -->
    <div class="desktop-city-bar d-none d-md-block w-100 shadow mt-3 p-3">
        <div class="content">
            <ul class="city-name">
                <li class="active list-item" id="hyderabad-btn">Hyderabad</li>
                <li class="list-item" id="raipur-btn">Raipur</li>
                <li class="list-item" id="bhubaneswar-btn">Bhubaneswar</li>
                <li class="list-item" id="visakhapatnam-btn">Visakhapatnam</li>
                <li class="list-item" id="nagpur-btn">Nagpur</li>
                <li class="list-item" id="indore-btn">Indore</li>
                <li class="list-item" id="aurangabad-btn">Aurangabad</li>
                <li class="list-item" id="clinics-btn">Clinics & Medical Center</li>
            </ul>
        </div>
    </div>

    <!-- Mobile Dropdown -->
    <div class="mobile-city-bar d-flex justify-content-center d-block d-md-none w-100 mt-3 p-5">
        <div class="content">
            <select class="p-2" id="city-selector">
                <option value="hyderabad" selected>Hyderabad</option>
                <option value="raipur">Raipur</option>
                <option value="bhubaneswar">Bhubaneswar</option>
                <option value="visakhapatnam">Visakhapatnam</option>
                <option value="nagpur">Nagpur</option>
                <option value="indore">Indore</option>
                <option value="aurangabad">Aurangabad</option>
                <option value="clinics">Clinics & Medical Center</option>
            </select>
        </div>
    </div>

    <!-- Locations Cards -->
    <div id="hyderabad">
        <div class="care-care-hosp-card-container">
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/malapet-desk.webp" alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE Hospitals, Malakpet, Hyderabad</h4><br>
                    <p>16-6-104 to 109, Old Kamal Theater Complex Chaderghat Road, Opp Niagara Hotel, Chaderghat,
                        Hyderabad,
                        Telangana - 500024</p>
                </div>
            </div>
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/care-hospitals-hitech-city.webp"
                        alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE Hospitals, HITEC City, Hyderabad</h4><br>
                    <p>Old Mumbai Highway, Near Cyberabad Police Commissionerate, Jayabheri Pine Valley, HITEC City,
                        Hyderabad, Telangana - 500032</p>
                </div>
            </div>
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/banjara-hillz.webp" alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE Hospitals Outpatient Centre, Banjara Hills, Hyderabad</h4><br>
                    <p>BabuKhan Chambers, Road No.10, Banjara Hills, Hyderabad, Telangana - 500034</p>
                </div>
            </div>
        </div>
    </div>

    <div id="visakhapatnam" style="display: none;">
        <div class="care-care-hosp-card-container">
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/ramnagar-new.webp" alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE Hospitals, Ramnagar, Visakhapatnam</h4><br>
                    <p>10-50-11/5, AS Raja Complex, Waltair Main Road, Ramnagar, Visakhapatnam, Andhra Pradesh – 530002
                    </p>
                </div>
            </div>
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/vizag-health-city-768x477.webp"
                        alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE Hospitals, Health City, Arilova</h4><br>
                    <p> Plot no. 03, Health City, Arilova, China Gadili, Visakhapatnam</p>
                </div>
            </div>
        </div>
    </div>

    <div id="raipur" style="display: none;">
        <div class="care-care-hosp-card-container">
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/raipur-care-hospitals.webp"
                        alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>
                        Ramkrishna CARE Hospitals, Raipur</h4><br>
                    <p>Aurobindo Enclave, Pachpedhi Naka, Dhamtari Road, Raipur, Chhattisgarh - 492001</p>
                </div>
            </div>
        </div>
    </div>

    <div id="bhubaneswar" style="display: none;">
        <div class="care-care-hosp-card-container">
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/bhubaneswar.webp" alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE Hospitals, Bhubaneswar</h4><br>
                    <p>Unit No.42, Plot No. 324, Prachi Enclave Rd, Rail Vihar, Chandrasekharpur, Bhubaneswar, Odisha -
                        751016</p>
                </div>
            </div>
        </div>
    </div>

    <div id="nagpur" style="display: none;">
        <div class="care-care-hosp-card-container">
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/best-hospital-nagpur-location.webp"
                        alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>Ganga CARE Hospital Limited, Nagpur</h4><br>
                    <p>3 Farmland, Panchsheel Square, Wardha Road, Nagpur, Maharashtra – 440012</p>
                </div>
            </div>
        </div>
    </div>

    <div id="aurangabad" style="display: none;">
        <div class="care-care-hosp-card-container">
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/ciigma-aurangabad.webp" alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>United CIIGMA Hospitals (A unit of CARE Hospitals), Chh. Sambhajinagar</h4><br>
                    <p>Plot no 6, 7, Darga Rd, Shahnoorwadi, Chh. Sambhajinagar, Maharashtra 431005</p>
                </div>
            </div>
        </div>
    </div>

    <div id="indore" style="display: none;">
        <div class="care-care-hosp-card-container">
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/care-indore.webp" alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE CHL Hospitals, Indore</h4><br>
                    <p> AB Rd, near L.I.G Square, Indore, Madhya Pradesh 452008</p>
                </div>
            </div>
        </div>
    </div>

    <div id="clinics" style="display: none;">
        <div class="care-care-hosp-card-container">
            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/srinagar_clinic_updated.webp"
                        alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE Multispeciality Clinic, Srinagar Colony, Hyderabad</h4><br>
                    <p>8-3-1101/1, Care Clinic, Plot No 105 A, Srinagar Colony Main Rd, Beside MCH Park, Venkateshwara
                        Hills, Banjara Hills, Hyderabad, Telangana 500073</p>
                </div>
            </div>

            <div class="care-hosp-card">
                <div class="care-hosp-card-image">
                    <img src="https://www.carehospitals.com/assets/images/main/tolichowki_clinic_updated.webp"
                        alt="project">
                </div>
                <div class="care-hosp-card-content">
                    <h4>CARE Medical Center, Tolichowki, Hyderabad</h4><br>
                    <p>366/B/51, Paramount Hills, IAS Colony, Tolichowki, Hyderabad, Telangana 500008</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("hyderabad-btn").addEventListener("click", function () {
            toggleCity("hyderabad");
        });
        document.getElementById("raipur-btn").addEventListener("click", function () {
            toggleCity("raipur");
        });
        document.getElementById("bhubaneswar-btn").addEventListener("click", function () {
            toggleCity("bhubaneswar");
        });
        document.getElementById("visakhapatnam-btn").addEventListener("click", function () {
            toggleCity("visakhapatnam");
        });
        document.getElementById("nagpur-btn").addEventListener("click", function () {
            toggleCity("nagpur");
        });
        document.getElementById("indore-btn").addEventListener("click", function () {
            toggleCity("indore");
        });
        document.getElementById("aurangabad-btn").addEventListener("click", function () {
            toggleCity("aurangabad");
        });
        document.getElementById("clinics-btn").addEventListener("click", function () {
            toggleCity("clinics");
        });
        document.getElementById("city-selector").addEventListener("change", function (event) {
            toggleCity(event.target.value);
        });

        function toggleCity(city) {
            const cities = ["hyderabad", "raipur", "bhubaneswar", "visakhapatnam", "nagpur", "indore", "aurangabad", "clinics"];

            cities.forEach(function (c) {
                document.getElementById(c).style.display = "none";
            });

            document.getElementById(city).style.display = "block";

            cities.forEach(function (c) {
                const element = document.getElementById(c + "-btn");
                if (element) {
                    element.classList.remove("active");
                }
            });
            const activeElement = document.getElementById(city + "-btn");
            if (activeElement) {
                activeElement.classList.add("active");
            }
        }

        toggleCity("hyderabad");
    </script>

</body>

</html>