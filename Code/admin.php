<?php 
    include 'core/init.php';
    include 'includes/admin_head.php';
?>
<body style="overflow-x:  scroll;overflow-y: scroll;">
    <?php
        include 'includes/admin_dashboard_header.php';
    ?>
    <div class="template-page-wrapper">
        <?php     include 'includes/admin_dashboard_sidebar.php';    ?>
        <?php   include 'includes/admin_panel.php';   ?>
        
        <?php include 'includes/dashboard_footer.php'; ?>
    </div>
        <?php include 'includes/admin_foot.php'; ?>
