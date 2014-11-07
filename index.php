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
            ?>
            </reddit>

            <mail>
            </mail>
        </wrapper>
    </body>
</html>
