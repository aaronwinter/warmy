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


    function GenerateData($service, $output_context){
        switch($service){
            case "reddit":
                $data = FetchJSON("https://reddit.com/r/worldnews/top/.json");
                ($output_context == "table") ? PrettyTable($data) : $data;
            break;
        }
    }


# Fetch JSON from $URL and return the data or NULL (if fetching failed) 
# Example:
# $a = FetchJSON("https://reddit.com/r/worldnews/top/.json");
# $a is an associative array (i.e a dictionnary) containing the JSON fetched
    function FetchJSON($URL, $output="associative"){
        require 'vendor/autoload.php';

        $headers  = array('Accept' => 'application/json');
        $request  = Requests::get($URL, $headers, NULL);

        if($request->status_code != "200")
            LogCrash(__FUNCTION__, func_get_args(), $request->status_code);

        $raw_data = $request->body;

        if($output == "associative")
            return $clean_data = json_decode($raw_data, $assoc=true);

        else return $raw_data; 
    }

# Output pretty rows that facilitate the integration to the UI
    function PrettyTable($data){
        $i = 0;
        while ($i <= 24){
            echo '<tr>';
            echo '<td>'.$data["data"]["children"][$i]["data"]["ups"].'</td>';
            echo '<td><a href="'.$data["data"]["children"][$i]["data"]["domain"].'" style="color: white;">"'.$data["data"]["children"][$i]["data"]["title"].'"</a></td>';
            echo '</tr>';
            $i++;
        }
    }

# Log any abnormal interruption or misbehavor from functions to a log file
# Example
# if(Exception $e) LogCrash(__FUNCTION, func_get_args(), $e->getMessage());
# LogCrash will write the function's name, its argument and the exception message
    function LogCrash($function_name, $arguments, $extra = NULL){
        return NULL;
    }
?>
