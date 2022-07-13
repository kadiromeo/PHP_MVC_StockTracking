<?php

class categoryModel extends model
{
    public function create($ad){
        $query=$this->db->prepare("insert into kategori(ad) values (?) ");
        $insert=$query->execute(array($ad));
        if ($insert){
            return true;
        }else{
            return false;
        }
    }

    public function listView(){
        $query=$this->db->prepare("select * from kategori");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getData($id){
        $query=$this->db->prepare("select * from kategori where id=?");
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);

    }

    public function updateData($id,$ad){
        $query=$this->db->prepare("update kategori set ad=? where id=?");
        $update=$query->execute(array($id,$ad));
        return $update;
    }

    public function deleteData($id){
        $query=$this->db->prepare("delete from kategori where id=?");
        $query->execute(array($id));
    }
}