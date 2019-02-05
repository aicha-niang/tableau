<!doctype html>
<html>
<head> <title>tableau</title>
<meta charset="utf-8">
<link rel ="stylesheet" href="BB.css">

</head>
<body>

<center> <table border> </center>	
<tr>
<td>
 <p></p>
 <p><mark></mark></p>

 <img src="img/BeautyPlus_20180927151737053_save.jpg"  height=100 width=100/>
 <form method="post" action ="tableau2.php">

<?php
$personne=array(
"prenom:"=>"aicha",
"nom:"=>"niang",
"addresse:"=>"dakar",
"tel:"=>"772437658",
"Mail:"=>"niangaicha096@gmail.com",
"SLACK:"=>"AICHA-NIANG",
"github:"=>"github.com/aicha-niang",
);
foreach($personne as $key => $values){
	echo " ".$key." ".$values."</br> "; 
}
?>
</td>
  </tr>
  </table border>
</body>
</html>