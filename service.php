<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEDINOVA - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   

<?php include 'include/nav.php';
include 'include/database.php';

 
?>
   
    

    <!-- Services Start -->
    <div class="container-fluid py-5  ">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Excellent Medical Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3">Emergency Care</h4>
                        <p class="m-0">Our emergency care services are designed to provide immediate and life-saving medical assistance when time is of the essence</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-procedures text-white"></i>
                        </div>
                        <h4 class="mb-3">Operation & Surgery</h4>
                        <p class="m-0">Our operation and surgery services are delivered with the highest level of precision, expertise, and patient-centered care</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-stethoscope text-white"></i>
                        </div>
                        <h4 class="mb-3">Outdoor Checkup</h4>
                        <p class="m-0">Our outdoor checkup services are designed to provide convenient and accessible healthcare options for individuals seeking routine medical examinations and preventive care</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-ambulance text-white"></i>
                        </div>
                        <h4 class="mb-3">Ambulance Service</h4>
                        <p class="m-0">Our ambulance service is a vital component of our commitment to providing comprehensive and timely healthcare solutions</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-pills text-white"></i>
                        </div>
                        <h4 class="mb-3">Medicine & Pharmacy</h4>
                        <p class="m-0">Our medicine and pharmacy services are designed to provide convenient access to a wide range of pharmaceutical products and expert guidance on medication management</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-microscope text-white"></i>
                        </div>
                        <h4 class="mb-3">Blood Testing</h4>
                        <p class="m-0">Our blood testing services are designed to provide accurate and comprehensive insights into your overall health and well-being</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="mb-5">Take charge of your health and make an appointment on our medical website today. Our
                        expert medical professionals are ready to provide you with exceptional care and personalized
                        attention. With convenient online booking, you can easily secure your appointment without the
                        hassle. Experience timely and efficient care, comprehensive medical services, and a
                        patient-centric approach that puts your well-being first. Don't wait any longer – prioritize
                        your health and schedule your appointment now</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="search.php">Find Doctor</a>
                    <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a>
                </div>
                <div class="col-lg-6">
                 
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <?php
                        $query = "SELECT * FROM categorie";
                        $result = $mysqli->query($query);
                        $categories = array();
                        while ($row = $result->fetch_assoc()) {
                            $categories[] = $row;
                        }
                        $result->free();
                        // Utilisation du tableau $categories contenant les données récupérées
                        // Fermeture de la connexion
                        ?>
                        <form method="post" action="insert3.php">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select id="categorie" class="form-select bg-white border-0" style="height: 55px;"
                                        name="id_departement" onchange='detectChange()'>
                                    
                                        <?php
                                        echo '<option value = test test> choose Departement </option> ';
                                        foreach ($categories as $categorie) {
                                            echo "<option value='" . $categorie['idcat'] . "'>" . $categorie['libelle'] . "</option>";
                                            /* var_dump($categorie['idcat']); */
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                
                                    <select id= "id_doctor" class="form-select bg-white border-0" style="height: 55px;"
                                        name="id_doctor">
                                
                                        <option selected>Select Doctor</option>
                                        <?php
                                        echo "test here";
                                        $query = "SELECT * FROM medecin";
                                        $result = $mysqli->query($query);
                                        $doctors = array();
                                        while ($row = $result->fetch_assoc()) {
                                            $doctors[] = $row;
                                        }
                                        
                                        $result->free();
                                        foreach ($doctors as $doctor) {
                                            echo "<option value='" . $doctor['id'] . "'>" . $doctor['libelle'] . "</option>";
                                            
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name"
                                        style="height: 55px;" name="patient_name">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Your Email"
                                        style="height: 55px;" name="patient_mail">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker"
                                            style="height: 55px;" name="date">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Time" data-target="#time" data-toggle="datetimepicker"
                                            style="height: 55px;" name="time">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <?php
                                    if (isset($_POST['appoint'])) {
                                        $name = $_POST['patient_name'];
                                        $email = $_POST['patient_mail'];
                                        $iddoc = $_POST['id_doctor'];
                                        $iddepart = $_POST['id_departement'];
                                        $date = date('Y-m-d');
                                        $time = time();

                                        if (!empty($name) && !empty($email) && !empty($iddoc) && !empty($iddepart) && !empty($date) && !empty($time)) {
                                            $mysqli = new mysqli('localhost', 'root', '', 'miniprojet');

                                            if ($mysqli->connect_errno) {
                                                echo "Échec de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                                                exit;
                                            }

                                            $stmt = $mysqli->prepare('INSERT INTO appointement VALUES(null,?,?,?,?,?,?)');
                                            $stmt->bind_param('', $name, $email, $iddoc, $iddepart, $date, $time);

                                            $stmt->execute();

                                            // Redirection
                                            header('location:index.php');
                                            exit;

                                            $stmt->close();
                                            $mysqli->close();

                                        } else {
                                            ?>
                                            <div class="alert alert-danger" role="alert">
                                                tout les champs sont obligatoires.
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>

                                    <input type="submit" class="btn btn-primary w-100 py-3" value="Make An Appointment "
                                        name="appoint"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Testimonial</h5>
                <h1 class="display-4">Patients Say About Our Services</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">I was impressed by the website's user-friendly interface and how easy it was to navigate. The clear layout and organized sections made it simple to find the information I needed, whether it was about specific medical services, doctors, or even booking an appointment. It saved me a lot of time and hassle</p>
                            <hr class="w-25 mx-auto">
                            <h3>natacha</h3>
                            <h6 class="fw-normal text-primary mb-3">Engineer</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">The website provided a wealth of valuable resources and educational content. I appreciated the detailed information on various health conditions, treatment options, and preventive measures. It helped me make more informed decisions about my health and understand what to expect during medical procedures. The articles and blogs were particularly informative and well-written</p>
                            <hr class="w-25 mx-auto">
                            <h3>john</h3>
                            <h6 class="fw-normal text-primary mb-3">Engineer</h6>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal">One of the standout features of the website was the seamless online appointment booking system. I could easily search for doctors specializing in specific fields, view their availability, and book an appointment that fit my schedule. It eliminated the need for lengthy phone calls and waiting on hold. The confirmation emails and reminders were also helpful to keep track of my appointments. It made the whole process convenient and hassle-free</p>
                            <hr class="w-25 mx-auto">
                            <h3>cerci</h3>
                            <h6 class="fw-normal text-primary mb-3">Engineer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <?php include 'include/foot.php'?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>