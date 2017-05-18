<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <title>Pet form</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
         
        <!-- bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
         
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="">
    </head>
     
    <body>
         
        <div class="container">
            
            <div class="row">
                
                <h1>Order a Pet</h1>
                
            
                <form action="new-pet" method="post" class="form-horizontal">
                    
                    <!-- animal -->
                    <div class="form-group">
                        
                        <!-- Name -->
                        <label for="pet-name"
                               class="col-sm-1 control-label">Pet Name</label>
                         
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="pet-name"
                                   id="pet-name" >
                        </div>
                        
                        <!-- Color -->
                        <label class="col-sm-1 control-label"
                               for="pet-color">Pet Color</label>
                         
                        <div class="col-sm-3">

                            <select class="form-control" name="pet-color" id="pet-color">
                                <option>--Select--</option>
                                <?php foreach (($colors?:[]) as $color): ?>
                                    <option><?= $color ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <!-- Type -->
                        <label class="col-sm-1 control-label"
                               for="pet-color">Pet Type</label>
                        
                        <div class="col-sm-3">

                            <input class="form-control" type="text" name="pet-type" id="pet-type">
                        </div>
                                                
                    </div>
                     
                    <div class="col-xs-4 col-xs-offset-4">
                        <input class="form-control btn btn-default"
                               type="submit" value="Submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>