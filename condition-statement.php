<?php
function checkeligibilitytovote()
{
    $age =20;
    $myname ="Mitchell Njeri";
    if($age >=18)
    {
        echo "$myname You are eligible to vote";
    }
    else
    {
        "$myname You are not eligible to vote";
    }
}

//checkeligibilitytovote();

//grading
function gradingsystem()
{
    $marks =76;
if($marks>=80)
{
    $grade = "A"(Plain);
}
else if($marks>=75)
{
    $grade = "A-";
}
else if($marks>=65)
{
    $grade ="B+";
}
else if($marks>=60)
{
    $grade ="B"(Plain);
}
else if ($marks>=50)
{
    $grade ="C+";
}
else {
    $grade ="Fail";
}
echo"Your score is:$grade";
}
gradingsystem();
?>