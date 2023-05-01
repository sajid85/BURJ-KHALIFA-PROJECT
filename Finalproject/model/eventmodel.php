<?php

require_once 'db.php';

class event
{
  public function createevent($title, $description)
  {
    $conn = getConnection();
    $sql = "INSERT INTO events (title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
  }

  public function getevents()
  {
    $conn = getConnection();
    $sql = "SELECT * FROM events";
    $result = mysqli_query($conn, $sql);
    $events = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    return $events;
  }
}

?>