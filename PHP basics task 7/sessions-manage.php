<?php

/**
 * Function to end a session.
 *   Used for terminating the existing session.
 *
 */
function end_session() {
  // Establish a session.
  session_start();
  // Unset the session.
  session_unset();
  // Destroy the session.
  session_destroy();
  // Navigate to the login page.
  header('location:login.php');
  exit;
}
