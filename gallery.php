<div  id="gallery" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 justified">
    <div class="panel panel-default">
         <div class="panel-heading" ><strong>MORE AVAILABLE SPECS </strong></div>
              <div class="panel-body">
                   <?php 
                  	     $var=glob("images/specs/*.{jpg,jpeg,png}",GLOB_BRACE);

                         foreach($var as $index)
                            {
                               
                               ?>
                                 <div id="icon" class="col-lg-4 col-md-3 col-sm-4 col-xs-5"><a href="#myModal" data-toggle="modal" ><img style="width: 400px; height: 300px;" src=" <?php echo $index ?> " class="img-responsive " ></a><a href="payment.php" class="btn btn-warning" id ="buy-btn" style="float: right;">Buy Now</a></div>
                      <?php
                          }

                            ?>
            </div>
    </div>
</div>