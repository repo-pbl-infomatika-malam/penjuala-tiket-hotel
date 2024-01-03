<?php
$conn = mysqli_connect("localhost", "root", "", "hotel_ticket_management");

if (!$conn) {
  die("<script>alert('Connection Failed.')</script>");
};
