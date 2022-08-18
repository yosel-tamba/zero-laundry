<div class="card">
  <div class="card-action black-text">
    Data Transaksi
  </div>
  <div class="card-content">
    <div class="black-text">
            </form>
            <form name="form_filter_transaksi" action="<?php echo base_url().'admin/transaksi/laporan_filter' ?>" method="post" class="w-50 user needs-validation mx-3 mb-4" novalidate>
                <div class="col s12">
                    <div class="row">
                    <div class="col "></div>
                    <div class="col s3">
                            <label class="control-label black-text">Dari</label>
                            <input type="date"  class="invalid black-text" name="dari" value="<?= date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col s3">
                            <label class="control-label black-text">Sampai</label>
                            <input type="date"  class="invalid black-text" name="sampai" value="<?= date('Y-m-d'); ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col "></div>
                        <div class="col s6">
                            <button type="submit" class="btn btn btn-primary btn-sm">Cari Data </button>
                        </div>
                    </div>
                </div>
            </form>
			<a></a>
            <?php
            if(isset($results))
            { ?>
            <table class="table table-striped table-hover">
            <thead class="black-text">
            <tr>
                <th scope="col"class="center text-black">ID Transaksi</th>
                <th scope="col">Kode Invoice</th>
                <th scope="col">Nama Member</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Status</th>
                <th scope="col"class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="black-text">
                <?php
                    foreach($results as $t){
                ?>                    
                <tr>
                        <td class="center"><?= $t->id; ?></td>
                        <td><?= $t->kode_invoice; ?></td>
                        <td><?= $t->nama_member; ?></td>
                        <td><?= $t->total_harga; ?></td>
                        <td><?= $t->tgl; ?></td>
                        <td class="
                            <?php
                                if( $t->status == 'baru'){echo "red-text";}
                                elseif( $t->status == 'proses'){echo "orange-text";}
                                elseif( $t->status == 'selesai'){echo "text-primary";}
                                elseif( $t->status == 'diambil'){echo "green-text";}
                            ?>
                        ">
                            <?= $t->status; ?>
                        </td> 
                        <td class="text-center">
                            <a href="<?= base_url().'admin/transaksi/detail_transaksi/'.$t->id; ?>" class="btn btn-secondary btn-sm">Lihat Detail</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
      <?php
                }else{
            ?>
            <p class="text-danger center">Tidak ada data</p>
            <?php
            }
              if(isset($links)){
                echo "<p>" . $links . "</p>";
            }
            ?>
    </div>
  </div>
</div>
