<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variable Types in PHP</title>
</head>
<body>

<?php
//$firstName = "John";
//echo "<p>Hi! My name is $firstName.</p>";
//$age = 25;
//echo "<p>I am $age years old.</p>";
//$eyeColor = "blue";
//echo "<p>My eyes are $eyeColor.</p>";
//$familyNames = array("John", "Jane", "Michael", "Sarah");
//echo "<p>The first person in my family is $familyNames[0].</p>";
//$isHungry = true;
$possible_states = ['Disgusting','Dirty','Neat'];
$room_filthiness = $possible_states [0];

if( $room_filthiness == 'Disgusting' ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == 'Dirty' ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}

echo "<br>";

$now = date("h");

if ($now >= 5 AND $now <= 9) {
  echo "Good Morning";
} else if ($now > 9 AND $now <= 12) {
  echo "Good Day";
} else if ($now > 12 AND $now <= 16) {
  echo "Good Afternoon";
} else if ($now > 16 AND $now <= 21) {
  echo "Good Evening";
} else if ($now > 21 AND $now < 5) {
  echo "Good Night";
}
echo "<br>";

if (isset($_GET['gender'])) {
  if ($_GET['gender'] == 'male') {
    $greet = 'Mister';
} else {
  $greet = 'Miss';
}
}

if (isset($_GET['age'])){
	if ($_GET['age'] < 12) {
    echo "Hello $greet Kiddo";
  } else if ($_GET['age'] >= 12 AND $_GET['age'] < 18) {
    echo "Hello $greet Teenager";
  } else if ($_GET['age'] >= 18 AND $_GET['age'] < 115) {
    echo "Hello $greet Adult";
  } else {
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
  }

}


?>
<form method="get" action="">
	<label for="age">...</label>
	<input type="number" name="age" min="0">
	<input type="submit" name="submit" value="Greet me now">

  <input type="radio" id="male" name="gender" value="male" checked />
  <label for="male">Male</label>

  <input type="radio" id="female" name="gender" value="female" />
  <label for="female">Female</label>
</form>
</body>
</html>
