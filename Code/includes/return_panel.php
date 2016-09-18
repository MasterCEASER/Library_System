
<script>

function auto_refresh()
{
    $.post('includes/widgets/view_users_return__.php',{},function(data){
       document.getElementById('view_users_return____').innerHTML = data; 
    });
}
setInterval('auto_refresh()', 100);
</script>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          
          <div class="row" id ="view_users_return____">
              <script>
                  auto_refresh();
              </script>
       
          </div>  
        </div>
      </div>
