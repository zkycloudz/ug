
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->

            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-12">

                      <?php foreach($data_view->result_array() as $row):?>
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">View Purchase Order <?php echo $row['nomor_po']?></h4>
                            </div>
                            <br>
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo base_url().'Vendor/approv'?>" method="post" autocomplete="off">
                                  <input type="hidden" name="id_po" value="<?php echo $row['id_po']?>">
                                  <div class="form-group row">
                                      <div class="col-md-3">
                                          <label class="control-label">Corporate Name</label>
                                      </div>
                                      <div class="col-md-9">
                                          <input type="text" class="form-control" name="cor_name" value="<?php echo $row['nama_perusahaan']?>" readonly>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <div class="col-md-3">
                                          <label class="control-label">PO Number</label>
                                      </div>
                                      <div class="col-md-9">
                                          <input type="text" class="form-control" name="no_po" value="<?php echo $row['nomor_po']?>" readonly >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-md-3">
                                          <label class="control-label">Delivery Address</label>
                                      </div>
                                      <div class="col-md-9">
                                          <input type="text" class="form-control" name="del_address"  value="<?php echo $row['alamat_pengiriman']?>" readonly>
                                          <span id="email_status"></span>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-md-3">
                                          <label class="control-label">Invoicing Addressr</label>
                                      </div>
                                      <div class="col-md-9">
                                          <input type="text" class="form-control" name="inv_address" value="<?php echo $row['alamat_penagihan']?>" readonly >
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-md-3">
                                          <label class="control-label">PO Contact</label>
                                      </div>
                                      <div class="col-md-9">
                                          <input type="text" class="form-control" name="po_contact" value="<?php echo $row['kontak_pembuat_po']?>" readonly>
                                      </div>
                                  </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="control-label">Delivery Date</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="deliv_date" value="<?php echo $row['deadline_pengiriman']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="control-label">Term and Conditions</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="snk" readonly>
                                          <?php echo $row['s_n_k']?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="control-label">Description</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="desc" readonly>
                                            <?php echo $row['s_n_k']?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="control-label">Total Price + PPh</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="total_harga" value="<?php echo $row['total_harga']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="control-label">Vendor</label>
                                    </div>
                                    <div class="col-md-9">
                                      <?php
                                      $id_vendor = $row['id_vendor'];
                                        $sql = $this->db->query("SELECT nama_vendor FROM env_vendor WHERE id_vendor=$id_vendor")->row_array();
                                      ?>
                                        <input type="text" class="form-control" name="total_harga" value="<?php echo $sql['nama_vendor']?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="control-label">PIC</label>
                                    </div>
                                    <div class="col-md-9">
                                      <?php
                                      $id_users = $row['id_pic'];
                                        $sql = $this->db->query("SELECT full_name FROM env_users WHERE id_user=$id_users")->row_array();

                                      ?>
                                        <input type="text" class="form-control" name="total_harga" value="<?php echo $sql['full_name']?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label class="control-label">Token Approval</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="token" required>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="tokken_button btn btn-success btn-rounded m-b-10 m-l-5">Generate Token</a>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                      <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Accept</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                      <?php endforeach ?>
                    </div>
                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> PT.Wallezz Finansial Teknologi <a href="https://wallezz.com">Wallezz.com</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url() ?>assets/js/lib/jquery/jquery.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>



    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>

    <script type="text/javascript">
  $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
  });
  </script>

  <script type="text/javascript">
      $('.tokken_button').click(function() {

        $.ajax({
            url: '<?php echo base_url()?>Purchase_order/token',
            type: 'POST',
            data: {'submit':true}, // An object with the key 'submit' and value 'true;
            success: function (result) {
              alert("Your token has been created");
            }
        });

        });
    </script>


</body>

</html>
