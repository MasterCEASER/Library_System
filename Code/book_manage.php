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
            <?php   include 'includes/book_panel.php';   ?>
        <script>
            x = document.getElementById('book_ul');
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_book("view_books")>View All Books</a>';
            x.appendChild(l);
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_book("add_book")>Add Book</a>';
            x.appendChild(l);
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_book("view_sbook")>View Specific Book Details</a>';
            x.appendChild(l);
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_book("view_sabook")>View Specific Author Books</a>';
            x.appendChild(l);
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_book("view_spbook")>View Specific Publisher Books</a>';
            x.appendChild(l);
            l = document.createElement("li");
            l.innerHTML='<a onclick=view_nested_book("view_spybook")>View Books published by Year</a>';
            x.appendChild(l);
        </script>
        
        <?php include 'includes/dashboard_footer.php'; ?>
    </div>
        <?php include 'includes/admin_foot.php'; ?>
