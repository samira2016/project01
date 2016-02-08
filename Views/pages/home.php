<?php

echo 'home page';

 var_dump($_COOKIE);

 if(isset($_COOKIE['auth'])){
            var_dump($_COOKIE['auth']);
            var_dump($_COOKIE);
        }else{
            var_dump("pas cookie user");
        }
?>
