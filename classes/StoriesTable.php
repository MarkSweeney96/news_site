<!--
Author: Mark Sweeney
Date: 2017-31-03
-->

<?php


class StoriesTable {

    // define constants for the name of the table and the titles of the columns
    const TABLE_NAME        = "stories";
    const COLUMN_ID         = "id";
    const COLUMN_TYPE         = "type";
	const COLUMN_HEADLINE   = "headline";
    const COLUMN_STORY      = "storyText";
    const COLUMN_DATE      = "date";
    const COLUMN_TIME      = "time";
    const COLUMN_AUTHOR      = "author";
    const COLUMN_TITLE      = "title";
	
  

    // a PDO object which provides a connection to the database
    private $mConnection;

    public function __construct($connection) {
        $this->mConnection = $connection;
    }

    public function __destruct() {
        $this->mConnection = null;
    }

     public function insert($type, $headline, $storytext, $date, $time, $author, $title) {
        
        // construct the SQL INSERT statement using named placeholders
        $sql = "INSERT INTO " . StoriesTable::TABLE_NAME . "(" .
                
                StoriesTable::COLUMN_TYPE . ", " .
                StoriesTable::COLUMN_HEADLINE . ", " .
                StoriesTable::COLUMN_STORY . ", " .
                StoriesTable::COLUMN_DATE . ", " . 
                StoriesTable::COLUMN_TIME . ", " .
                StoriesTable::COLUMN_AUTHOR  . ", " . 
                StoriesTable::COLUMN_TITLE  . ") " .
				
                
                "VALUES (:type, :headline, :storyText, :date, :time, :author, :title)";

                echo $sql;

        // the values for the named placeholders in the SQL INSERT statement
        $params = array(
           
            'type' => $type,
            'headline' => $headline,
            'storyText' => $storytext,
            'date' => $date,
            'time' => $time,
            'author' => $author,
            'title' => $title,

			
        );

        // prepare the statement for execution and execute it
        $stmt = $this->mConnection->prepare($sql);
        $status = $stmt->execute($params);

        // if an error occurred while executing the query then throw an exception
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not save the Story: " . $errorInfo[2]);
        }

        // retrieve the id assigned to the inserted table row
        $id = $this->mConnection->lastInsertId(StoriesTable::TABLE_NAME);

        // return the id assigned to the inserted table row
        return $id;
    }
    
    public function findAll($category, $numOfRows) {
        
        // construct the SQL SELECT statement
        $sql = "SELECT * FROM " . StoriesTable::TABLE_NAME . " WHERE type='$category' ORDER BY id DESC LIMIT $numOfRows";
        //echo $sql; (for testing purposes)

        // prepare the statement for execution and execute it
        $stmt = $this->mConnection->prepare($sql);
        $status = $stmt->execute();

        // if an error occurred while executing the query then throw an exception
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve the Story: " . $errorInfo[2]);
        }

        // return the array of containing book table rows
        return $stmt;
    }

}