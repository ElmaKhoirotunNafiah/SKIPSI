<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel">
				        <div class="panel-heading">
                            <h3 class="panel-title">Data Anak Kecanduan Gadget</h3>
                        </div>
				    <div class="panel-body">
<!--                        <form action="<!?php echo base_url()?>laporan" method="post">-->
<!--                        <div class="row">-->
<!--
                            <div class="col-lg-3">
                        
<select id="tahun" name="tahun" class="form-control">
    <!?php foreach($tahun as $th){?>
										<option <!?php if($thn==$th->tahun) echo "selected"; ?> value="<!?php echo $th->tahun?>"><!?php echo $th->tahun?></option>
    <!?php } ?>
                                </select></div>
-->
<!--
                             <div class="col-lg-3">
                        <button type="submit" name="cari" class="btn btn-primary">Pilih</button>
                         <br><br><br>
                            </div>
-->
<!--                            </div>-->
<!--                            </form>-->
<!--
                        <div class="row">
                           
                             <div class="col-lg-2">
                        <h4 ><b>Bulan : <!?php echo $bln." ".$thn?></b></h4>
                                 </div>  
                            </div>
-->
<!--
                                <table class="table table-striped" id="example">
										<thead>
											<tr>
                                                <th>No.</th>
                                                <th>Hasil</th>
												<th>Solusi</th>
											</tr>
										</thead>
										<tbody>
                                            <?php
                                                $no = 1;
                                                foreach($laporan as $lp){
                                            ?>
											<tr>
                                                <td><?php echo $no++ ?></td>
												<td><?php echo $lp->hasil; ?></td>
												<td><span class="label label-success"><?php echo $lp->AD_TINGKAT; ?></span></td>
											</tr>
											
                                             <?php } ?>
										</tbody>
									</table>

-->
<table class="table table-striped ">
    <thead>
      <tr>
<!--        <th>Bulan</th>-->
        <th>Hasil</th>
        <th>Solusi</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($nilai_raport as $nr){ ?>
      <tr>
        <td><?php echo $nr->hasil?></td>
        <td><a href="<1?php echo base_url()?>Cu_deteksi/hasil_akhir_kuisioner/<!?php echo $rwa->ID_DETEKSI;?>"><span class="btn btn-info"><i class="fa fa-eye"></i>&nbsp; Detail </span></a></td>
      </tr>
        <?php } ?>
    </tbody>
  </table>
                        </div>
								
							</div>
</div>

