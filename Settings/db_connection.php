<?php

//database credentials
require('db_credentials.php');

class DbConnection
{
    public $results = null;

    public $database = null;

    public function connect()
    {

       // $conn = mysqli_connect($this->host, $this->username, $this->passwrd, $this->db);

		$this->database = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);


        // Check connection
        $connect = mysqli_connect_errno() ? 'Connection Successful' : 'Connection failed.';

        /* if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }*/

        return $connect; 
    }

        // Function to execute queries on the shoppn database 
        // Passes a query as a parameter
        function query($query)
        {
            // Crosschecks db connection at start of query execution 
            if ($this->connect() != true) {
                return false;
            }

            // Else it executes the query on the database
            $this->results = mysqli_query($this->database, $query);

          // Crosschecks if the results are false 
            if ($this->results == false) {
                return false;
            }

            // Else the function passes a true value 
            return true;  
        }

        function dbQueryEscapeString($query){
            $this->results = mysqli_query($this->database, $query);

                      // Crosschecks if the results are false 
                      if ($this->results == false) {
                        return false;
                    }
        
                    // Else the function passes a true value 
                    return true;
        }

        // Function to select and return multiple rows
        // Passes a query as a parameter
        function fetch($query)
        {

            // if query executes successfully
            if ($this->query($query)) {

                // return all the rows using mysqli_fetch_all
                return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
            }

            // else return false
            return false;
        }

        // Function to fetch a single row from the db 
        // Passes a query as a parameter
        function fetchOne($query)
        {

            // if query executes successfully
            if ($this->query($query)) {

                // return all the rows using mysqli_fetch_assoc
                return mysqli_fetch_assoc($this->results);
            }

            // else return false
            return false;
        }

        function count(){
            if ($this->results == null){
                return false;
            }
            elseif ($this->results == false){
                return false;
            }
            return mysqli_num_rows($this->results);
        }
    }
