<?php
  require "../includes/authentication/authentication.php";
?>

<?php
 require "../includes/view/header.php";
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
                <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>

            <!-- MEMBERS PERMANENT RECORDS -->
            <li class="menu-item ">
                <a href="./members-permanent-records.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Members Permanent Records">Members Permanent Records</div>
                </a>
            </li>

             <!-- EVENTS -->
            <li class="menu-item">
                <a href="./events.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                <div data-i18n="Events">Events</div>
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

        <!-- / Navbar -->
        <?php require "../includes/view/navbar.php"; ?>
        <!-- / Navbar -->
        
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <h1 class="fw-bold">Add New Record</h1>

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

              <hr class="my-2" />

                <div class="card-body">
                    <form action="../includes/controller/create-members-permanent-records.php" method="post">

                        <div class="row mb-3">
                            <label class="h4" for="student_number">Student Number</label>
                            <div class="">
                                <input type="text" oninput="this.value = this.value.replace(/[^-0-9]|(?<=.)-/g, '')" name="student_number" maxlength="11" id="student_number" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter student number" required  />
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center gap-3 w-full">   

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="first_name">First name</label>
                                <div>
                                    <input type="text" name="first_name" maxlength="20" id="first_name" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter First Name" required   />
                                </div>
                            </div>

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="last_name">Last name</label>
                                <div>
                                    <input type="text" name="last_name" maxlength="30" id="last_name" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter Last Name" required  />
                                </div>
                            </div>
                            
                        </div>

                        <div class="d-flex justify-content-between align-items-center gap-3 w-full flex-wrap"> 

                            <!-- <div class="mb-3 row">
                                <label for="birthday" class="h4">Birthday</label>
                                <div>
                                <input class="form-control py-3" type="date" name="birthday" value="2021-06-18" id="birthday" />
                                </div>
                            </div> -->
                            
                            <div class="row mb-3  flex-grow-1">
                                <label class="h4" for="birthday">Birthday</label>
                                <div>
                                    <input type="date" name="birthday" id="birthday" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter birth date"  />
                                </div>
                            </div>

                            <div class="row mb-3  flex-grow-1">
                                <label class="h4" for="contact_number">Contact Number</label>
                                <div>
                                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="contact_number" maxlength="11" id="contact_number" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter contact number"  />
                                </div>
                            </div>

                            <div class="row mb-3  flex-grow-1">
                                <label class="h4" for="address">Address</label>
                                <div>
                                    <input type="text" name="address" maxlength="70" id="address" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter address"   />
                                </div>
                            </div>
                            
                        </div>

                        <div class="d-flex justify-content-between align-items-center gap-3 w-full flex-wrap">

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="troupe">Troupe</label>
                                <!-- <div>
                                    <input type="text" name="troupe" id="troupe" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter troupe"   />
                                </div> -->
                                <div>
                                <?php 
                                 require "../includes/model/connection.php";
                                 $sqlTroupe = "SELECT name FROM troupes";
                                 $resultTroupe = $con->query($sqlTroupe);
                                 $data = array();
                                 while ($row = $resultTroupe->fetch_assoc()) {
                                     $data[] = $row;
                                 }
                                ?> 
                                    <select name="troupe" id="troupe" class="form-control py-3" style="color: black; font-size: 18px;" required>
                                        <option value="">Select troupe</option>
                                        <?php foreach ($data as $row) {
                                            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="course">Course</label>
                                <div>
                                    <input type="text" name="course" maxlength="50" id="course" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter course"   />
                                </div>
                            </div>

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="curriculum_year">Curriculum year</label>
                                <div>
                                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="curriculum_year" maxlength="15" id="curriculum_year" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter curriculum year" />
                                </div>
                            </div>

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="date_of_membership">Date of Membership</label>
                                <div>
                                    <input type="text" name="date_of_membership" id="date_of_membership" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter date of membership"  />
                                </div>
                            </div>    
                        
                        </div>

                    
                        <div class="row mb-3">
                            <label class="h4" for="active_status">Status</label>
                            <div>
                                <select name="active_status" id="active_status"  class="form-select form-select-lg" style="color: black; font-size: 18px;" required>
                                    <option value="">Select status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="quit">Quit</option>
                                    <option value="alumni">Alumni</option>
                                </select>
                            </div>
                        </div>


                         <!-- FATHERS -->
                        <div class="d-flex justify-content-between align-items-center gap-3 w-full flex-wrap">

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="fathers_name">Fathers Name</label>
                                <div>
                                    <input type="text" name="fathers_name" maxlength="50" id="fathers_name" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter fathers name" />
                                </div>
                            </div>

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="fathers_occupation">Fathers Occupation</label>
                                <div>
                                    <input type="text" name="fathers_occupation" maxlength="50" id="fathers_occupation" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter fathers occupation"   />
                                </div>
                            </div>

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="fathers_phone_number">Fathers Phone Number</label>
                                <div>
                                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="fathers_phone_number" maxlength="12" id="fathers_phone_number" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter fathers phone number" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- MOTHERS -->
                        <div class="d-flex justify-content-between align-items-center gap-3 w-full flex-wrap">

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="mothers_name">Mothers Name</label>
                                <div>
                                    <input type="text" name="mothers_name" maxlength="50" id="mothers_name"  class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter mothers name"   />
                                </div>
                            </div>

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="mothers_occupation">Mothers Occupation</label>
                                <div>
                                    <input type="text" name="mothers_occupation" maxlength="50" id="mothers_occupation" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter mothers occupation"  />
                                </div>
                            </div>

                            <div class="row mb-3 flex-grow-1">
                                <label class="h4" for="mothers_phone_number">Mothers Phone Number</label>
                                <div>
                                    <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="mothers_phone_number" maxlength="12" id="mothers_phone_number" class="form-control py-3" style="color: black; font-size: 18px;" placeholder="Enter mothers phone number"   />
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" onClick="onSubmit();" class="btn btn-primary">Add record</button>
                            </div>
                        </div>
                       
                      


                    </form>
                </div>
            
            </div>

        </div>
          
          <!--/ Hoverable Table rows -->
          
<?php include "../includes/view/footer.php" ?>


