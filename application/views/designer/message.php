<div class = "info_msg">
	<div class = "message">
	
		<?php if($success == 0){?>
			<!-- 没有登录，跳转到登录界面-->
			<script language="javascript" type="text/javascript"> 
			setTimeout("javascript:location.href='<?php echo site_url();?>'+'/login/loadLogin'",100); 
			</script>
		<?php 
		}else if($success == 1){
		?>
			对不起，您无权访问。
		<?php
		}else if($success == 2){
		?>
			对不起，您的账户尚未激活。<a href = "<?php echo site_url();?>/register/reactivate">点此</a>发送邮件再次激活。
		<?php
		}else if($success == 3){
		?>
			对不起，您的资料不够完善，请<a href = "<?php echo site_url();?>/designer/changeInfo/<?php echo $_SESSION['id']?>">填写资料</a>后再加入项目。
			
		<?php
		}else if($success ==4){
		?>
			恭喜您，资料提交成功，您的资料完整度为<?php echo $complete;?>%。
		<?php
		}else if($success ==5){
		?>
			无效的链接。
		<?php
		}else if($success ==6){
		?>
			该项目不存在。
		<?php
		}else if($success ==7){
		?>
			对不起，系统繁忙，加入项目失败。
		<?php
		}else if($success ==8){
		?>
			恭喜您成功加入本项目。
		<?php
		}else if($success ==9){
		?>
			您已经加入该项目，请勿重复加入
		<?php
		}else if($success ==10){
		?>
			对不起，您无权修改其他人的信息。
		<?php
		}else if($success ==11){
		?>
			恭喜您，信息已收录。
		<?php
		}else if($success ==12){
		?>
			对不起，提交失败。
		<?php
		}else if($success ==13){
		?>
			头像保存成功。
		<?php
		}else if($success ==14){
		?>
			系统错误，头像保存失败。
		<?php
		}else if($success ==15){
		?>
			已重新发送一封邮件到您的邮箱，请查收。
		<?php
		}else if($success ==16){
		?>
			对不起，系统繁忙，邮件发送失败。<a href = "<?php echo site_url();?>/register/reactivate">点此</a>再次激活
		<?php
		}else if($success ==17){
		?>
			您已经激活，请不要重复激活。
		<?php
		}
		?>
	</div>
</div>