<?php
//This variable takes all the data from the given JSON file.
$jsondata = file_get_contents("2020-01-02.json");
//This variable converts that data into an object.
$json = json_decode($jsondata,true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parsing JSON</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>

<div class="header">
  <h4 class="headerText">Insights News</h4>
</div>


<div class="pageWrapper">
    <div class="articlesWrapper">
        <?php for ($x = 2; $x <= 10; $x++) { ?>
        <div>
            <div class="articleCard">
                <h4 class="titleText"><?php echo str_replace(" - MCV/Develop","",$json[$x]['attachments'][0]['title']); ?></h4>
                <div class="testDiv">
                    <img class="articleImage" src="<?php echo ($json[$x]['attachments'][0]['image_url']) ;?>">
                    <br>
                    <a class="linkText" href="<?php echo ($json[$x]['attachments'][0]['title_link']); ?>">
                        <?php echo str_replace("1","",$json[$x]['attachments'][0]['text']); ?>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>  
</div>
</body>
</html>