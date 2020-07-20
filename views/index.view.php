<?php session_start(); 

if($_SESSION){
  header('Location: /home');
} else {
  header('Location: /login');
}
?>
