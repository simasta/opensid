<style type="text/css">
  table.tftable {
    margin-top: 5px;
    font-size:12px;
    color:#333333;
    width:100%;
    border-width: 1px;
    border-style: solid;
    border-color: #729ea5;
    border-collapse: collapse;
  }
  table.tftable.lap-bulanan {border-width: 3px;}
  table.tftable tr.thick {border-width: 3px; border-style: solid;}
  table.tftable th.thick {border-width: 3px;}
  table.tftable th.thick-kiri {border-left: 3px solid #729ea5;}
  table.tftable td.thick-kanan {border-right: 3px solid #729ea5;}
  table.tftable th {background-color:#8DABD4;padding: 3px;border: 1px solid #729ea5;text-align:center;}
  /*table.tftable tr {background-color:#ffffff;}*/
  table.tftable td {padding: 8px;border: 1px solid #729ea5;}
</style>


<table id="tfhover" class="tftable lap-bulanan">
  <thead>
    <tr class="thick">
      <th rowspan="2" scope="col" class="thick">No.</th>
      <th rowspan="2" scope="col" class="thick">PERINCIAN</th>
      <th colspan="2" scope="col" class="thick">WNI</th>
      <th colspan="2" scope="col" class="thick">WNA</th>
      <th colspan="3" scope="col" class="thick">Penduduk</th>
      <th colspan="3" scope="col" class="thick">Kepala Keluarga</th>
    </tr>
    <tr class="thick">
      <th>Laki-laki</th>
      <th>Perempuan</th>
      <th class="thick-kiri">Laki-laki</th>
      <th>Perempuan</th>
      <th class="thick-kiri">Laki-laki</th>
      <th>Perempuan</th>
      <th>L+P</th>
      <th class="thick-kiri">Laki-laki</th>
      <th>Perempuan</th>
      <th>L+P</th>
    </tr>
		<tr>
			<th>1</th>
			<th class="thick-kiri">2</th>
			<th class="kolom-data">3</th>
			<th class="kolom-data">4</th>
      <th class="kolom-data">5</th>
			<th class="kolom-data">6</th>
      <th class="kolom-data">7</th>
			<th class="kolom-data">8</th>
			<th class="kolom-data">9</th>
      <th class="kolom-data">10</th>
      <th class="kolom-data">11</th>
      <th class="kolom-data">12</th>
		</tr>
	</thead>
	<tbody>
    <tr></tr>
    <tr>
      <td class="thick-kanan"><div align="center">1</div></td>
      <td>Penduduk awal bulan ini</td>
      <td><?php echo $penduduk_awal['WNI_L']+0 ?></td>
      <td><?php echo $penduduk_awal['WNI_P']+0 ?></td>
      <td><?php echo $penduduk_awal['WNA_L']+0 ?></td>
      <td><?php echo $penduduk_awal['WNA_P']+0 ?></td>
      <td><?php echo ($penduduk_awal['WNI_L']+$penduduk_awal['WNA_L'])?></td>
      <td><?php echo ($penduduk_awal['WNI_P']+$penduduk_awal['WNA_P'])?></td>
      <td><?php echo ($penduduk_awal['WNI_L']+$penduduk_awal['WNA_L'])+($penduduk_awal['WNI_P']+$penduduk_awal['WNA_P'])?></td>
      <td><?php echo ($penduduk_awal['KK_L'])?></td>
      <td><?php echo ($penduduk_awal['KK_P'])?></td>
      <td><?php echo ($penduduk_awal['KK'])?></td>
    </tr>
		<tr>
    	<td class="thick-kanan"><div align="center">2</div></td>
    	<td>Kelahiran/KK baru bulan ini</td>
    	<td><?php echo $kelahiran['WNI_L']+0 ?></td>
    	<td><?php echo $kelahiran['WNI_P']+0 ?></td>
    	<td><?php echo $kelahiran['WNA_L']+0 ?></td>
    	<td><?php echo $kelahiran['WNA_P']+0 ?></td>
      <td><?php echo ($kelahiran['WNI_L']+$kelahiran['WNA_L'])?></td>
      <td><?php echo ($kelahiran['WNI_P']+$kelahiran['WNA_P'])?></td>
      <td><?php echo ($kelahiran['WNI_L']+$kelahiran['WNA_L'])+($kelahiran['WNI_P']+$kelahiran['WNA_P'])?></td>
      <td><?php echo ($kelahiran['KK_L'])?></td>
      <td><?php echo ($kelahiran['KK_P'])?></td>
      <td><?php echo ($kelahiran['KK'])?></td>
  	</tr>
		<tr>
    	<td class="thick-kanan"><div align="center">3</div></td>
    	<td>Kematian bulan ini</td>
    	<td><?php echo $kematian['WNI_L']+0 ?></td>
    	<td><?php echo $kematian['WNI_P']+0 ?></td>
    	<td><?php echo $kematian['WNA_L']+0 ?></td>
    	<td><?php echo $kematian['WNA_P']+0 ?></td>
      <td><?php echo ($kematian['WNI_L']+$kematian['WNA_L'])?></td>
      <td><?php echo ($kematian['WNI_P']+$kematian['WNA_P'])?></td>
      <td><?php echo ($kematian['WNI_L']+$kematian['WNA_L'])+($kematian['WNI_P']+$kematian['WNA_P'])?></td>
      <td class="kosong" colspan=3>&nbsp;</td>
  	</tr>
		<tr>
    	<td class="thick-kanan"><div align="center">4</div></td>
    	<td>Pendatang bulan ini</td>
    	<td><?php echo $pendatang['WNI_L']+0 ?></td>
    	<td><?php echo $pendatang['WNI_P']+0 ?></td>
    	<td><?php echo $pendatang['WNA_L']+0 ?></td>
    	<td><?php echo $pendatang['WNA_P']+0 ?></td>
      <td><?php echo ($pendatang['WNI_L']+$pendatang['WNA_L'])?></td>
      <td><?php echo ($pendatang['WNI_P']+$pendatang['WNA_P'])?></td>
      <td><?php echo ($pendatang['WNI_L']+$pendatang['WNA_L'])+($pendatang['WNI_P']+$pendatang['WNA_P'])?></td>
      <td class="kosong" colspan=3>&nbsp;</td>
  	</tr>
		<tr>
    	<td class="thick-kanan"><div align="center">5</div></td>
    	<td>Pindah bulan ini</td>
    	<td><?php echo $pindah['WNI_L']+0 ?></td>
    	<td><?php echo $pindah['WNI_P']+0 ?></td>
    	<td><?php echo $pindah['WNA_L']+0 ?></td>
    	<td><?php echo $pindah['WNA_P']+0 ?></td>
      <td><?php echo ($pindah['WNI_L']+$pindah['WNA_L'])?></td>
      <td><?php echo ($pindah['WNI_P']+$pindah['WNA_P'])?></td>
      <td><?php echo ($pindah['WNI_L']+$pindah['WNA_L'])+($pindah['WNI_P']+$pindah['WNA_P'])?></td>
      <td><?php echo ($pindah['KK_L'])?></td>
      <td><?php echo ($pindah['KK_P'])?></td>
      <td><?php echo ($pindah['KK'])?></td>
  	</tr>
    <tr>
    	<td class="thick-kanan"><div align="center">6</div></td>
    	<td>Penduduk hilang bulan ini</td>
    	<td><?php echo $hilang['WNI_L']+0 ?></td>
    	<td><?php echo $hilang['WNI_P']+0 ?></td>
    	<td><?php echo $hilang['WNA_L']+0 ?></td>
    	<td><?php echo $hilang['WNA_P']+0 ?></td>
      <td><?php echo ($hilang['WNI_L']+$hilang['WNA_L'])?></td>
      <td><?php echo ($hilang['WNI_P']+$hilang['WNA_P'])?></td>
      <td><?php echo ($hilang['WNI_L']+$hilang['WNA_L'])+($hilang['WNI_P']+$hilang['WNA_P'])?></td>
      <td class="kosong" colspan=3>&nbsp;</td>
  	</tr>
		<tr>
    	<td class="thick-kanan"><div align="center">7</div></td>
    	<td>Penduduk akhir bulan ini</td>
    	<td><?php echo $penduduk_akhir['WNI_L']+0 ?></td>
    	<td><?php echo $penduduk_akhir['WNI_P']+0 ?></td>
    	<td><?php echo $penduduk_akhir['WNA_L']+0 ?></td>
    	<td><?php echo $penduduk_akhir['WNA_P']+0 ?></td>
      <td><?php echo ($penduduk_akhir['WNI_L']+$penduduk_akhir['WNA_L'])?></td>
      <td><?php echo ($penduduk_akhir['WNI_P']+$penduduk_akhir['WNA_P'])?></td>
      <td><?php echo ($penduduk_akhir['WNI_L']+$penduduk_akhir['WNA_L'])+($penduduk_akhir['WNI_P']+$penduduk_akhir['WNA_P'])?></td>
      <td><?php echo ($penduduk_akhir['KK_L'])?></td>
      <td><?php echo ($penduduk_akhir['KK_P'])?></td>
      <td><?php echo ($penduduk_akhir['KK'])?></td>
  	</tr>
  </tbody>
</table>
