<?php

// establish connection

$connection=odbc_connect('odbc','odbc','odbc');


if (!$connection){
    exit("Connection Failed - ".odbc_error().":".odbc_errormsg()."\n");
}

// execute select statement
$statement=odbc_exec($connection, "select issue_key, issue_pm from CR_WITHIN_CAD_SCOPE ");
if (!$statement){
    exit("Execution failed - ".odbc_error().":".odbc_errormsg()."\n");
}

// generate html code
echo "<html><head><title>Employees</title><head><body>";
echo "<table><tr>";
echo "<th>CR NUMBER</th>";
echo "<th>PM</th></tr>";

// fetch data
while (odbc_fetch_row($statement)) {
    $issue_key=odbc_result($statement,"issue_key");
    $issue_pm=odbc_result($statement,"issue_pm");

    // output data as rows in html table
    echo "<tr><td>$issue_key</td>";
    echo "<td>$issue_pm</td></tr>";
}

// close connection
odbc_close($connection);

// finalize html page code
echo "</body></table>";

?>

Note that the sample above generates HTML code from within a PHP script. It is also possible to embed PHP script within HTML:
<html>
<head>
    <title>Employees</title>
</head>
<body>
<table>
    <tr>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
    </tr>

    <?php

    // establish connection
    $connection=odbc_connect('Payroll','','');
    if (!$connection){
        exit("Connection Failed - ".odbc_error().":".odbc_errormsg()."\n");
    }

    // execute select statement
    $statement=odbc_exec($connection, "select first_name, last_name from employee");
    if (!$statement){
        exit("Execution failed - ".odbc_error().":".odbc_errormsg()."\n");
    }

    // fetch data and populate the table
    while (odbc_fetch_row($statement)) {
        $firstName=odbc_result($statement,"first_name");
        $lastName=odbc_result($statement,"last_name");
        echo "<tr><td>$firstName</td>";
        echo "<td>$lastName</td></tr>";
    }

    // close connection
    odbc_close($connection);

    ?>

</table>
</body>
</html>