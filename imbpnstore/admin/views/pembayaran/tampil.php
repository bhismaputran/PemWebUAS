<div id="content-wrapper">
    <div class="container mt-2">
                <div class="pull-md-left">
                    <h4>Laporan Pembayaran</h4>
                </div>
                <div class="pull-md-right">
                    <a href="index.php?mod=pembayaran&page=laporan">
                    <button class="btn btn-primary">Tambahkan Transaksi</button>
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
                <th>Id Pemesanan</th><th>Total Pembelian</th><th>Jumlah uang yang dibayarkan</th><th>Kembalian</th><th>Tanggal Pembayaran</th><th>Status Pembayaran</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($pembayaran != NULL){
                $no=1;
                foreach($pembayaran as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['id_pemesanan']?></td><td><?=$row['total_pembelian']?></td><td><?=$row['jmlh_dibayarkan']?></td>
                        <td><?=$row['kembalian']?></td><td><?=$row['tanggal_pembayaran']?></td><td><?=$row['status_pembayaran']?></td>
						<td>
                            <a href="index.php?mod=pembeli&page=edit&id=<?=md5($row['id_pembayaran'])?>"><i class="fas fa-edit"></i></a>
                            <a href="index.php?mod=pembeli&page=delete&id=<?=md5($row['id_pembayaran'])?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++; }
            }?>
        </tbody>
    </table>
</div>
</div>
</div>       