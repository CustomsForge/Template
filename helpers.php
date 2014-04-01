<?php
  function link_generator($url_page) {
    global $page, $root_url;

    $link = '<a ';
    if($page == $url_page) {
      $link = $link . 'class="active" ';
    }
    echo $link . "href='/?page=".$url_page."'>";
  }
?>