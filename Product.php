<html>

<head>
    <link rel="shortcut icon" href="childs_image/shivom_logo_7V8_1.ico" />
    <title>S-trax One Step Towards Securing Generation</title>
    <link rel="stylesheet" href="myweb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.cycle.all.js" type="text/javascript"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <style>
        body {
            overflow-x: hidden;
            margin: 0;
            transition: background-color 0.5s ease-in-out;
        }

        ul {
            list-style-type: none;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .feature-title {
            font-size: 22px;
            color: white;
            background-color: gray;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
        }

        .li-items {
            background-color: #fff;
            border-radius: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: auto;
        }

        li:hover {
            background-color: #a5a4a4;
            color: white;
        }


        p {
            font-size: 1rem;
            margin-top: 1rem;
            line-height: 1.5;
        }

        .pg-ow {
            font-size: 18px;
            font-weight: bold;
        }

        .container6 {
            position: relative;
            top: 0;
            left: 0;
            flex-shrink: 1;
            height: 80vh;
            background-image: url('childs_image/TREE-BG-01.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 100%;
        }


        .heading {
            position: absolute;
            top: 20%;
            left: 10%;
            text-align: start;
            padding: 5rem;
        }

        @media (max-width: 1024px) {
            .heading {
                left: 1%;
            }
        }


        @media (max-width: 768px) {
            .heading {
                left: 1%;
            }
        }

        .heading h1 {
            color: gray;
            font-size: 60px;
            font-weight: bold;
        }

        .heading h3 {
            color: #333;
        }


        .container1 {
            width: 100dvw;
            overflow: hidden;
        }

        .car-animation {
            position: absolute;
            bottom: -37%;
            width: 20%;
            height: auto;
            animation: moveCar 20s linear infinite;
        }

        @keyframes moveCar {
            0% {
                left: -20%;
            }

            50% {
                left: 50%;
            }

            100% {
                left: 100%;
            }
        }

        .cycle-animation {
            position: absolute;
            bottom: -29%;
            width: 10%;
            height: 18%;
            animation: moveCycle 30s linear infinite;
        }

        @keyframes moveCycle {
            0% {
                left: -10%;
            }

            50% {
                left: 40%;
            }

            100% {
                left: 100%;
            }
        }

        .get-app {
            color: white;
            background-color: #f37d21;
            padding: 5px;
            border: none;
            border-radius: 5px;
        }

        .rounded-video {
            border-radius: 350px;
            margin: 100px;
            margin-top: 200px;
        }

        .logo-container {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .get-touch {
            background-color: #f37d21;
            border-radius: 10px;
            color: white;
            margin-left: 30px;
        }

        .logo.active {
            opacity: 1;
        }

        .footer-res {
            background-color: black;
            padding: 20px;
        }

        .footer-col {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            max-width: 500px;
        }

        .footer-title {
            font-size: 1.2vw;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .footer-link {
            color: #f37d21;
            text-decoration: none;
            padding-left: 3vw;
        }

        .footer-item {
            display: flex;
            align-items: center;
            margin-bottom: 1px;
            font-size: 1vw;
        }

        .footer-icon {
            margin-right: 10px;
            padding-bottom: 18px;
            font-size: 1vw;
        }

        .footer-sub-link {
            color: inherit;
            text-decoration: none;
            font-size: 1vw;
        }

        .footer-list {
            list-style: none;
        }

        @media (max-width: 768px) {
            .footer-col {
                align-items: center;
                text-align: center;
            }
        }

        #myHeader,
        .shree-group {
            background-color: transparent;
        }

        @media (max-width: 768px) {

            .car-animation,
            .cycle-animation {
                width: 15%;
            }
        }

        @media (max-width: 576px) {

            .car-animation,
            .cycle-animation {
                width: 10%;
            }
        }

        @media only screen and (min-width: 200px) and (max-width: 1025px) {
            .animation-section {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .hotel-img {
                margin-top: 200px;
            }

            .heading {
                text-align: center;
            }

            .container6 {
                background-size: cover;
                width: 100%;
                overflow: hidden;
            }

            .car-animation {
                bottom: -87%;
            }

            .cycle-animation {
                bottom: -90%;
            }
        }
    </style>
    <!-- Bootstrap CSS V4.5-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="d-flex flex-row justify-content-end  pt-3 pb-1">
        <!-- <img src="childs_image\shree-logo2.png" alt="shree-logo"/> -->
        <img src="childs_image/shree-logo-removebg-preview.png" alt="shree-logo" width="32px" height="30px" />
        <h1 class="shree-logo"><span class="shivom">SHIVOM</span> GROUP</h1>
    </div>
    <div class="header" id="myHeader">
        <?php include ('navbar.php'); ?>
    </div>
    <div class="mt-0 pt-0">
        <div class="btn-group d-flex flex-row justify-content-center pt-5 mt-0" role="group"
            aria-label="switch button group">
            <button type="button" class="active" id="Smart-team">Smart</button>
            <button type="button" class="" id="s-trax-team">S-trax</button>
        </div>

        <div class="smart active" id="smart-team-section">
            <div class="container6 m-0 p-0 color-div" data-color="fff8f3">
                <div class="row animation-section">
                    <div class="heading col-12 col-lg-6 col-sm-12 col-xs-12 ">
                        <h1>Ranked#1</h1>
                        <h3>
                            Special S-mart Feature > Totally <br>
                            Different from others > No worry to <br>
                            Vacant hostel/PG
                        </h3>
                    </div>
                    <div class="hotel-img col-12 col-lg-6 col-sm-12 col-xs-12 m-0 p-0">
                        <img src="childs_image/product-hotel.webp" alt="Hotel">
                </div>
                <img src="childs_image/car.gif" alt="Car" class="car-animation m-0 p-0">
                <img src="childs_image/cyclist.gif" alt="cycle" class="cycle-animation m-0 p-0">
            </div>
            </div>
            <div class="color-div" data-color="#E7AC7B">
            <div class="d-flex flex-row justify-content-end m-6">
                <button class="nav-item get-app" onclick="openInNewTab()">Get App</button>
            </div>
                <div>
                <p class="text-center pt-5" style="color:#b0751c">---
                    <span class="pg-ow"> How the app can benefit hostel and PG owners</span> ---
                </p>
                <h2 class="text-center mb-5">
                    Explore our <span style="color:#9e6818">S-mart Features</span>
                </h2>
            </div>
            </div>
            <div class="color-div" data-color="#E7AC7B">
                <ul class="flex flex-wrap justify-center pt-5 gap-5">
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="overflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\roomicon.png" alt="Room Seats Management" class="object-cover"
                                    height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">ROOM
                                SEATS MANAGEMENT</h5>
                            <p class=" text-sm leading-6">MANAGE YOUR ROOMS, SEATS, SERVICES, RECORDS & RENTS SMARTLY
                            </p>
                        </div>
                    </li>
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="overflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\registration.png" alt="Admissions &amp; Registration"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">
                                ADMISSIONS &amp; REGISTRATION</h5>
                            <p class="mt-1.5 text-sm leading-6">KEEP DIGITAL RECORDS OF TENANT, ALLOT SEATS/ROOM &amp;
                                MANAGE DIGITAL ADMISSION WITH ZERO PAPER WORK.</p>
                        </div>
                    </li>
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="moverflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\accountant.png" alt="S-Mart Digital Accountant"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">
                                S-MART
                                DIGITAL ACCOUNTANT</h5>
                            <p class="mt-1.5 text-sm leading-6">S-MART BILLING FOR RENT COLLECTION &amp; PAYMENTS, KEEP
                                RECORDS OF EXPENSE WITH CATEGORIES, &amp; PROFIT-LOSS REPORT</p>
                        </div>
                    </li>
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="overflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\team.png" alt="Multiple Users" class="object-cover"
                                    height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">
                                MULTIPLE
                                USERS</h5>
                            <p class="mt-1.5 text-sm leading-6">MANAGE YOUR BUSINESSES BY YOUR S-MART TEAM WORK, MAKE
                                ROLES
                                &amp; RESPONSIBILITIES.</p>
                        </div>
                    </li>
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="overflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\multiplebusiness.png" alt="One Dashboard for Multiple Businesses"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">ONE
                                DASHBOARD FOR MULTIPLE BUSINESSES.</h5>
                            <p class="mt-1.5 text-sm leading-6">CREATE MULTIPLE ACCOUNTS ON 1 S-MART APP.</p>
                        </div>
                    </li>
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="overflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\businessplatform.png" alt="Online Business Platform"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">
                                ONLINE
                                BUNSINESS PLATFORM</h5>
                            <p class="mt-1.5 text-sm leading-6">MARKET YOUR S-MART PROPERTY ONLINE, GET MORE LEADS &amp;
                                CONVERT LEADS INTO TENANT MORE FASTER</p>
                        </div>
                    </li>
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="overflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\smartapp.png" alt="Special S-Mart Features" class="object-cover"
                                    height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">
                                SPECIAL
                                S-MART FEATURES</h5>
                            <p class="mt-1.5 text-sm leading-6">MANAGE: FOOD MENU, CUSTOM SALES, MONTHLY REPORTS, OFFERS
                                ZONE, NOTIFY ON WHATSAPP, TENANT NOTICE, COMPLAINT &amp; LEADS</p>
                        </div>
                    </li>
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="overflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\differentfromothers.png" alt="Different from Others"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">
                                DIFFERENT
                                FROM OTHERS</h5>
                            <p class="mt-1.5 text-sm leading-6">MANAGE; KITCHEN STOCKS, EMPLOYEE ATTENDANCE &amp;
                                SALARY,
                                ELECTRICITY BILL AND SMART TENANT &amp; EMPLOYEE VERIFICATION</p>
                        </div>
                    </li>
                    <li class="li-items col-12 col-xl-3 col-lg-3">
                        <div class="text-center">
                            <div class="overflow-hidden d-flex flex-row justify-content-center">
                                <img src="childs_image\tenantapp.png" alt="S-Mart Tenant App" class="object-cover"
                                    height="150px" width="150px">
                            </div>
                            <h5 class="my-3 font-display text-lg text-black font-black" style="font-weight: bold;">
                                S-MART
                                TENANT APP</h5>
                            <p class="mt-1.5 text-sm leading-6">FOR TRANSPARENCY, EASY RECORDS AND HASSLE FREE
                                COMMUNICATION.</p>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="scroll-container top-0 m-0 p-0 color-div" data-color="#b35d59">
                <div class=" col-12 col-lg-12 scroll-wrapper">
                    <div class=" scroll-item" style="color:white ">

                        <div class="text-center relative">
                            <div style="padding-left:35%">
                                <img src="childs_image/roomicon.png" alt="Room Seats Management" class="object-cover"
                                    height="150px" width="150px">
                            </div>
                            <div>
                                <h1 class="text-animation text-center font-medium text-4xl uppercase pb-3">
                                    ROOM SEAT MANAGEMENT
                                </h1>
                            </div>
                            <div class="ml-6">
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Manage rooms according to their seats:</h3>
                                    <p class="text-sm">Make your room platform according to their seating capacity &
                                        their type</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Track occupancy and availability</h3>
                                    <p class="text-sm">No waste of time to identify how many seats are available</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Easy room and bed booking</h3>
                                    <p class="text-sm">20 seconds is enough to allot a room and seat for your tenant</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Manage room rent</h3>
                                    <p class="text-sm">Fix room rent according to room type and seating capacity
                                        separately</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Add, remove & update</h3>
                                    <p class="text-sm">Add room, remove room, and update their seating capacity and rent
                                        easily</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video height="100" width="600" autoplay muted class="object-cover rounded-video"
                        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(0.8091, 0.8091); opacity: 0.8091;">
                        <source src="childs_image/ok.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-12 col-lg-12 scroll-wrapper ">
                    <div class="scroll-item" style="color:white">
                        <div class="text-center relative md:mx-20 my-4">
                            <div style="padding-left:35%">
                                <img src="childs_image\registration.png" alt="Room Seats Management"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <div class="fromLeft">
                                <div class="mt-[7rem]  ">
                                    <h1 class="text-animation text-center font-medium text-4xl uppercase pb-3 ">
                                        Admission and Registration
                                    </h1>
                                </div>
                            </div>
                            <div class="ml-6 ">
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">E-Registration system:</h3>
                                    <p class=" text-sm">Efficiently manage admissions and registrations through our<br>
                                        S-mart digital platform, saving valuable time</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">All detail in one place</h3>
                                    <p class=" text-sm">Access all tenant details in one convenient location, including
                                        registration<br> forms and essential documents.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Streamline booking process</h3>
                                    <p class=" text-sm">Facilitate hassle-free bookings with intuitive
                                        functionality,<br> enhancing operational efficiency.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Save data for lifetime</h3>
                                    <p class=" text-sm">No trouble to find leaved tenant detail. Also restore
                                        admission<br> when they again back to you.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Switch room-seat</h3>
                                    <p class=" text-sm">Switch tenant to other room/seat without change their
                                        <br>registration, also track modified history
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video height="100" width="600" autoplay muted class="object-cover rounded-video"
                        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(0.8091, 0.8091); opacity: 0.8091;">
                        <source src="childs_image/ok.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-12 col-lg-12 scroll-wrapper ">
                    <div class="scroll-item" style="color:white">
                        <div class="text-center relative md:mx-20 my-4">
                            <div style="padding-left:35%">
                                <img src="childs_image\accountant.png" alt="Room Seats Management" class="object-cover"
                                    height="150px" width="150px">
                            </div>
                            <div class="fromLeft">
                                <div class="mt-[7rem]">
                                    <h1 class="text-animation text-center font-medium text-4xl uppercase pb-3">
                                        SMART DIGITAL ACCOUNT
                                    </h1>
                                </div>
                            </div>
                            <div class="ml-6">
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">S-mart's sales manager</h3>
                                    <p class="text-sm">Streamlines rent collection effortlessly through an advanced auto
                                        billing <br>system, minimizing administrative burdens</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Our platform facilitates seamless sharing</h3>
                                    <p class="text-sm">Allowing users to easily distribute billing, reports, statements,
                                        and payment<br> reminders via WhatsApp and our dedicated app.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">With S-mart's Expense Manager</h3>
                                    <p class="text-sm">Tracking, creating, updating, and deleting expenses is
                                        simplified, with<br> categorization for enhanced organization.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Accessing accountant reports is efficient</h3>
                                    <p class="text-sm">Enabling users to filter, track, and download monthly sales and
                                        expense reports<br> for informed financial decision-making.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">The S-mart audit system</h3>
                                    <p class="text-sm">Manages monthly profit and loss, comprehensive records on a
                                        monthly,<br> quarterly, and yearly basis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video height="100" width="600" autoplay muted class="object-cover rounded-video"
                        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(0.8091, 0.8091); opacity: 0.8091;">
                        <source src="childs_image/ok.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-12 col-lg-12 scroll-wrapper ">
                    <div class="scroll-item" style="color:white">
                        <div class="text-center relative md:mx-20 my-4">
                            <div style="padding-left:35%">
                                <img src="childs_image\team.png" alt="Room Seats Management" class="object-cover"
                                    height="150px" width="150px">
                            </div>
                            <div class="fromLeft">
                                <div class="mt-[7rem]">
                                    <h1 class="text-animation text-center font-medium text-4xl uppercase pb-3">
                                        MULTIPLE USER
                                    </h1>
                                </div>
                            </div>
                            <div class="ml-6">
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">S-Mart Team with Role Flexibility</h3>
                                    <p class="text-sm">S-Mart Team with Role Flexibility. Empower the S-Mart manager to
                                        assign <br>roles for
                                        seamless business management. Grant permissions to key staff <br>like managers,
                                        wardens, and kitchen masters.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Effortless Employee Roles</h3>
                                    <p class="text-sm">Assign clear roles during employee registration, simplifying
                                        record-keeping</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Simple Role Management</h3>
                                    <p class="text-sm">Easily add, remove, or update user roles</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Multi-Role Access for Multiple Businesses</h3>
                                    <p class="text-sm">Allow multi-role access across businesses.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Detailed User Logs</h3>
                                    <p class="text-sm">Keep track of user activities for insightful progress reports</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video height="100" width="600" autoplay muted class="object-cover rounded-video"
                        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(0.8091, 0.8091); opacity: 0.8091;">
                        <source src="childs_image/ok.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-12 col-lg-12 scroll-wrapper ">
                    <div class="scroll-item" style="color:white">
                        <div class="text-center relative md:mx-20 my-4">
                            <div style="padding-left:35%">
                                <img src="childs_image\multiplebusiness.png" alt="Room Seats Management"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <div class="fromLeft">
                                <div class="mt-[7rem]">
                                    <h1 class="text-animation text-center font-medium text-4xl uppercase pb-3">
                                        ONE DASHBOARD FOR
                                        MULTIPLE BUSINESS
                                    </h1>
                                </div>
                            </div>
                            <div class="ml-6">
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Unified Management:</h3>
                                    <p class="text-sm">Oversee multiple businesses from one dashboard with S-mart.<br>
                                        No more juggling platforms</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Streamlined Operations:</h3>
                                    <p class="text-sm">Consolidate sales, expenses, and audits into a single
                                        location.<br> Simplify workflows.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Customized Access:</h3>
                                    <p class="text-sm">Grant tailored permissions to team members for each business.<br>
                                        Efficient delegation.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Comprehensive Reporting:</h3>
                                    <p class="text-sm">Access detailed reports for each business or generate
                                        cross<br>business insights easily.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Seamless Integration:</h3>
                                    <p class="text-sm">Integrate with existing systems smoothly. Experience cohesion<br>
                                        across all businesses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video height="100" width="600" autoplay muted class="object-cover rounded-video"
                        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(0.8091, 0.8091); opacity: 0.8091;">
                        <source src="childs_image/ok.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-12 col-lg-12 scroll-wrapper ">
                    <div class="scroll-item" style="color:white">
                        <div class="text-center relative md:mx-20 my-4">
                            <div style="padding-left:35%">
                                <img src="childs_image\businessplatform.png" alt="Room Seats Management"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <div class="fromLeft">
                                <div class="mt-[7rem]">
                                    <h1 class="text-animation text-center font-medium text-4xl uppercase pb-3">
                                        ONLINE BUSINESS PLATFORM
                                    </h1>
                                </div>
                            </div>
                            <div class="ml-6">
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">User Profile Creation</h3>
                                    <p class="text-sm">Easily create an online business profile for your hostel or PG.
                                    </p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl"> Gallery & Amenities Listing</h3>
                                    <p class="text-sm">Showcase your property with a visually appealing gallery.
                                        Highlight your<br> amenities to attract potential tenants.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Online Marketing Tools</h3>
                                    <p class="text-sm">Boost your business online and reach a wider audience.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Offer Creation</h3>
                                    <p class="text-sm">Make special offers to attract and retain customers.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Search Functionality</h3>
                                    <p class="text-sm">Tenants can easily search for listed hostels or PGs from
                                        anywhere.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video height="100" width="600" autoplay muted class="object-cover rounded-video"
                        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(0.8091, 0.8091); opacity: 0.8091;">
                        <source src="childs_image/ok.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-12 col-lg-12 scroll-wrapper ">
                    <div class="scroll-item" style="color:white">
                        <div class="text-center relative md:mx-20 my-4">
                            <div style="padding-left:35%">
                                <img src="childs_image\smartapp.png" alt="Room Seats Management" class="object-cover"
                                    height="150px" width="150px">
                            </div>
                            <div class="fromLeft">
                                <div class="mt-[7rem]">
                                    <h1 class="text-animation text-center font-medium text-4xl uppercase pb-3">
                                        SPECIAL S-MART FEATURES
                                    </h1>
                                </div>
                            </div>
                            <div class="ml-6">
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Food Menu Management</h3>
                                    <p class="text-sm">Easily update and manage your food offerings. Easy and time
                                        saving</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl"> Custom Sales Tracking</h3>
                                    <p class="text-sm">Tailor sales data to your business needs. Boost your attached
                                        business</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Monthly Reports Generation</h3>
                                    <p class="text-sm">Access comprehensive reports for informed decision-making.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Offers Zone Integration & Notifications</h3>
                                    <p class="text-sm">Highlight special promotions to attract customers. Stay connected
                                        with<br> customers through whatsapp msg updates.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Tenant Management & CRM leads</h3>
                                    <p class="text-sm">Effectively communicate with tenants regarding notices, complaint
                                        and updates.<br>
                                        Monitor leads efficiently with S-mart lead manager no worry to vacant hostel/pg
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video height="100" width="600" autoplay muted class="object-cover rounded-video"
                        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(0.8091, 0.8091); opacity: 0.8091;">
                        <source src="childs_image/ok.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-12 col-lg-12 scroll-wrapper ">
                    <div class="scroll-item" style="color:white">
                        <div class="text-center relative md:mx-20 my-4">
                            <div style="padding-left:35%">
                                <img src="childs_image\differentfromothers.png" alt="Room Seats Management"
                                    class="object-cover" height="150px" width="150px">
                            </div>
                            <div class="fromLeft">
                                <div class="mt-[7rem]">
                                    <h1 class="text-animation text-center font-medium text-4xl uppercase pb-3">
                                        DIFFERENT FROM OTHERS
                                    </h1>
                                </div>
                            </div>
                            <div class="ml-6">
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Kitchen Stock Management</h3>
                                    <p class="text-sm">Efficiently track and manage your kitchen inventory.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Employee Management System</h3>
                                    <p class="text-sm">Streamline registration, attendance tracking, and automate salary
                                        processing.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Electricity Bill Management</h3>
                                    <p class="text-sm">Calculate, monitor, and manage electricity bills for individual
                                        tenants.</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Smart Tenant & Employee Verification</h3>
                                    <p class="text-sm">Implement secure and efficient verification processes for tenants
                                        and employees</p>
                                </div>
                                <div class="text-center md:w-[30rem] text-md px-7 py-1 rounded-lg font-semibold">
                                    <h3 class="text-xl">Distinct Features for Comprehensive Management</h3>
                                    <p class="text-sm">Set yourself apart with tailored features for holistic business
                                        management.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <video height="100" width="600" autoplay muted class="object-cover rounded-video"
                        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) scale(0.8091, 0.8091); opacity: 0.8091;">
                        <source src="childs_image/ok.mp4" type="video/mp4">
                    </video>
                </div>
            </div>


            <div class="color-div" data-color="#e7ac7b">
                <h1 class=" ml-5 pl-4 pt-2 pb-3"
                    style="font-size:22px;color:white; background-color:gray; height: auto; width: 200px;  border-radius:10px">
                    S-mart Features
                </h1>
                <div class=" container1 color-div" data-color="#e7ac7b">
                    <div class=" scroll-content2">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-mobile-retro text-warning custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                        style=" fill: #ffc107; " class=" icon-ll">
                                        <path
                                            d="M0 64C0 28.7 28.7 0 64 0H256c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm64 96v64c0 17.7 14.3 32 32 32H224c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H96c-17.7 0-32 14.3-32 32zM80 352a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm24 56a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zm56-56a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm24 56a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zm56-56a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm24 56a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM128 48c-8.8 0-16 7.2-16 16s7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H128z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-warning text-center">One App</h5>
                                <p class="text-center" style="font-size: 1rem;">To manage all your<br> business</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-file-lines text-secondary custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="fill: #6c757d;"
                                        class="icon-ll">
                                        <path
                                            d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-secondary text-center">Record</h5>
                                <p class="text-center" style="font-size: 1rem;">Digital manager for<br> tenant records
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-clipboard-user text-info custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                        style=" fill: #17a2b8; " class="icon-ll">
                                        <path
                                            d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM128 256a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM80 432c0-44.2 35.8-80 80-80h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-info text-center">Admission</h5>
                                <p class="text-center" style="font-size: 1rem;">Online & digital tenant<br> registration
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-money-check text-success custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="fill: #28a745;"
                                        class="icon-ll">
                                        <path
                                            d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm48 160H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zM96 336c0-8.8 7.2-16 16-16H464c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16zM376 160h80c13.3 0 24 10.7 24 24v48c0 13.3-10.7 24-24 24H376c-13.3 0-24-10.7-24-24V184c0-13.3 10.7-24 24-24z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-success text-center">Collection</h5>
                                <p class="text-center" style="font-size: 1rem;">Hassle free rent<br> collection</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-file-invoice text-secondary custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="fill: #6c757d;"
                                        class="icon-ll">
                                        <path
                                            d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-secondary text-center">Accountant</h5>
                                <p class="text-center" style="font-size: 1rem;">Smart account &<br>Digital accountant
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-users-gear text-warning custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                        style="fill: #ffc107;;" class="icon-ll">
                                        <path
                                            d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-warning text-center">Manager</h5>
                                <p class="text-center" style="font-size: 1rem;">Rooms, lead & <br>complaint manager</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-chalkboard-user text-primary custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="fill: #007bff;"
                                        class="icon-ll">
                                        <path
                                            d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-primary text-center">Tenant App</h5>
                                <p class="text-center" style="font-size: 1rem;">For transparent & <br>easy records</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-user-gear text-success custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="fill:#28a745;"
                                        class="icon-ll">
                                        <path
                                            d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-success text-center">Roles</h5>
                                <p class="text-center" style="font-size: 1rem;">Manage employee ,<br>Attendance, records
                                    <br> & roles
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-chart-simple text-info custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill: #17a2b8;"
                                        class="icon-ll">
                                        <path
                                            d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-info text-center">Audit</h5>
                                <p class="text-center" style="font-size: 1rem;">Smart Audit system<br> profit/loss
                                    records</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-calculator text-secondary custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                        style="fill: #6c757d; " class="icon-ll">
                                        <path
                                            d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-secondary text-center">Calculate</h5>
                                <p class="text-center" style="font-size: 1rem;">Calculate And Manage<br> electricity
                                    bill
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-file-shield text-info custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="fill: #17a2b8;"
                                        class="icon-ll">
                                        <path
                                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v47l-92.8 37.1c-21.3 8.5-35.2 29.1-35.2 52c0 56.6 18.9 148 94.2 208.3c-9 4.8-19.3 7.6-30.2 7.6H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm39.1 97.7c5.7-2.3 12.1-2.3 17.8 0l120 48C570 277.4 576 286.2 576 296c0 63.3-25.9 168.8-134.8 214.2c-5.9 2.5-12.6 2.5-18.5 0C313.9 464.8 288 359.3 288 296c0-9.8 6-18.6 15.1-22.3l120-48zM527.4 312L432 273.8V461.7c68.2-33 91.5-99 95.4-149.7z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-info text-center">Back-Up</h5>
                                <p class="text-center" style="font-size: 1rem;">Google cloud backup & <br>restore</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1 ml-2">
                                    <i class="fa-solid fa-bell text-success custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill:#28a745;"
                                        class="icon-ll">
                                        <path
                                            d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-success text-center">Reminder</h5>
                                <p class="text-center" style="font-size: 1rem;">Billing, updates & <br>collection
                                    reminder
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-1">
                                    <i class="fa-solid fa-file-invoice text-info custom-icon-class"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="fill: #17a2b8;"
                                        class="icon-ll">
                                        <path
                                            d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                    </svg>
                                </div>
                                <h5 class="card-title text-info text-center">Reports</h5>
                                <p class="text-center" style="font-size: 1rem;">Create expense & sale<br> Report</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col lg:flex-row pt-5 items-center justify-around rounded text-center p-2">
                        <div class="mb-4 font-bold text-lg">
                            IT'S TIME TO UPGRADE YOUR HOSTEL/PG INTO SMART HOSTEL PG
                            <h6 class="text-lg mb-4">Automate your operations, manage your Hostel/PGs business
                                efficiently,
                                and&nbsp;boost&nbsp;profits</h6>
                        </div>
                        <div class="max-w-sm flex items-center justify-center ">
                            <div class="flex shadow-sm ">
                                <div id="hs-trailing-button-add-on">
                                    <p class="text-lg pt-3 pl-3 pr-3 text-lg " style="color:orange;">Let's journey begin
                                    </p>
                                </div>
                                <button type="button" data-toggle="modal" data-target="#ContactForm"
                                    class="text-lg pl-3 pr-3"
                                    style="background-color:orange; color:white; display: flex; align-items: center;">
                                    Started
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        style="fill: white; width: 16px; height: 16px; margin-left: 8px;">
                                        <path
                                            d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="strax pt-1" id="s-trax-team-section" style="background-color: gray">
            <div id="slider" class="carousel slides pt-0 mt-0" data-bs-ride="carousel" data-interval="2000">
                <div class="carousel-inner pic-ctn ">
                    <div class="carousel-item active ">
                        <img src="childs_image/productimg1.jpg" width="100%" height="500px" class="pic" />
                    </div>
                    <div class="carousel-item">
                        <img src="childs_image/productimg2.jpg" width="100%" height="500px" class="pic" />
                    </div>
                    <div class="carousel-item">
                        <img src="childs_image/productimg3.jpg" width="100%" height="500px" class="pic" />
                    </div>
                    <div class="carousel-item">
                        <img src="childs_image/productimg4.jpg" width="100%" height="500px" class="pic" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="d-flex flex-row justify-content-end m-6">
                <button class="nav-item get-app">Get App</button>
            </div>
            <div id="ref1">
                <div class="bg2">
                    <div class="container0 p-5" style="padding-top: 60px;padding-bottom: 60px">
                        <div class="row">

                            <div class="col-md-5 col-xs-12 col-md-push-7">

                                <img id="Imagehome1" class="img-responsive" src="childs_image/S-Trax%20System.jpg"
                                    width="100%" height="400px">

                            </div>

                            <div class="col-md-7 col-md-pull-5" style="padding-left: 60px">
                                <div class="service-content">
                                    <p class="service-heading-content text-center" style="padding-top: 10%;">S-Trax
                                        Device</p>
                                    <p style="background-color: black;">
                                        S-Trax is a smart, small, and advance tracking device. It has capability to
                                        provide real time tracking of a person on the
                                        map. Apart from this, it can also capture the entry and exit of the person. It
                                        can be operated
                                        very easily with an App or a Web Browser.Through the S-Trax device you can keep
                                        track of your
                                        family, pets or what is most precious to you! S-Trax keeps you updated all the
                                        time. </p>
                                </div>
                                <div class="btn-container" style="padding-top: 30px">
                                    <button class="p-1" id="toggle">Read More</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="ref2">
                <div class="bg2">
                    <div class="container2 p-5" style="padding-top: 60px;padding-bottom: 60px">
                        <div class="row">

                            <div class="col-md-5 col-xs-12 col-md-push-7">

                                <img id="Imagehome1" class="img-responsive" src="childs_image/S-Trax%20Mobile%20app.jpg"
                                    width="100%" height="400px">

                            </div>

                            <div class="col-md-7 col-md-pull-5" style="padding-left: 60px">
                                <div class="service-content">
                                    <p class="service-heading-content text-center" style="padding-top: 15%;">S-Trax
                                        Mobile
                                        Application</p>
                                    <p style="background-color: black">It`s an advance and cool Android/Ios Application
                                        for live tracking of children. Apart from that this amazing
                                        App will also provide the Information of the Attendance, Homework, Report-Card,
                                        Fees-Status, and some
                                        other important Notifications/Messages of the students to their parent. This App
                                        is consist of a number
                                        of Quiz based fun games and tutorial which will improve the IQ power of the
                                        students.
                                    </p>
                                </div>
                                <div class="btn-container">
                                    <button class="p-1" id="toggle">Read More</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="ref3">
                <div class="bg2">
                    <div class="container3 p-5" style="padding-top: 60px;padding-bottom: 60px">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <img id="Imagehome1" class="img-responsive"
                                    src="childs_image/S-Trax%20digi%20management%20system.jpg" width="80%"
                                    height="400px">
                            </div>

                            <div class="col-md-6 col-md-pull-6" style="padding-left: 60px">
                                <p class="service-heading-content" style="padding-top: 20%;">S-Trax Digital Management
                                    System</p>
                                <div class="service-content">
                                    <p style="background-color: black">
                                        It is a Digital Information Management Base, Capable of handling huge and bulky
                                        data. It is specially designed for the organizations
                                        managing the huge volume of data on registers and files. It will completely
                                        automate the data
                                        management systems and make it easy to manage and store for the future
                                        perspectives. </p>
                                </div>
                                <div class="btn-container">
                                    <button class="p-1" id="toggle2">Read More</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="background-color: gray"
                class="bg-white flex flex-col lg:flex-row pt-5 items-center justify-around rounded text-center p-2">
                <div class="mb-4 font-bold text-lg">
                    IT'S TIME TO UPGRADE YOUR HOSTEL/PG INTO SMART HOSTEL PG
                    <h6 class="text-lg mb-4">Automate your operations, manage your Hostel/PGs business efficiently,
                        and&nbsp;boost&nbsp;profits</h6>
                </div>
                <div class="max-w-sm flex items-center justify-center ">
                    <div class="flex shadow-sm ">
                        <div id="hs-trailing-button-add-on">
                            <p class="text-lg pt-3 pl-3 pr-3 text-lg " style="color:orange;">Schedule a demo</p>
                        </div>
                        <button type="button" data-toggle="modal" data-target="#ContactForm" class="text-lg pl-3 pr-3"
                            style="background-color:orange; color:white; display: flex; align-items: center;">
                            Started
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                style="fill: white; width: 16px; height: 16px; margin-left: 8px;">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="color-div" data-color="gray">
        <div class="footer2" style="width: 100%">
            <div class="bgimg2">
                <div style="background-color: rgba(8, 8, 8, 1);">
                    <div
                        style="text-align:center; background-image: linear-gradient(gray, white); height: 70px; width: 100%; background-size: 100%; list-style-type: none; margin: 0; padding: 0;">
                        <ul id="horizontal-list"
                            style="list-style-type: none; margin: 0; padding: 0; overflow: hidden; display: flex; justify-content: center; align-items: center; height: 100%;">
                            <li style="padding-top: 2px; margin: 0 5px;">
                                <a href="https://www.facebook.com/ShivomSecuranation/" target="_blank">
                                    <img src="childs_image/fb.png" class="socialimg" style="display: inline;">
                                </a>
                            </li>
                            <li style="padding-top: 2px; margin: 0 5px;">
                                <a href="https://www.instagram.com/securanation/" target="_blank">
                                    <img src="childs_image/instagram%20icon.png" class="socialimg"
                                        style="display: inline;">
                                </a>
                            </li>
                            <li style="padding-top: 6px; margin: 0 5px;">
                                <a href="https://twitter.com/shivomsecurana2" target="_blank">
                                    <img src="childs_image/twitter%20icon.png" class="socialimg"
                                        style="display: inline;">
                                </a>
                            </li>
                            <li style="margin: 0 5px;">
                                <a href="https://www.linkedin.com/in/shivomsecuranation" target="_blank">
                                    <img src="childs_image/linked%20in.png" class="socialimg" style="display: inline;">
                                </a>
                            </li>
                            <li style="padding-top: 7px; margin: 0 5px;">
                                <a href="https://plus.google.com/u/0/114200475602279359366" target="_blank">
                                    <img src="childs_image/google%20plus.jpg.png" class="socialimg"
                                        style="display: inline;">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="row ">
                        <div class="col-12 pt-4 d-flex flex-wrap justify-content-around">
                            <div class="footer-col col-12 col-lg-3 col-xl-3 col-md-3 col-sm-3">
                                <div class="rounded mb-2 p-2 d-flex flex-column justify-content-center"
                                    style="background-color:gray">
                                    <div class="logo-container">
                                        <img src="childs_image/SHIVOM BUILDCON.png" alt="Logo 1" class="logo"
                                            id="logo1">
                                        <img src="childs_image/SHIVOM SECURANATION (1).png" alt="Logo 2" class="logo"
                                            id="logo2">
                                        <img src="childs_image/SHIVOM DREAM EARTH (1).png" alt="Logo 3" class="logo"
                                            id="logo3">
                                    </div>

                                    <a href="index.php">
                                        <h1 class="shree-logo"><span class="shivom">SHIVOM </span>
                                            <span style="color: white;">GROUP</span>
                                        </h1>
                                        </h1>
                                    </a>
                                    <div>
                                        <h1 class="footer-line">One Stop Solutions</h1>
                                        <button class="get-touch">Get in Touch</button>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-col col-12 col-lg-3 col-xl-3 col-md-3 col-sm-3">
                                <p class="footer-title"><a href="Contact.php" class="footer-link">CONTACT</a></p>
                                <div class="footer-item">
                                    <img src="childs_image/footerhouse.png" class="footer-icon">
                                    <p>B-33, 1st floor, Kasturba Nagar,<br>Near Chetak Bridge, Bhopal-462023</p>
                                </div>
                                <div class="footer-item">
                                    <img src="childs_image/footermail.png" class="footer-icon">
                                    <p>contact@shivomsecuranation.com</p>
                                </div>
                                <div class="footer-item">
                                    <img src="childs_image/footerphone.png" class="footer-icon">
                                    <p>0755-493-7957,<br> +91-77709-63303<br>91-76979-80782,<br> +91-90742-96461</p>
                                </div>
                            </div>
                            <div class="footer-col col-12 col-lg-3 col-xl-3 col-md-3 col-sm-3">
                                <p class="footer-title"><a href="Product.php" class="footer-link">PRODUCTS</a></p>
                                <div class="footer-item">
                                    <img src="childs_image/footer%20strax%20icon2%20.png" class="footer-icon">
                                    <p><a href="Product.php#ref1" class="footer-sub-link">S-TRAX Device</a></p>
                                </div>
                                <div class="footer-item">
                                    <img src="childs_image/footer%20strax%20icon.png" class="footer-icon">
                                    <p><a href="Product.php#ref2" class="footer-sub-link">S-TRAX Mobile Application</a>
                                    </p>
                                </div>
                                <div class="footer-item">
                                    <img src="childs_image/footer%20strax%20icon3.png" class="footer-icon">
                                    <p><a href="Product.php#ref3" class="footer-sub-link">Digital Management System</a>
                                    </p>
                                </div>
                            </div>
                            <div class="footer-col col-12 col-lg-3 col-xl-3 col-md-3 col-sm-3">
                                <p class="footer-title"><a href="Service.php" class="footer-link">SERVICES</a></p>
                                <p><a href="Service.php#ref1" class="footer-sub-link">Child And Women Safety System</a>
                                </p>
                                <p><a href="Service.php#ref2" class="footer-sub-link">School Student Tracking System</a>
                                </p>
                                <p><a href="Service.php#ref3" class="footer-sub-link">Organizational Data Management
                                        System</a></p>
                                <p><a href="Service.php#ref4" class="footer-sub-link">Digital Tracking and Attendance
                                        System</a></p>
                                <p><a href="Service.php#ref5" class="footer-sub-link">Vehicle Tracking System</a></p>
                                <p><a href="Service.php#ref6" class="footer-sub-link">Animal Tracking System</a></p>
                                <p><a href="Service.php#ref7" class="footer-sub-link">Website and development</a></p>
                            </div>
                        </div>
                    </div>
                    <div style="padding-top: 25px;  padding-bottom: 5px;">
                        <p style="text-align:center;   font-size: 1vw;padding-bottom: 0">Copyright © 2024 Shivom
                            Technologies Pvt.Ltd. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        const smartButton = document.getElementById('Smart-team');
        const straxButton = document.getElementById('s-trax-team');
        const smartSection = document.getElementById('smart-team-section');
        const straxSection = document.getElementById('s-trax-team-section');

        function showsmartTeam() {
            smartButton.classList.add('active');
            straxButton.classList.remove('active');
            smartSection.classList.add('active');
            straxSection.classList.remove('active');
        }

        function showstraxTeam() {
            smartButton.classList.remove('active');
            straxButton.classList.add('active');
            smartSection.classList.remove('active');
            straxSection.classList.add('active');
        }

        smartButton.addEventListener('click', showsmartTeam);
        straxButton.addEventListener('click', showstraxTeam);
        showsmartTeam();
    </script>
    <script src="https://kit.fontawesome.com/bcdbbf99ae.js" crossorigin="anonymous"></script>
    <!-- <script>
        document.querySelector('.scroll-container').addEventListener('wheel', (evt) => {
            evt.preventDefault();
            document.querySelector('.scroll-container').scrollLeft += evt.deltaY;
        });
    </script> -->
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const container = document.querySelector('.scroll-container');

            container.addEventListener('wheel', (evt) => {
            const maxScrollLeft = container.scrollWidth - container.clientWidth;

            if ((container.scrollLeft === 0 && evt.deltaY < 0) || (container.scrollLeft === maxScrollLeft && evt.deltaY > 0)) {
                return;
            }
            evt.preventDefault();
            container.scrollLeft += evt.deltaY;
        });

            let startX;
            let startY;
            let scrollLeft;

            container.addEventListener('touchstart', (evt) => {
                startX = evt.touches[0].pageX - container.offsetLeft;
                startY = evt.touches[0].pageY - container.offsetTop;
                scrollLeft = container.scrollLeft;
            });

            container.addEventListener('touchmove', (evt) => {
                evt.preventDefault();
                const x = evt.touches[0].pageX - container.offsetLeft;
                const y = evt.touches[0].pageY - container.offsetTop;
                const deltaX = x - startX;
                const deltaY = y - startY;

                // If swipe is more vertical than horizontal
                if (Math.abs(deltaY) > Math.abs(deltaX)) {
                    container.scrollLeft = scrollLeft - deltaY;
                }
            });
        });
    </script>


    <script>
        $(document).ready(function () {
            var path = window.location.pathname.split("/").pop();

            $('.navbar-nav a').each(function () {
                var href = $(this).attr('href');

                if (path === href) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });
        });
    </script>

    <script>
        let currentIndex = 0;
        const logos = document.querySelectorAll('.logo');

        function changeLogo() {
            logos[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % logos.length;
            logos[currentIndex].classList.add('active');
        }

        setInterval(changeLogo, 3000);
        logos[currentIndex].classList.add('active');

    </script>

    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
        $(document).ready(function () {
            console.log($('#slider'))
            $('#slider').cycle({
                fx: 'scrollLeft',
                speed: 1000,
                timeout: 100,
                pause: 1
            });
        });
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "   "
                },
                axisY: {
                    title: "Number of Crimes ",
                    lineColor: "#369EAD",
                },
                axisX: {
                    title: "Years",
                    lineColor: "#369EAD",
                },
                data: [{
                    axisXIndex: 1,
                    type: "line",
                    dataPoints: [
                        { x: 2010 },
                        { x: 2011, y: 8115, indexLabel: "lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
                        { x: 2012, y: 10373 },
                        { x: 2013, y: 11963 },
                        { x: 2014, y: 14131 },
                        { x: 2015, y: 13921 },
                        { x: 2016, y: 15572 },
                        { x: 2017, y: 16830, indexLabel: "highest", markerColor: "red", markerType: "triangle" },
                    ]
                }]
            });
            chart.render();
        }
    </script>
    <script>
        function openInNewTab() {
            window.open("https://pg-swart.vercel.app/", "_blank");
        }
    </script>
    <script>
        const divs = document.querySelectorAll('.color-div');

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        };

        const observerCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    document.body.style.backgroundColor = entry.target.getAttribute('data-color');
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        divs.forEach(div => {
            observer.observe(div);
        });

    </script>

</body>

</html>