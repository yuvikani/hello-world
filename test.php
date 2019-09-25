<?php
// $level = 1;
// $previledged_level = Array(
//     // level one layer
//     array("level" => 1, "State" => Array( "Karnataka","Tamil Nadu") ),
//     // level two layer
//     array("level" => 2, "City" => Array( Array( "Karnataka" => Array("Bangalore","MySore") ), Array( "Tamil Nadu" => Array("Chennai","Trichy")) ) ),
//     // level three layer
//     array("level" => 2, "block" => Array( "Block1","Block2") ) // Need to modify
//     );
//     // $finalResult = [];
//     // foreach ($previledged_level as $key => $value) {
//     //     if($level = "1"){
//     //         $finalResult[$key] = $value;
//     //     }
//     // }
// echo "<pre>";
// print_r($previledged_level);exit;
?>

<?php
// $priviledgeArea = Array(
//    // level one layer
//    array("level" => 1, "National" => Array( "Karnataka","Tamil Nadu") ),
//    // level two layer
//    array("level" => 2, "State" => Array( Array( "Karnataka" => Array("Bangalore","MySore") ), Array( "Tamil Nadu" => Array("Chennai","Trichy")) ) ),
//    // level three layer
//    //array("level" => 3, "block" => Array( Array( "Karnataka" => Array("Bangalore" =>Array("Ecity","Kormangala")),Array("Mysore" =>Array("ABC","PQR"))) ), Array( "Tamil Nadu" => Array("Chennai","Trichy"))) 
//    array("level" => 3, "City" => Array( Array( "Karnataka" => Array(Array("Bangalore" =>Array("Ecity","Kormangala")),Array("Mysore" =>Array("ABC","PQR")))), Array( "Tamil Nadu" => Array(Array("Chennai"=>Array("XYA","LMN")),Array("Trichy" =>Array("kjl","opg"))))) )
//    );
$priviledgeArea = array (
     "National" => 
     array (
       'Karnadaka' => 
       array (
         'Bangalore' => 
         array (
           'SouthBlock' => 
           array (
             'schoolname' => 'Mindspark Demo School',
           ),
         ),
       ),
      ),
);
 
echo "<pre>";
print_r($priviledgeArea);
//echo json_encode($priviledgeArea);
?>

