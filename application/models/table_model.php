<?php
$quincenasgracia = $_POST['quincenasgracia'];
$numpagos = $_POST['numpagos'];
$descuento = $_POST['descuento'];
$creditosol = $_POST['creditosol'];
$descuentogestion = $_POST['descuentogestion'];
$p1 = $_POST['p1'];
?>
<style type="text/css">
<!--
.style2 {color: #FFFFFF; font-weight: bold; }
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style6 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style7 {font-size: 12px}
-->
</style>


<div class="css_clear css_spacing"></div>
	<div class="full_width">
		<table width="931">
			<tr>
			<td width="484">
				<table border="1" cellpadding="0" cellspacing="0" class="display style3" id="example">
					<thead>
						<tr bgcolor="#d1552f">
							<th width="43"><p class="style6">No. Pago</p></th>
							<th width="101"><span class="style6">Pago</span></th>
							<th width="107"><span class="style6">Capital</span></th>
							<th width="108"><span class="style6">Inter&eacute;s+IVA</span></th>
							<th width="107"><span class="style6">Saldo Insoluto </span></th>
						</tr>
					</thead>
					<?php $saldoCelda=$creditosol;
					 $saldoCelda=str_replace("$", "",$saldoCelda);
					echo $saldoCelda;
						$pagoCelda=0;
						$capitalCelda=0;
						$interesCelda=0;
						$numQuincenasSol=0;
						if ($creditosol>25000)
							$numQuincenasSol=24;
						else
							$numQuincenasSol=12;
						?>
					<tbody>
					<?php for ($j=1;$j<=($numpagos+$quincenasgracia)/2;$j++){ ?>			
						<tr class="gradeX">
							<td><?php echo $j?></td>
							<?php 				
								if ($j<=$quincenasgracia){
									$pagoCelda=0;
									$capitalCelda=0;					
									$interesCelda=round($saldoCelda*$p1,2);
									$saldoCelda=round($saldoCelda+$interesCelda,2);
									echo $saldoCelda;
								}else{
									//Cálculo Pago
									if ($j<=$numQuincenasSol+$quincenasgracia)	
										$pagoCelda=round($descuento+$descuentogestion,2);
									else
										$pagoCelda=round($descuento,2);		
									//Cálculo interés					
										$interesCelda=round($p1*$saldoCelda,2);
									//Cálculo capital
										$capitalCelda=round($pagoCelda-$interesCelda,2);
									//Cálculo saldo
									if ($j<$quincenasgracia)					
										$saldoCelda=round($saldoCelda+$pagoCelda,2);
									else
										$saldoCelda=round($saldoCelda-$capitalCelda,2);
								} 
							?>				
							<td><?php echo '$'.$pagoCelda?></td>
							<td><?php echo '$'.$capitalCelda?></td>					
							<td><?php echo '$'.$interesCelda?></td>
							<td><?php echo '$'.$saldoCelda?></td>
						</tr>		
						<?php } ?>	
					</tbody>				
			  </table>			</td>			
			<td width="613">	
				<table width="414" border="1" cellpadding="0" cellspacing="0" class="display style3" id="example">
					<thead>
						<tr bgcolor="#d1552f" class="style2">
							<th width="40"><span class="style7">No. Pago</span></th>
							<th width="90"><span class="style7">Pago</span></th>
							<th width="102"><span class="style7">Capital</span></th>
							<th width="108"><span class="style7">Inter&eacute;s+IVA</span></th>
							<th width="100"><span class="style7">Saldo Insoluto </span></th>
					  </tr>
					</thead>				
					<tbody>
					<?php for (;$j<=$numpagos+$quincenasgracia;$j++){ ?>	
					<tr class="gradeX">
						<td><?php echo $j?></td>
						<?php 				
							if ($j<=$quincenasgracia){
								$pagoCelda=0;
								$capitalCelda=0;					
								$interesCelda=round($saldoCelda*$p1,2);				
								$saldoCelda=round($saldoCelda+$interesCelda,2);
							}else{
								//Cálculo Pago
								if ($j<=$numQuincenasSol+$quincenasgracia)	
									$pagoCelda=round($descuento+$descuentogestion,2);
								else
									$pagoCelda=round($descuento,2);		
								//Cálculo interés					
									$interesCelda=round($p1*$saldoCelda,2);
								//Cálculo capital
									$capitalCelda=round($pagoCelda-$interesCelda,2);
								//Cálculo saldo
								if ($j<$quincenasgracia)					
									$saldoCelda=round($saldoCelda+$pagoCelda,2);
								else
									$saldoCelda=round($saldoCelda-$capitalCelda,2);
							} 
								?>				
						<td><?php echo '$'.$pagoCelda?></td>
						<td><?php echo '$'.$capitalCelda?></td>					
						<td><?php echo '$'.$interesCelda?></td>
						<td><?php echo '$'.$saldoCelda?></td>
					</tr>		
				</tbody>
				<?php } ?>		
			</table>		
			</td>
			</tr>
	  </table>
	</div>
</div>

