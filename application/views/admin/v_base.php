<!DOCTYPE html>
<html ng-app="appAdmin">
<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <? foreach ($styles as $style): ?>
        <link href="<?= $style ?>" rel="stylesheet">
    <? endforeach; ?>
</head>

<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Anna Photographer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ng-repeat="link in sections" data-ng-class="{'active': $state.current.name == link.name}"><a href="{{link.url}}">{{link.name}}</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <ng-view></ng-view>

    <hr>

    <footer>
        <p>&copy; Anna Gorina</p>
    </footer>
</div>
<? foreach ($scripts as $script): ?>
    <script src="<?= $script ?>"></script>
<? endforeach; ?>
</body>
</html>
