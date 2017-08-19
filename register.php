<div class="container">
<!-- Modal -->
<div id="modal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong>Make an account</strong></h4>
      </div>
      <div class="modal-body " >
      <form action="regist.php" method="post" class="form-horizontal " role="form">
       <div class="form-group ">
             <label class="label-control col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lab" for="user" ><span id="gly" class="glyphicon glyphicon-user"></span></label>
                   <div class=" col-lg-7 col-md-6 col-sm-7 col-xs-9 ">
                      <input type="text" class="form-control " id="user" name="user" placeholder="Enter Your Username" required="true">
                   </div>
              
       </div>
       <div class="form-group ">
             <label class="label-control col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lab" for="email" ><span id="gly" class="glyphicon glyphicon-envelope"></span></label>
                   <div class=" col-lg-7 col-md-6 col-sm-7 col-xs-9 ">
                      <input type="text" class="form-control " id="user" name="email" placeholder="email@gmail.com" required="true">
                   </div>
              
       </div>
       <div class="form-group ">
             <label class="label-control col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lab" for="mbno" ><span id="gly" class="   glyphicon glyphicon-phone"></span></label>
                   <div class=" col-lg-7 col-md-6 col-sm-7 col-xs-9 ">
                      <input type="text" class="form-control " id="mbno" name="mbno" placeholder="Mobile Number" required="true">
                   </div>
              
       </div>
       <div class="form-group ">
             <label class="label-control col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lab" for="password"><span id="gly" class="glyphicon glyphicon-qrcode"></span></label>
                   <div class="col-lg-7 col-md-6 col-sm-7 col-xs-9 ">
                      <input type="password" class="form-control" name="pwd" id="pwd"  placeholder="Your Password is Safe." required="true" >
                   </div>
      
       </div>  
       <div class="form-group ">
             <label class="label-control col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lab" for="password"><span id="gly" class="glyphicon glyphicon-calendar"></span></label>
                   <div class="col-lg-7 col-md-6 col-sm-7 col-xs-9 ">
                      <input type="date" class=" form-control datepicker" name="dob" id="dob"  placeholder="Date of birth"  data-date-format="dd/mm/yyyy" required="true">
                   </div>
      
       </div> 
       <div class="form-group ">
             <label class="label-control col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
            
                   <div style="padding-left:50%;"class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                   <button id="regbtn" type="submit" class="btn">Register</button>
                   
                      
                   </div>
            </label>
      
       </div>   
           
           
    </form>
      </div>
      
    </div>

  </div>
</div>
</div>