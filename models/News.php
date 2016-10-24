<?php
  include_once ROOT.'/components/Db.php';
  class News{

    public static function getNewById($id){
      $db = Db::getConnection();
      $result = $db->query("SELECT * FROM users WHERE id=$id");
      $single_news = $result->fetch_object();

      return $single_news;
    }

    public static function getListNews(){
      $db = Db::getConnection();
      $news_list = array();
      $result = $db->query("SELECT * FROM users");
      $i = 0;
      while($row = $result->fetch_array()){
          $news_list[$i]['id'] = $row['id'];
          $news_list[$i]['login'] = $row['login'];
          $i++;
      }

      return $news_list;
    }
  }
