<div class="card">
    <div class="card-action black-text">
        Data Pengguna
    </div>
    <div class="card-content">
    <!-- Main -->
      <div class="table-responsive">
        <a class="btn btn-primary" href="<?= base_url().'admin/pengguna/tambah' ?>" role="button">Tambah Data</a>
      <a class="btn btn-success" href="<?= base_url().'admin/laporan/pengguna' ?>" target="blank" role="button">Buat Laporan</a>
			  <br><br>
        <?php
            if(isset($results))
            { ?>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col" class="center">ID Outlet</th>
              <th scope="col" class="center">ID Pengguna</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Role</th>
              <th scope="col" class="center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($results as $u){
            ?>
              <tr>
                <td class="center"><?= $u->id_outlet; ?></td>
                <td class="center"><?= $u->id_user; ?></td>
                <td><?= $u->nama; ?></td>
                <td><?= $u->username; ?></td>
                <td><?= $u->passconf; ?></td>
                <td><?= $u->role; ?></td>
                <td class="text-center">
                  <a href="<?= base_url().'admin/pengguna/ubah/'.$u->id_user; ?>" class="btn btn-warning btn-sm">Ubah</a>
                  <a href="<?= base_url().'admin/pengguna/hapus/'.$u->id_user; ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
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