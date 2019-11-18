<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset="utf-8"/>
	</head>
	<body>
    <h2>ΠΙΝΑΚΕΣ ΜΕ ΔΕΙΚΤΕΣ ΚΑΙ ΟΝΟΜΑΤΑ</h2>
    <?php
        $student = array("id" => 789654,
                        "eponimo" => "Tsitsipas",
                        "onoma" => "Stefanos",
                        "email" => "sts@in.gr",
                        "age" => 21);
        foreach($student as $pointer => $value) {
            echo "<p>".$pointer." = ".$value."</p>";
        }
    ?>
    <p>Κωδικός: <?=$student["id"]?></p>
    <p>Επώνυμο: <?=$student["eponimo"]?></p>
    <p>Όνομα: <?=$student["onoma"]?></p>
    <p>Email: <?=$student["email"]?></p>
    <p>Ηλικία: <?=$student["age"]?></p>

    <h2>ΜΕΘΟΔΟΙ ΣΤΗΝ PHP</h2>
    <?php
        function test() {
            echo "Η πρώτη μου συνάρτηση!!!";
        }
        test();

        function grdate() {
            $dates = array("Κυριακή","Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο");
            $day = date("w",time());
            $month = date("n",time())-1;
            echo"<p>".$dates[$day]." ".date("d/m/Y",time())."</p>";
        }
        grdate();
    ?>
    </body>
</html>