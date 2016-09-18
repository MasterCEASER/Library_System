
<div class="panel" hidden="" id="services"> 
    
    <?php 
        if(isset($_SESSION['lib_id']))
        {
            include 'includes/widgets/loggedin.php'; 
            
        }
        else
        {
            include 'includes/widgets/login.php'; 
            include 'includes/widgets/register.php'; 
        }
    ?>
    
</div> 

					