<?php
    function WelcomeMessage(){
        echo "Good evening Aaron";
    }

    function IsNewMessages(){
        return false;
    }

    function AlertNew(){
        echo "There is 13 new messages!";
    }


    function GenerateData($service, $output_context, $sizeOutput){

    }


# Fetch JSON from $URL and return the data or NULL (if fetching failed) 
# Example:
# $a = FetchJSON("https://reddit.com/r/worldnews/top/.json");
# $a is an associative array (i.e a dictionnary) containing the JSON fetched
    function FetchJSON($URL, $output="associative"){
        require 'vendor/autoload.php';
        $headers  = array('Accept' => 'application/json');
        $request  = Requests::get($URL, $headers, NULL);
        if($request->status != "200"){
            Log(__FUNCTION__, func_get_args(), $request->status);
            echo "Failure";
            return NULL;
        }

        $raw_data = $request->body;

        if($output == "associative")
            return $clean_data = json_decode($raw_data, $assoc=true);

        else return $clean_data = json_decode($raw_data);
    }

function Log($function_name, $arguments, $extra){
    return NULL;
}
?>
