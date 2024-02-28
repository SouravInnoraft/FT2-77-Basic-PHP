<?php

// Establish a session.
session_start();
// Unset the session.
session_unset();
// Destroy the session.
session_destroy();
header('location:/sessions/login.php');
exit;
