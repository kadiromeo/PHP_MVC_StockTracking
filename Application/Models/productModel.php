<?php

class productModel
{

    public function listview()
    {
        $query = $this->db->prepare('select * from urunler');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad,$kategoriId,$ozellik,$date = null)
    {
        $query = $this->db->prepare("insert into urunler(ad,kategoriId,ozellikler,tarih) values (?,?,?,?)");
        if($date!="")
        {
            $date = $date;
        }else {
            $date = date("Y-m-d");
        }
        $insert = $query->execute(array($ad,$kategoriId,$ozellik,$date));
        if($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}