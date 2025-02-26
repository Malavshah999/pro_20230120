</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $lang['ready_to_leave']; ?></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><?php echo $lang['logout_msg']; ?></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo $lang['cancel']; ?></button>
                <a class="btn btn-primary" href="index.php"><?php echo $lang['logout']; ?></a>
            </div>
        </div>
    </div>
</div>

<!-- Modal mydelete -->
<div class="modal fade" id="mydelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
    <form>
        <div class="modal-dialog" role="document">
            <input type="hidden" name="delete_value" id="delete_value">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel3"><?php echo $lang['delete']; ?></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning"><?php echo $lang['news_delete_confirm_msg'];?></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger delete_news"><span class="fa fa-trash"></span> <?php echo $lang['delete']; ?> </button>
                    <button type="button" class="btn btn-link" data-dismiss="modal"><?php echo $lang['cancel']; ?></button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>

<!--  select2  -->
<script type="text/javascript" src="vendor/select2/js/select2.min.js"></script>

<!-- FancyBox -->
<script src="vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- ckeditor  -->
<script src="vendor/ckeditor/ckeditor.js"></script>

<!-- DateTimePicker  -->
<script type="text/javascript" src="vendor/momentjs/js/moment.min.js"></script>
<script src="vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<!-- custom  -->
<script src="js/custom.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        var page_name = $("#page_name").val();
        $("#"+page_name).addClass("active");
        $("#"+page_name).addClass("show");

        var dropdown_name = $("#dropdown_name").val();
        $("#"+dropdown_name).addClass("show");

        var sub_page_name = $("#sub_page_name").val();
        $("#"+sub_page_name).addClass("active");

        //fancybox
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        //datetimepicker
        $('#news_time').datetimepicker({
            format: 'DD-MM-YYYY HH:mm',
        });

        $('#from_time').datetimepicker({
            format: 'DD-MM-YYYY HH:mm',
        });

        $('#to_time').datetimepicker({
            format: 'DD-MM-YYYY HH:mm',
        });

        $('textarea').each(function(){
                $(this).val($(this).val().trim());
            }
        );

    });

    function isNumberKey(evt,id)
    {
        try{
            var charCode = (evt.which) ? evt.which : event.keyCode;

            if(charCode==46){
                var txt=document.getElementById(id).value;
                if(!(txt.indexOf(".") > -1)){

                    return true;
                }
            }
            if (charCode > 31 && (charCode < 48 || charCode > 57) )
                return false;

            return true;
        }catch(w){
            //alert(w);
        }
    }

</script>
<script>

    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><br/><input type="file" name="photo[]" accept="image/jpeg,image/png" /><br/><a href="javascript:void(0);" class="remove_button" title="Remove field"><input type="button" value="- Remove Image" class="btn btn-primary"></a></div>'; //New input field html
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        //alert('here');
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

</script>
</body>

</html>
