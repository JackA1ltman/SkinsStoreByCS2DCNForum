<link rel="stylesheet" href="../../admin_style/skins/skin_manage.css">
<div class="manage_middle">

    <div class="manage_middle_search">

        <div>
            <input type="text" placeholder="关键词">
            <input type="text" placeholder="OrderID">
            <input type="text" placeholder="作者">
            <select name="level" id="">
                <option value="1">普通级</option>
                <option value="2">民用级</option>
                <option value="3">军用级</option>
                <option value="4">涉密级</option>
                <option value="5">绝密级</option>
                <option value="6">违禁级</option>
                <option value="7">特殊</option>
            </select>
            <input type="text" placeholder="价格">
            <select name="type" id="">
                <optgroup label="手枪">
                    <option value="USP">USP</option>
                    <option value="Glock">Glock</option>
                    <option value="Deagle">Deagle</option>
                    <option value="P228">P228</option>
                    <option value="Elite">Elite</option>
                    <option value="Five-Seven">Five-Seven</option>
                </optgroup>
                <optgroup label="霰弹枪">
                    <option value="M3">M3</option>
                    <option value="XM1014">XM1014</option>
                </optgroup>
                <optgroup label="冲锋枪">
                    <option value="MP5">MP5</option>
                    <option value="TMP">TMP</option>
                    <option value="P90">P90</option>
                    <option value="Mac10">Mac-10</option>
                    <option value="UMP45">UMP45</option>
                </optgroup>
                <optgroup label="步枪">
                    <option value="Galil">Galil</option>
                    <option value="Famas">Famas</option>
                    <option value="AK47">AK47</option>
                    <option value="SG552">SG552</option>
                    <option value="M4A1">M4A1</option>
                    <option value="Aug">Aug</option>
                    <option value="Scout">Scout</option>
                    <option value="G3SG1">G3SG1</option>
                    <option value="SG550">SG550</option>
                </optgroup>
                <optgroup label="机枪">
                    <option value="M249">M249</option>
                </optgroup>
            </select>
            <input type="text" placeholder="热度值">
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
                <th style="width: 100px">作者</th>
                <th style="width: 100px">等级</th>
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
                    <td>Jack</td>
                    <td>军用级</td>
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