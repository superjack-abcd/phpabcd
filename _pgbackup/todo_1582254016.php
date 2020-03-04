<!DOCTYPE html>
<html lang="en" ng-app="todoApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
        <title>Angular todo app</title>
        <script src="angular.js"></script>
        <script src="todo.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="todo.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <div class="container">
            <h2>Todo</h2>
            <div ng-controller="TodoController">
                <span>{{remaining()}} of {{todos.length}} remaining</span>
                [
                <a href="" ng-click="archive()">archive</a> ]
                <ul class="unstyled">
                    <li ng-repeat="todo in todos">
                        <input type="checkbox" ng-model="todo.done">
                        <span class="done-{{todo.done}}" ng-click="halo()">{{todo.text}}</span>
                    </li>
                </ul>
                <form ng-submit="addTodo()">
                    <input type="text" ng-model="todoText"  size="30"
               placeholder="add new todo here">
                    <input class="btn-primary" type="submit" value="add">
                </form>
                <div class="well intro">
                    <p><b>Edit todo.js</b> in external code editor.
                    <b>Refresh page</b> (CMD + R) after making changes to the code. You can also copy-paste the code from todo.js to a script tag at the end of this page and use <b>Page -&gt; Edit code</b> to edit it. Use
                    <b>Test clicks</b> (or SHIFT + click) to test the app.
                    </p>
                    <p>This example was taken from <a href="https://angularjs.org/">angularjs.org</a>.</p>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>