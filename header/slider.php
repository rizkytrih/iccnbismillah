 <?php include 'koneksi.php';?>
<!-- Slider
			================================================== -->
			
			<div class="tp-banner-holder">
				<div class="tp-banner-container">
					<div class="tp-banner" >
						<ul>
							<!-- SLIDE #1  -->
							<?php
							$query = mysqli_query($connection,"SELECT * FROM banner WHERE id_banner=1");
							$hasil = mysqli_fetch_array($query);
							?>
							<li data-transition="random" data-slotamount="7" data-masterspeed="1000" data-delay="6000" >
								<!-- MAIN IMAGE -->
								<img src="wpadmin/gambar/<?php echo $hasil['gambar']; ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_bold_white customin customout"
									data-x="center" data-hoffset="-6"
									data-y="center" data-voffset="-38"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="500"
									data-start="900"
									data-easing="Back.easeOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"> <?php echo $hasil['judul']; ?>
	
									
									
									
								</div>

								<!-- LAYER NR. 6 -->
								<div class="tp-caption stability_verysmall_white_mw text-center customin customout tp-resizeme"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="60"
									data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="900"
									data-start="1200"
									data-easing="Power3.easeInOut"
									data-splitin="lines"
									data-splitout="lines"
									data-elementdelay="0.2"
									data-endelementdelay="0.08"
									data-endspeed="500"
									style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $hasil['isi']; ?>
								</div>
							</li>		

							<!-- SLIDE #2  -->
							<?php
							$query = mysqli_query($connection,"SELECT * FROM banner WHERE id_banner=2");
							$hasil2 = mysqli_fetch_array($query);
							?>
							<li data-transition="random" data-slotamount="7" data-masterspeed="1000" data-delay="6000" >
								<!-- MAIN IMAGE -->
								<img src="wpadmin/gambar/<?php echo $hasil2['gambar']; ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_bold_white customin customout"
									data-x="center" data-hoffset="-6"
									data-y="center" data-voffset="-38"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="500"
									data-start="900"
									data-easing="Back.easeOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $hasil2['judul']; ?>
								</div>

								<!-- LAYER NR. 6 -->
								<div class="tp-caption stability_verysmall_white_mw text-center customin customout tp-resizeme"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="60"
									data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="900"
									data-start="1200"
									data-easing="Power3.easeInOut"
									data-splitin="lines"
									data-splitout="lines"
									data-elementdelay="0.2"
									data-endelementdelay="0.08"
									data-endspeed="500"
									style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $hasil2['isi']; ?>
								</div>
							</li>		

							<!-- SLIDE #3  -->
							<?php
							$query = mysqli_query($connection,"SELECT * FROM banner WHERE id_banner=3");
							$hasil3 = mysqli_fetch_array($query);
							?>
							<li data-transition="random" data-slotamount="7" data-masterspeed="1000" data-delay="6000" >
								<!-- MAIN IMAGE -->
								<img src="wpadmin/gambar/<?php echo $hasil3['gambar']; ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_bold_white customin customout"
									data-x="center" data-hoffset="-6"
									data-y="center" data-voffset="-38"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="500"
									data-start="900"
									data-easing="Back.easeOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $hasil3['judul']; ?>
								</div>

								<!-- LAYER NR. 6 -->
								<div class="tp-caption stability_verysmall_white_mw text-center customin customout tp-resizeme"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="60"
									data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="900"
									data-start="1200"
									data-easing="Power3.easeInOut"
									data-splitin="lines"
									data-splitout="lines"
									data-elementdelay="0.2"
									data-endelementdelay="0.08"
									data-endspeed="500"
									style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $hasil3['isi']; ?>
								</div>
							</li>		

							<!-- SLIDE #4  -->
							<?php
							$query = mysqli_query($connection,"SELECT * FROM banner WHERE id_banner=4");
							$hasil4 = mysqli_fetch_array($query);
							?>
							<li data-transition="random" data-slotamount="7" data-masterspeed="1000" data-delay="6000" >
								<!-- MAIN IMAGE -->
								<img src="wpadmin/gambar/<?php echo $hasil4['gambar']; ?>" alt="slidebg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_bold_white customin customout"
									data-x="center" data-hoffset="-6"
									data-y="center" data-voffset="-38"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="500"
									data-start="900"
									data-easing="Back.easeOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-endspeed="500"
									data-endeasing="Power4.easeIn"
									style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $hasil4['judul']; ?>
								</div>

								<!-- LAYER NR. 6 -->
								<div class="tp-caption stability_verysmall_white_mw text-center customin customout tp-resizeme"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="60"
									data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
									data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="900"
									data-start="1200"
									data-easing="Power3.easeInOut"
									data-splitin="lines"
									data-splitout="lines"
									data-elementdelay="0.2"
									data-endelementdelay="0.08"
									data-endspeed="500"
									style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $hasil4['isi']; ?>
								</div>
							</li>		
										
						</ul>
					</div>
				</div>
			</div>
			<!-- Slider / End -->