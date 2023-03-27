<html>
<head>
	<title>View Application</title>
</head>
    <body>
	<fieldset>
        <legend><h1>View Application</h1></legend>
        <form action="http://localhost/PRD%20management/view_app.php" method="post">
		<label for="application_id">Application id:</label>
		<input type="text" id="application_id" name="application_id"><br><br>
		<input type="submit" name="submit" value="View">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$application_id = $_POST['application_id'];
        $applications = file('applications.txt');
	
        foreach ($applications as $application) {
            $application_parts = explode('|', $application);
            if ($application_parts[1] == $application_id) {
                echo "<h2>" . $application_parts[0] . "</h2>";
                echo "<p>" . $application_parts[2] . "</p>";
            }
        }
    }
    ?>
    <a href="http://localhost/PRD%20management/app_management.php">Application Management</a>
    </fieldset>
    </body>
</html>    