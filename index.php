<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Default route
    $f3->route('GET /', function($f3) {
        
        $f3->set('username', 'jshmo');
        $f3->set('password', sha1('Password01'));
        $f3->set('title', 'Working with Templates');
        $f3->set('temp', 68);
        $f3->set('color', 'purple');
        $f3->set('radius', 10);
        $f3->set('bookmarks', array('http://www.cnet.com', 'http://www.reddit.com/r/news', 'http://edition.cnn.com/sport'));
        $f3->set('addresses', array('primary' =>
                                    '1000 Apple Ln. Seattle, WA 98999',
                                    'secondary' =>
                                    '2510 100th Court, Sea-Tac, WA 90000'));
        $f3->set('desserts', array('chocolate' => 'Chocolate Mousse',
                                   'vanilla' => 'Vanilla Custard',
                                   'strawberry' => 'Strawberry Shortcake'));
        $f3->set('preferredCustomer', true);
        $f3->set('lastLogin', strtotime('-1 week'));
        $pet = new Pet('Fido', 'pink');
        $f3->set('myPet', $pet);
        $pet2 = new Pet('Henrietta', 'purple');
        $f3->set('myPet2', $pet2);
        $f3->set('color', purple);
        
        echo Template::instance()->render('pages/info.html');
        
    });
    
    //Default route
    $f3->route('GET|POST /new-pet', function($f3) {
        
        
        //if the form has been submitted
        if(isset($_POST['submit'])) {
            //print_r($_POST);
            //Array ( [pet-name] => [pet-color] => Black [pet-type] => [submit] => Submit )
            
            //get the form data
            $color = $_POST['pet-color'];
            $type = $_POST['pet-type'];
            $name = $_POST['pet-name'];
            
            //validate
            include('model/validation-functions.php');
            
            if(!validColor($color)) {
                echo "<p>color is not valid<p>";
            }
            
            if(!validName($name)) {
                echo "<p> name is not valid </p>";
            }
            
            if(!validType($type)) {
                echo "<p> type is not valid </p>";
            }
        
        }
        

        $f3->set('colors', array('Pink', 'Blue', 'Red', 'Green', 'Yellow', 'Orange', 'Purple'));
    
        echo Template::instance()->render('pages/add-pet.html');
        
    });

    //Run fat free
    $f3->run();
    