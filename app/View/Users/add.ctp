
<div class="account-container register">
	
	<div class="content clearfix">
		
		<?php echo $this->Form->create('User');?>
		
			<h1>Signup for Free Account</h1>			
			
			<div class="login-fields">
				
				<p>Create your free account:</p>
				
				<div class="field">
					<label for="firstname">Name:</label>
					<?php echo $this->Form->input('name',array('id'=>'name','div'=>false,'label'=>false,'class'=>'login',"placeholder"=>"Name",'value'=>''));  ?>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">UserName:</label>	
					<?php echo $this->Form->input('username',array('id'=>'username','div'=>false,'label'=>false,'class'=>'login',"placeholder"=>"Username",'value'=>''));  ?>
				</div> <!-- /field -->
				
				
				<!--<div class="field">
					<label for="email">Email Address:</label>
					<input type="text" id="email" name="email" value="" placeholder="Email" class="login"/>
				</div>--> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<?php echo $this->Form->input('password',array('id'=>'password','div'=>false,'label'=>false,'class'=>'login',"placeholder"=>"Password",'value'=>''));  ?>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="confirm_password">Confirm Password:</label>
					
					<?php echo $this->Form->input('password_confirm',array('id'=>'password_confirm','type'=>'password','div'=>false,'label'=>false,'class'=>'login',"placeholder"=>"Password",'value'=>''));  ?>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Agree with the Terms & Conditions.</label>
				</span>
									
				
				<?php echo $this->Form->end(array('label' => __('Register', true), 'class' => 'button btn btn-success btn-large')); ?>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
