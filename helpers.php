<?php
  $page = $_GET['page'];
  $port = intval($_SERVER['SERVER_PORT']);
  $root_url = ($port == 80) ? "/template" : "";

  function link_generator($url_page) {
    global $page, $root_url;

    $link = '<a ';
    if($page === $url_page) {
      $link = $link . 'class="active" ';
    }
    echo $link . "href='".$root_url."/?page=".$url_page."'>";
  }
?>