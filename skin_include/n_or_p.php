<div class="market_middle_pre_or_next">
    <div class="market_middle_first"><a href="<? echo $pageIndexReal; ?>">首页</a></div>
    <div class="market_middle_pre" style="<? echo (1 != $pageNum) ? :'display:none;';?>"><a href="<? echo (1 == $pageNum) ? '#' : $pageIndexRealDown; ?>">上一页</a></div>
    <!--<div class="market_middle_num" style="background-color: #2E3846;"><a href="#" style="color: white;">1</a></div>
    <div class="market_middle_num"><a href="#">2</a></div>
    <div class="market_middle_num_more">...</div>-->
    <? for($PG=0;$PG < $totalPage;$PG++) {
        if($pageNum == ($PG + 1) ){
            $PGN = $PG + 1;
            echo "<div class='market_middle_num' style='background-color: #2E3846'><a style='color: white' href='$pageIndex$PGN'>$PGN</a></div>";
        }else{
            $PGN = $PG + 1;
            echo "<div class='market_middle_num'><a href='$pageIndex$pageNum'>$PGN</a></div>";
        }
    }; ?>
    <div class="market_middle_next" style="<? echo ($totalPage != $pageNum) ? : 'display:none;'; ?>"><a href="<? echo $pageIndexRealUp; ?>">下一页</a></div>
    <div class="market_middle_latest"><a href="<? echo $lastPage ?>">末页</a></div>
</div>