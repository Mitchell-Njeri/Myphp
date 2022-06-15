<?php
//all your code
//$myName="Mitchell Njeri";
//echo $myName
//arrays
$students = array("Mitchell", "Gertrude", "Diana", "Jamal" ,"Roy");
echo $students[2];

//Associative array
$myMarks = array ("Assessments"=> 25,
                   "CATS" => 15,
                   "Projects" => 35,
                   "Attendance" => 8,
                );
    
 echo "My Projects Marks:" .$myMarks["Projects"] ; 


 //Multidimentional arrays
 $webdevtechnologies = array(
    'frontend' => array('HTML','CSS','JS','Bootstrap'),
    'backend' => array('PHP','Python','Java','JS'),
    'framework' => array('laravel','django','springboot','flutter'),
    'database' => array('mysQl','postgresQl','mongoDB','firebase'),

 );
echo $webdevtechnologies['frontend'][2];
echo $webdevtechnologies['framework'][2];
echo $webdevtechnologies['database'][0];
 
 






?>
