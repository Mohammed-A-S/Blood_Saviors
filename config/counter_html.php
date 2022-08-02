<?php
$orders_all = "SELECT * FROM orders";
$all_orders_query = mysqli_query($conn, $orders_all);
$order_count = mysqli_num_rows($all_orders_query);

$donors_all = "SELECT * FROM donors";
$all_donors_query = mysqli_query($conn, $donors_all);
$donor_count = mysqli_num_rows($all_donors_query);

$donors_a_p = "SELECT sum(AMOUNT) AS sum_a_p FROM donors";
$a_p_donors_query = mysqli_query($conn, $donors_a_p);
?>    
    <ul class="box-info">
        <li>
            <i class='bx bxs-droplet' ></i>
            <span class="text">
                <h3><?php echo $order_count; ?></h3>
                <p>ORDER</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group' ></i>
            <span class="text">
                <h3><?php echo $donor_count; ?></h3>
                <p>DONORS</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-calendar-check' ></i>
            <span class="text">
                <h3><?php while($count = mysqli_fetch_assoc($a_p_donors_query))
                {
                    echo $count['sum_a_p'];
                }
                ?></h3>
                <p>TOTAL BLOOD</p>
            </span>
        </li>
    </ul>