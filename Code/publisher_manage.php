<?php 
    include 'core/init.php';
    include 'includes/admin_head.php';
?>
<body>
    <?php
        include 'includes/admin_dashboard_header.php';
    ?>
    <div class="template-page-wrapper">
        <?php     include 'includes/admin_dashboard_sidebar.php';    ?>
            <?php   include 'includes/publisher_panel.php';   ?>
<!--        <script>
            x = document.getElementById('pub_ul');
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_pub("view_pub")>View Publishers</a>';
            x.appendChild(l);
        </script>
    -->    
        <?php include 'includes/dashboard_footer.php'; ?>
    </div>
        <?php include 'includes/admin_foot.php'; ?>
