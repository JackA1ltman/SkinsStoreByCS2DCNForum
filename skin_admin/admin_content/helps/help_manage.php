<link rel="stylesheet" href="../../admin_style/helps/help_manage.css">
<div class="manage_middle">

    <div class="manage_middle_search">

        <div>
            <input type="text" placeholder="OrderID">
            <input type="text" placeholder="标题">
            <input type="text" placeholder="链接">
            <button>提交</button>
            <button>重置</button>
        </div>

    </div>

    <div><hr></div>

    <div class="manage_middle_list">
        <table border="1">
            <tbody>
            <tr>
                <th style="width: 100px">帮助OrderID</th>
                <th style="width: 200px">帮助标题</th>
                <th style="width: 100px">帮助链接</th>
                <th style="width: 200px">操作</th>
            </tr>
            <? for($i=0;$i<22;$i++){ ?>
                <tr>
                    <td>10001</td>
                    <td>第一标题</td>
                    <td>first_help</td>
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