


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.login username-fields{
width:60px;
}

</style>


<div class="account-container">

	
	<div class="content clearfix">
		
		<?php echo $this->Form->create('User');?>
		
			<h1>Admin Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					
				<?php echo $this->Form->input('username',array( 'type'=>'text','id'=>'username','div'=>false,'label'=>false,'class'=>'login username-field',"placeholder"=>"Username",'value'=>''));  ?>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
				<?php echo $this->Form->input('password',array('id'=>'password','div'=>false,'label'=>false,'class'=>'login password-field',"placeholder"=>"Password",'value'=>''));  ?>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				<!--<button class="button btn btn-success btn-large">Sign In</button>-->
				<?php echo $this->Form->end(array('label' => __('Sign In', true), 'class' => 'button btn btn-success btn-large')); ?>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



 <!--<div class="login-extra">
	<a href="#">Reset Password</a>
</div> /login-extra -->

