<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['action']) && $_POST['action'] === 'reject') {
    // Execute the SQL query here
    $sql = "UPDATE accounts SET callee_name=NULL, callee_link=NULL, upcomming_call=NULL WHERE username='Boss'";
    $run_sql = mysqli_query($conn, $sql);

    echo 'SQL query executed successfully';
  }
}
?>
