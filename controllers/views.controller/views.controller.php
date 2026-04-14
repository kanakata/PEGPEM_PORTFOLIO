<?php

class Views_controller{
    public static function view(){
        $folder = "/templates/views/";
        $extension = ".php";
        if(isset($_GET['p'])){
            $file = base64_decode($_GET['p']);
            $allowed_pages = [
                "about",
                "contact",
                "landing",
                "projects",
                "skills",
            ];
            if(in_array($file , $allowed_pages)){
                if($file == "landing"){
                    $path = $folder . $file . $extension;
                    return[
                        require_once ROOT . "/require/require.header.php",
                        require_once ROOT . $path,
                        require_once ROOT . "/require/require.footer.php",
                    ];
                }else{
                    $path = $folder . $file . $extension;
                    return[
                        require_once ROOT . "/require/require.header.specific.php",
                        require_once ROOT . $path,
                        require_once ROOT . "/require/require.footer.php",
                    ];
                }
            }
        }else{
            $file = "landing";
            $path = $folder . $file . $extension;
            return[
                require_once ROOT . "/require/require.header.php",
                require_once ROOT . $path,
                require_once ROOT . "/require/require.footer.php",
            ];
        }
    }
    public static function Mask($page){
        $encoded_page = base64_encode($page);
        return[
            "page" => $encoded_page,
        ];
    }
}