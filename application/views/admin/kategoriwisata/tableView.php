<!--<?= content_open($title) ?> -->
<a href="<?= site_url($url . '/form/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
<hr>
<?= $this->session->flashdata('info') ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th width="50px" class="text-center">No.</th>
            <th>Kode</th>
            <th>Nama Kategori</th>
            <th>Marker</th>
            <th width="200px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($datatable->result() as $row) {
        ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td class="text-center"><?= $row->kd_kategori_wisata ?></td>
                <td><?= $row->nm_kategori_wisata ?></td>
                <td class="text-center"><?= ($row->marker == '' ? '-' : '<img src="' . assets('unggah/marker/' . $row->marker) . '" width="40px">') ?></td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="<?= site_url($url . '/form/ubah/' . $row->id_kategori_wisata) ?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="<?= site_url($url . '/hapus/' . $row->id_kategori_wisata) ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> Hapus</a>
                    </div>
                </td>
            </tr>
        <?php
            $no++;
        }

        ?>
    </tbody>
</table>
<?= content_close() ?>