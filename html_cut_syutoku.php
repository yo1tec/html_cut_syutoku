<?php
$html_buf="abcdefghijklmn";
$start_buf="cde";
$end_buf="lm";
 
//文字列間の文字取得関数呼び出し
$re_mozi = html_cut_syutoku($html_buf,$start_buf,$end_buf,0);
 
print $re_mozi;
 
// $html_buf：対象の文字列
// $start_buf：開始文字列
// $end_buf：終了文字列
// $int_positon_cnt：対象文字列内の取得開始位置
function html_cut_syutoku($html_buf, $start_buf, $end_buf, $int_positon_cnt){
 
    if(strstr($html_buf, $start_buf)){
        $srt_position = strpos($html_buf, $start_buf, $int_positon_cnt);
        $srt_position = $srt_position + strlen($start_buf);
        $end_position = strpos($html_buf, $end_buf, $srt_position);
         
        $result_buf = substr($html_buf, $srt_position, $end_position-$srt_position);
    }else{
        $result_buf = "";
    }
     
    return $result_buf;
}
?>