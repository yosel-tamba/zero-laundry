<div class="card">
    <div class="card-action black-text">
        Data Transaksi
    </div>
    <div class="card-content">
    <!-- Main -->
        <div class="">
        <form name="form_filter_transaksi" action="<?php echo base_url().'owner/transaksi/laporan_filter' ?>" method="post" class="w-50 user needs-validation mx-3 mb-4" novalidate>
            <div class="col s12">
                <div class="row">
                <div class="col "></div>
                <div class="col s3">
                        <label class="control-label black-text">Dari</label>
                        <input type="date"  class="invalid black-text" name="dari" value="<?php echo set_value('dari')?>" required>
                    </div>
                    <div class="col s3">
                        <label class="control-label black-text">Sampai</label>
                        <input type="date"  class="invalid black-text" name="sampai" value="<?php echo set_value('sampai')?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col "></div>
                    <div class="col s6">
                        <button type="submit" class="btn btn btn-primary btn-sm">Cari Data </button>
                        <a target="blank" href="<?php echo base_url().'owner/transaksi/print/'.set_value('dari').'/'.set_value('sampai') ?>" class="btn btn-warning btn-sm"> Cetak</a>
                        <a target="blank" href="<?php echo base_url().'owner/transaksi/cetak_pdf/'.set_value('dari').'/'.set_value('sampai') ?>" class="btn btn-danger btn-sm" >Buat PDF</a>
                    </div>
                </div>
            </div>
        </form>
            <?php
            if(isset($data_transaksi))
            { ?>
            <table class="table table-striped table-hover">
            <thead class="text-center black-text">
            <tr>
                <th scope="col"class="center text-black">ID Transaksi</th>
                <th scope="col">Kode Invoice</th>
                <th scope="col">Nama Member</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Tanggal Bayar</th>
                <th scope="col">Harga Paket</th>
                <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody class="text-center black-text">
                <?php
                    foreach($data_transaksi as $t){
                ?>                    
                <tr>
                        <td class="center"><?= $t->id; ?></td>
                        <td><?= $t->kode_invoice; ?></td>
                        <td><?= $t->nama_member; ?></td>
                        <td><?= $t->tgl; ?></td>
                        <td><?= $t->tgl_bayar; ?></td>
                        <td>Rp. <?= $t->harga_awal; ?></td>
                        <td>Rp. <?= $t->total_harga; ?></td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
            <?php
                }else{
            ?>
            <div class="alert alert-danger center"><strong>Tidak ada data</div>
            <?php
            }
                if(isset($links)){
                    echo "<p>" . $links . "</p>";
            }
            ?>
        </div>
        <!-- End Main -->
    </div>
</div>
