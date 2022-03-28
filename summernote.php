<?php
// require "db.php";
require "config.php";
?>

                <div class="summerblock" id="summernoteBlock">
                    <h1>integration of summernote are here</h1>
                    <div id="summernote">
                    </div>
                    <script class="summernoteScript">
                    $('#summernote').summernote({
                        placeholder: 'Text here',
                        tabsize: 2,
                        height: 200,
                    });
                    </script> 
                </div>