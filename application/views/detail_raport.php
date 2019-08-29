<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel">
				        <div class="panel-heading">
							<div class="row">
								<div class="col-md-1">
									<h3 class="panel-title">Nama</h3>
								</div>
								<div class="col-md-11">
									<h3 class="panel-title">: <b><?php echo $this->session->userdata("nama"); ?></b></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1">
									<h3 class="panel-title">Kelas</h3>
								</div>
								<div class="col-md-11">
									<h3 class="panel-title">: <b><?php echo $this->session->userdata("kelas").$this->session->userdata("golongan"); ?></b></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1">
									<h3 class="panel-title">Bulan</h3>
								</div>
								<div class="col-md-10">
									<h3 class="panel-title">: <b><?php echo $bulan ?></b></h3>
								</div>
							</div>
							
						</div>
				<div class="panel-body">
						<table class="table table-striped ">
								<thead>
									<tr>
										<th>No</th>
										<th>Kategori</th>
										<th>Nilai</th>
										<th>Hasil</th>
									</tr>
								</thead>
								<tbody>
								<?php for($i = 0; $i < 3; $i++){ ?>
									<tr>
										<td><?php echo $i+1 ?></td>
										<td><?php echo $hasil[$i][0] ?></td>
										<td><?php echo round($hasil[$i][1], 2) ?></td>
										<td><?php if($hasil[$i][2] == "Sangat Kurang"){ ?>
											<span class="label label-danger">Sangat Kurang</span>
										<?php } elseif($hasil[$i][2] == "Kurang"){ ?>
											<span class="label label-warning">Kurang</span>
										<?php } elseif($hasil[$i][2] == "Cukup"){ ?>
											<span class="label label-default">Cukup</span>
										<?php } elseif($hasil[$i][2] == "Baik"){ ?>
											<span class="label label-info">Baik</span>
										<?php } elseif($hasil[$i][2] == "Sangat Baik"){ ?>
											<span class="label label-success">Sangat Baik</span>
										<?php } elseif($hasil[$i][2] == "Super"){ ?>
											<span class="label label-primary">Super</span>
										<?php } else { ?> 
											---
										<?php } ?></td>
									</tr>
										<?php } ?>
								</tbody>
							</table>
             </div>		
			</div>
</div>
