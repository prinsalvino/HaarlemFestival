<?php
require("config.php");
require("DB.php")
session_start();
$procedure = isset( $_GET['procedure'] ) ? $_GET['procedure'] : "";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if ( $procedure != "login" && $procedure != "logout" && !$username ) {
    login();
    exit;
}

switch ( $procedure ) 
{

    case 'login':
        login();
    break;

    case 'logout':
        logout();
    break;

    case 'newEvent':
        newEvent();
    break;

    case 'editEvent':
        existingEvent();
    break;

    case 'deleteEvent':
        deleteEvent();
    break;

    default: 
    dashboard();
}


function newEvent() {

    $results = array();
    $results['pageTitle'] = "New Event";
    $results['formProcedure'] = "newEvent";
  
    if ( isset( $_POST['saveChanges'] ) ) {
  
      // User has posted a new event: save the new event form
      $event = new EventPage;
      $event->storeFormValues( $_POST );
      $event->insert();
      header( "Location: admin.php?status=changesSaved" );
  
    } elseif ( isset( $_POST['cancel'] ) ) {
  
      // User has cancelled their edits return to dashboard
      header( "Location: admin.php" );
    } else {
  
      // User has not posted the edit, display the form
      $results['event'] = new EventPage;
      require( TEMPLATE_PATH . "/admin/editEvent.php" );
    }
  
  }

  function editEvent() {

    $results = array();
    $results['pageTitle'] = "Edit Event";
    $results['formProcedure'] = "editEvent";
  
    if ( isset( $_POST['saveChanges'] ) ) {
  
      // User has posted the edit, so save the  changes
  
      if ( !$event = EventPage::getId( (int)$_POST['ticket_id'] ) ) {
        header( "Location: admin.php?error=EventNotFound" );
        return;
      }
  
      $event->storeFormValues( $_POST );
      $event->update();
      header( "Location: admin.php?status=changesSaved" );
  
    } elseif ( isset( $_POST['cancel'] ) ) {
  
      // User has cancelled their edits return to edits page
      header( "Location: admin.php" );
    } else {
  
      // Edit form not posted yet so redisplay the form
      $results['event'] = EventPage::getId( (int)$_GET['ticket_id'] );
      require( TEMPLATE_PATH . "/admin/editEvent.php" );
    }
  
  }

  function deleteEvent() {

    if ( !$event = EventPage::getId( (int)$_GET['ticket_id'] ) ) {
      header( "Location: admin.php?error=eventNotFound" );
      return;
    }
  
    $event->delete();
    header( "Location: admin.php?status=EventDeleted" );
  }
  
  /*
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
  
    require( TEMPLATE_PATH . "/admin/listEventPage.php" );
    
  }
  */









?>