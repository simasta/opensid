<div id="pageC">
	<table class="inner">
	<tr style="vertical-align:top">

  <td style="background:#fff;padding:0px;">
  <div id="contentpane">
	<form id="mainform" name="mainform" action="<?php echo site_url('laporan/bulan')?>" method="post">
    <div class="ui-layout-north panel top">
      <div class="left">
        <div class="uibutton-group">


          <a class="uibutton tipsy south" title="Cetak" onclick="$('#'+'mainform').attr('target','_blank');formAction('mainform','<?php echo site_url('laporan/cetak')?>')"><span class="icon-print icon-large">&nbsp;</span>Cetak</a>
      		<a href="<?php echo site_url("laporan/excel")?>" class="uibutton tipsy south" title="Excel" target="_blank"><span class="icon-file-text icon-large">&nbsp;</span>Excel</a>
        </div>
      </div>
    </div>
    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
      <table  width="100%">
  			<tbody>
          <tr>	<?php foreach($config as $data){?>
    				<td width="37%"><h4>PEMERINTAH KABUPATEN/KOTA  <?php echo unpenetration($data['nama_kabupaten'])?></h4></td>
    				<td align= "right" width="17%"><h4>LAMPIRAN A - 9</h4></td>
          </tr>
  				<tr>
  					<td></td>
  					<td width="100%"><h3>LAPORAN PERKEMBANGAN PENDUDUK</h3></td>
  				</tr>
  			</tbody>
      </table>
			<table>
				<tbody>
          <tr>
  					<td><?php echo ucwords(config_item('sebutan_desa'))?>/Kelurahan</td>
  					<td width="3%">:</td>
  					<td width="38.5%"><?php echo unpenetration($data['nama_desa'])?></h4></td>
  					<td></td>
  				</tr>
  				<tr>
  					<td>Kecamatan</td>
  					<td width="3%">:</td>
  					<td width="38.5%"><?php echo unpenetration($data['nama_kecamatan'])?></td>
  					<td></td>
  					<?php  } ?>
  				</tr>
  				<tr>
  					<td>Tahun/Bulan</td>
  					<td width="3%">:</td>
  					<td>
              <input name="tahun" type="text" class="inputbox required" size="5" value="<?php echo $tahun ?>"  onchange="$('#'+'mainform').attr('target','');formAction('mainform','<?php echo site_url('laporan/tahun')?>')" />
              <span>/</span>
              <select name="bulan" onchange="$('#'+'mainform').attr('target','');formAction('mainform','<?php echo site_url('laporan/bulan')?>')" >
                <option value="">Pilih bulan</option>
                <option value="1" <?php  if($bulan=="1"){?>selected<?php  }?>>Januari</option>
                <option value="2" <?php  if($bulan=="2"){?>selected<?php  }?>>Februari</option>
                <option value="3" <?php  if($bulan=="3"){?>selected<?php  }?>>Maret</option>
                <option value="4" <?php  if($bulan=="4"){?>selected<?php  }?>>April</option>
                <option value="5" <?php  if($bulan=="5"){?>selected<?php  }?>>Mei</option>
                <option value="6" <?php  if($bulan=="6"){?>selected<?php  }?>>Juni</option>
                <option value="7" <?php  if($bulan=="7"){?>selected<?php  }?>>Juli</option>
                <option value="8" <?php  if($bulan=="8"){?>selected<?php  }?>>Agustus</option>
                <option value="9" <?php  if($bulan=="9"){?>selected<?php  }?>>September</option>
                <option value="10" <?php  if($bulan=="10"){?>selected<?php  }?>>Oktober</option>
                <option value="11" <?php  if($bulan=="11"){?>selected<?php  }?>>November</option>
                <option value="12" <?php  if($bulan=="12"){?>selected<?php  }?>>Desember</option>
              </select>
            </td>
  				</tr>
          <tr>
            <td>Diketahui</td>
            <td width="3%">:</td>
            <td><select name="pamong"  class="inputbox">
              <option value="">Pilih Staf Pemerintah <?php echo ucwords(config_item('sebutan_desa'))?></option>
              <?php foreach($pamong AS $data){?>
                <option value="<?php echo $data['pamong_nama']?>"><?php echo $data['pamong_nama']?>(<?php echo $data['jabatan']?>)</option>
              <?php }?>
              </select></td>
            <td>Sebagai : </th>
            <td><select name="jabatan"  class="inputbox">
              <option value="">Pilih Jabatan</option>
              <?php foreach($pamong AS $data){?>
                <option ><?php echo $data['jabatan']?></option>
              <?php }?>
              </select></td>
          </tr>
		    </tbody>
      </table>

      <?php include ("donjo-app/views/laporan/tabel_bulanan.php"); ?>

      <p>&nbsp;</p>
      <p>&nbsp;</p>

      </div>
    </div>
    <div class="ui-layout-south panel bottom">
      <div class="left">
        <a href="<?php echo site_url()?>sid_wilayah" class="uibutton icon prev">Kembali</a>
      </div>
      <div class="right">
        <div class="uibutton-group">
          <button class="uibutton confirm" type="submit" >Cetak</button>
        </div>
      </div>
    </div>
	</form>
</div>
</td></tr></table>
</div>
