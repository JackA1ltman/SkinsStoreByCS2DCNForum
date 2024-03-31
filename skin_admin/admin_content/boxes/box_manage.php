<link rel="stylesheet" href="../../admin_style/skins/skin_manage.css">
<div class="manage_middle">

    <div class="manage_middle_search">

        <div>
            <input type="text" placeholder="关键词">
            <input type="text" placeholder="OrderID">
            <input type="text" placeholder="价格">
            <input type="text" placeholder="热度值">
            <input type="text" placeholder="概率">
            <input type="text" placeholder="特殊类型">
            <input type="text" placeholder="总量">
            <input type="text" placeholder="销量">
            <button>提交</button>
            <button>重置</button>
        </div>

    </div>

    <div><hr></div>

    <div class="manage_middle_list">
        <table border="1">
            <tbody>
            <tr>
                <th style="width: 400px">名称</th>
                <th style="width: 200px">OrderID</th>
                <th style="width: 100px">价格</th>
                <th style="width: 100px">类型</th>
                <th style="width: 150px">热度值</th>
                <th style="width: 150px">总量</th>
                <th style="width: 100px">销量</th>
                <th style="width: 150px;display: flex;flex-direction: row;">操作</th>
            </tr>
            <? for($i=0;$i<22;$i++){ ?>
                <tr>
                    <td>AK47&nbsp;|&nbsp;火神</td>
                    <td>30001</td>
                    <td>30</td>
                    <td>AK47</td>
                    <td>5000</td>
                    <td>100</td>
                    <td>50</td>
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