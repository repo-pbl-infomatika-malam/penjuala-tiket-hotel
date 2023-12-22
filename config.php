<?php
$conn = mysqli_connect("localhost:3307", "root", "", "hotel_ticket_management");

if (!$conn) {
  die("<script>alert('Connection Failed.')</script>");
};

?>