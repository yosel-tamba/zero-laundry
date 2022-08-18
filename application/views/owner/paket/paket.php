<div class="card">
  <div class="card-action black-text">
    Data Paket Cucian
  </div>
  <div class="card-content">
    <!-- Main -->
    <div class="table-responsive">
      <a class="btn btn-success" href="<?= base_url().'owner/laporan/paket' ?>" target="blank" role="button">Buat Laporan</a>
			<br><br>
      <?php
            if(isset($results))
            { ?>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" class="center">Id Paket</th>
            <th scope="col" class="center">Id Outlet</th>
            <th scope="col">Jenis Paket</th>
            <th scope="col">Nama Paket</th>
            <th scope="col">Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php
              foreach($results as $p){
          ?>
            <tr>
                <td class="center"><?= $p->id_paket; ?></td>
                <td class="center"><?= $p->id_outlet; ?></td>
                <td><?= $p->jenis; ?></td>
                <td><?= $p->nama_paket; ?></td>
                <td><?= $p->harga; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
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
        <!-- End Main -->
    </div>
</div>