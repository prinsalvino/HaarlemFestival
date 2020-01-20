<?php
require("DB.php");
session_start();
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if ( $procedure != "login" && $procedure != "logout" && !$username ) {
    login();
    exit;
}

switch ( $action ) 
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
        editEvent();
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
    $results['formAction'] = "newEvent";
  
    if ( isset( $_POST['saveChanges'] ) ) {
  
      // User has posted a new event: save the new event form
      $event = new EventPage;
      $event->storeFormValues( $_POST );
      $event->insert();
      header( "Location: listEvents.php?status=changesSaved" );
  
    } elseif ( isset( $_POST['cancel'] ) ) {
  
      // User has cancelled their edits return to dashboard
      header( "Location: listEvents.php" );
    }
  
  }

  function editEvent() {

    $results = array();
    $results['pageTitle'] = "Edit Event";
    $results['formAction'] = "editEvent";
  
    if ( isset( $_POST['saveChanges'] ) ) {
  
      // User has posted the edit, so save the  changes
  
      if ( !$event = EventPage::getId( (int)$_POST['ticket_id'] ) ) {
        header( "Location: editEvents.php?error=EventNotFound" );
        return;
      }
  
      $event->storeFormValues( $_POST );
      $event->update();
      header( "Location: editEvents.php?status=changesSaved" );
  
    } elseif ( isset( $_POST['cancel'] ) ) {
  
      // User has cancelled their edits return to edits page
      header( "Location: admin.php" );
    } 
  
  }

  function deleteEvent() {

    if ( !$event = EventPage::getId( (int)$_GET['ticket_id'] ) ) {
      header( "Location: editEvents.php?error=eventNotFound" );
      return;
    }
  
    $event->delete();
    header( "Location: editEvents.php?status=EventDeleted" );
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