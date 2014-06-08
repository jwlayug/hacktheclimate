<!DOCTYPE html>
<html ng-app="hack">
<head>
    <title>PLANTERS AID STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/main.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default" role="navigation"  style="z-index:500;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PLANTERS AID STORE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color:#214D47;">
                <ul class="nav navbar-nav" >
                    <li class="active"><a href="#">PRODUCTS</a></li>
                    <li><a href="#">ABOUT US</a></li>
                </ul>
                <form class="navbar-form navbar-left pull-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" ng-model="query">
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div>
        </nav>
        <div class="wrapper">
            <div class="container">
                <div class="col-md-12 wrap">
                <div ng-controller="HackController as hack">
                    <!-- <input class="form-control" ng-model="query"> -->
                    <div class="col-sm-6 col-md-4" ng-repeat="hackdata in hack.datas | filter:query">
                        <div class="thumbnail">
                          <img ng-src="{{hackdata.imgs}}"  alt="..." />
                          <!-- data-src="holder.js/300x200" -->
                          <div class="caption clearfix botstyle">
                            <h3>{{hackdata.name}}</h3>                        
                            <a href="#" class="btn btn-primary col-md-5" role="button" data-toggle="modal"  data-target="#{{hackdata.modalName}}">INFO</a> <a href="#" class="btn btn-primary col-md-5 col-md-offset-2" role="button">BUY</a>
                          </div>
                        </div>

                        <div class="modal fade" id="{{hackdata.modalName}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">{{hackdata.name}}</h4>

                              </div>
                              <div class="modal-body">
                                {{hackdata.info}}            
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    





    <script src="_/js/angular.min.js"></script>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/main.js"></script>
</body>
</html>