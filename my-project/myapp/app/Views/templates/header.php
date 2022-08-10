<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MVN ci_1st_app</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url().':'.$_SERVER['SERVER_PORT'];?>/assets/css/style.css">

</head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #74b72e;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/">Codeigniter<br/>tutorial</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                       <!--  href may need    echo base_url('url');  -->
                       <li class="nav-item">
                         <a class="nav-link" href="/news">News</a>
                       </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                      </li>

                    </ul>
                  </div>
                </div>
    </nav>
    <div class="container">
