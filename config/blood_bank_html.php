<?php
//A+
$donors_a_p = "SELECT sum(AMOUNT) AS sum_a_p FROM blood_bank WHERE BLOOD_TYPE = 'A+'";
$a_p_donors_query = mysqli_query($conn, $donors_a_p);

//B+
$donors_b_p = "SELECT sum(AMOUNT) AS sum_b_p FROM blood_bank WHERE BLOOD_TYPE = 'B+'";
$b_p_donors_query = mysqli_query($conn, $donors_b_p);

//O+
$donors_o_p = "SELECT sum(AMOUNT) AS sum_o_p FROM blood_bank WHERE BLOOD_TYPE = 'O+'";
$o_p_donors_query = mysqli_query($conn, $donors_o_p);

//AB+
$donors_ab_p = "SELECT sum(AMOUNT) AS sum_ab_p FROM blood_bank WHERE BLOOD_TYPE = 'AB+'";
$ab_p_donors_query = mysqli_query($conn, $donors_ab_p);

//A-
$donors_a_n = "SELECT sum(AMOUNT) AS sum_a_n FROM blood_bank WHERE BLOOD_TYPE = 'A-'";
$a_n_donors_query = mysqli_query($conn, $donors_a_n);

//B-
$donors_b_n = "SELECT sum(AMOUNT) AS sum_b_n FROM blood_bank WHERE BLOOD_TYPE = 'B-'";
$b_n_donors_query = mysqli_query($conn, $donors_b_n);

//O-
$donors_o_n = "SELECT sum(AMOUNT) AS sum_o_n FROM blood_bank WHERE BLOOD_TYPE = 'O-'";
$o_n_donors_query = mysqli_query($conn, $donors_o_n);

//AB-
$donors_ab_n = "SELECT sum(AMOUNT) AS sum_ab_n FROM blood_bank WHERE BLOOD_TYPE = 'AB-'";
$ab_n_donors_query = mysqli_query($conn, $donors_ab_n);
?>
<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Blood List</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>

					<div id="blood-list">
                    <!--box-1------------------------>
                    <div class="blood-box">
                        <!--img------------>
                        <div class="blood-text">
                            <div class="quality"><?php while($count = mysqli_fetch_assoc($a_p_donors_query)){ echo $count['sum_a_p'];} ?></div>
                            <div class="box_text"><i class='bx bxs-droplet' ></i><h1>A+</h1></div>
                        </div>
                        <!--text--------->
						<div class="box_button">
							<button><a href="order.php" class="order"> Order </a></button>
							<button><a href="donate.php" class="donate"> Donate </a></button>
						</div>
                    </div>
					<!--box-1------------------------>
                    <div class="blood-box">
                        <!--img------------>
                        <div class="blood-text">
                            <div class="quality"><?php while($count = mysqli_fetch_assoc($b_p_donors_query)){ echo $count['sum_b_p'];} ?></div>
                            <div class="box_text"><i class='bx bxs-droplet' ></i><h1>B+</h1></div>
                        </div>
                        <!--text--------->
                        <div class="box_button">
							<button><a href="order.php" class="order"> Order </a></button>
							<button><a href="donate.php" class="donate"> Donate </a></button>
						</div>
                    </div>
					<!--box-1------------------------>
                    <div class="blood-box">
                        <!--img------------>
                        <div class="blood-text">
                            <div class="quality"><?php while($count = mysqli_fetch_assoc($o_p_donors_query)){ echo $count['sum_o_p'];} ?></div>
                            <div class="box_text"><i class='bx bxs-droplet' ></i><h1>O+</h1></div>
                        </div>
                        <!--text--------->
                        <div class="box_button">
							<button><a href="order.php" class="order"> Order </a></button>
							<button><a href="donate.php" class="donate"> Donate </a></button>
						</div>
                    </div>
					<!--box-1------------------------>
                    <div class="blood-box">
                        <!--img------------>
                        <div class="blood-text">
                            <div class="quality"><?php while($count = mysqli_fetch_assoc($ab_p_donors_query)){ echo $count['sum_ab_p'];} ?></div>
                            <div class="box_text"><i class='bx bxs-droplet' ></i><h1>AB+</h1></div>
                        </div>
                        <!--text--------->
                        <div class="box_button">
							<button><a href="order.php" class="order"> Order </a></button>
							<button><a href="donate.php" class="donate"> Donate </a></button>
						</div>
                    </div>




					<!--box-1------------------------>
                    <div class="blood-box">
                        <!--img------------>
                        <div class="blood-text">
                            <div class="quality"><?php while($count = mysqli_fetch_assoc($a_n_donors_query)){ echo $count['sum_a_n'];} ?></div>
                            <div class="box_text"><i class='bx bxs-droplet' ></i><h1>A-</h1></div>
                        </div>
                        <!--text--------->
                        <div class="box_button">
							<button><a href="order.php" class="order"> Order </a></button>
							<button><a href="donate.php" class="donate"> Donate </a></button>
						</div>
                    </div>
					<!--box-1------------------------>
                    <div class="blood-box">
                        <!--img------------>
                        <div class="blood-text">
                            <div class="quality"><?php while($count = mysqli_fetch_assoc($b_n_donors_query)){ echo $count['sum_b_n'];} ?></div>
                            <div class="box_text"><i class='bx bxs-droplet' ></i><h1>B-</h1></div>
                        </div>
                        <!--text--------->
                        <div class="box_button">
							<button><a href="order.php" class="order"> Order </a></button>
							<button><a href="donate.php" class="donate"> Donate </a></button>
						</div>
                    </div>
					<!--box-1------------------------>
                    <div class="blood-box">
                        <!--img------------>
                        <div class="blood-text">
                            <div class="quality"><?php while($count = mysqli_fetch_assoc($o_n_donors_query)){ echo $count['sum_o_n'];} ?></div>
                            <div class="box_text"><i class='bx bxs-droplet' ></i><h1>O-</h1></div>
                        </div>
                        <!--text--------->
                        <div class="box_button">
							<button><a href="order.php" class="order"> Order </a></button>
							<button><a href="donate.php" class="donate"> Donate </a></button>
						</div>
                    </div>
					<!--box-1------------------------>
                    <div class="blood-box">
                        <!--img------------>
                        <div class="blood-text">
                            <div class="quality"><?php while($count = mysqli_fetch_assoc($ab_n_donors_query)){ echo $count['sum_ab_n'];} ?></div>
                            <div class="box_text"><i class='bx bxs-droplet' ></i><h1>AB-</h1></div>
                        </div>
                        <!--text--------->
                        <div class="box_button">
							<button><a href="order.php" class="order"> Order </a></button>
							<button><a href="donate.php" class="donate"> Donate </a></button>
						</div>
                    </div>
				</div>
			</div>
		</main>