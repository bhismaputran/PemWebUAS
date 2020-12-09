<div id="content-wrapper">
    <div class="container mt-2">
                <div class="pull-md-left">
                    <h4>Tambah Produk</h4>
                </div>
<form action="index.php?mod=produk&page=save" method="POST" enctype="multipart/form-data">
    <div class="container mt-2">
    
        <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" name="nama_produk" required value="<?=(isset($_POST['nama_produk']))?$_POST['nama_produk']:'';?>" class="form-control">
            <input type="hidden" name="id_produk" required value="<?=(isset($_POST['id_produk']))?$_POST['id_produk']:'';?>" class="form-control">
            <input type="hidden" name="gambar_old" required value="<?=(isset($_POST['gambar']))?$_POST['gambar']:'';?>" >
            <span class="text-danger"><?=(isset($err['nama_produk']))?$err['nama_produk']:''?></span>
        </div>
        <div class="form-group">
            <label for="">Harga Produk</label>
            <input type="number" name="harga_produk" required value="<?=(isset($_POST['harga_produk']))?$_POST['harga_produk']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['harga_produk']))?$err['harga_produk']:''?></span>
        </div>
        <div>
        Deskripsi Produk<br/>
            <textarea name="deskripsi" id="" cols="30" rows="10" placeholder="Silahkan isi Deskripsi Produk" required value="<?=(isset($_POST['deskripsi']))?$_POST['deskripsi']:'';?>" class="form-control"></textarea>
            <span class="text-danger"> <?=(isset($err['deskripsi']))?$err['deskripsi']:''?></span>
        </div>
        <div class="form-group">
            <label for="">Gambar Produk </label>
            <img src="../media/<?=$_POST['gambar']?>" width="100">
            <input type="file" name="fileToUpload" class="form-control">
            <span class="text-danger"><?=(isset($err['fileToUpload']))?$err['fileToUpload']:''?></span>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
</form>