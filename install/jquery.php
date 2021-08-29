<?php if(isset($_GET['step4'])){ ?>
    <script type="text/javascript">
        $(function(){
            "use strict";
            var wait = 60000; //60 second
            var time = 60;
            setInterval(function(){
             $("#wait_msg").html("You need to wait "+time+" second before you can proceed");
             time--;
            }, 1000);

            setTimeout(function() {
                $("#wait_div").addClass('hide');
                $("#logininfo").removeClass('hide');
            }, wait);

        });
    </script>
<?php } ?>

<?php if(isset($_GET['complete'])){ ?>
    <script type="text/javascript">
        $(function(){
            "use strict";
            var wait = 3000; //3 second
            var time = 3;
            setInterval(function(){
             $("#btn-before").html("You need to wait "+time+" second before you can proceed");
             time--;
            }, 1000);

            setTimeout(function() {
                $("#btn-before").addClass('hide');
                $("#btn-complete").removeClass('hide');
            }, wait);

        });
    </script>
<?php } ?>