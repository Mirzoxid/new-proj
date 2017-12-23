<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url()?>templates/bootstrap/css/bootstrap.css">
    <title>Alter page</title>
</head>
<body class="box-body" style="background-color: rgba(126,126,126,0.73)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-12">
                <div class="row" style="display: inline; ">
                    <?php foreach ($res as $re):?>
                        <?php if(!isset($re['create'])):?>
                            <div class="line-block"><?=$re?></div>
                        <?php else : ?>
                            <div class="line-block"><?=$re['create']?></div>
                            <div class="line-block"><?=$re['index']?></div>
                            <div class="line-block"><?=$re['autoincrement']?></div>
                        <?php endif;?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>