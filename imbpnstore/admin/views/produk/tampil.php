<div id="content-wrapper">
    <div class="container mt-2">
                <div class="pull-md-left">
                    <h4>Daftar Produk</h4>
                </div>
                <div class="pull-md-right">
                    <a href="index.php?mod=produk&page=add">
                    <button class="btn btn-primary">Add</button>
                    </a>
        </div>
</div>
<div class="row mt-5 ml-5">
    <table class="table table-bordered table-striped">
        <thead>
            <tr class="text-center">
                <th>
                    No
                </th>
                <th>Nama Produk</th><th>ID</th><th>Harga Produk</th><th>Deskripsi Produk</th><th>Gambar Produk</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($produk != NULL){
                $no=1;
                foreach($produk as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['nama_produk']?></td><td><?=$row['id_produk']?></td><td><?=$row['harga_produk']?></td><td><?=$row['deskripsi']?></td><td><img src="../media/<?=$row['gambar']?>" width="100"></td>
                        <td>
                            <a href="index.php?mod=produk&page=edit&id=<?=md5($row['id_produk'])?>"><i class="fas fa-edit"></i></a>
                            <a href="index.php?mod=produk&page=delete&id=<?=md5($row['id_produk'])?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++; }
            }?>
        </tbody>
    </table>
</div>
</div>
</div>            
