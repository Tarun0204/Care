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

    .app-form {
      margin-left: 30%;
    }

    .online-bg-container {
      background-image: url("https://payments.carehospitals.com/Image/payment-banner.jpg");
      height: 30vh;
      background-size: cover;
    }

    .main-heading {
      background-color: beige;
      border-radius: 40px;
      color: white;
    }
  </style>
</head>

<body>
  <?php
  include "includes/navbar.php"
    ?>
  <div class="online-bg-container">
    <h1 class="text-left text-white p-5">Pay Online</h1>
  </div>

  <div>
    <h3 class="main-heading text-center p-1 mt-5 ml-5 mr-3">Patient Details</h3>
    <div class="app-form">
      <form id="myForm">
        <div class="mb-3 mt-4">
          <label for="name">UHID</label>
          <input type="text" class="form-control w-50" id="name" placeholder="Enter UHID" />
          <button class="btn btn-info mt-1">Go</button>
        </div>
        <div class="mb-3 mt-4">
          <label for="name">Patient Name</label>
          <input type="text" class="form-control w-50" id="name" placeholder="Enter Patient Name" />
        </div>
      </form>
    </div>
  </div>

  <div>
    <h3 class="main-heading text-center p-1 mt-5 ml-5 mr-3">Payment Details</h3>
    <div class="app-form">
      <form id="myForm">
        <div class="mb-3">
          <label for="status">Hospital Name</label>
          <select id="status" class="form-control w-50">
            <option value="Active">Care Hospital, Hyderabad</option>
            <option value="Inactive">Care Hospital, Bhubaneshwar</option>
            <option value="Inactive">Care Hospital, Visakhapatnam</option>
            <option value="Inactive">Care Hospital, Banjara Hills, Hyderabad </option>
          </select>
        </div>

        <div class="mb-3">
          <label for="status">Advance Type</label>
          <select id="status" class="form-control w-50">
            <option value="Active">Select</option>
            <option value="Inactive">OPD Advance Collection</option>
            <option value="Inactive">IPD Advance Collection</option>
          </select>
        </div>


      </form>
    </div>
  </div>

  <div>
    <h3 class="main-heading text-center p-1 mt-5 ml-5 mr-3">Payer Details</h3>
    <div class="app-form">
      <form id="myForm">
        <div class="mb-3 mt-4">
          <label for="name">Name</label>
          <input type="text" class="form-control w-50" id="name" placeholder="Enter your Name" />
        </div>
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="text" class="form-control w-50" id="email" placeholder="Enter your Email" />
          <p id="emailErrMsg" class="error-message"></p>
        </div>
        <div class="mb-3">
          <label for="status">Gender</label>
          <select id="status" class="form-control w-50">
            <option value="Active">Male</option>
            <option value="Inactive">Female</option>
          </select>
        </div>
        <div class="mb-3 mt-4">
          <label for="phone">Phone</label>
          <input type="text" class="form-control w-50" id="phone" placeholder="Enter your Phone Number" />
        </div>
        <div class="mb-3 mt-4">
          <label for="phone">Address</label>
          <input type="text" class="form-control w-50" id="phone" placeholder="Enter your Address" />
        </div>
        <div class="mb-3 mt-4">
          <label for="phone">Postal Code</label>
          <input type="text" class="form-control w-50" id="phone" placeholder="Enter your Postal Code" />
        </div>
        <div class="mb-3 mt-4">
          <label for="phone">City</label>
          <input type="text" class="form-control w-50" id="phone" placeholder="Enter your City" />
        </div>
        <button class="btn btn-info" onclick="submitBtn()">Submit</button>
      </form>
    </div>
  </div>

  <?php include "footer.php" ?>

  <script>
    function submitBtn() {
      alert("Details Submitted Successfully")
    }
  </script>
</body>

</html>