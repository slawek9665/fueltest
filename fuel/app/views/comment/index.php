<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FuelPHP Framework</title>
        <?php echo Asset::css('bootstrap.css'); ?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Dodaj kometarz</h3>
                    <form class="form-horizontal" method="post" action="/add">
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nazwa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nazwa">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="comment" class="col-sm-2 control-label">Komentarz</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" name="comment" id="comment"></textarea>
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Wyślij</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4"><h3>Nazwa</h3></div>
                        <div class="col-md-4"><h3>Email</h3></div>
                        <div class="col-md-4"><h3>Komentarz</h3></div>
                        </div>
                    <?php
                    foreach ($comments as $comment) {
                        ?>
                        <div class="row">
                            <div class="col-md-4"><?php echo $comment->name ?></div>
                            <div class="col-md-4"><?php echo $comment->email ?></div>
                            <div class="col-md-4"><?php echo $comment->comment ?></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </body>
</html>
