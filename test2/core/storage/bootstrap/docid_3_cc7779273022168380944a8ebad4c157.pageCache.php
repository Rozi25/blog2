<?php die('Unauthorized access.'); ?>a:38:{s:2:"id";i:3;s:4:"type";s:8:"document";s:11:"contentType";s:9:"text/html";s:9:"pagetitle";s:22:"Фотогалерея";s:9:"longtitle";s:0:"";s:11:"description";s:0:"";s:5:"alias";s:12:"fotogalereya";s:15:"link_attributes";s:0:"";s:9:"published";i:1;s:8:"pub_date";i:0;s:10:"unpub_date";i:0;s:6:"parent";i:0;s:8:"isfolder";i:1;s:9:"introtext";s:0:"";s:7:"content";s:448:"[[sgController?
&sgOrderBy=`sg_id DESC`
&thumbSnippet=`phpthumb`
&thumbOptions=`w=150&h=150&zc=1`
&tpl=`@CODE:
<div class="page-header">
	<h1><a href="[+url+]">[+pagetitle+]</a></h1>
</div>
[+images+]
<div class="clearfix"></div>`
&sgOuterTpl=`@CODE:[+wrapper+]`
&sgRowTpl=`@CODE:
<a href="[+sg_image+]">
	<img src="[+thumb.sg_image+]" class="img-thumbnail" alt="[+e.sg_title+]" title="[+e.sg_description+]">
</a>`
&sgDisplay=`5`
]]";s:8:"richtext";b:1;s:8:"template";i:5;s:9:"menuindex";i:2;s:10:"searchable";i:1;s:9:"cacheable";i:1;s:9:"createdby";i:1;s:9:"createdon";i:1614854772;s:8:"editedby";i:1;s:8:"editedon";i:1615757217;s:7:"deleted";i:0;s:9:"deletedon";s:27:"1970-01-01T00:00:00.000000Z";s:9:"deletedby";i:0;s:11:"publishedon";i:1614854772;s:11:"publishedby";i:1;s:9:"menutitle";s:0:"";s:14:"hide_from_tree";b:0;s:10:"privateweb";b:0;s:10:"privatemgr";b:0;s:13:"content_dispo";b:0;s:8:"hidemenu";b:0;s:13:"alias_visible";i:1;s:13:"templatealias";s:24:"carousel-bootstrap-photo";s:17:"__MODxDocGroups__";s:0:"";}<!--__MODxCacheSpliter__--><!DOCTYPE html>
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
      
        <ul class="navbar-nav mr-auto"><li class="nav-item first level1 odd"><a class="nav-link" href="/">Головна</a></li><li class="nav-item level1 even"><a class="nav-link" href="/novini.html">Новини</a></li><li class="nav-item level1 active odd"><a class="nav-link" href="/fotogalereya.html">Фотогалерея</a></li><li class="nav-item last level1 even"><a class="nav-link" href="/kontakti.html">Контакти</a></li></ul>
    
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<div style="margin-top:30px">

 <main role="main">
<div class="container marketing">
	<div class="row featurette">
		[!DLCrumbs? &tpl=`@CODE:<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><meta itemprop="position" content="[+iteration+]" />
      <a href="[+url+]" title="[+e.title+]" itemprop="item"><span itemprop="name">[+title+]</span></a>&nbsp;/&nbsp;</li>`&showCurrent=`1`!]
		<div class="col-md-12 mt-5">
			<h2>Фотогалерея</h2>
			
<div class="page-header">
	<h1><a href="/fotogalereya/galereya-3.html">Галерея 3</a></h1>
</div>

<a href="assets/galleries/10/dsc-0818-medium.1549448864.jpg">
	<img src="assets/cache/images/assets/galleries/10/dsc-0818-medium.1549448864-150x150-771.jpg" class="img-thumbnail" alt="5" title="">
</a>
<a href="assets/galleries/10/dsc-0770-medium.1549448836.jpg">
	<img src="assets/cache/images/assets/galleries/10/dsc-0770-medium.1549448836-150x150-771.jpg" class="img-thumbnail" alt="6" title="">
</a>
<div class="clearfix"></div>
<div class="page-header">
	<h1><a href="/fotogalereya/galereya-2.html">Галерея 2</a></h1>
</div>

<a href="assets/galleries/9/dsc-0093-medium.1549528288.jpg">
	<img src="assets/cache/images/assets/galleries/9/dsc-0093-medium.1549528288-150x150-771.jpg" class="img-thumbnail" alt="3" title="">
</a>
<a href="assets/galleries/9/dsc-0014-medium.1549528229.jpg">
	<img src="assets/cache/images/assets/galleries/9/dsc-0014-medium.1549528229-150x150-771.jpg" class="img-thumbnail" alt="4" title="">
</a>
<div class="clearfix"></div>
<div class="page-header">
	<h1><a href="/fotogalereya/galereya-1.html">Галерея 1</a></h1>
</div>

<a href="assets/galleries/8/dsc-0034-medium.1605302204.jpg">
	<img src="assets/cache/images/assets/galleries/8/dsc-0034-medium.1605302204-150x150-771.jpg" class="img-thumbnail" alt="2" title="">
</a>
<a href="assets/galleries/8/dsc-0003-medium.1605302081.jpg">
	<img src="assets/cache/images/assets/galleries/8/dsc-0003-medium.1605302081-150x150-771.jpg" class="img-thumbnail" alt="1" title="">
</a>
<div class="clearfix"></div>
		</div>
	</div>
	<hr class="featurette-divider">
</div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <!-- /.container -->


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