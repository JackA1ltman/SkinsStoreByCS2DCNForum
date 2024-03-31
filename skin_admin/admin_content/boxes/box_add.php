<link rel="stylesheet" href="../../admin_style/skins/skin_add.css">
<div class="add_middle">

    <div class="add_middle_input">

        <div>

            <ul>

                <li><div class="add_middle_input_text">皮肤名称</div><input type="text"></li>
                <li><div class="add_middle_input_text">皮肤照片（大）</div><input type="file"></li>
                <li><div></div><img src="../../../skin_images/weapon/30006_big.png" alt=""></li>
                <li><div class="add_middle_input_text">皮肤照片（小）</div><input type="file"></li>
                <li><div></div><img src="../../../skin_images/weapon/30001_small.png" alt=""></li>
                <li><div class="add_middle_input_text">OrderID</div><input type="text"></li>
                <li><div class="add_middle_input_text">作者</div><input type="text"></li>
                <li>
                    <div class="add_middle_input_text">等级</div>
                    <select name="level" id="">
                        <option value="1">普通级</option>
                        <option value="2">民用级</option>
                        <option value="3">军用级</option>
                        <option value="4">涉密级</option>
                        <option value="5">绝密级</option>
                        <option value="6">违禁级</option>
                        <option value="7">特殊</option>
                    </select>
                </li>
                <li><div class="add_middle_input_text">价格</div><input type="text"></li>
                <li>
                    <div class="add_middle_input_text">类型</div>
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
                </li>
                <li><div class="add_middle_input_text">热度值</div><input type="text"></li>
                <li><div class="add_middle_input_text">总量</div><input type="text"></li>

            </ul>

        </div>

    </div>

    <div class="add_middle_button">
        <div>
            <button>提交</button>
            <button>重置</button>
        </div>
    </div>

</div>