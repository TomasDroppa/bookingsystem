<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrace</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/font-awesome.min.css" rel="stylesheet">
    
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../admin/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"> <span>Administrace</span></a>
            </div>

            <div class="clearfix"></div>

    
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
            
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                
                
              </div>
          </div>
          

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                
              <!--dal???? k??d ozn??men??, ??e ??prava byla ??sp????n?? provedena--->
              <?php
                if(isset($_SESSION['error'])){
                  echo"
                    <div class'alert alert-danger alert-dismissible' id='alert'>
                      
                      <h4> <i class='icon fa fa-warning'></i> Error</h4>
                      ".$_SESSION['error'].";
                    </div>
                  ";
                  unset($_SESSION['error']);

                }
              
                if(isset($_SESSION['success'])){
                  echo"
                    <div class'alert alert-success alert-dismissible' id='alert'>
                      <button class='close' type='button' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h4> Success</h4>
                      ".$_SESSION['success'].";
                    </div>
                  ";
                  unset($_SESSION['success']);

                }
              ?>
              
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Seznam rezervac??</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!--zde za????n?? tabulka--->
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-bordered table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                              
                                        <th>FIRSTNAME</th>
                                        <th>LASTNAME</th>
                                        <th>PHONE NUMBER</th>
                                        <th>EMAIL</th>
                                        <th>DATE</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        require_once "includes/conn.php";
                                        $sql ="SELECT * FROM bookings_record";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){

                                    ?>
                                    <tr>
                                        
                                        <td><?php echo $row['FIRSTNAME'];?></td>    <!--vezme hodnoty z datab??ze-->
                                        <td><?php echo $row['LASTNAME'];?></td>
                                        <td><?php echo $row['PHONE'];?></td>
                                        <td><?php echo $row['EMAIL'];?></td>
                                        <td><?php echo $row['DATE'];?></td>
                                        <td>
                                            <a href="#" data-id="<?php echo $row['ID'];?>" class="btn btn-info btn-sm info">  VIEW</a>    <!---p??id??m class pro vzhled--->
                                            <a href="#" data-id="<?php echo $row['ID'];?>" class="btn btn-success btn-sm edit">EDIT</a>
                                            <a href="#" data-id="<?php echo $row['ID'];?>" class="btn btn-danger btn-sm delete">DELETE</a>
                                        </td>
                                    </tr>
                                    
                                    <?php    
                                    }
                                    ?>
                                   
                                </tbody>
                            </table>
                    
                        </div>
                        </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Datatables -->
    <script src="../vendors/database.net/jquery.dataTables.min.js"></script>
    <script src="../vendors/database.net-bs/jquery.dataTables.min.js"></script>
    <script src="../vendors/database.net-buttons/dataTables.buttons.minjs"></script>
    <script src="../vendors/database.net-buttons-bs/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/database.net-buttons/buttons.flash.min.js"></script>
    <script src="../vendors/database.net-buttons/buttons.html5.min.js"></script>
    <script src="../vendors/database.net-buttons/buttons.print.min.js"></script>
    <script src="../vendors/database.net-fixedheader/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/database.net-keytable/dataTables.keyTable.min.js"></script>
    <script src="../vendors/database.net-responsive/dataTables.keyTable.min.js"></script>
    <script src="../vendors/database.net-responsive-bs/responsive.bootstrap.js"></script>
    <script src="../vendors/database.net-scroller/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/jszip.min.js"></script>
    <script src="../vendors/pdfmake/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/vfs_fonts.js"></script>
    <script src="../vendors/font-awesome/icons.less.ls"></script> <!--ikony--->
    <!-- Custom Theme Scripts -->
    <script src="../admin/js/custom.min.js"></script>

    
    <!---kdy?? kliknu na edit spost?? se booking_modal.php -->
    <?php include "includes/booking_modal.php"; ?>
    
    <script>
      $(function(){
        $('.edit').click(function(e){
          e.preventDefault();
          $('#edit').modal('show');
          var id = $(this).data('id');
          getRow(id);
        });


        $('.delete').click(function(e){
          e.preventDefault();
          $('#delete').modal('show');
          var id = $(this).data('id');
          getRow(id);
        });

        $('.info').click(function(e){
          e.preventDefault();
          $('#info').modal('show');
          var id = $(this).data('id');
          getRow(id);
        });

      });

      function getRow(id){
        $.ajax({
          type: 'POST',
          url: 'booking_row.php',
          data:{id:id},
          dataType: 'json',
          success: function(response){
            $('.cust_id').val(response.ID);
            $('.customer_id').html(response.ID);
            $('.del_customer_name').html(response.FIRSTNAME+' '+response.LASTNAME);
            $('#edit_firstname').val(response.FIRSTNAME);
            $('#edit_lastname').val(response.LASTNAME);
            $('#edit_phone').val(response.PHONE);
            $('#edit_email').val(response.EMAIL);


            $('.edit_fname').html(response.FIRSTNAME);
            $('.edit_lname').html(response.LASTNAME);
            $('.edit_number').html(response.PHONE);
            $('.edit_email_address').html(response.EMAIL);

          }
        });
      }


    </script>
      <!--hl????ka ??e ??prava byla ??sp????n?? provedena zmiz?? po 5 sekund??ch, animace zmizen?? a posunut?? nahoru--->
      <script>
        $(document).ready(function(){
          window.setTimeout(function(){
            $("#alert").fadeTo(1000, 0).slideUp(1000,function(){
              $(this).remove();
            });
          }, 5000);
        });
      </script>
    </body>
</html>
