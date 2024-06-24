<?php

echo "Syone - 2024";
echo getenv("nome_completo");
echo ""
echo getenv("idade");
echo ""
echo getenv("cidade");
echo ""
echo getenv("teamLeader");
echo ""
echo ""
echo ""
 $url = "https://careers.recruiteecdn.com/image/upload/q_auto,f_auto,w_400,c_limit/production/images/BN5l/2dDjxgF-CXUi.png";
     $image = file_get_contents("$url");
     echo $image;
