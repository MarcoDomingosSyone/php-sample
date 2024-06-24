<?php

echo "Syone - 2024";
echo getenv("\tnome_completo\n");
echo getenv("\tidade\n");
echo getenv("\tcidade\n");
echo getenv("\tteamLeader\n");

 $url = "https://careers.recruiteecdn.com/image/upload/q_auto,f_auto,w_400,c_limit/production/images/BN5l/2dDjxgF-CXUi.png";
     $image = file_get_contents("\t$url\n");
     echo $image;
