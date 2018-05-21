<div class="sidebar" data-color="azure" data-background-color="black" data-image="<?php if( $_SESSION['cur_page']!= 1){ echo '../';}?>assets/img/sidebar-4.jpg">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Registration System
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item <?php if( $_SESSION['cur_page']== 1){ echo 'active';}?> ">
                <a class="nav-link" href="http://localhost/rsys/">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item <?php if( $_SESSION['cur_page']== 2){ echo 'active';}?>">
                <a class="nav-link" href="http://localhost/rsys/cpanel/">
                    <i class="material-icons">settings</i>
                    <p>Control Panel</p>
                </a>
            </li>
            <li class="nav-item <?php if( $_SESSION['cur_page']== 3){ echo 'active';}?>">
                <a class="nav-link" href="http://localhost/rsys/register/">
                    <i class="material-icons">group_add</i>
                    <p>Registration</p>
                </a>
            </li>
            <li class="nav-item <?php if( $_SESSION['cur_page']== 4){ echo 'active';}?>">
                <a class="nav-link" href="http://localhost/rsys/reports/">
                    <i class="material-icons">content_paste</i>
                    <p>Reports</p>
                </a>
            </li>
            </li>
        </ul>
    </div>
</div>