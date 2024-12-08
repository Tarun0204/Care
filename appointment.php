<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head_links.php"; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f7f9;
        }

        .bg-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #007bff;
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .app-form {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-check-inline {
            margin-right: 20px;
        }

        .error-msg {
            color: red;
            margin-top: -10px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

        @media (max-width: 600px) {
            .app-form {
                margin: 20px;
                padding: 15px;
            }

            .form-control {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include "includes/navbar.php"; ?>

    <div class="bg-container">
        <h1>Book an Appointment</h1>
    </div>

    <div class="app-form">
        <form id="myForm">
            <div class="mb-3 mt-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required />
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email"
                    required />
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <div id="gender" class="form-control border-0 p-0">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number"
                    required />
            </div>
            <button class="btn mt-3" type="submit">Submit</button>
        </form>

        <div id="alertMessage" class="mt-3" style="display:none;"></div>
    </div>

    <?php include "footer.php"; ?>

    <script>
        $(document).ready(function () {
            $("#myForm").on("submit", function (event) {
                event.preventDefault(); 

                var formData = $(this).serialize();

                $.ajax({
                    url: 'appointConnect.php',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        $('#alertMessage').html('<div class="alert alert-success">' + response + '</div>').fadeIn();
                    },
                    error: function () {
                        $('#alertMessage').html('<div class="alert alert-danger">There was an error processing your request.</div>').fadeIn();
                    }
                });
            });
        });
    </script>
</body>

</html>