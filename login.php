<div class="container">
<!-- Modal -->
<div id="Modal" class="modal fade " >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong>Log-In to your account</strong></h4>
      </div>
      <div class="modal-body " >
      <form action="validate.php" method="post" class="form-horizontal ">
       <div class="form-group ">
             <label class="label-control col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lab" for="email" ><span id="gly" class="glyphicon glyphicon-user"></span></label>
                   <div class=" col-lg-7 col-md-6 col-sm-7 col-xs-9 ">
                      <input type="text" class="form-control " id="user" name="user" placeholder="Enter Your Username" ></input>
                   </div>
              
       </div>
       <div class="form-group ">
             <label class="label-control col-lg-3 col-md-3 col-sm-3 col-xs-3" id="lab" for="password"><span id="gly" class="glyphicon glyphicon-qrcode"></span></label>
                   <div class="col-lg-7 col-md-6 col-sm-7 col-xs-9 ">
                      <input type="password" class="form-control" name="pwd" id="pwd"  placeholder="Your Password is Safe." ></input>
                   </div>
      
       </div>  
       <div class="form-group ">
             <label class="label-control col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
            
                   <div style="padding-left:50%;"class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                   <button id="logbtn" type="submit" class="btn"><main>Log-In</main></button>
                   
                      
                   </div>
            </label>
      
       </div>   
           
           
    </form>
      </div>
      
    </div>

  </div>
</div>
</div>