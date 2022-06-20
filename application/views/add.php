<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.1.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="<?=base_url();?>assets/./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url();?>assets/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>assets/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>assets/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>assets/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url();?>assets/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url();?>assets/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url();?>assets/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url();?>assets/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url();?>assets/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url();?>assets/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url();?>assets/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url();?>assets/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="<?=base_url();?>assets/node_modules/simplebar/dist/simplebar.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="<?=base_url();?>assets/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="<?=base_url();?>assets/node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="<?=base_url();?>assets/assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="<?=base_url();?>assets/assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        
        <li class="nav-title">Menus</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="<?=base_url();?>assets/#">
            <svg class="nav-icon">
              <use xlink:href="<?=base_url();?>assets/node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
            </svg> Posts</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="<?=base_url();?>index.php/Article/"><span class="nav-icon"></span> All Posts</a></li>
            <li class="nav-item"><a class="nav-link" href="<?=base_url();?>index.php/Article/add"><span class="nav-icon"></span> Add New</a></li>
            <li class="nav-item"><a class="nav-link" href="<?=base_url();?>index.php/Article/preview"><span class="nav-icon"></span> Preview</a></li>
            
          </ul>
        </li>
        
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="<?=base_url();?>assets/node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="<?=base_url();?>assets/#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="<?=base_url();?>assets/assets/brand/coreui.svg#full"></use>
            </svg></a>
          
        </div>
        <!-- <div class="header-divider"></div> -->
        <!-- <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                 if breadcrumb is single<span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav>
        </div> -->
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="card mb-4">
            <div class="card-header"> Add New</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 mb-12">
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-494">
                        <form id='article_form' method="post">
                        <div class="mb-3">
                          <label class="form-label" for="title_">Title</label>
                          <input class="form-control" id="title_" name="title_" >
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="content_">Content</label>
                          <textarea class="form-control" id="content_" name="content_" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="category_">Category</label>
                          <input class="form-control" id="category_" name="category_" >
                        </div>
                        <input class="btn btn-outline-primary" type="button" id="publish" value="Publish"></input>
                        <input class="btn btn-outline-warning" type="button" id="draft" value="Draft"></input>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div><a href="<?=base_url();?>assets/https://coreui.io">CoreUI </a><a href="<?=base_url();?>assets/https://coreui.io">Bootstrap Admin Template</a> &copy; 2022 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="<?=base_url();?>assets/https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?=base_url();?>assets/node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script src="<?=base_url();?>assets/node_modules/simplebar/dist/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    
    <script src="<?=base_url();?>assets/node_modules/@coreui/utils/dist/coreui-utils.js"></script>
    <script src="<?=base_url();?>assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script> 
    </script>
  </body>
</html>

<script type="text/javascript">

  $(function(){
    $("#publish").click(function(){
        var form = $('#article_form');
        var action = '<?=base_url()?>index.php/Article/add_post/publish';
        form.attr('action', action);
        form.submit();
    });
  });

  $(function(){
    $("#draft").click(function(){
        var form = $('#article_form');
        var action = '<?=base_url()?>index.php/Article/add_post/draft';
        form.attr('action', action);
        form.submit();
    });
  });
</script>