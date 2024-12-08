<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "includes/head_links.php" ?>
  <style>
    .app-form {
      margin-left: 30%;
    }

    .error-msg {
      color: red;
    }
  </style>
</head>

<body>
  <?php
  include "includes/navbar.php"
    ?>
  <div class="bg-container">
    <h1 class="text-center text-white p-5">Book an Appointment</h1>
  </div>

  <div class="app-form">
    <form id="myForm">
      <div class="mb-3 mt-4">
        <label for="name">Name</label>
        <input type="text" class="form-control w-50" id="name" placeholder="Enter your Name" required />
        <p class="error-msg" id="nameErrMsg"></p>
      </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control w-50" id="email" placeholder="Enter your Email" required />
        <p class="error-msg" id="emailErrMsg"></p>
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
        <input type="text" class="form-control w-50" id="phone" placeholder="Enter your Phone Number" required />
      </div>
      <button class="btn btn-primary" onclick="submitBtn()">Submit</button>
    </form>
  </div>

  <?php include "footer.php" ?>

  <script>
    function submitBtn() {
      alert("Message Sent Successfully!");
    };
  </script>
</body>

</html>