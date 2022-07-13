<div class="row">
    <div class="col-md-4">

    </div>

    <div class="col-md-4">
        <?php
        if (isset($_SESSION['statu']))
        {
            echo $_SESSION['statu'];
        }
        ?>
        <form action="<?=SITE_URL;?>/category/update<?=$params['data']['id'];?>" method="post">
            <div>
                <label>"<?=$params['data']['ad'];?>" Düzenle</label>
                <input type="text" class="form-control" name="ad" value="<?=$params['data']['ad'];?>"/>
                <button type="submit" class="btn btn-success" name="gonder">Düzenle</button>

            </div>
        </form>
    </div>

    <div class="col-md-4">

    </div>

</div>