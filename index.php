<!doctype html>
<html lang="en">
  <head>
    <title>Distance btw Cities App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel="stylesheet" type="text/css">
  </head>
  <body>
      <div class="jumbotron">
          <div class="container-fluid">
              <h1>Distance between cities App.</h1>
              <p>Our app will help you calculate travelling distance.</p>
              <form class="form-horizontal">
                  <div class="form-group">
                      <label for="from" class="col-xs-2 control-label">From:</label>
                      <div class="col-xs-8">
                          <input type="text" id="from" placeholder="Origin" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="to" class="col-xs-2 control-label">To:</label>
                      <div class="col-xs-8">
                          <input type="text" id="to" placeholder="Destination" class="form-control">
                      </div>
                  </div>
              </form>
              <div class="col-xs-offset-2 col-xs-10">
                  <button class="btn btn-info btn-lg" onclick="calcRoute();">Submit</button>
              </div>
          </div>
          <div class="container-fluid">
              <div id="googleMap">
              
              </div>
              <div id="output">
              
              </div>
          </div>
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOx85VCCtQ4OrOaWPZJe982UU6wHsVYNY&libraries=places"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="javascript.js"></script>
  </body>
</html>