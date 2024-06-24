<?php

echo "Syone - 2024";
echo getenv("nome_completo", "idade", "cidade", "teamLeader");
echo getenv("idade");
echo getenv("cidade");
echo getenv("teamLeader");

 $url = "https://careers.recruiteecdn.com/image/upload/q_auto,f_auto,w_400,c_limit/production/images/BN5l/2dDjxgF-CXUi.png";
     $image = file_get_contents("$url");
     echo $image;
