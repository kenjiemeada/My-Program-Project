<?php
 include "header.php";

?>

<nav class="navbar navbar-light bg-light shadow-sm">
	<a class="navbar-brand text-white" href="#"><h4 class="mt-2"><img src="images/ezshope.png "width="80px" height="80px">Point of Sales</h4></a>
	<span class="mt-2 mr-2 text-white">
		<a class="text-white text-decoration-none" href="#"><i class="fas fa-question-circle">Help</i></a>

		<a class="text-white text-decoration-none" href="#"><i class="fas fa-book">About</i></a>
	</span>
	</nav>

		<div class="container-fluid"> 
  <div class="row">
    <div class="col-12 col-sm-3">
      <div class="nav mt-3 shadow-sm">
        <div class="multi-level">
          <input type="checkbox" id="menu"/>
          <label class="menubar" for="Menu"><i class="fas fa-bars"></i> Menu Navigation</label>

          <div class="item">
            <input type="checkbox" id="A"/>
            <i class="arrow fas fa-chevron-down"></i><label class="side" for="A"><i class="fas fa-chart-pie"></i>POS Menu</label>

            <ul>
              <li>
                  <div class="sub-item">
                    <input type="checkbox" id="A-2"/>
                    <i class="arrow fas fa-chevron-down"></i><label class="side" for="A-2"><i class="fas fa-coins"></i> Budget</label>

                      <ul>
                        <li><a href="planning.php">Budget Affiliate</a></li>
                        <li><a href="planning.php">Budget Planning</a></li>
                        <li><a href="proposal.php">Report</a></li>
                      </ul>
                  </div>
              </li>


            </ul>
          </div>


        </div>
      </div>

    </div>

