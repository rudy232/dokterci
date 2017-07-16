<!DOCTYPE HTML>
<html>
	<head>
		<title>Cetak Laporan Pasien</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/cetak.css">
	</head>
	<body>
		
    <div class="title" align="center">
      <?php echo "<center>PRAKTIK DOKTER dr. Hj. Siti Sundari, SpM,. Mkes</center>";?><br>
      <?php echo "Jln. Soeradjitirtonegoro No.67, Bendogantungan, Klaten";?><br>
      <?php echo "Telp. (0272) 323210";?> <br>
      <br>
      <?php echo $this->session->userdata('namalengkap');?><br>  
    </div>

    <div class="content" align="center">
      <h3>Laporan Data Pasien <br>Periode  : <?php echo date('d-M-Y', strtotime($dari));?> s/d <?php echo date('d-M-Y', strtotime($sampai));?></h3>
       <table class="table table-striped">
        <thead>
          <tr>
            <th>No. Registrasi</th>
            <th>Tanggal</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Umur</th>
          </tr>
        </thead>
        <tbody>
        <?php if(empty($query)){
          echo '<tr><td colspan="6">Data tidak tersedia.</td></tr>';
          }else{
            foreach($query as $row) :
            ?>
          <tr>
            <td><?php echo $row->no_reg;?></td>
            <td><?php echo $row->tanggal;?></td>
            <td><?php echo $row->namalengkap;?></td>
            <td><?php echo $row->alamat;?></td>
            <td><?php echo $row->umur;?> Th</td>
            
          </tr> 
            <?php
            endforeach;
          }
          ?>
        </tbody>
      </table>
          
    </div>
    
  </body>
</html>
<script type="text/javascript">
document.onkeydown = function(e){
    if (e.keyCode==27){//--ESC--
       setTimeout('self.location.href = "<?php echo site_url();?>/laporan"',0);
      }
    else if (e.keyCode==13){//--Tombol ENTER--
       window.print();
      }
    }
</script>