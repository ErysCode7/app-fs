<?php
   require "../includes/authentication/authentication.php";
?>

<?php require "../includes/view/header.php"; ?>

<?php

if(isset($_GET["id"])) {
   require "../includes/model/connection.php";
   $id = $_GET["id"];
   $sql = "SELECT * FROM events WHERE id = '$id';";
   $result = $con->query($sql);

   $row = $result->fetch_assoc();
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
            <li class="menu-item active">
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
            <li class="breadcrumb-item"><a href="./events.php">Events</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Events</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="d-flex align-items-center justify-content-center mb-3">
      <img src='../assets/img/event-banner.jpg' alt="" style="width: 80%; height: 450px; border-radius: 0.5rem; magin: 0 auto;  object-fit: cover; ">
    </div>
    <p clas="mb-3" style="font-size: 16px;">Event description is a written or verbal summary that provides information about a particular event, such as a conference, concert, festival, workshop, or any other gathering. It typically includes details about the event, such as the name, date, time, location, target audience, and purpose, as well as any additional information that is relevant to attendees. The purpose of an event description is to attract and inform potential attendees about the event, and to generate interest and excitement in the lead-up to the event. A well-crafted event description can help to ensure that the right people attend the event and that they are fully engaged and informed about what to expect.</p>

    <div class="d-flex justify-content-start mb-5">
      <img src='../assets/img/event-banner-1.jpg' alt="" style="width: 500px; height: 300px; border-radius: 0.5rem; magin: 0 auto; object-fit: cover;  ">
      <div style="margin-left: 20px;">
      <div class="d-flex align-items-center justify-content-start mb-1 gap-2">
        <h2><?php echo $row["event_title"]; ?></h2>
        <p style="font-bold: 400; font-size: 16px;"><?php echo $row["time"]; ?></p>
        <p style="font-bold: 400; font-size: 16px;"><?php echo $row["schedule"]; ?></p>
      </div>
        <h3 style="font-bold: bold; font-size: 30px;"><?php echo $row["event"];  ?></h3>
        <p><?php echo $row["description"]; ?></p>
      </div>
    </div>
  </div>
</section>

<?php include "../includes/view/footer.php" ?>