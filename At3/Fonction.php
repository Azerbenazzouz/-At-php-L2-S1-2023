<?php
    function valideIP($ip){
        return filter_var($ip,FILTER_VALIDATE_IP);
    }
?>