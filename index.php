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
</head>
<body>
<div>
    <?php for ($x = 2; $x <= 10; $x++) { ?>
    <div>
        <div>
            <h4><?php echo str_replace(" - MCV/Develop","",$json[$x]['attachments'][0]['title']); ?></h4>
            <img src="<?php echo ($json[$x]['attachments'][0]['image_url']) ;?>">
            <br>
            <a href="<?php echo ($json[$x]['attachments'][0]['title_link']); ?>">
                <?php echo str_replace("1","",$json[$x]['attachments'][0]['text']); ?>
            </a>
        </div>
    </div>
    <?php } ?>
</div>
</body>
</html>