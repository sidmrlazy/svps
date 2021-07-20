<div class="modal fade" id="signinModal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Sign In</h4>
		      </div>

		      <div class="modal-body">
		        <div class="row">
		          <div class="col-sm-12">
		          	<div class="body-signin__form">
		          		
		          		<form class="signin__form">
		          			<div class="form-group">
		          				<label for="sign-in__email" class="sr-only">Enter email</label>
		          				<div class="input-group">
		          					<span class="input-group-addon">
		          						<i class="ion-android-person"></i>
		          					</span>
		          					<input type="email" class="form-control" id="sign-in__email" placeholder="Enter email">
		          				</div>
		          			</div>

		          			<div class="form-group">
		          				<label for="sign-in__password" class="sr-only">Enter password</label>
		          				<div class="input-group">
		          					<span class="input-group-addon">
		          						<i class="ion-locked"></i>
		          					</span>
		          					<input type="password" class="form-control" id="sign-in__password" placeholder="Password">
		          				</div>
		          			</div>

			              	<div class="checkbox">
			              		<label>
			              			<input type="checkbox"> Remember me
			              		</label>
			              	</div>
			              	<button type="submit" class="btn btn-accent btn-block">Submit</button>
			              </form>

			            <div class="signin__alt">
			            	<p>or sign in with social media</p>
			            	<ul class="signin__social">
			            		<li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
				              <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
				              <li class="googleplus"><a href="#"><i class="ion-social-googleplus"></i></a></li>
			            	</ul>
			            </div>

			            <!-- Sign Up link -->
			            <hr>
			            <p>Not registered? <a href="#signupModal">Create an Account.</a></p>

			            <!-- Lost password form -->
			            <p>
			              Forgot password? <a href="#lost-password__form" data-toggle="collapse" aria-expanded="false" aria-controls="lost-password__form">Click here to recover.</a>
			            </p>
			            <div class="collapse" id="lost-password__form">
			              <p class="text-muted">
			                Enter your email address below and we will send you a link to reset your password.
			              </p>
			              <form class="form-inline">
			                <div class="form-group">
			                  <label class="sr-only" for="lost-password__email">Email address</label>
			                  <input type="email" class="form-control" id="lost-password__email" placeholder="Enter email">
			                </div>
			                <button type="submit" class="btn btn-accent">Send</button>
			              </form>
			            </div> <!-- lost-password__form -->
			          </div> <!-- / .body-signin__form -->
		          </div>
		        </div> <!-- / .row -->
		      </div> <!-- / .modal-body -->
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->