
<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-11">
                <h3>ADMIN</h3>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col admin-login">
                <h4>You must create an account to continue.</h4>
        </div>
        </div>
        <form action="" class="form-group signupForm mt-3">

            <div class="h6">Username</div>
            <input type="text" name="username" class="form-control" required><br/>
            
            <div class="h6">Password</div>
            <input type="password" name="password" class="form-control" required><br/>   
            
            <div class="h6">Repeat Password</div>
            <input type="password" name="r_password" class="form-control" required><br/>

            <button class="btn signupBtn btn-outline-primary">Register</button>
            <button class="btn  btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#login">Have account? Login</button>
          </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-11">
                <h3>ADMIN</h3>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col admin-login">
                <h4>Already Registered? Login.</h4>
        </div>
        </div>
        <form action="" class="form-group loginForm mt-3">

            <div class="h6">Username</div>
            <input type="text" name="login_username" class="form-control" required><br/>
            
            <div class="h6">Password</div>
            <input type="password" name="login_password" class="form-control" required><br/>   
            

            <button class="btn loginBtn btn-outline-primary">Login</button>
            <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#signup">New? Signup</button>
            <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#forgotpass">Forgot Password?</button>
            <button class="btn btn-outline-danger mt-3" data-bs-toggle="modal" data-bs-target="#forgotusername">Forgot you Username? &#128528;</button>
            
          </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="forgotusername" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-11">
                <h3>ADMIN</h3>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col admin-login">
                <h4>Forgot your Username? &#128528;</h4>
        </div>
        </div>
          <p><h4>If you forgot you username, then we are afraid to inform you are not eligible 
            anymore. However, there is one chance for you.
            You need to contact the administrator by mailing to <a href="mailto:info@sandika.com">info@sandika.com</a>
            Tell them your problem and also mention every info you had in our Website.
          </h4></p>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="forgotpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-11">
                <h3>ADMIN</h3>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col admin-login">
                <h4>Forgot you password? Then enter your Username.</h4>
        </div>
        </div>
        <form action="" class="form-group forgotpassForm mt-3">

            <div class="h6">Username</div>
            <input type="text" name="forgot_username" class="form-control" required><br/>
             
            

            <button class="btn forgotpassBtn btn-outline-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>










<!-- update profile info -->

<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-11">
                <h3>Update Account Info</h3>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        
        
        <form action="" class="form-group updateForm mt-3">


            <div class="h6">Change Name</div>
            <input type="text" name="update_name" class="form-control"><br/>


            <div class="h6">Change Username</div>
            <input type="text" name="update_username" class="form-control"><br/>
            
               
            
            <div class="h6">Change Email</div>
            <input type="text" name="update_email" class="form-control"><br/>

            <div class="h6">Change Bio</div>
            <textarea type="text" name="update_bio" class="form-control"></textarea><br/>

            <div class="h6">Change WebSite</div>
            <input type="text" name="update_website" class="form-control"><br/>

            <div class="h6">Change Location</div>
            <textarea type="text" name="update_location" class="form-control"></textarea><br/>

            <div class="h6">Change Birthday Date</div>
            <input type="text" name="update_birth" class="form-control"><br/>

            <div class="h6">Change Twitter (𝕏) Account </div>
            <input type="text" name="update_twitter_account" class="form-control"><br/>

            <div class="h6">Change Instagram Account</div>
            <input type="text" name="update_instagram_account" class="form-control"><br/>

            <div class="h6">Change Telegram Account</div>
            <input type="text" name="update_telegram_account" class="form-control"><br/>

            <div class="h6">Change Github Account </div>
            <input type="text" name="update_github_account" class="form-control"><br/>





            <button class="btn updateBtn btn-primary">Apply</button>
        </form>

          
       
      </div>
    </div>
  </div>
</div>




<!-- Monetization -->
<div class="modal fade" id="monetize" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row">
            <div class="col-sm-11">
                <h3>Monetization</h3>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        
        <form action="" class="form-group monetization mt-3">

            <div class="h6">Set BTC Address</div>
            <input type="text" name="btc" class="form-control"><br/>
            
            <div class="h6">Set ETH Address</div>
            <input type="txt" name="eth" class="form-control"><br/>   
            

            <button class="btn moneBtn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="change_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row">
            <div class="col-sm-11">
                <h3>Update Password</h3>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
        
        <form action="" class="form-group upgrade_pass_form mt-3">

            <div class="h6">Enter New Password</div>
            <input type="password" name="upgrade_pass" class="form-control"><br/>
            
            <div class="h6">Repeat the new Password</div>
            <input type="password" name="r_upgrade_pass" class="form-control"><br/>   
            

            <button class="btn upgrade_apply btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="eai_search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row">
            <div class="col-sm-11">
                <h3>EAI</h3>
            </div>
            <div class="col-sm-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>

        <div class="animate_animated animate__fadeInUp">
                        <script async src="https://cse.google.com/cse.js?cx=935189087627f43fc">
                        </script>
                        <div class="gcse-search"></div>
         </div>
        
        
      </div>
    </div>
  </div>
</div>




<!-- Riddles -->

<!-- Modal 1 -->
<div class="modal fade" id="riddle1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    If you know me, you will want to share me. But if you share me I will be gone. What am I?
                </h4>
                <form action="" class="form-group riddle1 mt-3">
                    <input type="text" name="riddle1" class="form-control">
                    <button class="btn riddle1Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="riddle2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    I speak without a mouth and hear without ears. I have no body, but I come alive with the wind. What am I?
                </h4>
                <form action="" class="form-group riddle2 mt-3">
                    <input type="text" name="riddle2" class="form-control">
                    <button class="btn riddle2Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="riddle3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    The more you take, the more you leave behind. What am I?
                </h4>
                <form action="" class="form-group riddle3 mt-3">
                    <input type="text" name="riddle3" class="form-control">
                    <button class="btn riddle3Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="riddle4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    I am taken from a mine, and shut up in a wooden case, from which I am never released, and yet I am used by almost every person. What am I?
                </h4>
                <form action="" class="form-group riddle4 mt-3">
                    <input type="text" name="riddle4" class="form-control">
                    <button class="btn riddle4Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 -->
<div class="modal fade" id="riddle5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    I am full of holes but still hold water. What am I?
                </h4>
                <form action="" class="form-group riddle5 mt-3">
                    <input type="text" name="riddle5" class="form-control">
                    <button class="btn riddle5Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6 -->
<div class="modal fade" id="riddle6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    The more you have of it, the less you see. What is it?
                </h4>
                <form action="" class="form-group riddle6 mt-3">
                    <input type="text" name="riddle6" class="form-control">
                    <button class="btn riddle6Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 7 -->
<div class="modal fade" id="riddle7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    I am always hungry, I must always be fed. The finger I touch will soon turn red. What am I?
                </h4>
                <form action="" class="form-group riddle7 mt-3">
                    <input type="text" name="riddle7" class="form-control">
                    <button class="btn riddle7Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 8 -->
<div class="modal fade" id="riddle8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    I am bought by the yard but worn by the foot. What am I?
                </h4>
                <form action="" class="form-group riddle8 mt-3">
                    <input type="text" name="riddle8" class="form-control">
                    <button class="btn riddle8Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 9 -->
<div class="modal fade" id="riddle9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    I can be cracked, made, told, and played. What am I?
                </h4>
                <form action="" class="form-group riddle9 mt-3">
                    <input type="text" name="riddle9" class="form-control">
                    <button class="btn riddle9Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 10 -->
<div class="modal fade" id="riddle10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    I have keys but no locks. I have space but no room. You can enter, but can't go inside. What am I?
                </h4>
                <form action="" class="form-group riddle10 mt-3">
                    <input type="text" name="riddle10" class="form-control">
                    <button class="btn riddle10Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 11 -->
<div class="modal fade" id="riddle11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    What has keys but can't open locks?
                </h4>
                <form action="" class="form-group riddle11 mt-3">
                    <input type="text" name="riddle11" class="form-control">
                    <button class="btn riddle11Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 12 -->
<div class="modal fade" id="riddle12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    What has a head, a tail, is brown, and has no legs?
                </h4>
                <form action="" class="form-group riddle12 mt-3">
                    <input type="text" name="riddle12" class="form-control">
                    <button class="btn riddle12Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 13 -->
<div class="modal fade" id="riddle13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    The more you take, the more you leave behind. What am I?
                </h4>
                <form action="" class="form-group riddle13 mt-3">
                    <input type="text" name="riddle13" class="form-control">
                    <button class="btn riddle13Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 14 -->
<div class="modal fade" id="riddle14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    What has a neck but no head?
                </h4>
                <form action="" class="form-group riddle14 mt-3">
                    <input type="text" name="riddle14" class="form-control">
                    <button class="btn riddle14Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 15 -->
<div class="modal fade" id="riddle15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    What has cities but no houses, forests but no trees, and rivers but no water?
                </h4>
                <form action="" class="form-group riddle15 mt-3">
                    <input type="text" name="riddle15" class="form-control">
                    <button class="btn riddle15Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 16 -->
<div class="modal fade" id="riddle16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    What begins and has no end?
                </h4>
                <form action="" class="form-group riddle16 mt-3">
                    <input type="text" name="riddle16" class="form-control">
                    <button class="btn riddle16Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 17 -->
<div class="modal fade" id="riddle17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    What comes once in a minute, twice in a moment, but never in a thousand years?
                </h4>
                <form action="" class="form-group riddle17 mt-3">
                    <input type="text" name="riddle17" class="form-control">
                    <button class="btn riddle17Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 18 -->
<div class="modal fade" id="riddle18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    The more you take, the more you leave behind. What am I?
                </h4>
                <form action="" class="form-group riddle18 mt-3">
                    <input type="text" name="riddle18" class="form-control">
                    <button class="btn riddle18Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 19 -->
<div class="modal fade" id="riddle19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    What has keys but can't open locks?
                </h4>
                <form action="" class="form-group riddle19 mt-3">
                    <input type="text" name="riddle19" class="form-control">
                    <button class="btn riddle19Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 19 -->
<div class="modal fade" id="riddle20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1 style="text-align: center; color: #09c100">Riddle me This</h1><br/>
                <h4 style="text-align: center; color: #09c100">
                    All you need to do is to keep your eyes on the price.
                </h4><br/>
                <div class="embed-responsive embed-responsive-16by9">
                  <video class="embed-responsive-item img-fluid" controls>
                    <source src="/src/video/riddle20.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </div>


                <form action="" class="form-group riddle20 mt-3">
                    <input type="text" name="riddle20" class="form-control">
                    <button class="btn riddle20Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Arkham Sprits-->

<div class="modal fade" id="as1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                    V nz gur fcvrfvg bs Nznqrhf Nexunz. Gubhtu zl nppvbaf, V unir fnirq guvf pherq pvgl, gubhtu zl bja pherf vf gb sbeprqire erznva va gur fubyrqbj. Zl fgbel vf pneire vagb gur irel fbhy bs Nexunz naq jvyy bayl or erivrjrq gb gubfr qrpgvbanyr ragreivrjf gb qvfvire vg.
                </p>



                <form action="" class="form-group as1 mt-3">
                    <input type="text" name="as1" class="form-control">
                    <button class="btn as1Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="as2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                Zl snvgu'f oehzf ena guebhtu gur uneq bs Tbgunz. Jr jrer qbpgbef, cvbqhyvfzbf naq gurapuvrf; jr unir orra gur betnavm pbeevqvat gur nepvsvp sveyvp sevygl sebz gur pvgl. Jr unir orra vg'f freiryrg tvivat nyy gb cerfrag vg. Naq fgvyyn vg unf pubfra gb ureg hf.

            </p>



                <form action="" class="form-group as2 mt-3">
                    <input type="text" name="as2" class="form-control">
                    <button class="btn as2Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="as3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                Nf Tbgunz'f irvarf fbyyl sbvyq jvgu cnva naq fhecevfravat, gur rsrpgf jrer srggryrq rireljbeyqre. Zl snzr sryy svefg, vasvcerq ol fbzr sbyq qrnavrf; zl zbavbe yvirq ba, ohg bayl va n qrerng. V erprvirq gb gur snvgu ubzr gb pner sbe ure jurer fur erzvaqrq va ure orq sbe nf ybat nf ure obql pbafhccrq gb oervir. Ure grnref xrrq zr njnxf ng avtug.

                </p>



                <form action="" class="form-group as3 mt-3">
                    <input type="text" name="as3" class="form-control">
                    <button class="btn as3Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="as4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                Zl wbhearl ynfgrq yvggyr bire n zbagu. Ivfvgvat nqnzrpvrf va obgu Zrgcbegf naq Xrfgbar, V jnf rkcrevraprq gb n jryyvfu bs arj vqrnf. V orqraq zl qnl erfhzvat ubzr va tbbq fcvrf, rtrevat gb frr zl jvgu naq snzvyl. V raqre vg xrayvat va gurve oehzf, oebxravtngrs bs zl yvir cbezvat guebhtu qevivat erq svatref.
                </p>



                <form action="" class="form-group as4 mt-3">
                    <input type="text" name="as4" class="form-control">
                    <button class="btn as4Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="as5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                V erprvirq gb zl jbex, ohg V pbhyq abg funxr gur cvpgherf sebz zl zvaq. V fubhyq unir orerpungrq, ohg V jnf zber rrtre guna rire gb sva n rkcybfvba sbe jul fbzrbar jbhyq qh guvf.
  Gurfr oebtnq gur nantznyl orpuneq orfgre zr, funzryyrfr naq onexvat yvxr n zqn qbtl. Sbe jung sryygu unq orra irel frirer gb cvpx zl uryc.
            </p>



                <form action="" class="form-group as5 mt-3">
                    <input type="text" name="as5" class="form-control">
                    <button class="btn as5Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="as6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                Gurl oebhtug gur nznavny orfgre zr, funznyrf naq onevxvat yvxr n znq qbt. Sbe jung srggyrq qnlzf V rvaqrevn uvf obfgf. Ur gnxr cynlgrer ebhaqvat uvfvaf, pnyyrqvat uvf qercnffirq penvqrz puvrf. Jung fubhyq unir oreraqhf erirnyrq gb cvglglv. Guvf cbbe qbt arrqrq zl uryc.        
            </p>



                <form action="" class="form-group as6 mt-3">
                    <input type="text" name="as6" class="form-control">
                    <button class="btn as6Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="as7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                Gur vafvqr punatrq yvggyr bire gur lrnef. Vgf erchgvatvba jnf va gnggrenf, ohg V ibjq gb svx vg. Nf gur oevqtrf jrer oervqvg vg fjrneq V fgnq gur shgher, n oevgr jbireohf shgher.                </p>



                <form action="" class="form-group as7 mt-3">
                    <input type="text" name="as7" class="form-control">
                    <button class="btn as7Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="as8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                Arj oevpx, zrgny naq cnva pbeerpgrq byq jhaqhf. Serspu oynq jbexrq vagb gur obql. Oevfpu arj zvafs pnevarq vagb gur obql. Oevguvt arj zvafs ernqrq naq nyy febrer gb hcyvk beqrf. Jr nyy xarj jr jrer gur barf gb svx guvf pvgl. Naq gur pvgl jvyy gunax hf.                </p>



                <form action="" class="form-group as8 mt-3">
                    <input type="text" name="as8" class="form-control">
                    <button class="btn as8Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="as9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Decipher this message.</h1><br/>
                <p>
                Zl snvgu'f xvyyre fghqrq va sebag bs zr. Lrnef bs gurfcnel unir qrernq uvz fnar. V jnf cebqhp gb frr uvz jnyx sern. Va rkgerzcerff sbe uvf yvoenfvg gur fgngvba erprcerfrag bayl n fvtavsvantr. Ur gnxrq hc ntbavfgvat gb jnyx va n cnex, ubj ur ybatrq gb srry serfu neba ba uvf sner, naq gura ur gnxrq zl sngure'f sbhagre cgra naq xvyynq zl frpergvp. Nf ur jnf fohqhrq, guraf ornggn or uvz gb fgnva ba gur sbez.                </p>



                <form action="" class="form-group as9 mt-3">
                    <input type="text" name="as9" class="form-control">
                    <button class="btn as9Btn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- story -->

<div class="modal fade" id="post_story" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Post an Story.</h1><br/>


                <form action="" class="form-group poststoryForm mt-3">
                    <textarea name="post_story"  class="form-control"></textarea>
                    <button class="btn poststoryBtn btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="rot13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Ro13 Decrypt or Encryptor</h1><br/>


                <form action="" class="form-group rotForm mt-3">
                    <p>Enter your txt here to cipher or decipher.</p>
                    <textarea name="rot" class="form-control" cols="50"></textarea>
                    <button class="btn rotBtn btn-primary mt-3">Apply</button><br/><br/>
                    <div class="col cipherd"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="post_git" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <button type="button" style="color:white;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <h1>Post a Github repo or project</h1><br/>


                <form action="" method="POST" class="form-group gitForm mt-3">
                    <textarea name="git" class="form-control" cols="50" placeholder="Enter your description here" required></textarea><br/>
                    <input type="text" class="form-control" name="git_link" placeholder="A Github Link is necessary as well such as https://github.com/" required>
                    <button class="btn gitBtn btn-primary mt-3">Apply</button><br/><br/>
                </form>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="/src/js/iziToast.js"></script>
<script type="text/javascript" src="/src/js/iziToast.min.js"></script>
<script type="text/javascript" src="/src/js/account.js"></script>
<script type="text/javascript" src="/src/js/howler.js"></script>
<script type="text/javascript" src="/src/js/howler.min.js"></script>
<script type="text/javascript" src="/src/js/riddles.js"></script>
<script type="text/javascript" src="/src/js/arkham.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/all.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/all.min.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/brand.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/brand.min.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/conflict-detection.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/conflict-detection.min.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/fontawesome.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/fontawesome.min.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/regular.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/regular.min.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/solid.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/solid.min.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/svg-with-js.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/svg-with-js.min.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/v4-shims.js"></script>
<script type="text/javascript" src="/src/js/fontawesome/v4-shims.min.js"></script>







<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
