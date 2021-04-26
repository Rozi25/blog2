<?php die('Unauthorized access.'); ?>a:38:{s:2:"id";i:4;s:4:"type";s:8:"document";s:11:"contentType";s:9:"text/html";s:9:"pagetitle";s:16:"Контакти";s:9:"longtitle";s:0:"";s:11:"description";s:0:"";s:5:"alias";s:8:"kontakti";s:15:"link_attributes";s:0:"";s:9:"published";i:1;s:8:"pub_date";i:0;s:10:"unpub_date";i:0;s:6:"parent";i:0;s:8:"isfolder";i:0;s:9:"introtext";s:0:"";s:7:"content";s:0:"";s:8:"richtext";b:1;s:8:"template";i:4;s:9:"menuindex";i:3;s:10:"searchable";i:1;s:9:"cacheable";i:1;s:9:"createdby";i:1;s:9:"createdon";i:1614854782;s:8:"editedby";i:1;s:8:"editedon";i:1615798149;s:7:"deleted";i:0;s:9:"deletedon";s:27:"1970-01-01T00:00:00.000000Z";s:9:"deletedby";i:0;s:11:"publishedon";i:1614854782;s:11:"publishedby";i:1;s:9:"menutitle";s:0:"";s:14:"hide_from_tree";b:0;s:10:"privateweb";b:0;s:10:"privatemgr";b:0;s:13:"content_dispo";b:0;s:8:"hidemenu";b:0;s:13:"alias_visible";i:1;s:13:"templatealias";s:23:"carousel-bootstrap-kont";s:17:"__MODxDocGroups__";s:0:"";}<!--__MODxCacheSpliter__--><!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Carousel Template · Bootstrap</title>

    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">
<!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/carousel/carousel.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Carousel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      
        <ul class="navbar-nav mr-auto"><li class="nav-item first level1 odd"><a class="nav-link" href="/">Головна</a></li><li class="nav-item level1 even"><a class="nav-link" href="/novini.html">Новини</a></li><li class="nav-item level1 odd"><a class="nav-link" href="/fotogalereya.html">Фотогалерея</a></li><li class="nav-item last level1 active even"><a class="nav-link" href="/kontakti.html">Контакти</a></li></ul>
    
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>



 
<main role="main">
	<div style="margin-top:30px">
<div class="container marketing">
	<div class="row featurette">
		[!DLCrumbs? &tpl=`@CODE:<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><meta itemprop="position" content="[+iteration+]" />
      <a href="[+url+]" title="[+e.title+]" itemprop="item"><span itemprop="name">[+title+]</span></a>&nbsp;/&nbsp;</li> `&showCurrent=`1`!]
		<div class="col-md-12 mt-5">
			<h2>Контакти</h2>
			<div style="margin-left:30px">  <!-- Wrap the rest of the page in another container to center all the content. -->
[!FormLister?
&formid=`basic`
&rules=`{
    "name": {
        "required": "Обязательно введите имя"
    },
    "email": {
        "required": "Обязательно введите email",
        "email": "Введите email правильно"
    },
    "phone": {
        "required": "Обязательно введите номер телефона",
        "phone": "Введите номер правильно"
    },
    "message": {
        "required": "Обязательно введите сообщение",
        "minLength": {
            "params": 100,
            "message": "Сообщение должно быть не менее 100 символов"
        }
    }
}`
&captcha=`modxCaptcha`
&formTpl=`@CODE:
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
            <form class="form-horizontal" method="post">
                <input type="hidden" name="formid" value="basic">
                <div class="form-group[+name.errorClass+][+name.requiredClass+]">
                    <label for="name" class="col-sm-2 control-label">* Имя</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Имя" name="name" value="[+name.value+]">
                        [+name.error+]
                    </div>
                </div>
                <div class="form-group[+email.errorClass+][+email.requiredClass+]">
                    <label for="email" class="col-sm-2 control-label">* Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="[+email.value+]">
                        [+email.error+]
                    </div>
                </div>
                <div class="form-group[+phone.errorClass+][+phone.requiredClass+]">
                    <label for="phone" class="col-sm-2 control-label">* Телефон</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" placeholder="+375 29 123 45 67" name="phone" value="[+phone.value+]">
                        [+phone.error+]
                    </div>
                </div>
 
                <div class="form-group[+message.errorClass+][+message.requiredClass+]">
                    <label for="message" class="col-sm-2 control-label">* Сообщение</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="message" placeholder="Ваше сообщение" name="message" rows="10">[+message.value+]</textarea>
                        [+message.error+]
                    </div>
                </div>
                [+form.messages+]
                <div class="form-group[+vericode.errorClass+][+vericode.requiredClass+]">
                    <label for="vericode" class="col-sm-2 control-label">* Введите код для проверки</label>
                    <div class="col-sm-10">
                        <div><img src="[+captcha+]" alt="Введите число"></div>
                        <input type="text" class="form-control" id="vericode" name="vericode" value="">
                        [+vericode.error+]
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-envelope"></i> Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>`
&errorClass=` has-error`
&requiredClass=` has-warning`
&subject=`Новое сообщение`
&messagesOuterTpl=`@CODE:<div class="alert alert-danger" role="alert">[+messages+]</div>`
&errorTpl=`@CODE:<span class="help-block">[+message+]</span>`
!]
  <!-- /.container -->

	</div>
			
		</div>
	</div>
	<hr class="featurette-divider">
	</div>
  <!-- Marketing messaging and featurettes
  ================================================== -->

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body></html>