<?php
$array = array(
'name' => "Abdul samad",
'profession' => "Student",
'age' => "gender",
'Bachelor' => array (
  'matriculation' => "A Grade",
  'Intermediate' => "D Grade",
  'BSSE' => "Software Engnieering"
),
'hobbies' => array(
  'hob1' => 'cricket',
  'hob2' => 'rod games/Football',
  'hob3' => 'programming'
)
);
echo "Name" . $array['name'] . "Profession" . $array['profession'] . "Age" . $array['age'] . "<br>";
echo $array['Bachelor']['BSSE'];
echo 
 ?>
