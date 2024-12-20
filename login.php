<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <?php include "includes/head_links.php" ?>
</head>

<body class="bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-screen">
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <a class="navbar-brand" href="index.php">
                    <img class="w-16 cursor-pointer" src="https://www.carehospitals.com/assets/images/cares-logo.webp"
                        alt="logo">
                </a>
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-500 no-underline hover:no-underline" href="doctor.php">
                            <i class="fa-solid fa-user-doctor"></i> Doctors
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 no-underline hover:no-underline" href="specialities.php">
                            <i class="fa-solid fa-stethoscope"></i> Specialities & Treatments
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 no-underline hover:no-underline" href="hospitals.php">
                            <i class="fa-solid fa-map-pin"></i> Hospitals & Directions
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 no-underline hover:no-underline" href="appointment.php">
                            <i class="fa-solid fa-calendar-days"></i> Book an Appointment
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 no-underline hover:no-underline" href="contact.php">
                            <i class="fa-solid fa-address-book"></i> Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="w-full h-[30rem] relative overflow-hidden top-20">
        <div id="sign_up_block"
            class="absolute flex items-center justify-center flex-row-reverse w-full h-[30rem] right-[0%] transition-all duration-500">
            <div id="width-70vw"
                class="shadow-box-right h-full sm:m-0 p-5 sm:p-10 bg-[#5A77DF] w-[60vw] sm:w-auto rounded-2xl">
                <h2 class="font-bold text-4xl text-[#110042] text-center" id="heading-375">Signup</h2>
                <p class="font-light text-base sm:text-lg mt-2 text-white text-center">Enter your details to create your
                    account</p>
                <form action="" class="flex flex-col gap-4" id="Signup">
                    <input class="px-3 py-1 text-sm mt-8 rounded-full border outline-none" required type="text"
                        name="suser" id="sname" placeholder="Username">
                    <input class="px-3 py-1 text-sm rounded-full border outline-none" required type="text"
                        name="srnumber" id="redg" placeholder="number">
                    <input class="px-3 py-1 text-sm rounded-full border outline-none" required type="email"
                        name="semail" id="semail" placeholder="Email">
                    <input class="px-3 py-1 text-sm rounded-full border outline-none" required type="password"
                        name="spass" id="spassword" placeholder="Password">
                    <div class="flex items-center justify-end">
                        <input type="checkbox" class="mx-2" name="show" id="show" onclick="sclicked()">
                        <p class="text-sm text-white">Show password</p>
                    </div>
                    <div class="flex items-center justify-start ml-2 text-[0.8rem] sm:text-[1rem] text-white">
                        <p class="text-center font-bold">Already have an account? <a
                                class="text-[#FFE500] text-[0.65rem] hover:cursor-pointer" id="tologin">LOGIN</a></p>
                    </div>
                    <div class="mt-2">
                        <button id="signup" type="submit"
                            class="relative inline-flex items-center px-10 py-1.5 rounded-full overflow-hidden text-lg font-medium text-white group bg-[#110042]">
                            <span
                                class="absolute left-0 block w-full h-0 transition-all bg-gradient-to-tr from-indigo-900 via-blue-900 to-indigo-900 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                            <span
                                class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                                <svg class="w-4 h-4 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                            <span class="relative text-sm font-bold hover:-ml-3 duration-300 transition-all">SIGN
                                UP</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div id="login_block"
            class="absolute flex items-center justify-center w-full h-[30rem] left-[100%] transition-all duration-500">
            <div id="width-70vw"
                class="shadow-box-left h-full sm:m-0 p-5 sm:p-10 bg-[#5A77DF] w-[60vw] sm:w-auto rounded-2xl">
                <h2 class="font-bold text-4xl text-[#110042] mt-10 text-center" id="heading-375">Login</h2>
                <p class="font-light text-base sm:text-lg mt-2 text-white text-center">Enter your account details</p>
                <form action="" class="flex flex-col gap-4" id="Login">
                    <input class="px-3 py-1 mt-8 rounded-full outline-none" required type="text" name="luser" id="lname"
                        placeholder="Username">
                    <input class="px-3 py-1 rounded-full outline-none" required type="password" name="lpass"
                        id="lpassword" placeholder="Password">
                    <div class="flex items-center justify-end">
                        <input type="checkbox" class="mx-2" name="show" id="show" onclick="lclicked()">
                        <p class="text-sm text-white">Show password</p>
                    </div>
                    <div class="flex items-center justify-center text-[0.8rem] sm:text-[1rem] text-white">
                        <p class="text-center font-bold">Didn't have an account? <a
                                class="text-[#FFE500] text-[0.65rem] hover:cursor-pointer" id="tosignup">SIGN UP</a></p>
                    </div>
                    <div class="mt-2">
                        <button id="login" type="submit"
                            class="relative inline-flex items-center px-10 py-1.5 rounded-full overflow-hidden text-lg font-medium text-white group bg-[#110042]">
                            <span
                                class="absolute left-0 block w-full h-0 transition-all bg-gradient-to-tr from-indigo-900 via-blue-900 to-indigo-900 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                            <span
                                class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                                <svg class="w-4 h-4 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                            <span
                                class="relative text-sm font-bold hover:-ml-3 duration-300 transition-all">LOGIN</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <?php include "footer.php" ?>
</body>
<script>
    const navLinks = document.querySelector('.nav-links')
    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }

    function lclicked() {
        var x = document.getElementById("lpassword");
        code(x);
    }

    function sclicked() {
        var x = document.getElementById("spassword");
        code(x);
    }

    function code(x) {
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    var login = document.getElementById("Login");
    var signup = document.getElementById("Signup");
    //creating firebase config, directly copying and pasting from firebase console...
    const firebaseConfig = {
        apiKey: "AIzaSyB8aDyS4uVLsHzwUZCIrOOC7DgnBATD1_0",
        authDomain: "flybuy-9be59.firebaseapp.com",
        databaseURL: "https://flybuy-9be59-default-rtdb.firebaseio.com",
        projectId: "flybuy-9be59",
        storageBucket: "flybuy-9be59.appspot.com",
        messagingSenderId: "867088170224",
        appId: "1:867088170224:web:dcb398b9259202c36a1635"
    };

    //initializing firebase database
    firebase.initializeApp(firebaseConfig);

    // adding evenlistner on cicking signup button
    signup.addEventListener('submit', (e) => {
        //removing default action of form - auto reloading
        e.preventDefault();
        //accessing values
        var name = document.getElementById('sname').value;
        var email = document.getElementById('semail').value;
        var pass = document.getElementById('spassword').value;
        var redg = document.getElementById("redg").value;
        //creating reference for the person details
        var details = firebase.database().ref("Info").child(name);
        //passing values to database 
        var ref = firebase.database().ref("Info");
        ref.on("value", function (data) {
            // accessing values inside "Info/<name>" object
            var Info = data.val();
            var keys = Object.keys(Info);
            if (!keys.includes(name)) {
                details.set({
                    name: name,
                    email: email,
                    password: pass,
                    number: redg,
                });
                //resetting the form after submitting
                window.alert("Signup success");
                signup.reset();

            } else {
                window.alert("User Already registered");
                signup.reset();
            }
        })
    })
    //function to check if user is already logged in or not
    login.addEventListener("submit", (e) => {
        e.preventDefault();
        var name = document.getElementById("lname").value;
        var lpass = document.getElementById("lpassword").value;
        //creating reference for data inside "Info" object
        var ref = firebase.database().ref("Info");
        ref.on("value", function (data) {
            //accessing values inside "Info/<name>" object
            var Info = data.val();
            var keys = Object.keys(Info);
            if (keys.includes(name) && Info[name]["password"] == lpass) {
                console.log("success")
                window.alert("login success");
                localStorage.setItem('user-name', name);
                localStorage.setItem('user-email', Info[name]["email"]);
                localStorage.setItem('user-number', Info[name]["number"]);
                window.location.assign("index.php");
                login.reset();
            } else {
                window.alert("Login Failed");
                login.reset();
            }
        })
    })

    var login_block = document.getElementById("login_block");
    var sign_up_block = document.getElementById("sign_up_block");
    var signup_btn = document.getElementById("tosignup");
    var login_btn = document.getElementById("tologin");

    signup_btn.addEventListener("click", () => {
        login_block.classList.replace("left-[0%]", "left-[100%]");
        sign_up_block.classList.replace("right-[100%]", "right-[0%]");
    })

    login_btn.addEventListener("click", () => {
        login_block.classList.replace("left-[100%]", "left-[0%]");
        sign_up_block.classList.replace("right-[0%]", "right-[100%]");
    })
</script>

</html>