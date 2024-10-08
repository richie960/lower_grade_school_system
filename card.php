<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "class1";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$totalStudents = 0;
$totalAmount = 0;
$totalBalance = 0;
$countStatusOne = 0;

// 1. Count total rows in the students table
$sqlCountStudents = "SELECT COUNT(*) AS total FROM students";
$resultCountStudents = $conn->query($sqlCountStudents);

if ($resultCountStudents->num_rows > 0) {
    $row = $resultCountStudents->fetch_assoc();
    $totalStudents = $row['total'];
}

// 2. Calculate total Amount in studentfees table
$sqlTotalAmount = "SELECT SUM(Amount) AS totalAmount FROM studentfees WHERE status = 1 AND complete IS NULL";
$resultTotalAmount = $conn->query($sqlTotalAmount);

if ($resultTotalAmount->num_rows > 0) {
    $row = $resultTotalAmount->fetch_assoc();
    $totalAmount = $row['totalAmount'];
}

// 3. Calculate total balance for rows with status 0
$sqlBalanceSum = "SELECT DISTINCT adno, class, term FROM studentfees WHERE status != 1 AND complete IS NULL";
$resultBalanceSum = $conn->query($sqlBalanceSum);

if ($resultBalanceSum->num_rows > 0) {
    while ($row = $resultBalanceSum->fetch_assoc()) {
        $adno = $row['adno'];
        $class = $row['class'];
        $term = $row['term'];
        
        // Calculate balance for this unique student, class, and term
        $balance = calculateBalance($conn, $adno, $class, $term);
        $totalBalance += $balance;
    }
}


// 4. Count rows in studentfees with status equal to 1
$sqlCountStatusOne = "SELECT COUNT(DISTINCT adno, class, term) AS count FROM studentfees WHERE status = 1 AND complete IS NULL";
$resultCountStatusOne = $conn->query($sqlCountStatusOne);

if ($resultCountStatusOne->num_rows > 0) {
    $row = $resultCountStatusOne->fetch_assoc();
    $countStatusOne = $row['count'];
}



// Close the connection


// Output the total fees
//echo "The total fees across all classes is: " . $totalFees;
// Close the database connection
$conn->close();

// Print the results
//echo "Total number of students: $totalStudents\n";
//echo "Total Amount in studentfees: $totalAmount\n";
//echo "Total balance for rows with status 0: $totalBalance\n";
//echo "Number of rows in studentfees with status 1: $countStatusOne\n";

// Function to calculate balance for a student in a specific class and term
function calculateBalance($conn, $adno, $class, $term) {
    // Initialize the balance
    $balance = 0;

    // Get the total paid amount for the student, ensuring no double-counting for the same `adno`, `class`, `term`
    $sqlPaid = "SELECT SUM(Amount) AS totalPaid
                FROM (SELECT DISTINCT adno, class, term, Amount
                      FROM studentfees
                      WHERE adno = ? AND class = ? AND term = ? AND complete IS NULL) AS distinct_payments";
    $stmtPaid = $conn->prepare($sqlPaid);
    $stmtPaid->bind_param("sss", $adno, $class, $term);
    $stmtPaid->execute();
    $stmtPaid->bind_result($totalPaid);
    $stmtPaid->fetch();
    $stmtPaid->close();

    // Get term fees for the class and term from respective class table (classone, classtwo, etc.)
    $termColumn = $term;
    $sqlTermFees = "SELECT {$termColumn} FROM {$class} LIMIT 1"; // Ensure only one row is fetched
    $stmtTermFees = $conn->prepare($sqlTermFees);
    $stmtTermFees->execute();
    $stmtTermFees->bind_result($termFees);
    $stmtTermFees->fetch();
    $stmtTermFees->close();

    // Calculate balance
    $balance = $termFees - $totalPaid;

    return $balance;
}



?>
