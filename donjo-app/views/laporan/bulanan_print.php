<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Cetak Laporan Bulanan</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="<?php echo base_url()?>assets/css/report.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
  .tengah {text-align: center;};
</style>

<body>
<div id="container">

<!-- Print Body -->
<div id="body">
  <table  width="100%">
    <tbody>
      <?php foreach($config as $data) : ?>
        <tr>
    			<td class="tengah" width="100%"><h3>PEMERINTAH <?php echo strtoupper(config_item('sebutan_kabupaten'))?> <?php echo strtoupper($data['nama_kabupaten'])?> KECAMATAN <?php echo strtoupper($data['nama_kecamatan'])?></h3></td>
        </tr>
  			<tr>
  				<td class="tengah" width="100%"><h3>LAPORAN PENDUDUK <?php echo strtoupper(config_item('sebutan_desa'))?> <?php echo strtoupper($data['nama_desa'])?></h3></td>
  			</tr>
      <? endforeach; ?>
		</tbody>
	</table>
	<br>
	<table>
		<tbody>
			<tr>
				<td style="text-align: left;">Bulan : <?php echo $bln?> <?php echo $tahun?> </td>
				<td width="40%"></td>
			</tr>
		</tbody>
  </table>

  <?php include ("donjo-app/views/laporan/tabel_bulanan.php"); ?>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div style="float: right; padding-right: 50px;">
    <table>
      <tr>
        <td><?php echo ucwords(config_item('sebutan_desa'))?> <?php echo unpenetration($data['nama_desa'])?>, <?php echo tgl_indo(date("Y m d"))?></td>
      </tr>
      <tr>
        <td><?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($data['nama_desa'])?></td>
      </tr>
      <tr height="150px;">
        <td>( <?php echo unpenetration($input['pamong'])?> )</td>
      </tr>
    </table>
  </div>

</div>
</div>

</body></html>
