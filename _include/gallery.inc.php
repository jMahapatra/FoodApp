<div class="s-widget">
										<!-- Heading -->
										<h5><i class="fa fa-camera color"></i> Recent Gallery</h5>
										<!-- Widgets Content -->
										<!-- Panel. Use "panel-XXX" c lass for different colors. Replace "XXX" with color. -->
                                 <div class="widget-content gallery">
                                 <?php
									
								$qry_result = mysql_query(" SELECT * FROM `album_image` ORDER BY `album_image`.`AI_ID` DESC LIMIT 0 ,9");
									while($gallery_row = mysql_fetch_array($qry_result))
									{
										
									?>
								  		<a href="Upl_Images/Gallery/Main/<?php echo $gallery_row['AI_Image']; ?>" data-gallery="">
										<img src="Upl_Images/Gallery/Thumbnail/<?php echo $gallery_row['AI_Image']; ?>" alt="albimg" class="img-thumbnail" width="100px">
										</a>
									   
								  <?php
										
									}
									?>
								  </div>
							  </div>