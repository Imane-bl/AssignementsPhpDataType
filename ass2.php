<?php

echo gettype(100);
echo '<br>';
echo get_debug_type(100);
echo '<br>';


echo print_r(100);
echo '<br>';

echo var_dump(100);
echo '<br>';

echo is_int(100);
echo '<br>';

//100

// Method One
// Method Two
// Method Three => Optional


//ASS3
echo '-----ASS3------------------------';
echo '<br>';

echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$PHP'\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
echo '<br>';

//ASS4
echo '-----ASS4------------------------';
echo '<br>';

echo  nl2br("We \n Love \n Elzero \n Web \n School");

// Needed Output
/*
We
Love
Elzero
Web
School
*/


//ASS5
echo '-----ASS5------------------------';
echo '<br>';

echo nl2br(<<<'ass5'
Hello "'Elzero'""
We Love $Programming$'
Languages Specially "PHP" 
ass5);

// Needed Output
/*
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
*/
echo '<br>';


//ASS6
echo '-----ASS6------------------------';
echo '<br>';

$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
//Hello \PHP\ We Love Programming

echo '<br>';
echo '-----ASS7------------------------';
echo '<br>';

echo is_string("Hello PHP");
echo '<br>';
echo gettype((int)"Hello PHP");

// Needed Output
/*1
integer*/


echo '<br>';
echo '-----ASS8------------------------';
echo '<br>';
echo '<pre>';
print_r([
    "FrontEnd"=> [
    "Html",
    "css",
    "js" => [
         "Vuejs"=>[
        "v2",
        "v3",

           ],
    
    0=>"Reactjs",
    1=> "Svelte",
    ],
      
    "BackEnd"=> [
    
      0 => "PHP",
      1 => "MySQL",
      2 => "Security",
    ],
 0=>"git",
1=>"github",
"testing"=>[
    0 => "Unit Testing",
    1 => "End To End",
    2 => "Integration",
]
]
]);
echo '<pre>';

?>
