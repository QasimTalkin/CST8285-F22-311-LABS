<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>OOP in PHP</title>
</head>
<body>

  <?php 
   class Student {
    private $user_name;
     public $email;
    public function __construct($un) {
      echo "The Class " . __CLASS__ . " was instantiated <br>";
      $this->user_name = $un;
    }
    
    public function writeName() {
      return "My Name is " . $this->user_name;
    }
    
    
    public function __toString() {
      return "Hi";
    }

    // public function __destruct() {
    //   echo "The Class " . __CLASS__ . " was destroyed <br>";
    //   echo "The Class " . $this->user_name . " was destroyed <br>";
    //  }
    
    public function __clone() {
      $this->user_name = $this->user_name . "(cloned) <br>";
    }
    
   }
   
   Class StudentLeader extends Student {
     public $prof_access;
     
     public function __construct($un, $pa) {
       parent::__construct($un);
       $this->prof_access = $pa;
     }
     
     public function writeName() {
       return "My Name is " . $this->user_name . " and I am a leader";
     }
    
   }
   
   
   $userOne = new Student("Qasim");
   
   echo $userOne;
  //  $userTwo = new StudentLeader("Abul", true);
  //  $userThree = clone $userOne;
   
 
   echo "The Class is " . get_class($userOne) . "User Name is " . $userOne->user_name . "<br>";
   
   
   
  //  echo $userOne->writeName() . "<br>";
  //  echo $userTwo->writeName() . "<br>";
  //  echo $userThree->writeName() . "<br>";
  // print_r( get_class_methods('Student'));
  // echo "<br>";
  // print_r( get_class_vars('Student'));
  

  ?>
  
  <button  onClick=<?php
    echo "window.location.href='static.php'";
  ?>>
    Go to Static Page
  </button>?
</body>
</html>