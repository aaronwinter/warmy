<html>
    <head>
        <title>my smart homepage</title>
    </head>
    <body>
        <header>
            <h1>warmy</h1>
            <hr />
        </header>

        <wrapper>
            <facebook>
            </facebook>

            <reddit>
            <?php
               require 'vendor/autoload.php';
               $headers  = array('Accept' => 'application/json');
               $request  = Requests::get('https://reddit.com/r/worldnews/top/.json', $headers, NULL);
               $raw_data = $request->body;
                
               $clean_data = json_decode($raw_data, $assoc=true);
               $i = 0;
               for($i = 0; $i < 25; $i++)
                    echo '<p><a href="'.$clean_data["data"]["children"][$i]["data"]["domain"].'">'.$clean_data["data"]["children"][$i]["data"]["title"].'</a></p>';
            ?>
            </reddit>

            <mail>
            </mail>
        </wrapper>
    </body>
</html>
