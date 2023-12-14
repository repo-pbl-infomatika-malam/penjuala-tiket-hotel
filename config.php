<?php
$conn = mysqli_connect("localhost", "root", "", "hotel_ticket_management");

if (!$conn) {
  echo "failed to connected";
} else {
  echo "success connected";
};
