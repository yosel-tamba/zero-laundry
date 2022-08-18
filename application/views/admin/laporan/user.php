<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #table tr:nth-child(even){background-color: #f2f2f2;}
            #table tr:hover {background-color: #ddd;}
            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3> Report Data Pengguna</h3>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Paket</th>
                    <th>ID Outlet</th>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($user as $m){
                ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $m->id_user; ?></td>
                    <td><?= $m->id_outlet; ?></td>
                    <td><?= $m->nama; ?></td>
                    <td><?= $m->username; ?></td>
                    <td><?= $m->passconf; ?></td>
                    <td><?= $m->role; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>