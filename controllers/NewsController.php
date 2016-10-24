<?php
include_once ROOT.'/models/News.php';

class NewsController{

  function Index(){
    $array_list = array();
    $array_list = News::getListNews();
    
    require_once(ROOT.'/views/index.php');

    return true;
  }

  function View($params){
    $single_news = News::getNewById($params[0]);
    echo '<pre>';
      print_r ($single_news);
    echo '</pre>';
    return true;
  }
}
