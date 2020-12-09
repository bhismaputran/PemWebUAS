<div id="content-wrapper">
    <div class="container mt-2">
                <div class="pull-md-left">
                    <h4>Laporan Pembayaran</h4>
                </div>
<form action="index.php?mod=pembayaran&page=save" method="POST">
    <div class="container mt-2">
    
        <div class="form-group">
                <label for="">ID Pemesanan</label>
                <select name="id_pemesanan" class="form-control" requireq id="">
                    <option value="">Pilih ID Pemesanan</option>
                    <?php if($produk != NULL){
                        foreach($produk as $row){?>
                            <option <?=(isset($_POST['id_pemesanan']) && $_POST['id_pemesanan']==$row['id_pemesanan'] )?"selected":'';?> value="<?=$row['id_pemesanan'];?>"> <?=$row['id_pemesanan'];?></option>
                        <?php }
                    }?>
                </select>
            <span class="text-danger"><?=(isset($err['id_pemesanan']))?$err['id_pemesanan']:''?></span>
        </div>
        <div class="form-group">
            <label for="">Total Pembayaran</label>
            <input type="number" name="total_pembelian" required value="<?=(isset($_POST['total_pembelian']))?$_POST['total_pembelian']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['total_pembelian']))?$err['total_pembelian']:''?></span>
        </div>
        <div class="form-group">
            <label for="">Jumlah Dibayarkan</label>
            <input type="number" name="jmlh_dibayarkan" required value="<?=(isset($_POST['jmlh_dibayarkan']))?$_POST['jmlh_dibayarkan']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['jmlh_dibayarkan']))?$err['jmlh_dibayarkan']:''?></span>
        </div>
        <div class="form-group">
            <label for="">Kembalian</label>
            <input type="number" name="kembalian" required value="<?=(isset($_POST['kembalian']))?$_POST['kembalian']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['kembalian']))?$err['kembalian']:''?></span>
        </div>
        <div class="form-group">
            <label for="">Tanggal Pembayaran</label>
            <input type="date" name="tanggal_pembayaran" class="form-control" required value="<?=(isset($_POST['tanggal_pembayaran']))?$_POST['tanggal_pembayaran']:'';?>">
            <span class="text-danger"><?=(isset($err['tanggal_pembayaran']))?$err['tanggal_pembayaran']:''?></span>
        </div>
        <div class="form-group">
        <label for="">Status Pembayaran</label>
        <input type="text" name="status_pembayaran" class="form-control" required value="<?=(isset($_POST['status_pembayaran']))?$_POST['status_pembayaran']:'';?>">
        <span class="text-danger"><?=(isset($err['status_pembayaran']))?$err['status_pembayaran']:''?></span>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
</form>