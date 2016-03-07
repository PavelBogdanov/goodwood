<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?$APPLICATION->ShowTitle();?></title>
   <?$APPLICATION->ShowHead();?>
    <!--CSS-->
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/mdb.min.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/bootstrap.min.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/mdb.min.css", true);?>
    <!--JS-->
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.min.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/bootstrap.min.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/mdb.min.js", true);?>

</head>

<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="container">

        <div class="header">
            <div class="nav">
                <nav class="navbar primary-color">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <?if(!CSite::InDir('/')):?><a class="navbar-brand waves-effect waves-light" href="/"><?endif;?>GoodWood<?if(!CSite::InDir('/')):?></a><?endif;?>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php" class="waves-effect waves-light">Главная<span class="sr-only">(current)</span></a></li>
                                <li><a href="news.php" class="waves-effect waves-light">Новости</a></li>
                                <li><a href="company.php" class="waves-effect waves-light">О компании</a></li>
                                <li><a href="contacts.php" class="waves-effect waves-light">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

        </div>

        <div class="jumbotron">