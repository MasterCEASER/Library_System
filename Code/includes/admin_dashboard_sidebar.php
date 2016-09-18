<script>
              
    function view_panel(x)
    {
        alert("aa");
        document.getElementById('admin_panel').hidden="true";
        document.getElementById('user_panel').hidden="true";
        document.getElementById('fac_panel').hidden="true";
        var view = document.getElementById(x);
        view.removeAttribute("hidden");        
    }
    function view_ul(f1,f2)
    {
        var st = location.toString();
        f2 = "http://localhost/DB/" + f2;
        if(st == f2)
        {
            x = document.getElementById(f1);
            y = x.getElementsByTagName("li");
            for(var i = 0 ; i<y.length; i++)
            {
                if(y[i].hidden === true)
                {
                    y[i].removeAttribute("hidden");        
                }else
                {
                    y[i].hidden="true";
                }
            }
        }
        else
        {
            location.assign(f2);
        }
    }
    
    function view_nested_user(x)
    {
        document.getElementById('view_users').hidden="true";
        document.getElementById('add_users').hidden="true";
        document.getElementById('specific_users').hidden="true";
        if(document.getElementById(x).id === 'view_users')
        {
            location.reload();
        }
        else
        {
            document.getElementById(x).removeAttribute("hidden");
        
        }
        
    }
    function view_nested_user(x)
    {
        document.getElementById('view_users').hidden="true";
        document.getElementById('add_users').hidden="true";
        document.getElementById('specific_users').hidden="true";
        document.getElementById(x).removeAttribute("hidden");
        
    }
    function view_nested_fac(x)
    {
        document.getElementById('view_fac').hidden="true";
        document.getElementById('add_fac').hidden="true";
        document.getElementById('view_sfac').hidden="true";
        document.getElementById(x).removeAttribute("hidden");
        
    }
    function view_nested_pub(x)
    {
        document.getElementById('view_pub').hidden="true";
        document.getElementById(x).removeAttribute("hidden");
        
    }
    function view_nested_book(x)
    {
        document.getElementById('view_books').hidden="true";
        document.getElementById('add_book').hidden="true";
        document.getElementById('view_sbook').hidden="true";
        document.getElementById('view_sabook').hidden="true";
        document.getElementById('view_spbook').hidden="true";
        document.getElementById('view_spybook').hidden="true";
        document.getElementById(x).removeAttribute("hidden");
        
    }
          </script>
     
<div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          
          <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
          <li><a href="admin.php"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub open">
              <a onclick=view_ul('users_ul','user_manage.php') >
              <i class="fa fa-users"></i> Users <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu" id="users_ul">
            </ul>
          </li>
          <li class="sub open">
              <a onclick=view_ul('fac_ul','faculty_manage.php') >
              <i class="fa fa-users"></i> Faculty <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu" id="fac_ul">
            </ul>
          </li>
          
          <li><a href="fine_manage.php"><i class="fa fa-users"></i>Users Fine</a></li>
          <li><a href="issue_manage.php"><i class="fa fa-users"></i>Today Book ISSUED</a></li>
          <li><a href="return_manage.php"><i class="fa fa-users"></i>TODAY BOOK RETURNED</a></li>
          <li><a href="return_book.php"><i class="fa fa-users"></i>Return Book</a></li>
          <li class="sub open">
              <a onclick=view_ul('book_ul','book_manage.php') >
              <i class="fa fa-database"></i> Books <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu" id="book_ul">
            </ul>
          </li>
          <li><a href="publisher_manage.php"><i class="fa fa-users"></i>Publishers</a></li>
          <li><a href="author_manage.php"><i class="fa fa-users"></i>Authors</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div>