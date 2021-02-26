

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
  <fieldset class="form-style">
    <label>First Name</label>
    <input type ="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']) ;?>">
    <span><p><?php echo $firstNameErr ;?></p></span>
      
    <label>Last Name</label>
    <input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']) ;?>">
    <span><p><?php echo $lastNameErr ;?></p></span>
      
    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
    <span><p><?php echo $emailErr ;?></p></span>
      
    <label>Phone Number</label>
    <input type="tel" placeholder="xxx-xxx-xxxx" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
    <span><p><?php echo $phoneErr ;?></p></span>
    
    <label>Your favorite colors</label>
    <ul>
        <li><input type="checkbox" name="colors[]" value="red" <?php if(isset($_POST['colors']) && (in_array("red", $colors)) ) echo 'checked' ;?>>Red</li>
        <li><input type="checkbox" name="colors[]" value="blue" <?php if(isset($_POST['colors']) && in_array('blue', $colors)) echo 'checked' ;?>>Blue</li>
        <li><input type="checkbox" name="colors[]" value="yellow">Yellow</li>
        <li><input type="checkbox" name="colors[]" value="black">Black</li>
        <li><input type="checkbox" name="colors[]" value="white">White</li>
        <li><input type="checkbox" name="colors[]" value="green">Green</li>
    </ul>
    <span><p><?php echo $colorsErr ;?></p></span>
      
    <label>What flower do you like</label>
    <select name="flower">
    <option value="NULL" <?php if(isset($_POST['flower']) && $_POST['flower'] == 'NULL') echo 'unselected' ;?>>Select one</option> 
    <option value="rose"  <?php if(isset($_POST['flower']) && $_POST['flower'] == 'rose') echo 'selected' ;?>>Rose</option>
    <option value="gerbera" <?php if(isset($_POST['flower']) && $_POST['flower'] == 'gerbera') echo 'selected' ;?>>Gerbera</option>
    <option value="tulip" <?php if(isset($_POST['flower']) && $_POST['flower'] == 'tulip') echo 'selected' ;?>>Tulip</option>
    <option value="lily" <?php if(isset($_POST['flower']) && $_POST['flower'] == 'lily') echo 'selected' ;?>>Lily</option>
    <option value="orchid" <?php if(isset($_POST['flower']) && $_POST['flower'] == 'orchid') echo 'selected' ;?>>Orchid</option>    
    </select>
    <span><p><?php echo $flowerErr ;?></p></span>  
      
    <label>Agree To Send</label>
    <ul>
        <li><input type="radio" name="agree" value="agree" <?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked' ;?>></li> 
    </ul>
    <span><p><?php echo $agreeErr ;?></p></span>
      
    <input type="submit" value="Submit">
    <p><a href="">Reset</a></p>
  </fieldset>      
</form>