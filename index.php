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
                    require 'lib/main.php'
                    $content      = get_url('http://reddir.com/r/worldnews/top/.json');
                    $json_content = json_decode($content, true);
                    print_r($json_content);
                ?> 
            </reddit>

            <mail>
            </mail>
        </wrapper>
    </body>
</html>
