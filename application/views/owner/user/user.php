<div class="card">
    <div class="card-action black-text">
        Data Pengguna
    </div>
    <div class="card-content">
    <!-- Main -->
      <div class="table-responsive">
      <a class="btn btn-success" href="<?= base_url().'owner/laporan/pengguna' ?>" target="blank" role="button">Buat Laporan</a>
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