<div class="card">
  <div class="card-action black-text">
    Data Pelanggan
  </div>
  <div class="card-content">
    <!-- Main -->
    <div class="table-responsive">
      <a class="btn btn-success" href="<?= base_url().'owner/laporan/pelanggan' ?>" target="blank" role="button">Buat Laporan</a>
			<br><br>
      <?php
            if(isset($results))
            { ?>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
                <th scope="col"class="center">Id Pelanggan</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Telepon</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($results as $m){
            ?>
            <tr>
              <td class="center"><?= $m->id_member; ?></td>
              <td><?= $m->nama_member; ?></td>
              <td><?= $m->alamat; ?></td>
              <td><?= $m->jenis_kelamin; ?></td>
              <td><?= $m->tlp; ?></td>
            </tr>
          <?php } ?>
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
    <!-- End Main -->
  </div>
</div>
