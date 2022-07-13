<div class="row">
    <div class="col-md-4">

    </div>

    <div class="col-md-4">
        <h4>Kategori Listesi</h4>
        <a href="<?=SITE_URL;?>/product/create">Kategori Ekle</a>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Ürün Adı</th>
                <th>Düzenle</th>
                <th>Sil</th>
            </tr>

            <tbody>
            <?php
            if (count($data)!=0)
            {
                foreach ($data as $key =>$value)
                {
                    ?>
                    <tr>
                        <td > <?=$value['id'];?></td >
                        <td > <?=$value['ad'];?></td >
                        <td > <a class="btn" href="<?=SITE_URL;?>/category/edit/<?=$value['id'];?>">Düzenle</a></td >
                        <td > <a class="btn" href="<?=SITE_URL;?>/category/delete/<?=$value['id'];?>">Sil</a></td >
                    </tr >
                    <?php
                }
            }
            ?>
            </tbody >

            </thead>
        </table>
    </div>

    <div class="col-md-4">

    </div>

</div>