<!DOCTYPE html>
<head>
<title>Application</title>
</head>
<body>
<div dir="ltr" style="text-align: left;" trbidi="on">
To,<br />
<?php echo $_POST["to"]; ?><br />
<?php echo $_POST["department"]; ?> Department,<br />
SVBIT, Vasan.<br />
<br />
Date :<?php echo date("d/m/Y"); ?><br />
<div style="text-align: center;">
<b>Subject: Application for Leave</b></div>
<div style="text-align: center;">
<br /></div>
Respected Sir/Madam,<br />
<br />
Myself,<?php echo $_POST["name"]; ?> from <?php echo $_POST["department"]; ?> class En-no <?php echo $_POST["en-no"]; ?>.I have to attend a <?php echo $_POST["reason"]; ?> from <?php echo $_POST["from_date"]; ?> to <?php echo $_POST["to_date"]; ?>.So, I request you to grant my leave for given dates.
<br />
<br />
Awaiting your favourable reply,Thank you.<br />
</div>
<br />
<div style="text-align: center;">
</div>
Yours Faithfully,<br />
<?php echo $_POST["name"]; ?><br />
<?php echo date("d/m/Y"); ?></div>
</body>
</html>