<!DOCTYPE html>
<html lang="en" class="no-js">

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    {% block phpwpcc_head %}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHPWpcc Configuration</title>
      <meta name="author" content="Ousama Ben Younes" />

    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />

    <script src="js/jquery-1.10.2.min.js"></script>


    {% endblock %}

  </head>
  <body>

  <div class="container">

  <div class="fs-form-wrap" id="fs-form-wrap">

      <div class="phpwpcc_title">
      <h1>{% block title %}PHPWpcc Tests {% endblock %}</h1>
    </div>


    {% block content %}
    {% endblock %}


   </div><!-- /fs-form-wrap -->
 </div><!-- /container -->


  {% block javascriptSrc %}
  {% endblock %}

  </body>
</html>
