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
                        <h4 class="card-title">New Department</h4>
                     </div>
                  </div>
                  <div class="card-body ">
                  
               <form method="post" action="{{ route('savedepartment') }}" class="form-horizontal">
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
                           <label class="col-sm-2 col-form-label">Status</label>
                           <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                 <div class="dropdown bootstrap-select">
                                    <select class="selectpicker" name="status" id="status" data-style="select-with-transition"  title="Choose Department" data-size="7" tabindex="-98">
                                       <option disabled=""> Select Options</option>
                                       <option value="0">Deactive</option>
                                       <option value="1" selected="selected">Active</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>                      
                    
                     
                  </div>

                  <div class="card-footer ml-auto mr-auto">
                     <input type="submit" name="submit" value="submit" class="btn btn-fill btn-primary">                     
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