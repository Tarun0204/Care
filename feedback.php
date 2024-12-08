<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head_links.php"; ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f7f9;
        }

        .online-bg-container {
            padding: 30px 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .app-form {
            max-width: 600px;
            margin: 0 auto;
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

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
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

    <div class="online-bg-container">
        <h1>Feedback Form</h1>
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
                <label for="location">Hospital Location</label>
                <select id="location" class="form-control" name="location" required>
                    <option value="Care Hospital, Hyderabad">Care Hospital, Hyderabad</option>
                    <option value="Care Hospital, Bhubaneshwar">Care Hospital, Bhubaneshwar</option>
                    <option value="Care Hospital, Visakhapatnam">Care Hospital, Visakhapatnam</option>
                    <option value="Care Hospital, Banjara Hills, Hyderabad">Care Hospital, Banjara Hills, Hyderabad
                    </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="department">Department</label>
                <select id="department" class="form-control" name="department" required>
                    <option value="Select Department">Select Department</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Nursing">Nursing</option>
                    <option value="Admin">Admin</option>
                    <option value="Billing">Billing</option>
                    <option value="House Keeping">House Keeping</option>
                    <option value="Doctors">Doctors</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="feedback">Feedback</label>
                <textarea class="form-control" name="feedback" required placeholder="Enter your feedback..."
                    rows="4"></textarea>
            </div>
            <button class="btn" type="submit">Submit</button>
        </form>
        <div id="alert" class="alert alert-success mt-3" style="display: none;"></div>
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myForm").on("submit", function (event) {
                event.preventDefault(); // Prevent default form submission
                $.ajax({
                    url: "feedbackConnect.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        $("#alert").html("Feedback Sent Successfully!").show();
                        $("#myForm")[0].reset(); // Reset form fields
                    },
                    error: function () {
                        $("#alert").html("Error sending feedback. Please try again.").show().addClass("alert-danger").removeClass("alert-success");
                    }
                });
            });
        });
    </script>
</body>

</html>