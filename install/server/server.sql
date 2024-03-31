/*安装数据库所需的全部*/
/*By JackAltman*/
/*Version:202102120001*/

CREATE TABLE `skin_config_informations`  (
  `admin_id` int(10) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '管理员实际ID',
  `admin_username` varchar(255) NOT NULL COMMENT '管理员账号',
  `admin_password` varchar(255) NOT NULL COMMENT '管理员密码',
  `admin_authority` tinyint(2) NOT NULL COMMENT '管理员权限等级，1为全域管理员，2为附属管理员，3为巡查管理员',
  `admin_comment` varchar(255) NULL COMMENT '指定管理员的备注，此项为非必要项，如果有特殊管理员分配则可以填写备注',
  PRIMARY KEY (`admin_id`)
);
/*skin_config系列-表*/

CREATE TABLE `skin_boxes_informations`  (
  `box_id` int(4) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每个箱子的主要ID',
  `box_order_id` int(10) NOT NULL COMMENT '每个箱子的规定ID，方便数据库桥接',
  `box_name` varchar(255) NOT NULL COMMENT '每个箱子的名称，请尽量不要使用特殊字符',
  `box_describe` varchar(255) NOT NULL COMMENT '每个箱子的介绍，请尽量不要使用特殊字符，最好别使用诸如换行符等',
  `box_special_type` int(10) NULL COMMENT '规定箱子能开出的皮肤类型，如果不是指定类型武器皮肤则无需填写',
  `box_price` decimal(10) NOT NULL COMMENT '每个箱子的价格',
  `box_probably` tinyint(3) COMMENT '每个箱子的概率，箱子概率可能存在其他算法，如果不使用算法，请设置此项，且不超过100';
  `box_hot` int ZEROFILL NOT NULL COMMENT '每个箱子的热度值，默认为0，用于首页推荐',
  `box_event_active` tinyint(1) ZEROFILL NOT NULL COMMENT '是否设定为活动推荐箱子，0为不设定，1为设定',
  PRIMARY KEY (`box_id`)
);
CREATE TABLE `skin_boxes_images`  (
  `image_id` int(4) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每个箱子预览图的主要ID',
  `box_order_id` int(10) NOT NULL COMMENT '用于和informations表内联用，所有的boxes_order_id应对应相同',
  `image_preview_link` varchar(255) NOT NULL COMMENT '每个箱子预览图的相对地址',
  PRIMARY KEY (`image_id`)
);
CREATE TABLE `skin_boxes_trade`  (
  `trade_id` int(4) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '用于记录每一部分交易的ID，不须特别管理',
  `boxes_order_id` int(10) NOT NULL COMMENT '用于和informations表内联用，所有的boxes_order_id应对应相同',
  `trade_total_number` int(50) NOT NULL COMMENT '每个箱子在皮肤市场的总数量',
  `trade_extracted_number` ZEROFILL int(50) NOT NULL COMMENT '每个箱子在皮肤市场的已抽取数量',
  PRIMARY KEY (`trade_id`)
);
CREATE TABLE `skin_boxes_settings`  (
  `setting_id` int(4) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每项设置的主要ID',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` varchar(255) NOT NULL COMMENT '每项设置的值',
  `setting_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '每项设置的状态，默认为1，0为关闭',
  PRIMARY KEY (`setting_id`)
);
/*skin_boxes系列-表*/

CREATE TABLE `skin_help_informations`  (
  `help_id` int(5) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每篇帮助文章的主要ID',
  `help_order_id` int(10) NOT NULL COMMENT '每篇帮助文章的规定ID，方便数据库桥接',
  `help_title` varchar(255) NOT NULL COMMENT '每篇帮助文章的标题，请尽量不要使用特殊字符',
  `help_content_link` varchar(255) NOT NULL COMMENT '每篇帮助文章对应HTML页面的相对地址',
  PRIMARY KEY (`help_id`)
);
CREATE TABLE `skin_help_analyse`  (
  `analyse_id` int(10) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每篇帮助文章的数据分析ID',
  `help_order_id` int(10) NOT NULL COMMENT '用于和informations表内联用，所有的help_order_id应对应相同',
  `analyse_pv` int(255) NOT NULL COMMENT '每篇帮助文章的访问PV',
  `analyse_start_time` datetime NOT NULL COMMENT '每篇文章的发布时间，修改时间同理在此',
  PRIMARY KEY (`analyse_id`)
);
/*skin_help系列-表*/

CREATE TABLE `skin_weapons_informations`  (
  `item_id` int(4) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每个武器皮肤的主要ID',
  `item_order_id` int(10) NOT NULL COMMENT '每个武器皮肤的规定ID，方便数据库桥接',
  `item_name` varchar(255) NOT NULL COMMENT '每个武器皮肤的名称，请尽量不要使用特殊字符',
  `item_maker_name` varchar(255) NOT NULL COMMENT '每个武器皮肤的制作人名称，通常为英文',
  `item_describe` varchar(255) NOT NULL COMMENT '每个武器皮肤的介绍，请尽量不要使用特殊字符，最好别使用诸如换行符等',
  `item_level` tinyint(2) NOT NULL COMMENT '每个武器皮肤的等级，1为消费级，2为工业级，3为军规级，4为受限级，5为保密级，6为隐秘级，7为纪念级',
  `item_price` decimal(10) NOT NULL COMMENT '每个武器皮肤的电池价格',
  `item_type` varchar(255) NOT NULL COMMENT '每个武器皮肤的类型，例如USP，AK47等',
  `item_hot` int ZEROFILL NOT NULL COMMENT '每个武器皮肤的热度值，默认为0，用于首页推荐',
  PRIMARY KEY (`item_id`)
);
CREATE TABLE `skin_weapons_images`  (
  `image_id` int(4) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每个武器皮肤配套系列图片的主要ID',
  `item_order_id` int(10) NOT NULL COMMENT '用于和informations表内联用，所有的item_order_id应对应相同',
  `image_big_link` varchar(255) NOT NULL COMMENT '每个武器皮肤配套大图的相对文件地址',
  `image_small_link` varchar(255) NOT NULL COMMENT '每个武器皮肤配套小图的相对文件地址',
  `image_package_link` varchar(255) NULL COMMENT '存在武器皮肤配图包的相对文件地址，本项不是必须，可选',
  PRIMARY KEY (`image_id`)
);
CREATE TABLE `skin_weapons_trade`  (
  `trade_id` int(4) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '用于记录每一部分交易的ID，不须特别管理',
  `item_order_id` int(10) NOT NULL COMMENT '用于和informations表内联用，所有的item_order_id应对应相同',
  `trade_total_number` int(50) NOT NULL COMMENT '每一个武器皮肤在皮肤市场的总数量',
  `trade_sold_number` int(50) NOT NULL COMMENT '每一个武器皮肤在皮肤市场的已销售数量',
  `trade_bought_number` int(50) NOT NULL COMMENT '每一个武器皮肤在皮肤市场的已购买数量',
  PRIMARY KEY (`trade_id`)
);
/*skin_weapons系列-表*/

CREATE TABLE `skin_key_informations`  (
  `key_id` int(10) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每个密钥的实际ID',
  `key_order_id` int(10) NOT NULL COMMENT '每个密钥的规定ID，方便数据库桥接',
  `item_order_id` int(10) NOT NULL COMMENT '用于和武器informations表对接使用',
  `key_body` varchar(255) NOT NULL COMMENT '每个密钥的值，通常使用算法自动生成',
  `key_status` tinyint(2) NOT NULL COMMENT '每个密钥的激活状态，0为未启用，1为未使用，2为已激活',
  `key_belong_uid` int(11) NULL COMMENT '每个密钥的所属用户PID，通常为被激活后填入',
  `key_used_time` datetime NULL COMMENT '每个密钥的被激活时间，通常为被激活后填入',
  PRIMARY KEY (`key_id`)
);
/*skin_key系列-表*/

CREATE TABLE `skin_player_informations`  (
  `user_id` int(11) ZEROFILL NOT NULL AUTO_INCREMENT COMMENT '每个用户的实际ID',
  `user_order_id` int(11) NOT NULL COMMENT '每个用户的规定ID，方便数据库桥接',
  `user_uid` int(11) NOT NULL COMMENT '每个用户的论坛UID，用于跨数据库对接',
  `user_time` datetime NOT NULL COMMENT 'usertime',
  `user_item` varchar(255) NOT NULL COMMENT '每个用户的拥有道具，通常为武器',
  PRIMARY KEY (`user_id`)
);
CREATE TABLE `skin_player_trade`  (
  `trade_id` int(11) NOT NULL COMMENT '每笔交易的实际ID',
  `user_order_id` int(11) NOT NULL COMMENT '用于和informations表内联用，所有的user_order_id应对应相同',
  `trade_order` varchar(255) NOT NULL COMMENT '每笔交易的订单号码',
  `trade_time` datetime NOT NULL COMMENT '每笔交易的交易时间',
  PRIMARY KEY (`trade_id`)
);
/*skin_play系列-表*/