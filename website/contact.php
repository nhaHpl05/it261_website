<?php
include('config.php'); 
include('includes/header.php');

?>
  <div id="wrapper">
    <h1> This is the content for my home page</h1>
    <div id="hero">
      </div>
    <main>
      <h2>Welcome to my contact page</h2>   
      <?php 
            include('includes/form.php');
      ?>
    </main> 
      
    <aside>
     <h3> This is my headline 3 in my beautiful aside</h3>
    </aside>
      
  </div> <!-- end wrapper--> 
    
<?php 
    include('includes/footer.php'); ?>