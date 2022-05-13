<?php

include "VotingAgeException.php";


class Voting{
    function votingAge(){
        
        $age = readline("Enter your age :");

        try{
            if($age < 18){
                throw new VotingAgeException($age);
            }else {
                echo "you arxe eligible to vote";
            }
        }
        catch(VotingAgeException $ex){
            echo $ex->errorMessage();
        }
    }
}
?>