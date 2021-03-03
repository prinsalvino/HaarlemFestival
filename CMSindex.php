<?php
require("DB.php");
$action = isset($_GET['action']) ? $_GET['action']: ""; // if the value exist its set otherwise it becomes a empty string

switch( $action )  {

   
    case 'addNew':
        addNew();
        break;
      case 'editExisting':
        editExisting();
        break;
      default:
        dashboard();
}

function editExisting() {
    if ( !isset($_GET["ticket_id"]) || !$_GET["ticket_id"] ) {
        dashboard(); //change this to show an error 
      return;
    }

    $results = array();
    $results['ticket_id'] = EventPage::getId( (int)$_GET["ticket_id"] );
    $results['pageTitle'] = $results['ticket_id']->title . "Editing Event";
   
    require( "editEvents.php" );

}

function dashboard() {
        require( "dashboard.php" );
        
  }
   


?>