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
                $_email = $_SESSION['email'];
                    
                $users_username = "SELECT USER_NAME FROM login WHERE EMAIL='$_email'";
                $user_username_query = mysqli_query($conn, $users_username);

                $fetch = mysqli_fetch_assoc($user_username_query);
                echo $fetch['USER_NAME'];
            ?>
        </h2>
    </div>
    <a href="#" class="profile">
        <img src="../img/profile.png">
    </a>
</nav>
