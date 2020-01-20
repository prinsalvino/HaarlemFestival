<?php
  include "DB.php"
class EventPage
{

// Properties

  
public int $ticket_id = null;
public string $event = null;
public int $date = null;
public int $time = null;
public string $location = null;
public string $special = null;
public int $price = null;
public int $stock = null;
public string $content = null;

$dsn = "mysql:host=localhost;dbname=hfitteam1"

public function __construct($data=array())
{
    if ( isset( $data['ticket_id'] ) ) $this->ticket_id = (int) $data['ticket_id'];
    if ( isset( $data['event'] ) ) $this->event = $data['event'] );
    if ( isset( $data['date'] ) ) $this->dates = (int) $data['dates'];
    if ( isset( $data['time'] ) ) $this->time = (int) $data['time'] );
    if ( isset( $data['location'] ) ) $this->location = $data['location'] );
    if ( isset( $data['special'] ) ) $this->special = $data['special'];
    if ( isset( $data['price'] ) ) $this->price = (int) $data['price'];
    if ( isset( $data['stock'] ) ) $this->stock = (int) $data['stock'];
    //if ( isset( $data['content'] ) ) $this->content = $data['content']; ADD WHEN YOU FIGURE OUT THE TEXT ON PAGES
}

public function storeValues ($params)
{
//stores the params from above, but allows for date to be accepted in dd-mm-yyyy
$this->__construct($params);

if ( isset($params['dates']) ) {
  $publicationDate = explode ( '-', $params['dates'] );

  //check if date month and year has been added.
  if ( count($date) == 3 ) 
  {
    list ( $d, $m, $y ) = $date;
    $this->date = mktime ( 0, 0, 0, $d, $m, $y );
        }
    }
}

    public static function getID($ticket_id)
    {

        $conn = new PDO ( $dsn, 'hfitteam1', '3FxmuBcR' ); //making connection to MYSQL DB

        $sql = "SELECT *, date FROM tickets WHERE ticket_id = :ticket_id"; //gets id from table
        $bind = $conn->prepare( $sql ); 
        $bind->bindValue( ":ticket_id", $ticket_id, PDO::PARAM_INT ); //security risk prevention by using placeholder
        $bind->execute();
        $records = $bind->fetch();
        $conn = null;

        if ( $records ) return new Eventpage( $records );
    }

        
      //Inserts the current Event into the database, and sets its ID.
      
    
      public function insert() {
    
        // checks if object already has an ID?
        if ( !is_null( $this->id ) ) trigger_error ( "Eventinsert(): Event already exists with the id:($this->id).", E_USER_ERROR );
    
        // Insert the Event
        $conn = new PDO( $dsn, 'hfitteam1', '3FxmuBcR' );
        $sql = "INSERT INTO tickets ( ticket_id, event, date, time, location, special, price, stock ) VALUES  :ticket_id, :event, :date, :time, :location, :special, :price, :stock )";
        $bind = $conn->prepare ( $sql );
        $bind->bindValue( ":ticket_id", $this->ticket_id, PDO::PARAM_INT );
        $bind->bindValue( ":event", $this->event, PDO::PARAM_STR );
        $bind->bindValue( ":date", $this->date, PDO::PARAM_INT );
        $bind->bindValue( ":time", $this->time, PDO::PARAM_INT );
        $bind->bindValue( ":location", $this->location, PDO::PARAM_STR );
        $bind->bindValue( ":special", $this->special, PDO::PARAM_STR );
        $bind->bindValue( ":price", $this->price, PDO::PARAM_INT );
        $bind->bindValue( ":stock", $this->stock, PDO::PARAM_INT );

        $bind->execute();
        $this->id = $conn->lastId(); //saves last used ID for when we want to add another one
        $conn = null;
      }
    
    
      //Updates the current Event in the database.
      
    
      public function update() {
    
        // checking if event exists with id
        if ( is_null( $this->ticket_id ) ) trigger_error ( "Eventupdate(): Failed to update an Event that has no ID.", E_USER_ERROR );
       
        // Update the Event
        $conn = new PDO( $dsn, 'hfitteam1', '3FxmuBcR' );
        $sql = "UPDATE tickets SET ticket_id=:ticket_id, event=:event, dates=:dates, time=:time, location=:location, special=:special, price=:price, stock=:stock WHERE ticket_id = :ticket_id";
        $bind = $conn->prepare ( $sql );
        $bind = $conn->prepare ( $sql );
        $bind->bindValue( ":ticket_id", $this->ticket_id, PDO::PARAM_INT );
        $bind->bindValue( ":event", $this->event, PDO::PARAM_STR );
        $bind->bindValue( ":dates", $this->dates, PDO::PARAM_INT );
        $bind->bindValue( ":time", $this->time, PDO::PARAM_INT );
        $bind->bindValue( ":location", $this->location, PDO::PARAM_STR );
        $bind->bindValue( ":special", $this->special, PDO::PARAM_STR );
        $bind->bindValue( ":price", $this->price, PDO::PARAM_INT );
        $bind->bindValue( ":stock", $this->stock, PDO::PARAM_INT );
        $bind->execute();
        $conn = null;
      }
    
    
      
      //Deletes the current Event from the database.
      
    
      public function delete() {
    
        // Does the event have ID
        if ( is_null( $this->ticket_id ) ) trigger_error ( "Eventdelete(): Failed to delete an Event that has no ID.", E_USER_ERROR );
    
        // Delete the Article
        $conn = new PDO( $dsn, 'hfitteam1', '3FxmuBcR' );
        $bind = $conn->prepare ( "DELETE FROM tickets WHERE ticket_id = :ticket_id LIMIT 1" ); // only 1 event can get deleted at a time
        $bind->bindValue( ":ticket_id", $this->ticket_id, PDO::PARAM_INT );
        $bind->execute();
        $conn = null;
      }




?>