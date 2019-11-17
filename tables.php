
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    suseXcity - an IoT secured infrastructure
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />


  <script>var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var sensors = JSON.parse(this.responseText);
	var x;
	

	console.log(sensors[0]);
    document.getElementById("batt1").innerHTML = sensors["CF:FC:1D:65:2E:98"].battery;
	document.getElementById("batt2").innerHTML = sensors["C3:2C:69:6E:24:92"].battery;
	document.getElementById("batt3").innerHTML = sensors["D3:D1:CA:D2:A2:CE"].battery;
	document.getElementById("batt4").innerHTML = sensors["F5:BD:73:CE:08:A0"].battery;
	document.getElementById("batt5").innerHTML = sensors["F4:7B:88:90:C5:0A"].battery;
  }
};
xmlhttp.open("GET", "https://micromec.org:32001/", true);
xmlhttp.send();
</script>
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">

      <div class="logo"><a href="dashboard.html" class="simple-text logo-normal">
          <span style="font-size:29px">suseXcity<br><span style="font-size:15px">your secured IoT Infrastructure</span>	
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item active ">
            <a class="nav-link" href="./tables.php">
              <i class="material-icons">content_paste</i>
              <p>Sensor networks</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./telemetry.html">
              <i class="material-icons">library_books</i>
              <p>Sensor networks telemetry</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Sensors networks map</p>
            </a>
          </li>


        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Sensor networks</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Active sensors networks</h4>
                  <p class="card-category"> Deployed networks over Helsinki city</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Sensor network ID
                        </th>
                        <th>
                          Location
                        </th>
                        <th>
                          Battery level
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            CF:FC:1D:65:2E:98
                          </td>
                          <td>
                            Aalto University
                          </td>
                          <td><span id="batt1">
                            </span>
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            C3:2C:69:6E:24:92
                          </td>
                          <td>
                            University of Helsinki
                          </td>
                          <td>
                            <span id="batt2"></span>
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                           D3:D1:CA:D2:A2:CE
                          </td>
                          <td>
                            Lauttasaari
                          </td>
                          <td>
                            <span id="batt3"></span>
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            F5:BD:73:CE:08:A0
                          </td>
                          <td>
                            Meilahti
                          </td>
                          <td>
                            <span id="batt4"></span>
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            F4:7B:88:90:C5:0A
                          </td>
                          <td>
                            Kuusisaari
                          </td>
                          <td>
                            <span id="batt5"></span>
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td>
                        </tr>
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>   
          </div>
		  <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">GPRS/GSM gateways</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Gateway Location
                        </th>
                        <th>
                          Sensor network ID
                        </th>
                        <th>
                          Network 
                        </th>
						  <th>
                          Signal (1-5)
                        </th>
                        <th>
                          Status
                        </th>
						<th>
                          Test
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Aalto University
                          </td>
                          <td>
                            CF:FC:1D:65:2E:98
                          </td>
                          <td>Globetel
                          </td>
						  <td>3
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td>
						  <td><button class="linktosms">Send SMS</button></td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            University of Helsinki
                          </td>
                          <td>
                            C3:2C:69:6E:24:92
                          </td>
                          <td>
                           Globetel
                          </td><td>
                           5
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td><td><button>Send SMS</button></td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                           Lauttasaari
                          </td>
                          <td>
                            D3:D1:CA:D2:A2:CE
                          </td>
                          <td>
                           Telia
                          </td><td class="text-primary-down">
                          none
                          </td>
                          <td class="text-primary-down">
                            OFF 
                          </td><td><button class="defect">Send SMS</button></td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Meilahti
                          </td>
                          <td>
                            F5:BD:73:CE:08:A0
                          </td>
                          <td>
                           Telia
                          </td> <td>
                           4
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td><td><button>Send SMS</button></td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Kuusisaari
                          </td>
                          <td>
                            F4:7B:88:90:C5:0A
                          </td>
                          <td>
                            Globetel
                          </td><td>
                            5
                          </td>
                          <td class="text-primary">
                            ON (running)
                          </td><td><button>Send SMS</button></td>
                        </tr>
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Motion detection camera</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Gateway Location
                        </th>
                        <th>
                          Sensor network ID
                        </th>
                        <th>
                          Model
                        </th>
						  <th>
                          Status
                        </th>
                        <th>
                          Live video link
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Aalto University
                          </td>
                          <td>
                            CF:FC:1D:65:2E:98
                          </td>
                          <td>Globetel
                          </td>
						  <td class="text-primary">
                            ON (running)
                          </td><td><a id="myBtn" style="color: #fff;">Click to watch</a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            University of Helsinki
                          </td>
                          <td>
                            C3:2C:69:6E:24:92
                          </td>
                          <td>
                           Globetel
                          </td><td class="text-primary">
                            ON (running)
                          </td><td>
                           <a id="myBtn" style="color: #fff;">Click to watch</a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                           Lauttasaari
                          </td>
                          <td>
                            D3:D1:CA:D2:A2:CE
                          </td>
                          <td>
                           Telia
                          </td><td class="text-primary-down">
                            OFF 
                          </td><td class="text-primary-down">
                          none
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Meilahti
                          </td>
                          <td>
                            F5:BD:73:CE:08:A0
                          </td>
                          <td>
                           Telia
                          </td><td class="text-primary">
                            ON (running)
                          </td> <td>
                          <a id="myBtn" style="color: #fff;">Click to watch</a>
                          </td>
                          
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Kuusisaari
                          </td>
                          <td>
                            F4:7B:88:90:C5:0A
                          </td>
                          <td>
                            Globetel
                          </td><td class="text-primary">
                            ON (running)
                          </td><td>
                            <a id="myBtn" style="color: #fff;">Click to watch</a>
                          </td>
                          
                        </tr>
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
		
		
		
		
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
 <iframe src="https://micromec.org/hack/feri_selfie2/" height="650">
  <p>Your browser does not support iframes.</p>
</iframe>
  </div>

</div>
		
		
          </div>
        </div>
      </div>
      
      
    </div>
  </div>
 
   
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  	<script>
		
	$('.linktosms').click(function() {
  $.ajax({
    type: "POST",
    url: "sendSMS.php",
    data: { name: "John" }
  }).done(function( msg ) {
    alert( "Data Saved: " + msg );
  });
});


  </script>

</body>

</html>