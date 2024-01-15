<?php
namespace App\Http\Library;

trait SliderHelper{
    public static function slider_position($position, $x_offset = 0, $y_offset = 0, $left_offset = 0)
    {
        $common_styles = "opacity: 1;
                        z-index: 111;
                        position: absolute;
                        display: flex;
                        flex-direction: column;";
    
        if ($position === "Top Right") {
            $right = 10 + $x_offset;
            $right = $right."vw";
            
            $top = 15 + $y_offset;
            $top = $top."vh";

            return $common_styles . "
                        align-items: end;
                        justify-content: end;
                        top: ".$top.";
                        left: 8vw;
                        right: ".$right.";
                        text-align: right;";
        } elseif ($position === "Bottom Right") {
            $right = 10 + $x_offset;
            $right = $right."vw";

            $bottom = 5 + $y_offset;
            $bottom = $bottom."vh";

            return $common_styles . "
                        align-items: end;
                        justify-content: end;
                        bottom: ".$bottom.";
                        left: 8vw;
                        right: ".$right.";";
        } elseif ($position === "Middle Right") {
            $right = 10 + $x_offset;
            $right = $right."vw";

            $middle = 40 + $y_offset;
            $middle = $middle."vh";

            return $common_styles . "
                        align-items: end;
                        justify-content: end;
                        bottom: ".$middle.";
                        left: 8vw;
                        right: ".$right.";";
        } elseif ($position === "Top Left") {

            $left = 6 + $x_offset;
            $left = $left."vw";
            
            $top = 6 + $y_offset;
            $top = $top."vh";

            return $common_styles . "
                        align-items: start;
                        justify-content: end;
                        top: ".$top.";
                        left: ".$left.";
                        right: 8vw;";
        } elseif ($position === "Bottom Left") {   
            $left = 10 + $x_offset;
            $left = $left."vw";

            $bottom = 5 + $y_offset;
            $bottom = $bottom."vh";

            return $common_styles . "
                        align-items: start;
                        justify-content: start;
                        bottom: ".$bottom.";
                        left: ".$left.";
                        right: 8vw;";
        } elseif ($position === "Middle Left") {
            $left = 6 + $x_offset;
            $left = $left."vw";

            $middle = 40 + $y_offset;
            $middle = $middle."vh";

            return $common_styles . "
                        align-items: start;
                        justify-content: start;
                        bottom: ".$middle.";
                        left: ".$left.";
                        right: 8vw;";
        } elseif ($position === "Center") {
            return $common_styles . "
                        text-align: center;
                        width: 100%;
                        top: 50%;";
        }
    }
}