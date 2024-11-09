<?php
if($_SERVER['REQUEST_METHOD']==='POST') {
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
    define('DB_HOST', 'jdbc:mysql://localhost:3306/datenbank');
    define('DB_USER', 'root'); // Replace with your MySQL username
    define('DB_PASS', ''); // Replace with your MySQL password
    define('DB_NAME', 'datenbank'); // Replace with your database name
    var_dump(this);
    if (isset($_POST["search"])) {
        // (B1) SEARCH FOR USERS
        require "searchUsers.php";

        $sql = "SELECT ID_Employee, Update_Time FROM employee_db";
        $results = query($sql);
        var_dump($results);
        // (B2) DISPLAY RESULTS
        if (count($results) > 0) {
            foreach ($results as $r) {
                printf("<div>%s - %s</div>", $r["ID_Employee"], $r["Update_Time"]);
            }
        } else {
            echo "No results found";
        }
    }
}
?>