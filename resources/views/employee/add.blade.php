@include('header')
<!-- Page container start -->
<div class="main-panel">
   <!-- Navbar -->
   @include('navbar')
   <!-- End Navbar -->
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="card ">
                  <div class="card-header card-header-primary card-header-text">
                     <div class="card-text">
                        <h4 class="card-title">New Registration</h4>
                     </div>
                  </div>
                  <div class="card-body ">
                  
               <form method="post" action="{{ route('saveuser') }}" class="form-horizontal">
                     {{ csrf_field() }}            
                        <div class="row">
                           <label class="col-sm-2 col-form-label">Name</label>
                           <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                 <input type="text" class="form-control" name="name" id="name">
                                 <span class="bmd-help">A block of help text that breaks onto a new line.</span>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <label class="col-sm-2 col-form-label">Role</label>
                           <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                 <div class="dropdown bootstrap-select">
                                    <select class="selectpicker" name="role" id="role" data-style="select-with-transition"  title="Choose Department" data-size="7" tabindex="-98">
                                       <option disabled=""> Select Options</option>
                                       <option value="2">Developer</option>
                                       <option value="3">Sales & Marketing</option>
                                       <option value="4">BDE</option>
                                       <option value="5">HR</option>
                                       <option value="6">Office</option>
                                       <option value="7">Trainee</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <label class="col-sm-2 col-form-label">Email ID</label>
                           <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                 <input type="text" class="form-control" name="email" id="email">
                                 <span class="bmd-help">A block of help text that breaks onto a new line.</span>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <label class="col-sm-2 col-form-label">Phone</label>
                           <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                 <input type="text" class="form-control" name="phone" id="phone">
                                 <span class="bmd-help">A block of help text that breaks onto a new line.</span>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <label class="col-sm-2 col-form-label">Password</label>
                           <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                 <input type="text" class="form-control" name="password" id="password">
                                 <span class="bmd-help">A block of help text that breaks onto a new line.</span>
                              </div>
                           </div>
                        </div>

                        <!-- <div class="row">
                           <label class="col-sm-2 col-form-label">Photo</label>
                           <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                 <input type="text" class="form-control">
                                 <span class="bmd-help">A block of help text that breaks onto a new line.</span>
                              </div>
                           </div>
                        </div> -->

                    
                     
                  </div>

                  <div class="card-footer ml-auto mr-auto">
                     <input type="submit" name="submit" value="submit" class="btn btn-fill btn-primary">
                     <!-- <button type="submit" >Submit<div class="ripple-container"></div></button> -->
                  </div>
               </form>

               </div>
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container-fluid">
            <nav class="float-left">
               <ul>
                  <li>
                     <a href="#">
                     TS WEB
                     </a>
                  </li>
                  <li>
                     <a href="">
                     About Us
                     </a>
                  </li>
                  <li>
                     <a href="">
                     Blog
                     </a>
                  </li>
                  <li>
                     <a href="">
                     Licenses
                     </a>
                  </li>
               </ul>
            </nav>
            <div class="copyright float-right">
               &copy;
               <script>
                  document.write(new Date().getFullYear())
               </script>, made with <i class="material-icons">favorite</i> by
               <a href="#" target="_blank">TS Web</a> for a better web.
            </div>
         </div>
      </footer>
   </div>
</div>
<!-- Page container end -->
@include('footer')