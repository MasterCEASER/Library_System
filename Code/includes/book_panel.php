
<script>

    function delete_user(x)
    {
        var y = document.getElementById("user_table").rows[x].cells[2].innerHTML;
        
        alert(y);
        xmlhttp = new XMLHttpRequest();
        
  
        xmlhttp.open("GET","includes/widgets/delete_user.php?id="+y,false);
        xmlhttp.send();
    location.reload();
    }
</script>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <?php
                include 'book_panel/view_book.php';
                include 'book_panel/add_book.php';
                include 'book_panel/view_sbook.php';
                include 'book_panel/view_sabook.php';
                include 'book_panel/view_spbook.php';
                include 'book_panel/view_spybook.php';
            ?>
            
        </div>
      </div>
