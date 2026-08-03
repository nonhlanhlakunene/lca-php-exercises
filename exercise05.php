<!-- ### Handling Form Data with $_REQUEST
Create an HTML form with fields for "Name," "Email," and "Message." Write a PHP script to handle the form submission using $_REQUEST. Display the submitted data in the format:
  • *"Name: John, Email: john@example.com, Message: Hello there!"* -->
  <?php 
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];
  echo "<b>Name: </b>".$name. ", <b>Email: </b>".$email. ", <b>Message: </b>".$message;
  } else { ?>
  <!DOCTYPE html>
  <html>
  <head>
  <title>Exercise 5</title>
  </head>
  <body>
  <form action="exercise05.php" method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  Message: <input type="text" name="message"><br>
  <input type="submit">
  </form>
  </body>
  </html>
  <?php } ?>
<br>
<!-- 2. ### Server Details with $_SERVER
Use $_SERVER to display the following server details:
• Host name
• PHP version
• Request method used
   -->

<?php echo 'Task 2 <br>';
echo "Host name: ". $_SERVER['HTTP_HOST']. "<br>";
echo "PHP version: ". PHP_VERSION. "<br>";
echo 'Request method used: '.$_SERVER['REQUEST_METHOD']. "<br>";
?>
<br>

<!-- 3. ### Database Connection
    Write a script to connect to a MySQL database. Create a table users with fields id, name, and email. Insert a sample record. -->

<?php echo 'Task 3 <br>';
$db_server ='localhost';
$db_user ='root';
$db_password = '';
$db_name ='lc';
$conn ='';

try {
  $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
} catch (mysqli_sql_exception) {
  echo "Database not connected <br>";
}
if ($conn) {
  echo 'Database connected <br>';
}

// $sql = "INSERT INTO users (name, email) VALUES ('John', 'john@example.com')";

// if (mysqli_query($conn, $sql)) {
//   echo 'Record inserted <br>';
// } else {
//   echo 'Insert failed <br>';
// }
?>
<br>
<!-- 4. ### CRUD Operations
    • Write scripts to insert, retrieve, update, and delete records from the users table.
    • Example: Update a user's email and delete a user by their ID. -->
  
<?php echo 'Task 4 <br>';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
}

$sql = "UPDATE users SET email = 'newemail@example.com' WHERE id = 1";
mysqli_query($conn, $sql);

$sql = "DELETE FROM users Wi did HERE id = 2";
mysqli_query($conn, $sql);
?>
<br>

<!-- 5. ### Final Project
    • Create a web form to collect user data (Name, Email, and Message).
    • Save the data into the database.
    • Display all records in an HTML table with options to edit or delete individual entries. -->
<?php echo 'Task 5 <br>';
$db_server = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'lc';
$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

// Handle DELETE (from link click)
if (isset($_GET['delete'])) {
  $delete_id = $_GET['delete'];
  $sql = "DELETE FROM users WHERE id = $delete_id";
  mysqli_query($conn, $sql);
}

// Handle EDIT SAVE (from edit form submission)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_id'])) {
  $edit_id = $_POST['edit_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "UPDATE users SET name='$name', email='$email', message='$message' WHERE id=$edit_id";
  mysqli_query($conn, $sql);
}

// Handle new record submission (Final Project form)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && !isset($_POST['edit_id'])) {
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];

  $sql = "INSERT INTO users (name, email, message) VALUES ('$name', '$email', '$message')";
  mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Final Project</title>
</head>
<body>

<h3>Add New User</h3>
<form action="exercise05.php" method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  Message: <input type="text" name="message"><br>
  <input type="submit" value="Save">
</form>

<h3>All Users</h3>
<table border="1" cellpadding="8">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Actions</th>
  </tr>
  <?php
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
    // If this row's id matches the "edit" link clicked, show an edit form instead
    if (isset($_GET['edit']) && $_GET['edit'] == $row['id']) {
      echo "<tr>";
      echo "<td colspan='5'>";
      echo "<form action='exercise05.php' method='post'>";
      echo "<input type='hidden' name='edit_id' value='" . $row['id'] . "'>";
      echo "Name: <input type='text' name='name' value='" . $row['name'] . "'><br>";
      echo "Email: <input type='text' name='email' value='" . $row['email'] . "'><br>";
      echo "Message: <input type='text' name='message' value='" . $row['message'] . "'><br>";
      echo "<input type='submit' value='Save Changes'>";
      echo "</form>";
      echo "</td>";
      echo "</tr>";
    } else {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['message'] . "</td>";
      echo "<td>";
      echo "<a href='exercise05.php?edit=" . $row['id'] . "'>Edit</a> ";
      echo "<a href='exercise05.php?delete=" . $row['id'] . "'>Delete</a>";
      echo "</td>";
      echo "</tr>";
    }
  }
  ?>
</table>

</body>
</html>