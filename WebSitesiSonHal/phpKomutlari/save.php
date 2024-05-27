<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Document</title>
    <style>
        
    .projectButton {
      display: inline-block;
      padding: 10px 20px;
      height: auto;
      font-size: 20px;
      font-weight: bold;
      position: absolute;
      text-decoration: none;
      cursor: pointer;
      border: none;
      border-radius: 30px; 
      background-color: blue;
      color: white;
      transition: background-color 0.3s ease;
  }
  .projectButton:hover {
    background-color: darkblue;
}
    </style>
</head>
</html>
<?php
try
{
    $servername = "localhost:3306";
    $username = "efegulte_efegulte";
    $password = "Ananbeanan1";
    $dbname = "efegulte_mesajlar";

    // MySQL bağlantısını oluştur
    $database = new mysqli($servername, $username, $password, $dbname);
	if ($database->connect_error)
	{
    die("Connection Error: " . $conn->connect_error);
	}
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if($name != null && $email != null && $message)
    {
        $query_ = "INSERT INTO mesaj (Name, Mail, Message) VALUES ('$name', '$email', '$message')";
        if($database->query($query_) == true)
        {
            echo "<p style = 'font-size: 30px; text-align: center; margin: 2%;'>The message has been successfully saved.<a href='https://efegultekin.online/' class='projectButton'  target='_blank'>Return</a></p>";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else
    {
        echo "<p style = 'font-size: 30px; text-align: center;'>Please fill in all fields  <a href='https://efegultekin.online/' class='projectButton'  target='_blank'>Return</a></p>";
    }
 }
    catch(Exception $e)
    {
    echo $e->getMessage();
    }
?>