<?php

class Home extends Main
{

  // $this->smarty->clearCache('hmenu.tpl');

    private $folder_rfq;

    function __construct()
    {
        parent::__construct();
    }

    function getHmenu() {

      //$a_main_category = $this->pdo->fetch_all("SELECT id , name FROM taxonomy ORDER BY id ASC");
      //var_dump($a_main_category);
      //$this->smarty->assign('a_main_category',$a_main_category);

      $this->smarty->display(LAYOUT_HOME);
    }

    function index()
    {
      // $sr = $this->pdo->fetch_all("SELECT id , name FROM taxonomy ORDER BY id");
      // $taxonomy_id = $_GET['taxonomy_id'];
      // var_dump($taxonomy_id);


     // lấy danh sách tin trang chủ
      $get = $this->pdo->fetch_all("SELECT title, id ,created FROM posts ORDER by ID   Limit 0,11" );
      $this->smarty->assign('get',$get);
      $this->smarty->display(LAYOUT_HOME);
    }

   //  lấy chi tiết tin
    function getContent() {

      $getidContent = $_GET['id'];
      var_dump($getidContent);
      $getContent = $this->pdo->fetch_all("SELECT * FROM posts WHERE id=".$getidContent);
      $get = $this->pdo->fetch_all("SELECT title, id ,created FROM posts ORDER by ID DESC Limit 20" );
      $this->smarty->assign('get',$get);
      // lib_dump($getContent);

      $this->smarty->assign('getContent',$getContent);

      $this->smarty->display(LAYOUT_HOME);
    }

    function resgister() {

      $this->smarty->display(LAYOUT_HOME);
    }

    function login() {
      $this->smarty->display(LAYOUT_HOME);
    }

    function test()
    {
      $posts = $this->pdo->fetch_all("SELECT title ,created FROM posts ORDER BY id ASC");
      $this->smarty->assign('posts',$posts);
      lib_dump($posts);

      $this->smarty->display(LAYOUT_HOME);
    }

    function getlist() {
     $sr = $this->pdo->fetch_all("SELECT id , name FROM taxonomy ORDER BY id");
     $taxonomy_id = $_GET['taxonomy_id'];

     var_dump($taxonomy_id);
     $get = $this->pdo->fetch_all("SELECT * FROM posts WHERE taxonomy_id=".$taxonomy_id);
     lib_dump($get);
    $this->smarty->assign('get',$get);
    $this->smarty->assign('sr',$sr);
    $this->smarty->display(LAYOUT_HOME);
    }


    function errorpage()
    {
        $this->smarty->display(LAYOUT_DEFAULT);
    }

    function ajax_handle()
    {
        global $login;
        $data = $rt = array();
        if (isset($_POST['ajax_action']) && $_POST['ajax_action'] == 'save_rfq') {
            $rt['code'] = 0;
            if ($login == 0)
                $rt['msg'] = "Vui lòng đăng nhập trước khi thực hiện chức năng.";
            elseif (! is_numeric($_POST['number']))
                $rt['msg'] = 'Vui lòng nhập số lượng chính xác.';
            else {
                $data['user_id'] = $login;
                $data['title'] = trim($_POST['title']);
                $data['number'] = trim($_POST['number']);
                $data['unit_id'] = intval($_POST['unit']);
                $data['created'] = time();
                $data['status'] = 1;
                $this->pdo->insert('rfq', $data);
                $rt['code'] = 1;
                $rt['msg'] = 'Gửi yêu cầu của bạn thành công.';
            }
            echo json_encode($rt);
            exit();
        }elseif (isset($_POST['ajax_action']) && $_POST['ajax_action'] == 'save_keyhistory') {
        }else if (isset($_POST['ajax_action']) && $_POST['ajax_action'] == 'send_phone_contact') {
        }
    }
}
