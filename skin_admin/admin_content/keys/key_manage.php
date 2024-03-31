<link rel="stylesheet" href="../../admin_style/keys/key_manage.css">
<div class="manage_middle">

    <div class="manage_middle_search">

        <div>
            <input type="text" placeholder="状态值">
            <input type="text" placeholder="道具OrderID">
            <input type="text" placeholder="OrderID">
            <input type="text" placeholder="激活用户ID">
            <button>提交</button>
            <button>重置</button>
        </div>

    </div>

    <div><hr></div>

    <div class="manage_middle_list">
        <table border="1">
            <tbody>
            <tr>
                <th style="width: 100px">OrderID</th>
                <th style="width: 100px">被激活道具OrderID</th>
                <th style="width: 300px">Key</th>
                <th style="width: 100px">激活状态</th>
                <th style="width: 200px">被激活人UID</th>
                <th style="width: 200px">激活时间</th>
                <th style="width: 100px">操作</th>
            </tr>
            <? for($i=0;$i<22;$i++){ ?>
                <tr>
                    <td>0001</td>
                    <td>30001</td>
                    <td>YYYYY-UUUUU-IIIII-OOOOO</td>
                    <td>1</td>
                    <td>1000000001</td>
                    <td>2020-5-15 15:55:55</td>
                    <td>
                        <button>删除</button>
                        <button>修改</button>
                    </td>
                </tr>
            <? } ?>
            </tbody>
        </table>
    </div>

    <div class="manage_middle_pre_or_next">
        <div class="manage_middle_first"><a href="#">首页</a></div>
        <div class="manage_middle_pre"><a href="#">上一页</a></div>
        <div class="manage_middle_num" style="background-color: #2E3846;"><a href="#" style="color: white;">1</a></div>
        <div class="manage_middle_num"><a href="#">2</a></div>
        <div class="manage_middle_num_more">...</div>
        <div class="manage_middle_next"><a href="#">下一页</a></div>
        <div class="manage_middle_latest"><a href="#">末页</a></div>
    </div>

</div>