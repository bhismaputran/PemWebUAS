<div id="content-wrapper">
    <div class="container mt-2">
                <div class="pull-md-left">
                    <h4>Daftar Pembeli</h4>
                </div>
<form action="index.php?mod=pembeli&page=save" method="POST">
    <div class="container mt-2">
    
        <div class="form-group">
            <label for="">Id Pembeli</label>
            <input type="text" name="no_id_pembeli" required value="<?=(isset($_POST['no_id_pembeli']))?$_POST['no_id_pembeli']:'';?>" class="form-control">
            <input type="hidden" name="id_pembeli" required value="<?=(isset($_POST['id_pembeli']))?$_POST['id_pembeli']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['no_id_pembeli']))?$err['no_id_pembeli']:''?></span>
        </div>
        <div class="form-group">
            <label for="">NickName</label>
            <input type="text" name="nickname" required value="<?=(isset($_POST['nickname']))?$_POST['nickname']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nickname']))?$err['nickname']:''?></span>
        </div>
        <div class="form-group">
        <label for="">Level Karakter</label>
        <input type="text" name="level_karakter" class="form-control" required value="<?=(isset($_POST['level_karakter']))?$_POST['level_karakter']:'';?>">
        <span class="text-danger"><?=(isset($err['level_karakter']))?$err['level_karakter']:''?></span>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
</form>