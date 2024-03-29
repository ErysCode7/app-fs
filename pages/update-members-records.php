<?php
   require "../includes/authentication/authentication.php";
?>

<?php require "../includes/view/header.php"; ?>

<?php 
    if(isset($_POST["submit"])) {
        $id = $_POST["id"];
        $student_number = $_POST["student_number"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $troupe = $_POST["troupe"];
        $contact_number = $_POST["contact_number"];
        $course = $_POST["course"];
        $curriculum_year = $_POST["curriculum_year"];
        $birthday = $_POST["birthday"];
        $date_of_membership = $_POST["date_of_membership"];
        $address = $_POST["address"];
        $active_status = $_POST["active_status"];
        $fathers_name = $_POST["fathers_name"];
        $fathers_occupation = $_POST["fathers_occupation"];
        $fathers_phone_number = $_POST["fathers_phone_number"];
        $mothers_name = $_POST["mothers_name"];
        $mothers_occupation = $_POST["mothers_occupation"];
        $mothers_phone_number = $_POST["mothers_phone_number"];
    }
?>
  
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        
        <!-- SIDEBAR -->
        
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
            <a href="dashboard.php" class="app-brand-link">
                <span class="app-brand-logo demo">
                <svg
                    width="25"
                    viewBox="0 0 25 42"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                    <defs>
                    <path
                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                        id="path-1"
                    ></path>
                    <path
                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                        id="path-3"
                    ></path>
                    <path
                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                        id="path-4"
                    ></path>
                    <path
                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                        id="path-5"
                    ></path>
                    </defs>
                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                            <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                            </mask>
                            <use fill="#696cff" xlink:href="#path-1"></use>
                            <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                            </g>
                            <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                            </g>
                        </g>
                        <g
                            id="Triangle"
                            transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                            <use fill="#696cff" xlink:href="#path-5"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
            </div>


            <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="dashboard.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- MEMBERS PERMANENT RECORDS -->
            <li class="menu-item active">
                <a href="./members-permanent-records.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Members Permanent Records">Members Permanent Records</div>
                </a>
            </li>

            <!-- EVENTS -->
            <li class="menu-item">
                <a href="./events.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                <div data-i18n="Members Permanent Records">Events</div>
                </a>
            </li>

             <!-- TROUPES -->
            <li class="menu-item">
                <a href="./troupes.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-location-plus"></i>
                <div data-i18n="Troupes">Troupes</div>
                </a>
            </li> 

            </ul>
        </aside>
        <!-- / SIDEBAR -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php require "../includes/view/navbar.php"; ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

<section>
  <div class="container py-5">

    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="./members-permanent-records.php">Members Permanent Records</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Update Profile</li>
            </ol>
            </nav>
        </div>
    </div>
    
    
    <div class="col-xxl">
            <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Update records</h5>
                <?php
                    if(isset($_SESSION["status"])) {
                ?>
                <div class="alert alert-warning">
                    <h4><?= $_SESSION["status"]; ?></h4>
                </div>
                <?php unset($_SESSION["status"]); } ?>
                <?php 
                    if(isset($_SESSION["status-success"])) {
                ?>
                <div class="alert alert-success">
                    <h4><?= $_SESSION["status-success"]; ?></h4>
                </div>
                <?php unset($_SESSION["status-success"]); } ?>
           
            </div>
            <div class="card-body">
                <form action="../includes/controller/update-members-permanent-records.php" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">    
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="student_number">Student Number</label>
                        <div class="col-sm-10">
                            <input type="text" oninput="this.value = this.value.replace(/[^-0-9]|(?<=.)-/g, '')"  name="student_number" maxlength="12" id="student_number" value="<?= $student_number ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="first_name">First name</label>
                        <div class="col-sm-10">
                            <input type="text" name="first_name" maxlength="20" id="first_name" value="<?= $first_name ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="last_name">Last name</label>
                        <div class="col-sm-10">
                            <input type="text" name="last_name" maxlength="30" id="last_name" value="<?= $last_name ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="birthday">Birthday</label>
                        <div class="col-sm-10">
                            <input type="date" name="birthday" id="birthday" value="<?= $birthday ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="contact_number">Contact Number</label>
                        <div class="col-sm-10">
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="contact_number" maxlength="11" id="contact_number" value="<?= $contact_number ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="address">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" maxlength="50" id="address" value="<?= $address ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="troupe">Troupe</label>
                        <div class="col-sm-10">
                        <?php 
                            require "../includes/model/connection.php";
                            $sqlTroupe = "SELECT name FROM troupes";
                            $resultTroupe = $con->query($sqlTroupe);
                            $data = array();
                            while ($row = $resultTroupe->fetch_assoc()) {
                                $data[] = $row;
                            }
                        ?> 
                            <select name="troupe" id="troupe" class="form-control" style="color: black" required>
                                <option value="">Select troupe</option>
                                <?php foreach ($data as $row) {
                                    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                } ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="course">Course</label>
                        <div class="col-sm-10">
                            <input type="text" name="course" maxlength="30" id="course" value="<?= $course ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="curriculum_year">Curriculum year</label>
                        <div class="col-sm-10">
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="curriculum_year" maxlength="20" id="curriculum_year" value="<?= $curriculum_year ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="date_of_membership">Date of Membership</label>
                        <div class="col-sm-10">
                            <input type="text" name="date_of_membership" maxlength="20" id="date_of_membership" value="<?= $date_of_membership ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="active_status">Status</label>
                        <div class="col-sm-10">
                                <select name="active_status" id="active_status" value="<?= $active_status ?>"  class="form-select form-select-lg" style="color: black" required>
                                <option value="">Select status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="quit">Quit</option>
                                <option value="alumni">Alumni</option>
                            </select>
                        </div>
                    </div>

                    <!-- FATHERS -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="fathers_name">Fathers Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="fathers_name" maxlength="50" id="fathers_name" value="<?= $fathers_name ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="fathers_occupation">Fathers Occupation</label>
                        <div class="col-sm-10">
                            <input type="text" name="fathers_occupation" maxlength="50" id="fathers_occupation" value="<?= $fathers_occupation ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="fathers_phone_number">Fathers Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="fathers_phone_number" maxlength="11" id="fathers_phone_number" value="<?= $fathers_phone_number ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <!-- MOTHERS -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="mothers_name">Mothers Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="mothers_name" maxlength="50" id="mothers_name" value="<?= $mothers_name ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="mothers_occupation">Mothers Occupation</label>
                        <div class="col-sm-10">
                            <input type="text" name="mothers_occupation" maxlength="50" id="mothers_occupation" value="<?= $mothers_occupation ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="mothers_phone_number">Mothers Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="mothers_phone_number" maxlength="11" id="mothers_phone_number" value="<?= $mothers_phone_number ?>" class="form-control" style="color: black"   />
                        </div>
                    </div>
                
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Update Records</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</section>

<?php include "../includes/view/footer.php" ?>