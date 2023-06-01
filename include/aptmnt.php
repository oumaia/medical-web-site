
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
                   <!--  <p id="test008">this is a test</h1> -->
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
                        ?>
                        <form method="post" action="insert3.php">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select id="categorie" class="form-select bg-white border-0" style="height: 55px;"
                                        name="id_departement" onchange='detectChange()'>
                                    
                                        <?php
                                        echo '<option value = test test> choose Depaertement</option> ';
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