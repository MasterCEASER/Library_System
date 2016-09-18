
function registerpage()
    {
        change_anchor_login("Register");
        var page = document.getElementById("log_div");
        page.hidden="true";
        var pagex = document.getElementById("reg_div");
        pagex.removeAttribute("hidden");
    }
    function loginpage()
    {
        change_anchor_login("Log In");
        var page = document.getElementById("reg_div");
        page.hidden="true";
        var pagex = document.getElementById("log_div");
        pagex.removeAttribute("hidden");        
    }
    function checkformfeild(f1,f2)
    {
        var x = document.getElementById(f1);
        var y = document.getElementById(f2);
        
        if (x.value === "")
        {
            y.innerHTML = x.name + " is empty . .";
        }else
        {
            y.innerHTML = "";
        }
    }
    function validateEmail()
    {
        
    }
    function validatePFeilds()
    {
        if (document.getElementById('password').value != document.getElementById('cpassword').value)
        {
            document.getElementById('cpassword_div').innerHTML = "Password doesnot match";
        }
        else
        {
            document.getElementById('cpassword_div').innerHTML = "";
        }
    }
    function fieldEnable(f1,f2)
    {
        var x = document.getElementById(f1).checked;
        var y = document.getElementById(f2);
        
        if(x === true)
        {
            y.removeAttribute("disabled");
            y.style.backgroundColor = "white";
        }
        else
        {
            y.disabled = 'true';
            y.style.backgroundColor = "#cccccc";
        }
        
}
    
    function swaps_view(x,y)
    {
        if($('#'+x).is(':hidden')) 
        {
           $('#'+x).show();
           $('#'+y).hide(); 
        }
        else
        {
           $('#'+y).show();
           $('#'+x).hide();             
        }
    }
    
    function changetitle()
    {
//        alert("ahishas");
       var x = document.getElementById('search_by_title_book_table_');
//       alert(x.rows[0].cells[1].innerHTML);
       var text = document.getElementById('new_title_');
       var newtext = text.value;
       text.value = "";
       $.post('includes/widgets/update_book_data.php',{title:newtext,id:x.rows[0].cells[1].innerHTML},function(data){
           x.rows[1].cells[1].innerHTML = newtext;
     });
       
       
       swap_view("change_title2","change_title1");
  //      alert(document.getElementById('search_by_title_book_table_').rows[1].cells[1].innerHTML);
    }
    function changeauthor()
    {
//        alert("ahishas");
       var x = document.getElementById('search_by_title_book_table_');
//       alert(x.rows[0].cells[1].innerHTML);
       var text = document.getElementById('new_author_');
       var newtext = text.value;
       text.value = "";
       $.post('includes/widgets/update_book_data.php',{author:newtext,id:x.rows[0].cells[1].innerHTML},function(data){
           x.rows[3].cells[1].innerHTML = newtext;
     });
       
       
       swap_view("change_author2","change_author1");
  //      alert(document.getElementById('search_by_title_book_table_').rows[1].cells[1].innerHTML);
    }
    function changepub()
    {
//        alert("ahishas");
       var x = document.getElementById('search_by_title_book_table_');
//       alert(x.rows[0].cells[1].innerHTML);
       var text = document.getElementById('new_pub_');
       var newtext = text.value;
       text.value = "";
       $.post('includes/widgets/update_book_data.php',{pub:newtext,id:x.rows[0].cells[1].innerHTML},function(data){
           x.rows[4].cells[1].innerHTML = newtext;
     });
       
       
       swap_view("change_pub2","change_pub1");
  //      alert(document.getElementById('search_by_title_book_table_').rows[1].cells[1].innerHTML);
    }
    function changesub()
    {
//        alert("ahishas");
       var x = document.getElementById('search_by_title_book_table_');
//       alert(x.rows[0].cells[1].innerHTML);
       var text = document.getElementById('new_sub_');
       var newtext = text.value;
       text.value = "";
       $.post('includes/widgets/update_book_data.php',{sub:newtext,id:x.rows[0].cells[1].innerHTML},function(data){
           x.rows[6].cells[1].innerHTML = newtext;
     });
       
       
       swap_view("change_sub2","change_sub1");
  //      alert(document.getElementById('search_by_title_book_table_').rows[1].cells[1].innerHTML);
    }
    
    function swap_view(x,y)
    {
        var ctrl = document.getElementById(x);
        ctrl.hidden="true";
        var view = document.getElementById(y);
        view.removeAttribute("hidden");
    }
    
 function main_panel_view(x)
 {
        document.getElementById('login_ID_div').hidden="true";
        document.getElementById('home').hidden="true";
        document.getElementById('contact').hidden="true";
        document.getElementById('gallery').hidden="true";
        document.getElementById('search_book').hidden="true";
        document.getElementById('about').hidden="true";
        document.getElementById('services').hidden="true";
        document.getElementById(x).removeAttribute("hidden");
        if (document.getElementById(x).id == 'search_book')
        {
            document.getElementById('search_down12').hidden="true";
            document.getElementById("Search_main").removeAttribute("hidden");            
        }
        
    }
 function setLoca(x)
 {
     var s = "http://localhost/DB/" + x;
     location.assign(s);
 }
 function change_anchor_login(x)
 {
     document.getElementById("log_in_anchor").innerHTML = x;
 }
 function show(x)
 {
     document.getElementById(x).removeAttribute("hidden");
 }
 function hide(x)
 {
     document.getElementById(x).hidden="true";
 }
 function select_li(x,y,z,w)
 {
    document.getElementById(y).innerHTML=x;
    document.getElementById(w).value=x;
    
     document.getElementById(z).hidden="true";
 }
   
    function search_by_title()
    {
//        alert(location.href);

        x = (document.getElementById('book_title_sbook').value);
        $.post('includes/widgets/search_by_title.php',{search:x},function(data){
            document.getElementById('sbook_panel_div').innerHTML=data;
        });
    }
    function search_by_author()
    {
//        alert(location.href);

        x = (document.getElementById('book_title_sabook').value);
        $.post('includes/widgets/search_by_author.php',{search:x},function(data){
            y = 
            document.getElementById('sabook_panel_div').innerHTML=data;
        });
    }
    function search_by_publisher()
    {
//        alert(location.href);

        x = (document.getElementById('book_title_spbook').value);
        $.post('includes/widgets/search_by_publisher.php',{search:x},function(data){
            y = 
            document.getElementById('spbook_panel_div').innerHTML=data;
        });
    }
    function search_by_publication()
    {
//        alert(location.href);

        x = (document.getElementById('book_title_spybook').value);
        $.post('includes/widgets/search_by_year.php',{search:x},function(data){
            y = 
            document.getElementById('spybook_panel_div').innerHTML=data;
        });
    }
function functhe(x)
{
 //   alert(document.getElementById(x).innerHTML);
    
        y = document.getElementById(x).innerHTML;
        $.post('includes/widgets/removetag.php',{search:y},function(data){
            y = data;
            document.getElementById('book_title_sbook').value=y;
            $.post('includes/widgets/search_by_title_book.php',{search:y},function(data){
            document.getElementById('sbook_panel_div').innerHTML=data;
        });
        });
}

function search_book()
{    
    var x =   document.getElementById('qchoice_fields');
    var y =   document.getElementById('choice_fields');
    var z=   document.getElementById('author_field');
     
    document.getElementById('Search_main').hidden="true";
    document.getElementById('search_down12').removeAttribute("hidden");
                        
                    
    $.post('includes/widgets/search.php',{qchoice:x.innerHTML,choice:y.innerHTML,author:z.value},function(data){
        
    var tab = '<table><tr><td><input type="button" value="Back" onclick="swap_view(\'search_down12\',\'Search_main\')"></td></tr><tr><td>';
    tab = tab + data + '</td></tr></table>';
        document.getElementById('search_down1').innerHTML=tab;
    });
    
}
function functhem(x)
{
//    alert(document.getElementById(x).innerHTML);
    
            $.post('includes/widgets/search_by_title_book_main.php',{search:document.getElementById(x).innerHTML},function(data){
            document.getElementById('search_down2').innerHTML=data;
            document.getElementById('search_down2').removeAttribute("hidden");
    document.getElementById('search_down1').hidden="true";
        });
}

function reserve(x)
{
    $.post('includes/widgets/reserve_book.php',{id:x},function(data){
        alert(data);
        });
}

function delete_book(x)
{     var y = document.getElementById("view_book_table_").rows[x].cells[1].innerHTML;
     
//   alert(y);
     $.post('includes/widgets/delete_book.php',{id:y},function(data){
     });
    location.reload();
}
function add_book_()
{
    var x1 = document.getElementById('book_title').value;
    var x2 = document.getElementById('book_author').value;
    var x3 = document.getElementById('book_publisher').value;
    var x4 = document.getElementById('book_date').value;
    var x5 = document.getElementById('book_ISBN').value;
    var x6 = document.getElementById('book_subject').value;
    var x7 = document.getElementById('book_edition').value;
    
    var str = "'" +  x1 + "',STR_TO_DATE('" + x4  + "','%Y  ')," + x5   + "," + x7   + ",'" +  x2   + "','" + x6   + "','" + x3 + "'";
    
//    alert(str);
     $.post('includes/widgets/add_book.php',{data:str},function(data){
     });
    
    $("#add_book_db_to_")[0].reset();
    
}
function add_user_to()
{
//    alert("HWEE");
    var x1 = document.getElementById('first_name').value;
    var x2 = document.getElementById('last_name').value;
    var x3 = document.getElementById('address').value;
    var x4 = document.getElementById('ph').value;
    var x5 = document.getElementById('email').value;
    var x6 = document.getElementById('uni_id').value;
    var x7 = document.getElementById('password').value;
    
    var str = "'" +  x6 + "','" + x7  + "','" + x1   + "','" + x2   + "','" +  x5   + "','" + x4   + "','" + x3 + "'";
    
//    alert(str);

     $.post('includes/widgets/add_user.php',{data:str},function(data){
 //        alert(data);
 
setInterval('auto_refresh()', 10000);
     });
    
}

function add_faculty_to()
{
//    alert("HWEE");
    var x1 = document.getElementById('first_name_f').value;
    var x2 = document.getElementById('last_name_f').value;
    var x3 = document.getElementById('address_f').value;
    var x4 = document.getElementById('ph_f').value;
    var x5 = document.getElementById('email_f').value;
    var x7 = document.getElementById('password_f').value;
    
    var str = "'" +  "ADMIN" + "','" + x7  + "','" + x1   + "','" + x2   + "','" +  x5   + "','" + x4   + "','" + x3 + "'";
    
//    alert(str);

     $.post('includes/widgets/add_fac.php',{data:str},function(data){
         alert(data);
 
//setInterval('auto_refresh()', 10000);
     });
    
    $("#add_faculty_form_")[0].reset();
}

function pay_fine()
{
    var uid = document.getElementById('user_id___').value;
    var amount = document.getElementById('amount___').value;
           
     $.post('includes/widgets/pay_user_fine__ .php',{id:uid,amount:amount},function(data){
    //     alert(data);
 
     }); 
     
    $("#PAY_FINE_FORM_")[0].reset();
}
function return_book()
{
    var uid = document.getElementById('user_id___').value;
    var bid = document.getElementById('book_id___').value;
    var cno = document.getElementById('copy_no___').value;
           
     $.post('includes/widgets/return_book__  .php',{id:uid,book:bid,no:cno},function(data){
//         alert(data);
     }); 
     
    $("#RETURN_BOOK_FORM_")[0].reset();
}