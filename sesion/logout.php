<?php
if(isset($_SESSION['name']))
                {
                unset($_SESSION['name']);
                }
                echo '
You have been successfully logout
';
?>