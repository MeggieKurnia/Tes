<?php
		if($_POST){
			include 'test.php';
			$cls = new Test();
			$result = $cls->pertukaran($_POST['a'],$_POST['b']);
		?>
			<table align="center">
				<tr>
					<td>
						<div class="inp_usr">
							<span><?php echo '$a='.$_POST['a'];?>
							<?php echo '$b='.$_POST['b'];?></span>
						</div>
					</td>
					<td><img src="images.jpg" class="img" width="100" height="90"></td>
					<td>
						<div class="res">
							<?php echo '$a='.$result['a'];?>
							<?php echo '$b='.$result['b'];?>
						</div>
					</td>
				</tr>
			</table>
		<?php
		}
?>