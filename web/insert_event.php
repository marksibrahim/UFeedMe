<?php 
include("session.php");

if (isset($_POST['submit']))
  {
    if(isset($_POST["submit"])){
         $name = $_POST["name"];
         $food = $_POST["food"];
         $location = $_POST["location"];
         $start_time = $_POST["start_date"]." ".$_POST["start_time"];
         $end_time = $_POST["end_date"]." ".$_POST["end_time"];
         $picture = $_POST["picture"];

         add_event($DBCONN, $name, $food, $location, $location, $start_time, $end_time, $picture);
}

?>

  }
include("header.php") 
?>
<body>
WELCOME <?php echo $_SESSION["NETID"]; ?>! <br>

<form class="basic-grey" method="POST" action="insert_event.php">
	<h1>Submit an Event</h1>

	<label>
		<span>Event Name:</span>
		<input type="text" name="name" placeholder="Event name">
	</label>
	<label>
		<span>Description:</span>
		<input type="text" name="food" placeholder="Event info and food offered">
	</label>
	<label>
		<span>Location:</span>
		<input type="text" name="location" placeholder="Location name">
	</label>

	<div id="basicExample">
		<label>
			<span>Date:</span>
	    	<input name="start_date" type="text" class="date start" placeholder="Start date" />
		</label>
		<label>
			<span>&nbsp;</span>
		    	<input type="text" name="end_date" class="date end" placeholder="End date" />
		    </label>
		<label>
			<span>Time:</span>
	    	<input name="duration" name="start_time" type="text" class="time start" placeholder="Start time" />
	    </label>
	    <label>
			<span>&nbsp;</span>
	    	<input type="text" name="end_time" class="time end" placeholder="End time"/>
	    </label>

	</div>

	<label>
		<span>&nbsp;</span>
		<input class="button" type="submit" name="submit" value="Feed Us!">
	</label>
<form>

<?php include("footer.php") ?>
</body>
</html>
