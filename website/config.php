<?php

date_default_timezone_set('America/Los_Angeles');

define ('THIS_PAGE', basename($_SERVER['PHP_SELF'])); 
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['people.php']= 'People';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

switch(THIS_PAGE) {
        
    case 'index.php':
        $title = 'Home page of our Website Project';
        $body = 'home';
                break;
        
    case 'about.php':
        $title = 'About page of our Website Project';
        $body = 'about';
                break;
        
    case 'daily.php':
        $title = 'Daily page of our Website Project';
        $body = 'daily';
                break;
        
    case 'people.php':
        $title = 'People page of our Website Project';
        $body = 'peple';
                break;
        
    case 'contact.php':
        $title = 'Contact page of our Website Project';
        $body = 'contact';
                break;
    
    case 'gallery.php':
        $title = 'Galerry page of our Website Project';
        $body = 'gallery';
                break;
}

// creating header nav function

function makeLinks($nav) {
    $myReturn = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $myReturn .= '<li><a class="active" href="'.$key. '">' .$value. '</a> </li>';
        } else {
            $myReturn .= '<li><a href="'.$key. '">' .$value. '</a> </li>';
        } // end else       
    } // end foreach
    return $myReturn;  
}


// change php file name of html valid
switch(THIS_PAGE) {
    case 'index.php':
    $tail = 'index';
    break;
        
    case 'about.php':
    $tail = 'about';
    break;
    
    case 'daily.php':
    $tail = 'daily';
    break;
        
    case 'people.php':
    $tail = 'people';
    break;
    
    case 'contact.php':
    $tail = 'contact';
    break;
        
    case 'gallery.php':
    $tail = 'gallery';
    break;        
}

// index random photos function 
function randomPhotos() {
        $photos[0] = 'photo1';
        $photos[1] = 'photo2';
        $photos[2] = 'photo3';
        $photos[3] = 'photo4';
        $photos[4] = 'photo5';

        echo '<br>';
        $i = rand(0,4);
        $selectedImage = 'images/' .$photos[$i]. '.jpg';

        echo '<img class="index_photos" src="' .$selectedImage. ' " alt="' .$photos[$i]. '">';
} // end function randomPhotos

// form.php

$fisrtName = '';
$lastName = '';
$email = '';
$phone = '';
$colors = '';
$flower = '';
$agree = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$phoneErr = '';
$colorsErr = '';
$flowerErr = '';
$agreeErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['firstName'])) {
        $firstNameErr = 'Please enter your first name';
    }
    
    if (empty($_POST['lastName'])) {
        $lastNameErr = 'Please enter your last name';
    }
    
    if (empty($_POST['email'])) {
        $emailErr = 'Please fill in your email';
    }
    
    if (empty($_POST['phone'])) {
        $phoneErr = 'Please fill in your phone number';
        
    } elseif (array_key_exists('phone', $_POST)){
       
       if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if phone input is not in xxx-xxx-xxxx format
            $phoneErr = 'Invalid format!';
        } else{
            $phone = $_POST['phone'];
        }
    }
    
    if (empty($_POST['colors[]'])) {
        $colorsErr = 'You can choose at least one color!';
    } else {
        $colors = ($_POST['colors[]']);
    }
    
    if ($_POST['flower'] == 'NULL') {
        $flowerErr = 'You could pick one of flower option!';
    }
    
    if
        (empty($_POST['agree'])) {
        $agreeErr = 'Please click agree before submit';
    }
    
    function pickColors() {
        $colorsReturn = '';
        // if colors array is not empty, implode it
        
        if(!empty($_POST['colors'])) {
            $colorsReturn = implode(', ', $_POST['colors']);
        } return $colorsReturn;
    } // close function
    
    
     if (!empty($_POST['firstName']) &&
         !empty($_POST['lastName']) &&
         !empty($_POST['email']) &&
         !empty($_POST['phone']) &&
         !empty($_POST['colors[]']) &&
         ($_POST['flower'] != 'NULL') &&
         !empty($_POST['agree']) ) {
         
         $firstName = ($_POST['firstName']);
         $lastName = ($_POST['lastName']);
         $email = ($_POST['email']);
         $phone = ($_POST['phone']);
         $flower = ($_POST['flower']);
         $agree = ($_POST['agree']);
         
         $to = 'xanhsau11@gmail.com';
         $subject = 'Email from user' .date('m/d/y');
         $body = 'First and last name: ' .$firstName. ' ' .$lastName. '' .PHP_EOL.
         'Email: ' .$email. PHP_EOL.
         'Phone: ' .$phone. PHP_EOL.
         'Favorite colors: ' .pickColors() .PHP_EOL. 
         'Favorite flower: ' .$flower . '';
         
         $headers = array(
            'From' => 'no-reply@aegis.dreamhost.com',
            'Reply-to' => '' .$email. '');
         
         mail($to, $subject, $body, $headers);
         header('Location:thx.php');
     }
} //end request_method





