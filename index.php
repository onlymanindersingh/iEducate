<?php
    $db = mysqli_connect("localhost", "root", "", "ieducate");

    if(isset($_POST['enrollNow'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $mobilenumber = $_POST['mobilenumber'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        $sql = "INSERT INTO `enroll_users` (`firstname`, `lastname`, `mobilenumber`, `email`, `course`) VALUES ('$firstname','$lastname','$mobilenumber','$email','$course')";
        $res = mysqli_query($db, $sql);
        if($res){
            echo "<script>alert('Enrolled Successfully')</script>";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- <link rel="stylesheet" href="login.css"> -->
        <!-- <link rel="stylesheet" href="login.html"> -->
        <title>iEducate - Transforming Online Education</title>
    </head>

    <body>
        <nav class="navbar background h-nav-resp">
            <ul class="nav-list v-class-resp">
                <div class="logo"><img src="img/logo1.jpg.png" alt="logo"> </div>
                <li> <a href="#home"> Home</a></li>
                <li> <a href="#courses"> Courses</a></li>
                <li> <a href="login.html"> Login</a></li>
                <li> <a href="dashboard.html"> Dashboard</a></li>
                <li> <a href="about.html"> About</a></li>

            </ul>
            <div class="rightNav v-class-resp">
                <input type="text" name="search" id="search" placeholder="search here">
                <button class="btn btn-sm">Search</button>
            </div>

            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>

        <section class="background firstSection" id="home">
            <div class="box-main">
                <div class="firstHalf">
                    <p class="text-big">The future of education is here</p>
                    <p class="text-small">In this world of 7 billon people we need to educate all of them.</p>

                    <div class="buttons">
                        <button class="btn">Subscribe</button>
                        <button class="btn">Watch Video</button>
                    </div>
                </div>
                <div class="secondHalf">
                    <!-- <img src="img/o1.jpg" alt="Laptop Image"> -->
                    <h3 align="center" class="sectionTag text-big">Courses Enroll Here</h3>
                    <form method="post" action="#">
                        <label>First Name:</label>
                        <input type="text" name="firstname"><br>
                        <label>Last Name:</label>
                        <input type="text" name="lastname"><br>
                        <label>Mobile Number:</label>
                        <input type="number" name="mobilenumber"><br>
                        <label>email:</label>
                        <input type="email" name="email"><br><br>

                        <select name="course" id="courses">
                        <option value="courses">Select your course</option>
                        <option value="webdevelopment">Web Development</option>
                        <option value="python">Python</option>
                        <option value="react">React</option>
                    </select><br><br>
                        <button type="submit" name="enrollNow" class="btn btn-primary">Submit</button>
                    </form>



                </div>
            </div>
        </section>
        <div>
            <p align="center " class="course-heading ">Online Tranings We Offer</p>
        </div>

        <section class="section " id="Courses ">
            <div class="parah1 ">
                <h3 class="sectionTag text-big ">Full Stack Web Development </h3>
                <div class="web-intro ">
                    <h2 class="sectionSubTag text-small ">Build awesome websites</h2>
                    <p>Mark Zuckerberg built Facebook. Sachin Bansal built Flipkart. What will you build?</p>
                    <h2 class="sectionSubTag text-small ">Be in demand</h2>
                    <p>With 1.7 billion websites on the internet, it is one of the hottest career options with an average fresher salary of 6 LPA for full stack developers according to Glassdoor.</p>
                    <h2 class="sectionSubTag text-small ">Eat-Sleep-Code-Repeat</h2>
                    <p>Be it rain or sunshine, coding is always on your mind.</p>
                </div>

            </div>
            <div class="thumbnail ">
                <img src="img/webDev.jpg" alt="laptop Image " class="imgFluid ">
            </div>

        </section>

        <section class="section section-left ">
            <div class="parah2 ">
                <h3 class="sectionTag text-big ">Programming with python</h3>
                <div class="python-intro ">
                    <h2 class="sectionSubTag text-small ">Versatility</h2>
                    <p>Machine Learning, AI, Web Development, Hacking, IoT, and more. Python is used everywhere.</p>
                    <h2 class="sectionSubTag text-small ">Beginner friendly</h2>
                    <p>A simple and powerful syntax makes Python one of the easiest languages to learn.</p>
                    <h2 class="sectionSubTag text-small ">Be in demand</h2>
                    <p>Python is the fastest growing language according to Stack Overflow with an average fresher salary of 5 LPA+ according to Glassdoor.</p>
                </div>
            </div>
            <div class="thumbnail ">
                <img src="img/python.png" alt="laptop Image " class="imgFluid ">
            </div>

        </section>

        <section class="section ">
            <div class="parah3 ">
                <h3 class="sectionTag text-big ">React</h3>
                <div class="react-intro ">
                    <h2 class="sectionSubTag text-small ">The front-end powerhouse</h2>
                    <p>Efficient, flexible, and impactful; React is every developer's go-to choice for front end development.</p>
                    <h2 class="sectionSubTag text-small ">Powerful community</h2>
                    <p>Want to know the best practices, latest developments or fixes for your code? Millions of developers are there to help you out!</p>
                    <h2 class="sectionSubTag text-small ">Be in demand</h2>
                    <p>Facebook, Netflix, Instagram, and many other companies, big and small, prefer React. Need we say more?</p>

                </div>
            </div>
            <div class="thumbnail ">
                <img src="img/react.png" alt="laptop Image " class="imgFluid ">
            </div>

        </section>

        <section class="contact " id="contact ">
            <h2 class="text-center ">Contact Us</h2>
            <div class="form ">
                <input class="form-input " type="text " name="name " id="name " placeholder="Enter Your name ">
                <input class="form-input " type="text " name="phone " id="phone " placeholder="Enter Your Phone ">
                <input class="form-input " type="email " name="email " id="name " placeholder="Enter Your @email ">
                <textarea class="form-input " name="text " id="text " cols="30 " rows="10 " placeholder="Ellaborate your concern "></textarea>
                <button class="btn btn-dark ">submit</button>

            </div>
        </section>

        <footer class="background ">
            <p class="text-footer ">
                Copyright &copy; 2022 iEducate.com - All rights reserved
            </p>
        </footer>
        <script src="js/resp.js "></script>

    </body>

    </html>