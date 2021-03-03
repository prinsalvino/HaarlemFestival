<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
require("DB.php");
session_start();
$action = $_GET['action'];
$username = $_SESSION ? $_SESSION['username'] : "";

switch ( $action ) 
{

    case 'login':
        login();
    break;

    case 'logout':
        logout();
    break;

    case 'addEvent':
        addEvent();
    break;

    case 'editEvent':
        editEvent();
    break;

    case 'deleteEvent':
        deleteEvent();
    break;

    default: 
    dashboard();
}

if ( $action != "login" && $action != "logout" && !$username ) {
  //login();
  //exit;
}


function addEvent() {
  $time = $_POST['start-time'] . "-" . $_POST['end-time'];

  $connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");
  $query = "
          INSERT INTO tickets (`event`, `date`, `time`, `location`, `special`)
          VALUES('" . $_POST['event'] . "', '" . $_POST['date'] . "', '" . $time . "', '" . $_POST['location'] . "', '" . $_POST['special'] . "' ) 
  ";
  $connect->query($query);// building a query from the post variables
  header('Location: listEvents.php?success=1');
}

  function editEvent() {
    if ( isset( $_POST['saveChanges'] ) ) {
      $time = $_POST['start-time'] . "-" . $_POST['end-time'];

      $connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");
      $query = "UPDATE tickets 
                SET `event` = '" . $_POST['event'] . "', " .
                "   `date` = '" . $_POST['date'] . "', " . 
                "   `time` = '" . $time . "', " . 
                "   `location` = '" . $_POST['location'] . "', " .  // building a query from the post variables
                "   `special` = '" . $_POST['special'] . "' " . 
                "WHERE ticket_id = " . $_POST['ticket_id'];
       $connect->query($query);
       header('Location: listEvents.php?success=1');
    }
  }

  function deleteEvent() {

    //if ( !$event = EventPage::getId( (int)$_GET['ticket_id'] ) ) {
      $connect = mysqli_connect("localhost","hfitteam1","3FxmuBcR","hfitteam1_db");
      $query = "DELETE FROM tickets 
                WHERE ticket_id = " . $_GET['ticket_id'];
       $connect->query($query);
       header('Location: listEvents.php?success=1');
    //} 
    
  }

  
  
  
  function listEvents() {
    $results = array();
    $data = EventPage::getList();
    $results['events'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = "All EventPage";
  
    if ( isset( $_GET['error'] ) ) {
      if ( $_GET['error'] == "eventNotFound" ) $results['errorMessage'] = "Error: Article not found.";
    }
  
    if ( isset( $_GET['status'] ) ) {
      if ( $_GET['status'] == "changesSaved" ) $results['statusMessage'] = "Your changes have been saved.";
      if ( $_GET['status'] == "eventDeleted" ) $results['statusMessage'] = "Article deleted.";
    }
  
    require( TEMPLATE_PATH . "/admin/listEvents.php" );
    
  }

  function dashboard() {
    echo "Uh oh. Something went wrong!";
  }
?>