 <!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">	
					<div class="panel panel-headline">
						<div class="panel-body">
						
<form action="<?php echo base_url()?>Home/kuisioner" method="post">

<!--?php foreach ($rule as $rl){ ?-->
<!--  <input type="hidden" name="id_rule" value="">-->
<!--?php echo $rl->ID_RULE; ?-->
<!--  <h2><b>Anak Melakukan Sholat Shubuh?php echo $rl->PERTANYAAN; ? </b></h2>-->
 <br><br>  			
<h2><b><p class="text-center">Anak Melakukan Sholat Shubuh</p></b></h2> 
<br>
    <div id="notice"></div>
<hr>
							
<div class="row">
    
    <div id="enggak">
        <div class="col-lg-5"> </div>
        <div class="col-lg-1">
        <br>  
        <input type="radio" id="yes" required onchange="pertanyaan()" name="id_gjl" value=""> Iya  
    </div>
    <div class="col-lg-1">  
        <br>
        <input type="radio" id="no" onchange="tidak()" required name="id_gjl" value=""> Tidak
    </div>
    </div>
    
    <div id="detailPertanyaan">
        
    </div>
</div>
    <!--?php echo $rl->jawab_T."|3"; ?-->
    <!--?php } ?-->
                           

<?php //} ?>

<br><br><br><br><br>               
 <div class="row">
   <div class="col-md-4"></div>
  <div class="btn-group btn-group-lg col-md-8" >
   <button type="submit" class="btn btn-success" name="nextRule">Sebelumnya</button>
    <a href="<?php echo base_url ().'Home/detail_kuis_home/'?>" type="submit" class="btn btn-success" name="nextRule">Selanjutnya</a>
  </div>
</div>

</form> 
<br><br><br>
</div>
</div>
</div>
</div>
</div>
<script>
    function pertanyaan(){
        if(document.getElementById("yes").checked == true){
            console.log('Yess');
//            $('#detailPertanyaan').append('hallo');
            $('#enggak').remove();
            $('#detailPertanyaan').append('<div id="per"><div class="col-lg-2"> </div>'
                                            +'<div class="col-lg-3"> <br>'  
                                            +'<input type="radio" required name="id_gjl" value=""> Kesadaran Diri</div>'
                                            +'<div class="col-lg-3">  '
                                            +'<br><input type="radio" required name="id_gjl" value=""> Disuruh 1 Kali'
                                            +'</div>  '
                                            +'<div class="col-lg-3">  '
                                            +'<br><input type="radio" required name="id_gjl" value=""> Disuruh Lebih dari 1'  
                                            +'</div></div>');
            $('#notice').append('<p class="text-center"><em>*pilih alasan menjawab ya</em></p>');
        } 
    }
    
    function tidak(){
        if(document.getElementById("no").checked == true){
            console.log('Nooo');
            $('#per').remove();
        }
    }
</script>
		        
                        



