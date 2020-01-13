<!-- Sidebar Holder -->
<?php if (!isset($menu)):
    $menu = '';
endif ?>

<nav id="sidebar" class="sammacmedia">
    <div class="sidebar-header">
        <h3>Barangay Records Management System</h3>
    </div>
    <ul class="list-unstyled components">
        <li class="<?php echo ($page == 'dashboard') ? 'active' : '' ?>">
            <a href="dashboard.php">
                <i class="fa fa-th"></i>
                Dashboard
            </a>
        </li>
        <?php
        if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
        ?>
        <li class="resident-toggle <?php echo ($page == 'residents') ? 'active' : '' ?>">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa fa-table"></i>
                Resident Information<span class="glyphicon glyphicon-menu-right pull-right"></span>
            </a>
            <ul class="resident-menu">
                <li class="<?php echo ($menu == 'all_residents') ? 'active' : '' ?>">
                    <a href="all_residents.php">All Residents</a>
                </li>
                <li class="<?php echo ($menu == 'add_residents') ? 'active' : '' ?>">
                    <a href="add_resident.php">Add Resident</a>
                </li>
            </ul>
        </li>
        <li class="blotter-toggle <?php echo ($page == 'blotter') ? 'active' : '' ?>">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa fa-table"></i>
                Blotter Records<span class="glyphicon glyphicon-menu-right pull-right"></span>
            </a>
            <ul class="blotter-menu">
                <li class="<?php echo ($menu == 'add_blotter') ? 'active' : '' ?>">
                    <a href="add_blotter.php">Add Blotter</a>
                </li>
                <li class="<?php echo ($menu == 'blotter_records') ? 'active' : '' ?>">
                    <a href="blotter_records.php">All Blotter Records</a>
                </li>
            </ul>
        </li>
        <li class="ordinances-toggle <?php echo ($page == 'ordinances') ? 'active' : '' ?>">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa fa-table"></i>
                Ordinances<span class="glyphicon glyphicon-menu-right pull-right"></span>
            </a>
            <ul class="ordinances-menu">
                <li class="<?php echo ($menu == 'add_ordinances') ? 'active' : '' ?>">
                    <a href="add_ordinance.php">Add Ordinance</a>
                </li>
                <li class="<?php echo ($menu == 'all_ordinances') ? 'active' : '' ?>">
                    <a href="all_ordinances.php">All Ordinances</a>
                </li>
            </ul>
        </li>
        <!-- RESOLUTIONS -->
        <li class="resolutions-toggle <?php echo ($page == 'resolutions') ? 'active' : '' ?>">
            <a href="javascript:void(0);" class="menu-toggle">
               <i class="fa fa-table"></i>
               Resolutions<span class="glyphicon glyphicon-menu-right pull-right"></span>
            </a>
            <ul class="resolutions-menu">
                <li class="<?php echo ($menu == 'add_resolution') ? 'active' : '' ?>">
                    <a href="add_resolutions.php">Add Resolution</a>
                </li>
                <li class="<?php echo ($menu == 'all_resolutions') ? 'active' : '' ?>">
                    <a href="all_resolutions.php">All Resolutions</a>
                </li>
            </ul>
        </li>
        <!-- CLEARANCE -->
        <li class="toggle <?php echo ($page == 'clearance') ? 'active' : '' ?>">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa fa-table"></i>
                Certificate Issuance<span class="glyphicon glyphicon-menu-right pull-right"></span>
            </a>
            <ul class="ml-menu">
                <li class="<?php echo ($menu == 'minor') ? 'active' : '' ?>">
                    <a href="issue-minor-brgy-clearance.php">Minor Brgy. Clearance</a>
                </li>
                <li class="<?php echo ($menu == 'adult') ? 'active' : '' ?>">
                    <a href="issue-adult-brgy-clearance.php">Adult Brgy. Clearance</a>
                </li>
                <li class="<?php echo ($menu == 'indigency') ? 'active' : '' ?>">
                    <a href="issue-indigency-certification.php">Certificate on Indigency</a>
                </li>
            </ul>
        </li>
        <!-- BUSINESS PERMIT -->
        <li class="business-toggle <?php echo ($page == 'business-menu') ? 'active' : '' ?>">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa fa-table"></i>
                Business Permit<span class="glyphicon glyphicon-menu-right pull-right"></span>
            </a>
            <ul class="business-menu">
                <li class="<?php echo ($menu == 'view_bp') ? 'active' : '' ?>">
                    <a href="business-permit-record.php">View Business Permits</a>
                </li>
                <li class="<?php echo ($menu == 'add_bp') ? 'active' : '' ?>">
                    <a href="issue-business-permit.php">Issue Business Permit</a>
                </li>
            </ul>
        </li>
        <?php }?>
        <?php
        if($_SESSION['permission']==1)
        {
        ?>
        <li class="<?php echo ($page == 'gallery') ? 'active' : '' ?>">
            <a href="gallery.php">
                <i class="fa fa-film"></i>
                Gallery
            </a>
        </li>
        <li class="<?php echo ($page == 'a_users') ? 'active' : '' ?>">
            <a href="a_users.php">
                <i class="fa fa-user"></i>
                Add Users
            </a>
        </li>
        <li class="<?php echo ($page == 'v_users') ? 'active' : '' ?>">
            <a href="v_users.php">
                <i class="fa fa-table"></i>
                View Users
            </a>
        </li>
        <?php } ?>
        <li class="<?php echo ($page == 'settings') ? 'active' : '' ?>">
            <a href="settings.php">
                <i class="fa fa-cog"></i>
                Settings
            </a>
        </li>
    </ul>
</nav>