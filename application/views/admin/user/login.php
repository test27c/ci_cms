      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Log in</h4>
        <p>Please log in using your credentials</p>
      </div>
      <div class="modal-body">
      	<?php echo '<pre>' . print_r($this->session->userdata, TRUE) . '</pre>'; ?>
		<?php echo validation_errors(); ?>
		<?php echo form_open();?>
		<div class="form-group">
		    <?php echo form_label('Email', 'email'); ?>
		    <?php 
		    	$data_form = array(
		    		'type' => 'email',
		    		'name' => 'email',
		    		'class' => 'form-control',

		    		// Gatau kenapa harus di set valuenya dulu
		    		// 'value'=>set_value('password'),
		    		'placeholder' => 'something@something.com'
		    	);
		    	echo form_input($data_form);
		     ?>
		</div>
		<div class="form-group">
			<?php echo form_label('Password', 'password'); ?>
			<?php 
                $password_attributes = array(
	                'id'=>'login-password',
	                'class' => 'form-control',
	                'name'=>'password',

	                // Gatau kenapa harus di set valuenya dulu
	                // 'value'=>set_value('password'),
	                'placeholder'=>'Password',
                );
                echo form_password($password_attributes);  
             ?> 
		</div>
		<?php 
				$submit_attributes = array(
                   'name'        => 'submit',
                   'id'          => 'btn-login',
                   'class'       => 'btn btn-success',
                   'value'       => 'Login',
                  );
                 echo form_submit($submit_attributes);

		 ?>
		<?php echo form_close();?>
		</div>