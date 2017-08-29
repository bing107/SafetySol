<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Email Sending</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">


        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    </head>

    <body>

        <div class="col-md-6 feeds-size" style="margin-top: 20px">
            <div class="panel panel-primary">
                <div class="panel-heading" style="background: #FFA200;" id="fb-background">
                    <h3 class="panel-title">Enter Detail For Items</h3>
                </div>
                <div class="panel-body">
                    <form action="PHPMailer/phpmailer.php" method="post">
                        <!--Name of Customer-->
                        <div class="form-group">
                            <label for="firstName">Name <span style="color:red;font-size:18px;">*</span></label>
                            <input type="text" class="form-control" maxlength="20" name="name" required>

                        </div>
                        <!--End-->

                        <!--Contact of Customer-->
                        <div class="form-group">
                            <label for="email">Contact <span style="color:red;font-size:18px;">*</span></label>
                            <input type="tel" class="form-control" maxlength="11" name="phone" required>

                        </div>
                        <!--End-->

                        <!--Email of Customer-->
                        <div class="form-group">
                            <label for="phone">Email <span style="color:red;font-size:18px;">*</span></label>
                            <input type="email" class="form-control" maxlength="50" name="email" required>

                        </div>
                        <!--End-->

                        <!--Select Picker for Items-->
                        <div class="form-group">
                            <label class="control-label" for="name">Select Items <span style="color:red;font-size:18px;">*</span></label>
                            <div class="form-group ">
                                <select class="selectpicker form-control" name="items[]" multiple data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true">
                                    <optgroup label="Assigned Instructor">
                                        <option>Coveralls</option>
                                        <option>Glasses</option>
                                        <option>Ear Protection</option>
                                        <option>Boots</option>
                                        <option>Helmets</option>
                                        <option>Gloves</option>
                                        <option>Embroided Logos</option>
                                        <option>Caps</option>
                                        <option>First Aid Kits</option>
                                        <option>Company Apparel</option>
                                    </optgroup>

                                </select>
                            </div>

                        </div>
                        <!--End-->

                        <!--Description Text-->
                        <div class="form-group">
                            <label for="firstName">Description Column <span style="color:red;font-size:18px;">*</span></label>
                            <textarea class="form-control" placeholder="Enter Description For Items Here...." id="exampleTextarea" rows="3" name="descrip" required></textarea>
                        </div>
                        <!--End-->

                        <!-- Submit button -->
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Click To Submit Order" style="font-size:20px;font-weight: bold;background: #FFA200;">
                    </form>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
        <script>
            $('.selectpicker').selectpicker({
                style: 'btn-default',
                size: 7
            });
            </script>
            </body>
            </html>
