<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <title>Signup</title>
      <style>
         *{ margin:0; padding:0;}
         #signup_form{ padding:100px 0 200px;position: relative;}
         #signup_form label{ font-weight:600;display:block;}
         #signup_form .form-check{font-weight: normal; display:inline-block;}
		 #signup_form::before{content:''; position:absolute; right:0; top:0; z-index:-1; background:url("images/top_bg.png") no-repeat right top; width:749px; height:220px;}
		 #signup_form::after{content:''; position:absolute; left:0; bottom:0; z-index:-1; background:url("images/bottom_bg.png") no-repeat left bottom; width:749px; height:220px;}
		 #signup_form .card, #signup_form .card-header{ background:none;}
		 #signup_form img.logo {max-width: 250px;}
		 @media (max-width:767px)
		 {
		 #signup_form::before, #signup_form::after{ display:none;}
		 #signup_form{ padding:70px 0;
		 }
      </style>
   </head>
   <body>
   <div id="signup_form">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-7">               
                  @if(session()->has('success'))
                      <div class="alert alert-success">
                          {{ session()->get('success') }}
                      </div>
                  @endif
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li style="list-style: none; text-align: center;">{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <div class="card">
                     <header class="card-header text-center">
						<h4>Registration Form</h4>
                     </header>
                     <article class="card-body">

					    <h4 class="card-title mt-2 text-center"><img class="logo" src="images/logo.jpg" alt="Logo"/></h4>
                        <form method="post" action="{{url('registration')}}">
                           @csrf
                           <div class="form-row">
                              <div class="col form-group">
                                 <label>Name</label>   
                                 <input type="text" name="name" class="form-control" placeholder="">
                              </div>
                              <div class="col form-group">
                                 <label>Email</label>
                                 <input type="text" name="email" class="form-control" placeholder=" ">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col form-group">
                                 <label>Phone Number</label>   
                                 <input type="text" name="phone" class="form-control" placeholder="">
                              </div>
                              <div class="col form-group">
                                 <label>Date of Birth</label>
                                 <input id="datepicker" type="text" name="dob" class="form-control" placeholder="">
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Education</label>
                              <input type="text" name="education" class="form-control" placeholder="">
                           </div>
                           <div class="form-group">
                              <label>Hobbies</label>
                              <input type="text" name="hobbies" class="form-control" placeholder="">
                           </div>
                           <div class="form-group">
                              <label>Area of Interest</label>
                              <input type="text" name="interest" class="form-control" placeholder="">
                           </div>
                           <div class="form-group">
                              <label>Do you like Innovations</label>
                              <label class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="innovation" value="yes">
                              <span class="form-check-label"> Yes </span>
                              </label>
                              <label class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="innovation" value="no">
                              <span class="form-check-label"> No</span>
                              </label>
                           </div>
                           <div class="form-group">
                              <label>Are you participating in this for</label>
                              <label class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="participation" value="Personal interest">
                              <span class="form-check-label"> Personal interest </span>
                              </label>
                              <label class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="participation" value="Professional interest">
                              <span class="form-check-label"> Professional interest</span>
                              </label>
                           </div>
                           <div class="form-group">
                              <button type="submit" class="btn btn-success btn-block"> Submit  </button>
                           </div>
                        </form>
                     </article>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         $('#datepicker').datepicker({
            dateFormat:'yy-mm-dd'
         });
      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      
   </body>
</html>