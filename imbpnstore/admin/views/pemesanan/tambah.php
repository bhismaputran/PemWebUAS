<div id="content-wrapper">
    <div class="container mt-2">
            <div class="pull-md-left">
                <h4>Daftar Pesanan</h4>
            </div>
    </div>
    <form action="index.php?mod=pemesanan&page=save" method="POST">
        <div class="container mt-2">
            <div class="form-group">
                <label for="">ID Pembeli</label>
                <input type="number" name="no_id_pembeli" required value="<?=(isset($_POST['no_id_pembeli']))?$_POST['no_id_pembeli']:'';?>" class="form-control">
                <input type="hidden" name="id_pemesanan" value="<?=(isset($_POST['id_pemesanan']))?$_POST['id_pemesanan']:'';?>" class="form-control">
                <span class="text-danger"><?=(isset($err['no_id_pembeli']))?$err['no_id_pembeli']:''?></span>
            </div>
            <div class="form-group">
                <label for="">Produk</label>
                <select name="id_produk" class="form-control" requireq id="">
                    <option value="">Pilih Produk</option>
                    <?php if($produk != NULL){
                        foreach($produk as $row){?>
                            <option <?=(isset($_POST['id_produk']) && $_POST['id_produk']==$row['id_produk'] )?"selected":'';?> value="<?=$row['id_produk'];?>"> <?=$row['nama_produk'];?></option>
                        <?php }
                    }?>
                </select>
                <span class="text-danger"><?=(isset($err['id_produk']))?$err['id_produk']:''?></span>
            </div>
            <div class="form-group">
                <label for="">Harga Produk</label>
                <select name="harga_produk" class="form-control" requireq id="">
                    <option value="">Pilih Harga Produk</option>
                    <?php if($produk != NULL){
                        foreach($produk as $row){?>
                            <option <?=(isset($_POST['harga_produk']) && $_POST['harga_produk']==$row['harga_produk'] )?"selected":'';?> value="<?=$row['harga_produk'];?>"> <?=$row['harga_produk'];?></option>
                        <?php }
                    }?>
                </select>
                <span class="text-danger"><?=(isset($err['harga_produk']))?$err['harga_produk']:''?></span>
            </div>
            <!--
                <div class="form-group">
                <label for="">Harga Produk</label>
                <input type="number" name="harga_produk" class="form-control" required value="<//?=(isset($_POST['harga_produk']))?$_POST['harga_produk']:'';?>">
                <span class="text-danger"><//?=(isset($err['harga_produk']))?$err['harga_produk']:''?></span>
            </div>
            -->
                <div class="form-group">
                <label for="">Tanggal Pemesanan</label>
                <input type="date" name="tanggal_pemesanan" class="form-control" required value="<?=(isset($_POST['tanggal_pemesanan']))?$_POST['tanggal_pemesanan']:'';?>">
                <span class="text-danger"><?=(isset($err['tanggal_pemesanan']))?$err['tanggal_pemesanan']:''?></span>
            </div>
            
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </form>