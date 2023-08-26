<!--<?= content_open($title) ?> -->
<a href="<?= site_url($url . '/form/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>

<hr>
<?= $this->session->flashdata('info') ?>

<table class="table table-bordered dt">
	<thead>
		<tr>
			<th width="50px" class="text-center">No</th>
			<th>Tanggal</th>
			<th>Lokasi</th>
			<th>Nama Kecamatan</th>
			<th>Foto</th>
			<th>Keterangan</th>
			<th>Lat</th>
			<th>Lng</th>
			<th>Kategori</th>
			<th width="200px">Aksi</th>
		</tr>
	</thead>

</table>
<?= content_close() ?>