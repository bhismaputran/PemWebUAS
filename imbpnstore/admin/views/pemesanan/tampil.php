<div id="content-wrapper">
    <div class="container mt-2">
                <div class="pull-md-left">
                    <h4>Daftar Pemesanan</h4>
                </div>
                <div class="pull-md-right">
                    <a href="index.php?mod=pemesanan&page=add">
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
                <th>Id Pembeli</th><th>Id Produk</th><th>Harga Produk</th><th>Tanggal Pemesanan</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($pemesanan != NULL){
                $no=1;
                foreach($pemesanan as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['no_id_pembeli']?></td><td><?=$row['id_produk']?></td><td><?=$row['harga_produk']?></td><td><?=$row['tanggal_pemesanan']?></td>
                        <td>
                            <a href="index.php?mod=pemesanan&page=edit&id=<?=md5($row['id_pemesanan'])?>"><i class="fas fa-edit"></i></a>
                            <a href="index.php?mod=pemesanan&page=delete&id=<?=md5($row['id_pemesanan'])?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++; }
            }?>
        </tbody>
    </table>
</div>
</div>
</div>       