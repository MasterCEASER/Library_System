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
            <?php   include 'includes/user_panel.php';   ?>
        <script>
            x = document.getElementById('users_ul');
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_user("view_users")>View Users</a>';
            x.appendChild(l);
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_user("add_users")>Add User</a>';
            x.appendChild(l);
        </script>
        
        <?php include 'includes/dashboard_footer.php'; ?>
    </div>
        <?php include 'includes/admin_foot.php'; ?>
