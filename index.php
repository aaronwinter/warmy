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
               $headers = array('Accept' => 'application/json');
               $request = Requests::get('https://reddit.com/r/worldnews/top/.json', $headers, NULL);
            ?>
            </reddit>

            <mail>
            </mail>
        </wrapper>
    </body>
</html>
