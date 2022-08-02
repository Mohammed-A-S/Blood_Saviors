<nav>
    <i class='bx bx-menu' ></i>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
    </form>
    <div>
        <h2 name="user_profile_name">
            <?php
            //print the username in the up of the page
            $hsptl_id = $_SESSION['hsptl_id'];
            
            $hsptl_id = "SELECT H_NAME FROM hospital WHERE H_ID='$hsptl_id'";
            $hsptl_id_query = mysqli_query($conn, $hsptl_id);
            
            $fetch = mysqli_fetch_assoc($hsptl_id_query);
            echo $fetch['H_NAME'];
            ?>
        </h2>
    </div>
    <a href="#" class="profile">
        <img src="../img/profile.png">
    </a>
</nav>
