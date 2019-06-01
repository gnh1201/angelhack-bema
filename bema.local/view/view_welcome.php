<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Team BEMA</title>
        <link href="<?php echo base_url(); ?>vendor/_dist/min/entireframework.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>vendor/_dist/min/welcome.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="nav" tabindex="-1" onclick="this.focus()">
            <div class="container">
                <a class="pagename current" href="#">Team BEMA</a>
                <a href="#">Call</a>
                <a href="#">Connect</a>
                <a href="#">Rescue</a>
            </div>
        </nav>
        <button class="btn-close btn btn-sm">×</button>
        <div class="container">
            <div class="hero">
                <h1>Team BEMA</h1>
                <p>AngelHack Hackathon Seoul 2019: Team BEMA</p>
                <a class="btn btn-b" href="https://github.com/gnh1201/angelhack-bema">Fork me</a>
            </div>
            <div class="row">
                <div class="col c4">
                    <h3>Call</h3>
                    Call to you
                    <br><a href="https://github.com/gnh1201/reasonableframework" class="btn btn-sm btn-a">Do stuff!</a>
                </div>
                <div class="col c4">
                    <h3>Connect</h3>
                    Connect to you
                    <br><a href="https://github.com/gnh1201/reasonableframework" class="btn btn-sm btn-b">Do stuff!</a>
                </div>
                <div class="col c4">
                    <h3>Rescue</h3>
                    Rescue you
                    <br><a href="https://github.com/gnh1201/reasonableframework" class="btn btn-sm btn-c">Do stuff!</a>
                </div>
            </div>
            <div class="row">
                <div class="col c4">
                <form method="post" action="<?php echo base_url(); ?>" enctype="multipart/form-data">
                    <div class="hidden">
                        <input type="hidden" name="route" value="welcome">
                        <input type="hidden" name="action" value="update">
                    </div>
                    <div>
                        <h3>File Upload</h3>
                        <input type="file" name="file">
                        <button type="submit">Send</button>
                    </div>
                    <div>
                        <ul>
<?php
                        foreach($files as $file) {
?>
                            <li><a href="<?php echo $file['upload_url']; ?>">Download</a></li>
<?php
                        }
?>
                        </ul>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <noscript><div>Javascript not detected</div></noscript>
    </body>
</html>
