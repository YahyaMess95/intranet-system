




<?php 


include "../crud.php";
$crud= new crud();
$conn=$crud->cnx;





echo '<div><td>
<div class="treeview-animated w-90 border border-secondary mx-1 my-1" style=" width: 100%;"> 
<ul class="treeview-animated-list mb-3" >
 <li class="treeview-animated-items">
		 <a class="treeview-animated-items-header">
				<i class="fas fa-plus-circle"></i>
				<span class="hello"></i>Projet</span>
				</a>
 <ul class="nested">';   





$ListaDisc = $crud->afficheDisciplineParProjet($conn) ; 


$ListaType = $crud->afficheTypeParDiscipline($conn) ; 



foreach ($ListaDisc as $key1 ) {
    


    if ($key1['Projet']==$_GET['projet2']) {

 echo '							          	<li class="treeview-animated-items">
							            	<a class="treeview-animated-items-header">
							              		<i class="fas fa-plus-circle"></i>
							              		<span class="hello">
							              			</i>Discipline:<?php echo  $key1["Nom"] ?></span>
							              	</a>' ; 

 
              
                foreach ($ListaType as $key2 ) {
                if ($key1['Projet']==$key2['projet'] and $key1['Nom']==$key2['discipline'] ) {
                
               echo ' 
							            	<ul class="nested">

              
								                <a class="treeview-animated-items-header">
								              		<i class="fas fa-plus-circle"></i>
								              		<span class="hello">
								              			</i>Type:-<?php echo  $key2["type"] ?>
								              		</span>
							              	    </a>  
                                    <!--
								              	<ul class="nested">
									           <table style="background-color: white;" data-toggle="table" id="table" class="" data-detail-view="" data-pagination="true" data-pagination-pre-text="< Previous" data-pagination-next-text="Next >" data-classes="table table-hover table-condensed">
  											
  														  
														   	<tr class="clickable js-tabularinfo-toggle" data-toggle="collapse" id="row1" data-target=".row1">
														      <td colspan="8">
														        <table  class="tabularinfo tabularinfo--child" data-detail-view="">
														   		<thead style="font-size: 10px;">
																	<tr>
													
														      <th style="width: 10%" >Code document</th>
														      <th style="width: 10%">Désignation</th>
														      <th style="width: 10%">Avancement</th>
														      <th style="width: 10%">Révision Externe</th>
														      <th style="width: 10%">Date Modification</th>
														      <th style="width: 10%">Modifié Par</th>
														      <th style="width: 10%">Version Interne</th>
														      <th style="width: 10%">Etape</th>
														      <th style="width: 10%">Download</th>
														      <th style="width: 10%">Zoom</th>
																	</tr>
  																</thead>
														          <tbody style="font-size: 10px;">
														         
														           <tr class="clickable js-tabularinfo-toggle" data-toggle="collapse" id="" data-target=".subrow1">
														              <td width="1%">&nbsp;</td>
														              <td width="15%">t2</td>
														              <td width="15%">a</td>
														              <td width="15%">v</td>
														              <td width="15%">b</td>
														              <td width="15%">L</td>
														              <td width="15%">aa</td>
														              <td width="15%">kk</td>
														              <td width="15%">l</td>
														              <td width="15%">n</td>
														              <td width="15%">p</td>
														              <td width="15%">a</td>
														            </tr> 
														            <tr class="clickable js-tabularinfo-toggle"   style="word-break: break-all;">
														           	  
														           	  <td>aasssssssssssssssssssssssssssssssssssssssssssssaa</td>
														              <td>v</td>
														              <td>b</td>
														              <td>L</td>
														              <td>aa</td>
														              <td>kk</td>
														              <td>l</td>
														              <td>n</td>
														              <td>p</td>
														              <td>a</td>
														



														            </tr>

                                        
														          </tbody>
														        </table>
														      </td>
														    </tr>

  														  </tr>
  													</tbody>
												</table>    
                         		
				   				            	</ul> -->
							            	</ul>' ;		                    
                                     }  

    }
 
							      echo    '</li>' ; 
							                     


          
  }}  
	echo '</ul></li></td></div>' ; 