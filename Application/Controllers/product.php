<?php
class product extends controller{
    public function index()
    {
        if(!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
       // if(!$this->model('uyeModel')->permission($this->myuserid,1)){helper::redirect(SITE_URL); die();}
        $data = $this->model('productModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('product/index',['data'=>$data]);
        $this->render('site/footer');
    }


    public function create()
    {
        if(!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
       // if(!$this->model('uyeModel')->permission($this->myuserid,1)){helper::redirect(SITE_URL); die();}
        $category = $this->model('categoryModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('product/create',['category'=>$category]);
        $this->render('site/footer');
    }


    public function send()
    {
        if(!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
        //if(!$this->model('uyeModel')->permission($this->myuserid,1)){helper::redirect(SITE_URL); die();}
        if($_POST)
        {
            $ad = helper::cleaner($_POST['ad']);
            $kategoriId = intval($_POST['kategoriId']);
            $ozellikler = json_encode($_POST['ozellikler']);
            if($ad!="")
            {
                $insert = $this->model('productModel')->create($ad,$kategoriId,$ozellikler);
                if($insert)
                {
                    helper::redirect(SITE_URL."/product/index");
                }
                else
                {
                    helper::flashData("statu","Ürün Eklenemedi");
                    helper::redirect(SITE_URL."/product/create");
                }
            }
            else
            {
                helper::flashData("statu","Ürün adı boş bırakılamaz");
                helper::redirect(SITE_URL."/product/create");
            }


        }
        else
        {
            exit("yasaklı giriş");
        }
    }

}