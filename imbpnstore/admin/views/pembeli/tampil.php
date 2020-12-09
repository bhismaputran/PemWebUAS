<div id="content-wrapper">
    <div class="container mt-2">
                <div class="pull-md-left">
                    <h4>Daftar Pembeli</h4>
                </div>
                <div class="pull-md-right">
                    <a href="index.php?mod=pembeli&page=add">
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
                <th>Id Pembeli</th><th>NickName</th><th>Level Karakter</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($pembeli != NULL){
                $no=1;
                foreach($pembeli as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['no_id_pembeli']?></td><td><?=$row['nickname']?></td><td><?=$row['level_karakter']?></td>
                        <td>
                            <a href="index.php?mod=pembeli&page=edit&id=<?=md5($row['id_pembeli'])?>"><i class="fas fa-edit"></i></a>
                            <a href="index.php?mod=pembeli&page=delete&id=<?=md5($row['id_pembeli'])?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php $no++; }
            }?>
        </tbody>
    </table>
</div>
</div>
</div>       