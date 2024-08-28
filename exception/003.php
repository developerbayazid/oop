<?php
class ServerLoadException extends Exception {}
class NetworkException extends Exception {}
class DiskFullException extends Exception {}

interface NetworkStorage {
    function connect();
    function getName();
    function report($data);
}

class MySQLServer implements NetworkStorage {
    function connect(){
        throw new ServerLoadException;
    }
    function getName(){
        echo "mySQL";
    }
    function report($data){
        print_r($data);
    }
}
class PostgreSQLServer implements NetworkStorage {
    function connect(){
        throw new DiskFullException;
    }
    function getName(){
        echo "PostgreSQL";
    }
    function report($data){
        print_r($data);
    }
}
class MSSQLServer implements NetworkStorage {
    function connect(){
        // throw new DiskFullException;
        return $this;
    }
    function getName(){
        echo "MSSQL";
    }
    function report($data){
        print_r($data);
    }
}

class ConnectionPool {
    private $storage;
    private $connection;
    function __construct(){
        $this->storage = array();
    }
    function addStorage (NetworkStorage $storage){
        array_push($this->storage, $storage);
    }
    function getConnection(){
        foreach($this->storage as $storage){
            try{
                $this->connection = $storage->connect();
            } catch(ServerLoadException $e) {
                echo $storage->getName()." is having huge load\n";
                $storage->report(array('ip'=>'182.382.382', 'error'=> 'load'));
            } catch(NetworkException $e) {
                echo $storage->getName()." is having some problem with it's network\n";
                $storage->report(array('ip'=>'182.342.382', 'error'=> 'network'));
            } catch(DiskFullException $e) {
                echo $storage->getName()." has it's disk full\n";
                $storage->report(array('ip'=>'182.202.382', 'error'=> 'disk'));
            }

            if($this->connection){
                break;
            }
            
        }
        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$pgsql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPool();

$cp->addStorage($mysql);
$cp->addStorage($pgsql);
$cp->addStorage($mssql);

$connection = $cp->getConnection();

print_r($connection);