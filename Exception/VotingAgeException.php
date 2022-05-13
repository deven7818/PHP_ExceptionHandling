<?php

class VotingAgeException extends Exception{

    
    function errorMessage(){
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
        .': '.$this->getMessage().' is not a Eligible for voting';
        return $errorMsg;
        }
    }
        
    
    
?>