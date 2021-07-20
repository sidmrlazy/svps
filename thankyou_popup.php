<?php


?>
<!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
     
      <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
          	Thank you
        </div>
    </div>
  </div>
</div> -->
<style type="text/css">
  .btn-primary1
  {
    background-color:#e86e05; 
    outline: none;
    color: white;
    //width: 20%;
    border-radius: 4px 4px 4px 4px;
  }
  .btn-primary1:hover
  {

  }
</style>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <!--  <h6 class="modal-title">Admissions Open (session 2020-2021)</h6> -->
        </div>
        <div class="modal-body">
          <h1 class="card-title"> Thank you  </h1>
            <!-- <div class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large-new">Thank You </div>  -->    
        </div>
        <div class="modal-footer">
          <div style="padding-left: 20px;padding-right: 20px;">
            <?php $msg=base64_encode('2'); ?>
            <a href="index.php?msg=<?php echo $msg; ?>"><button type="button" class="btn-sm btn-primary1" autocomplete="off"> OK </button></a>
              
          </div>
        </div>
    </div>
  </div>
</div>

