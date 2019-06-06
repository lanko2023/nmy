<?php


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_account')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属帐号',
  `storeid` varchar(1000) NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `from_user` varchar(100) NOT NULL DEFAULT '',
  `accountname` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `salt` varchar(10) NOT NULL DEFAULT '',
  `pwd` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pay_account` varchar(200) NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '2' COMMENT '状态',
  `role` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1:店长,2:店员',
  `lastvisit` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(15) NOT NULL,
  `areaid` int(10) NOT NULL DEFAULT '0' COMMENT '区域id',
  `is_admin_order` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_notice_order` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_notice_queue` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_notice_service` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_notice_boss` tinyint(1) NOT NULL DEFAULT '0',
  `remark` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `lat` decimal(18,10) NOT NULL DEFAULT '0.0000000000' COMMENT '经度',
  `lng` decimal(18,10) NOT NULL DEFAULT '0.0000000000' COMMENT '纬度'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_ad')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `logo` varchar(200) NOT NULL COMMENT '图片',
  `src` varchar(100) NOT NULL COMMENT '内部链接',
  `src2` varchar(200) NOT NULL COMMENT '外部链接',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  `orderby` int(11) NOT NULL COMMENT '排序',
  `status` int(11) NOT NULL COMMENT '1.启用2.禁用',
  `type` int(11) NOT NULL COMMENT '类型',
  `appid` varchar(20) NOT NULL COMMENT '小程序appid',
  `title` varchar(20) NOT NULL COMMENT '小程序appid',
  `xcx_name` varchar(20) NOT NULL COMMENT '小程序名称',
  `item` int(11) NOT NULL COMMENT '1.内部2.外部3.跳转小程序',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_area')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `area_name` varchar(20) NOT NULL COMMENT '区域名称',
  `num` int(11) NOT NULL COMMENT '排序',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='门店区域';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_distribution')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `start` int(11) NOT NULL COMMENT '配送起始值',
  `end` int(11) NOT NULL COMMENT '配送结束值',
  `money` decimal(10,2) NOT NULL COMMENT '价格',
  `num` int(11) NOT NULL COMMENT '排序',
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_dyj')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `tag_id` varchar(30) NOT NULL COMMENT '打印标签id',
  `name` varchar(20) NOT NULL COMMENT '打印机名称',
  `dyj_title` varchar(50) NOT NULL COMMENT '打印机标题',
  `dyj_id` varchar(50) NOT NULL COMMENT '打印机编号',
  `dyj_key` varchar(50) NOT NULL COMMENT '打印机key',
  `api` varchar(100) NOT NULL COMMENT 'API密钥',
  `mid` varchar(100) NOT NULL COMMENT '打印机终端号',
  `state` int(11) NOT NULL COMMENT '1开启2关闭',
  `location` int(11) NOT NULL COMMENT '1..前台 2后厨',
  `yy_id` varchar(20) NOT NULL COMMENT '用户id',
  `token` varchar(50) NOT NULL COMMENT '打印机终端密钥',
  `num` int(11) NOT NULL DEFAULT '1' COMMENT '打印几次',
  `fezh` varchar(40) NOT NULL COMMENT '飞蛾账号',
  `fe_ukey` varchar(50) NOT NULL COMMENT 'ukey',
  `fe_dycode` varchar(20) NOT NULL COMMENT '打印机编号',
  `type` int(11) NOT NULL COMMENT '1.365  2.易联云，3飞蛾',
  `uniacid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_dytag')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `store_id` int(11) NOT NULL COMMENT '门店id',
  `tag_name` varchar(30) NOT NULL COMMENT '标签名称',
  `sort` int(11) NOT NULL COMMENT '排序',
  `time` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='打印标签表';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_goods')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `name` varchar(20) NOT NULL COMMENT '商品名称',
  `type_id` int(11) NOT NULL COMMENT '商品分类',
  `label_id` int(11) NOT NULL COMMENT '标签',
  `logo` varchar(200) NOT NULL COMMENT '图片',
  `money` decimal(10,2) NOT NULL COMMENT '售价',
  `money2` decimal(10,2) NOT NULL COMMENT '原价',
  `vip_money` decimal(10,2) NOT NULL COMMENT '会员价',
  `dn_money` decimal(10,2) NOT NULL,
  `is_show` int(11) NOT NULL DEFAULT '1' COMMENT '是否上架',
  `inventory` int(11) NOT NULL COMMENT '库存',
  `content` varchar(50) NOT NULL COMMENT '简介',
  `details` text NOT NULL COMMENT '详情',
  `sales` int(11) NOT NULL COMMENT '销量',
  `num` int(11) NOT NULL COMMENT '排序',
  `is_gg` int(11) NOT NULL DEFAULT '1' COMMENT '是否规格',
  `is_hot` int(11) NOT NULL DEFAULT '2' COMMENT '是否热销',
  `is_zp` int(11) NOT NULL DEFAULT '2' COMMENT '是否招牌',
  `store_id` int(11) NOT NULL COMMENT '商家id',
  `uniacid` int(11) NOT NULL COMMENT '小程序id',
  `type` int(11) NOT NULL COMMENT '1.外卖2.店内3.店内+外卖',
  `quantity` int(11) NOT NULL,
  `box_money` decimal(10,2) NOT NULL COMMENT '餐盒费'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_help')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `question` varchar(200) NOT NULL COMMENT '标题',
  `answer` text NOT NULL COMMENT '回答',
  `sort` int(4) NOT NULL COMMENT '排序',
  `uniacid` varchar(50) NOT NULL,
  `created_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_message')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '邮箱用户名',
  `password` varchar(50) NOT NULL COMMENT '邮箱密码',
  `type` varchar(10) NOT NULL COMMENT '发件人名称',
  `sender` varchar(20) NOT NULL COMMENT '发件人名称',
  `signature` varchar(100) NOT NULL COMMENT '邮箱签名',
  `is_email` int(11) NOT NULL COMMENT '1.开启2.关闭',
  `xd_tid` varchar(60) NOT NULL COMMENT '下单通知',
  `jd_tid` varchar(60) NOT NULL COMMENT '接单通知',
  `yy_tid` varchar(60) NOT NULL COMMENT '预约通知',
  `dm_tid` varchar(60) NOT NULL COMMENT '当面通知',
  `sj_tid` varchar(60) NOT NULL COMMENT '公众号商家新订单通知',
  `sj_tid2` varchar(60) NOT NULL COMMENT '公众号商家预约通知',
  `wx_appid` varchar(60) NOT NULL COMMENT '通知公众号appid',
  `wx_secret` varchar(60) NOT NULL COMMENT '通知公众号AppSecret',
  `is_dxyz` int(4) NOT NULL DEFAULT '2' COMMENT '是否开启短信1是,2否',
  `appkey` varchar(50) NOT NULL COMMENT '应用key',
  `tpl_id` varchar(20) NOT NULL COMMENT '短信模板id',
  `uniacid` int(11) NOT NULL COMMENT '小程序id '
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='通知表';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_nav')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `title` varchar(20) NOT NULL COMMENT '标题',
  `title_color` varchar(20) NOT NULL COMMENT '标题选中颜色',
  `title_color2` varchar(20) NOT NULL COMMENT '标题未选中颜色',
  `logo` varchar(200) NOT NULL COMMENT '选中图片',
  `logo2` varchar(200) NOT NULL COMMENT '未选中图片',
  `url` varchar(200) NOT NULL COMMENT '跳转链接',
  `num` int(11) NOT NULL COMMENT '排序',
  `state` int(11) NOT NULL DEFAULT '1' COMMENT '1开启2关闭',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_order')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `user_id` int(11) NOT NULL COMMENT '用户id',
  `order_num` varchar(20) NOT NULL COMMENT '订单号',
  `state` int(11) NOT NULL COMMENT '1.待付款2.待结单3.等待送达4.完成5.已评价6.取消7.拒绝8.退款中9.已退款10.退款拒绝',
  `time` varchar(20) NOT NULL COMMENT '下单时间',
  `pay_time` varchar(20) NOT NULL COMMENT '支付时间',
  `jd_time` varchar(20) NOT NULL COMMENT '接单时间',
  `cancel_time` varchar(20) NOT NULL COMMENT '取消时间',
  `complete_time` varchar(20) NOT NULL COMMENT '完成时间',
  `money` decimal(10,2) NOT NULL COMMENT '付款金额',
  `box_money` decimal(10,2) NOT NULL COMMENT '餐盒费',
  `ps_money` decimal(10,2) NOT NULL COMMENT '配送费',
  `mj_money` decimal(10,2) NOT NULL COMMENT '满减优惠',
  `xyh_money` decimal(10,2) NOT NULL COMMENT '新用户立减',
  `tel` varchar(20) NOT NULL COMMENT '电话',
  `name` varchar(20) NOT NULL COMMENT '姓名',
  `address` varchar(200) NOT NULL COMMENT '地址',
  `type` int(11) NOT NULL COMMENT '1.外卖2.店内3.预定4.当面付',
  `store_id` int(11) NOT NULL COMMENT '商家id',
  `note` varchar(50) NOT NULL COMMENT '备注',
  `jj_note` varchar(50) NOT NULL COMMENT '拒绝理由',
  `area` varchar(20) NOT NULL COMMENT '区域',
  `lat` varchar(20) NOT NULL COMMENT '经度',
  `lng` varchar(20) NOT NULL COMMENT '纬度',
  `del` int(11) NOT NULL DEFAULT '2' COMMENT '1.删除  2.未删除',
  `pay_type` int(11) NOT NULL COMMENT '1.微信支付2.余额支付3.积分支付4.货到付款',
  `form_id` varchar(50) NOT NULL COMMENT '模板消息form_id',
  `form_id2` varchar(50) NOT NULL COMMENT '发货formid',
  `code` varchar(100) NOT NULL COMMENT '支付code',
  `order_type` int(11) NOT NULL COMMENT '1.配送2.到店自取',
  `delivery_time` varchar(20) NOT NULL COMMENT '送达时间',
  `sex` int(11) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `tableware` int(11) NOT NULL COMMENT '餐具',
  `dd_info` text NOT NULL COMMENT '达达信息',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_order_goods')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `img` varchar(200) NOT NULL COMMENT '商品图片',
  `number` int(11) NOT NULL COMMENT '数量',
  `order_id` int(11) NOT NULL COMMENT '订单id',
  `name` varchar(20) NOT NULL COMMENT '商品名称',
  `money` decimal(10,2) NOT NULL COMMENT '商品金额',
  `dishes_id` int(11) NOT NULL COMMENT '菜品id',
  `spec` varchar(50) NOT NULL COMMENT '规格',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_pay')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `mchid` varchar(20) NOT NULL COMMENT '商户号',
  `wxkey` varchar(100) NOT NULL COMMENT '支付秘钥',
  `apiclient_cert` text NOT NULL COMMENT '支付证书',
  `apiclient_key` text NOT NULL COMMENT '支付证书',
  `ip` varchar(20) NOT NULL COMMENT 'ip地址',
  `jf_proportion` int(11) NOT NULL DEFAULT '10' COMMENT '积分支付比例',
  `integral` int(11) NOT NULL COMMENT '评价的积分',
  `integral2` int(11) NOT NULL COMMENT '消费得积分',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_psset')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `source_id` int(11) NOT NULL COMMENT '商家',
  `shop_no` varchar(20) NOT NULL COMMENT '门店编号',
  `store_id` int(11) NOT NULL COMMENT '门店id',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_reduction')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '活动名称',
  `full` int(11) NOT NULL COMMENT '满',
  `reduction` int(11) NOT NULL COMMENT '减',
  `type` int(11) NOT NULL COMMENT '1.外卖 2.店内 3.外卖+店内',
  `store_id` int(11) NOT NULL COMMENT '商家id'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='满减活动';"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_rzset')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cjwt` text NOT NULL COMMENT '常见问题',
  `rzxy` text NOT NULL COMMENT '入驻协议',
  `is_ruzhu` int(11) NOT NULL DEFAULT '2' COMMENT '是否开启入驻',
  `is_img` int(11) NOT NULL DEFAULT '2' COMMENT '入驻食品和身份证照片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_shopcar')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `good_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `combination_id` int(11) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `box_money` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_spec')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '规格名称',
  `good_id` int(11) NOT NULL COMMENT '商品id',
  `num` int(11) NOT NULL COMMENT '排序',
  `uniacid` int(11) NOT NULL COMMENT '小程序id'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_spec_combination')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `wm_money` decimal(10,2) NOT NULL COMMENT '外卖价格',
  `dn_money` decimal(10,2) NOT NULL COMMENT '店内价格',
  `combination` varchar(100) NOT NULL COMMENT '组合',
  `number` int(11) NOT NULL COMMENT '库存',
  `good_id` int(11) NOT NULL COMMENT '商品id'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_spec_val')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '规格属性名称',
  `spec_id` int(11) NOT NULL COMMENT '规格id',
  `num` int(11) NOT NULL COMMENT '排序',
  `uniacid` int(11) NOT NULL COMMENT '小程序id',
  `good_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_store')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '商家名称',
  `address` varchar(200) NOT NULL COMMENT '商家地址',
  `time` varchar(20) NOT NULL COMMENT '营业时间',
  `time2` varchar(20) NOT NULL COMMENT '营业时间',
  `time3` varchar(20) NOT NULL COMMENT '营业时间',
  `time4` varchar(20) NOT NULL COMMENT '营业时间',
  `tel` varchar(20) NOT NULL COMMENT '电话',
  `announcement` varchar(200) NOT NULL COMMENT '公告',
  `is_rest` int(11) NOT NULL DEFAULT '2' COMMENT '是否休息(1 是  2否)',
  `img` text NOT NULL COMMENT '商家图片',
  `start_at` varchar(20) NOT NULL COMMENT '起送价',
  `freight` varchar(20) NOT NULL COMMENT '配送费',
  `logo` varchar(200) NOT NULL COMMENT 'logo',
  `details` text NOT NULL COMMENT '商家简介',
  `color` varchar(20) NOT NULL COMMENT '颜色',
  `coordinates` varchar(50) NOT NULL COMMENT '经纬度',
  `yyzz` text NOT NULL COMMENT '营业资质',
  `md_area` int(11) NOT NULL COMMENT '门店区域id',
  `md_type` int(11) NOT NULL COMMENT '门店类型id',
  `sales` decimal(10,1) NOT NULL COMMENT '评分',
  `score` int(11) NOT NULL COMMENT '销量',
  `capita` int(11) NOT NULL COMMENT '人均',
  `tx_user` int(11) NOT NULL COMMENT '提现人',
  `is_open` int(11) NOT NULL DEFAULT '1' COMMENT '是否开启门店',
  `uniacid` int(11) NOT NULL COMMENT '小程序id',
  `number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `environment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_storead')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `logo` varchar(200) NOT NULL COMMENT '图片',
  `src` varchar(100) NOT NULL COMMENT '内部链接',
  `src2` varchar(200) NOT NULL COMMENT '外部链接',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  `orderby` int(11) NOT NULL COMMENT '排序',
  `status` int(11) NOT NULL COMMENT '1.启用2.禁用',
  `type` int(11) NOT NULL COMMENT '类型',
  `appid` varchar(20) NOT NULL COMMENT '小程序appid',
  `title` varchar(20) NOT NULL COMMENT '小程序appid',
  `xcx_name` varchar(20) NOT NULL COMMENT '小程序名称',
  `item` int(11) NOT NULL COMMENT '1.内部2.外部3.跳转小程序',
  `store_id` int(11) NOT NULL COMMENT '商家id',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_storeset')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `xyh_money` decimal(10,2) NOT NULL COMMENT '新用户立减金额',
  `xyh_open` int(11) NOT NULL DEFAULT '2' COMMENT '是否开启新用户立减1是2否',
  `integral` int(11) NOT NULL COMMENT '评价的积分',
  `integral2` int(11) NOT NULL COMMENT '消费得积分',
  `is_jd` int(11) NOT NULL DEFAULT '2' COMMENT '1自动接单  2.手动接单',
  `store_mp3` text NOT NULL COMMENT '商家音乐',
  `store_video` text NOT NULL COMMENT '商家视频',
  `is_mp3` int(11) NOT NULL DEFAULT '2' COMMENT '是否开启音乐',
  `is_video` int(11) NOT NULL DEFAULT '2' COMMENT '是否开启视频',
  `is_jfpay` int(11) DEFAULT '2' COMMENT '积分支付',
  `is_yuepay` int(11) NOT NULL DEFAULT '2' COMMENT '余额支付',
  `is_yuejf` int(11) NOT NULL DEFAULT '2' COMMENT '余额支付得积分',
  `is_wxpay` int(11) NOT NULL DEFAULT '1' COMMENT '微信支付',
  `poundage` int(11) NOT NULL COMMENT '手续费',
  `is_pj` int(11) NOT NULL DEFAULT '1' COMMENT '1.开启 2.关闭(评价)',
  `is_chzf` int(11) NOT NULL DEFAULT '2' COMMENT '餐后支付',
  `box_name` varchar(20) NOT NULL COMMENT '餐盒费文本',
  `yhq_name` varchar(20) NOT NULL COMMENT '收银文本',
  `sy_name` varchar(20) NOT NULL COMMENT '收银文本',
  `dn_name` varchar(20) NOT NULL COMMENT '店内文本',
  `wm_name` varchar(20) NOT NULL COMMENT '外卖文本',
  `yy_name` varchar(20) NOT NULL COMMENT '预约文本',
  `yhq_img` varchar(200) NOT NULL COMMENT '优惠券图片',
  `sy_img` varchar(200) NOT NULL COMMENT '收银图片',
  `dn_img` varchar(200) NOT NULL COMMENT '店内图片',
  `wm_img` varchar(200) NOT NULL COMMENT '外卖图片',
  `yy_img` varchar(200) NOT NULL COMMENT '预约图片',
  `is_yhq` int(11) NOT NULL DEFAULT '1' COMMENT '是否开启优惠券',
  `is_sy` int(11) NOT NULL DEFAULT '1' COMMENT '是否开启收银',
  `is_dn` int(11) NOT NULL DEFAULT '1' COMMENT '是否开启店内',
  `is_wm` int(11) NOT NULL DEFAULT '1' COMMENT '是否开启外卖',
  `is_yy` int(11) NOT NULL DEFAULT '1' COMMENT '是否开启预约',
  `store_id` int(11) NOT NULL,
  `ps_time` varchar(20) NOT NULL COMMENT '配送时间',
  `ps_mode` varchar(20) NOT NULL COMMENT '1.商家配送2.达达配送',
  `ps_jl` int(11) NOT NULL COMMENT '配送距离',
  `is_zt` int(11) NOT NULL DEFAULT '2' COMMENT '1.开启2.关闭(是否自提)',
  `is_hdfk` int(11) NOT NULL DEFAULT '2' COMMENT '1.开启2.关闭(货到付款)',
  `print_type` int(4) NOT NULL DEFAULT '1' COMMENT '1整单,2分单打印',
  `ztxy` text NOT NULL COMMENT '自提协议'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_storetype')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL COMMENT '类型名称',
  `num` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `poundage` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_system')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `appid` varchar(50) NOT NULL COMMENT 'appid',
  `appsecret` varchar(50) NOT NULL COMMENT 'appsecret',
  `url_name` varchar(20) NOT NULL COMMENT '前台名称',
  `details` text NOT NULL COMMENT '关于我们',
  `url_logo` varchar(200) NOT NULL COMMENT '前台logo',
  `color` varchar(20) NOT NULL COMMENT '平台颜色',
  `link_name` varchar(20) NOT NULL COMMENT '后台名称',
  `link_logo` varchar(200) NOT NULL COMMENT '后台logo',
  `model` int(11) NOT NULL DEFAULT '2' COMMENT '1.多店2.单店',
  `default_store` int(11) NOT NULL COMMENT '默认门店id',
  `support` varchar(20) NOT NULL COMMENT '技术支持',
  `bq_logo` varchar(200) NOT NULL COMMENT '版权logo',
  `bq_name` varchar(50) NOT NULL COMMENT '版权名称',
  `map_key` varchar(100) NOT NULL COMMENT '腾讯地图key',
  `tz_appid` varchar(30) NOT NULL COMMENT '跳转小程序appid',
  `tz_name` varchar(20) NOT NULL COMMENT '跳转小程序名称',
  `tel` varchar(20) NOT NULL COMMENT '平台电话',
  `dada_key` varchar(50) NOT NULL COMMENT '达达key',
  `dada_secret` varchar(50) NOT NULL COMMENT '达达secret',
  `is_psxx` int(11) NOT NULL DEFAULT '1' COMMENT '配送信息是否显示',
  `jfgn` int(11) NOT NULL DEFAULT '2' COMMENT '积分功能1.开启2.关闭',
  `msgn` int(11) NOT NULL DEFAULT '2' COMMENT '平台模式功能',
  `fxgn` int(11) NOT NULL DEFAULT '2' COMMENT '分销功能',
  `uniacid` int(11) NOT NULL COMMENT '小程序id',
  `typeset` int(11) NOT NULL DEFAULT '1' COMMENT '是否显示分类',
  `wm_name` varchar(20) NOT NULL,
  `dc_name` varchar(20) NOT NULL,
  `yd_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_txset')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `tx_money` decimal(10,2) NOT NULL COMMENT '最低提现金额',
  `tx_rate` int(11) NOT NULL COMMENT '手续费',
  `tx_details` text NOT NULL COMMENT '提现详情',
  `uniacid` int(11) NOT NULL COMMENT '小程序id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_type')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `type_name` varchar(20) NOT NULL COMMENT '分类名称',
  `order_by` int(11) NOT NULL COMMENT '排序',
  `store_id` int(11) NOT NULL COMMENT '商家id',
  `is_open` int(11) NOT NULL COMMENT '是否开启',
  `uniacid` int(11) NOT NULL COMMENT '小程序id'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_typead')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `logo` varchar(200) NOT NULL COMMENT '图片',
  `src` varchar(100) NOT NULL COMMENT '内部链接',
  `src2` varchar(200) NOT NULL COMMENT '外部链接',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  `orderby` int(11) NOT NULL COMMENT '排序',
  `status` int(11) NOT NULL COMMENT '1.启用2.禁用',
  `type` int(11) NOT NULL COMMENT '类型',
  `appid` varchar(20) NOT NULL COMMENT '小程序appid',
  `title` varchar(20) NOT NULL COMMENT '小程序appid',
  `xcx_name` varchar(20) NOT NULL COMMENT '小程序名称',
  `item` int(11) NOT NULL COMMENT '1.内部2.外部3.跳转小程序',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_user')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `join_time` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `openid` text NOT NULL,
  `total_score` int(11) NOT NULL,
  `wallet` decimal(10,2) NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `day` int(11) NOT NULL,
  `order_money` decimal(10,2) NOT NULL,
  `order_number` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_useradd')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `address` varchar(200) NOT NULL COMMENT '地址',
  `area` varchar(50) NOT NULL COMMENT '地区',
  `user_name` varchar(20) NOT NULL COMMENT '用户id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `tel` varchar(20) NOT NULL COMMENT '电话',
  `is_default` int(11) NOT NULL COMMENT '是否默认',
  `sex` int(11) NOT NULL COMMENT '1.男2.女',
  `lat` varchar(20) NOT NULL COMMENT '经度',
  `lng` varchar(20) NOT NULL COMMENT '纬度'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_kfwset')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `store_id` int(11) NOT NULL COMMENT '门店ID',
  `user_id` int(11) NOT NULL COMMENT '商户id',
  `access_token` varchar(50) NOT NULL COMMENT '用户授权token',
  `openid` varchar(20) NOT NULL COMMENT '新商户ID',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='快服务设置表';"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_usercoupons')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '2' COMMENT '1.使用2.未使用',
  `uniacid` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1.手动2.自动'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_coupons')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `name` varchar(20) NOT NULL COMMENT '优惠券名称',
  `start_time` varchar(20) NOT NULL COMMENT '开始时间',
  `end_time` varchar(20) NOT NULL COMMENT '结束时间',
  `full` decimal(10,1) NOT NULL COMMENT '慢',
  `reduce` decimal(10,1) NOT NULL COMMENT '减',
  `store_id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1.外卖2.店内3.通用',
  `uniacid` int(11) NOT NULL,
  `number` int(11) NOT NULL COMMENT '数量',
  `stock` int(11) NOT NULL COMMENT '库存',
  `instruction` text NOT NULL COMMENT '使用说明',
  `type_id` varchar(20) NOT NULL COMMENT '分类id'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_couponset')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `is_tjhb` int(11) NOT NULL DEFAULT '2' COMMENT '1.开启2.关闭',
  `yhq_set` int(11) NOT NULL DEFAULT '2' COMMENT '1.是2否商家优惠券和平台红包是否可同时使用',
  `time` varchar(10) NOT NULL COMMENT '开始时间',
  `time2` varchar(10) NOT NULL COMMENT '结束时间',
  `number` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_withdrawal')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(10) NOT NULL COMMENT '真实姓名',
  `username` varchar(100) NOT NULL COMMENT '账号',
  `type` int(11) NOT NULL COMMENT '1支付宝 2.微信 3.银行',
  `time` varchar(20) NOT NULL COMMENT '申请时间',
  `sh_time` varchar(20) NOT NULL COMMENT '审核时间',
  `state` int(11) NOT NULL COMMENT '1.待审核 2.通过  3.拒绝',
  `tx_cost` decimal(10,2) NOT NULL COMMENT '提现金额',
  `sj_cost` decimal(10,2) NOT NULL COMMENT '实际金额',
  `store_id` int(11) NOT NULL COMMENT '商家id',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_table_type')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '名字',
  `fw_cost` decimal(10,2) NOT NULL COMMENT '服务费',
  `zd_cost` decimal(10,2) NOT NULL COMMENT '最低消费',
  `yd_cost` decimal(10,2) NOT NULL COMMENT '预付款',
  `num` int(11) NOT NULL COMMENT '数量',
  `orderby` int(11) NOT NULL,
  `store_id` int(11) NOT NULL COMMENT '商家id',
  `uniacid` varchar(50) NOT NULL COMMENT '公众号ID'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_table')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '桌台号',
  `num` int(4) NOT NULL COMMENT '就餐人数',
  `type_id` varchar(50) NOT NULL COMMENT '桌台类型ID',
  `tag` varchar(50) NOT NULL COMMENT '标签',
  `orderby` int(11) NOT NULL COMMENT '排序',
  `status` int(4) NOT NULL COMMENT '状态，0 空闲，1开台，2已下单，3已支付',
  `uniacid` varchar(50) NOT NULL COMMENT '公众号ID',
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_call')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `store_id` int(11) NOT NULL COMMENT '门店ID',
  `is_open` int(4) NOT NULL DEFAULT '2' COMMENT '1开启,2关闭',
  `appid` varchar(20) NOT NULL,
  `apikey` varchar(50) NOT NULL,
  `src` varchar(50) NOT NULL COMMENT '音频文件路径',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='讯飞表';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_calllog')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `user_id` int(11) NOT NULL COMMENT '用户id',
  `store_id` int(11) NOT NULL COMMENT '门店ID',
  `table_id` int(11) NOT NULL COMMENT '餐桌ID',
  `time` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='呼叫记录';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_assess')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `img` text NOT NULL,
  `stars` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `state` int(11) NOT NULL COMMENT '1.未回复2.已回复',
  `order_id` int(11) NOT NULL,
  `hf` text NOT NULL,
  `hf_time` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_formid')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `time` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1' COMMENT '1.未使用2.已使用',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_sms')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `appkey` varchar(100) NOT NULL,
  `wm_tid` int(11) NOT NULL,
  `dn_tid` int(11) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `store_id` int(11) NOT NULL,
  `is_wm` int(11) NOT NULL DEFAULT '2',
  `is_dn` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_drorder')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_rzqx')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `days` int(11) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_rzlog')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `store_id` int(11) NOT NULL COMMENT '门店ID',
  `money` decimal(10,2) NOT NULL COMMENT '钱',
  `time` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `note` varchar(30) NOT NULL COMMENT '入驻'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='入驻记录';"
);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_integral')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `score` int(11) NOT NULL COMMENT '分数',
  `type` int(4) NOT NULL COMMENT '1加,2减',
  `order_id` int(11) NOT NULL COMMENT '订单id',
  `cerated_time` datetime NOT NULL COMMENT '创建时间',
  `uniacid` varchar(50) NOT NULL,
  `note` varchar(20) NOT NULL COMMENT '备注'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='入驻记录';"
);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_jfgoods')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '名称',
  `img` varchar(100) NOT NULL,
  `money` int(11) NOT NULL COMMENT '价格',
  `type_id` int(11) NOT NULL COMMENT '分类id',
  `goods_details` text NOT NULL,
  `process_details` text NOT NULL,
  `attention_details` text NOT NULL,
  `number` int(11) NOT NULL COMMENT '数量',
  `time` varchar(50) NOT NULL COMMENT '期限',
  `is_open` int(11) NOT NULL COMMENT '1.开启2关闭',
  `type` int(11) NOT NULL COMMENT '1.余额2.实物',
  `num` int(11) NOT NULL COMMENT '排序',
  `uniacid` int(11) NOT NULL,
  `hb_moeny` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='入驻记录';"
);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_jfrecord')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `good_id` int(11) NOT NULL COMMENT '商品id',
  `time` varchar(20) NOT NULL COMMENT '兑换时间',
  `user_name` varchar(20) NOT NULL COMMENT '用户地址',
  `user_tel` varchar(20) NOT NULL COMMENT '用户电话',
  `address` varchar(200) NOT NULL COMMENT '地址',
  `note` varchar(20) NOT NULL,
  `integral` int(11) NOT NULL COMMENT '积分',
  `good_name` varchar(50) NOT NULL COMMENT '商品名称',
  `good_img` varchar(100) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '2' COMMENT '1.未处理 2.已处理'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='入驻记录';"
);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_jftype')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='入驻记录';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_retail')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_tel` varchar(20) NOT NULL,
  `state` int(11) NOT NULL COMMENT '1.审核中2.通过3.拒绝',
  `uniacid` int(11) NOT NULL,
  `sh_time` int(11) NOT NULL COMMENT '审核时间'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='分销申请';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_fxset')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fx_details` text NOT NULL COMMENT '分销商申请协议',
  `tx_details` text NOT NULL COMMENT '佣金提现协议',
  `is_fx` int(11) NOT NULL COMMENT '1.一级分销,2二级分销',
  `is_ej` int(11) NOT NULL COMMENT '是否开启二级分销1.是2.否',
  `is_type` int(11) NOT NULL COMMENT '1.开启2.关闭(分类佣金)',
  `tx_rate` int(11) NOT NULL COMMENT '提现手续费',
  `dn_yj` varchar(10) NOT NULL COMMENT '店内一级佣金',
  `dn_ej` varchar(10) NOT NULL COMMENT '店内二级佣金',
  `wm_yj` varchar(10) NOT NULL COMMENT '外卖一级',
  `wm_ej` varchar(10) NOT NULL COMMENT '外卖二级',
  `tx_money` int(11) NOT NULL COMMENT '提现门槛',
  `img` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `is_open` int(11) NOT NULL DEFAULT '1' COMMENT '1.开启2关闭',
  `instructions` text NOT NULL COMMENT '分销商说明',
  `fx_name` varchar(30) NOT NULL DEFAULT '分销中心'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_commission_withdrawal')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `state` int(11) NOT NULL COMMENT '1.审核中2.通过3.拒绝',
  `time` int(11) NOT NULL COMMENT '申请时间',
  `sh_time` int(11) NOT NULL COMMENT '审核时间',
  `uniacid` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `account` varchar(100) NOT NULL,
  `tx_cost` decimal(10,2) NOT NULL COMMENT '提现金额',
  `sj_cost` decimal(10,2) NOT NULL COMMENT '实际到账金额'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='佣金提现';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_fxuser')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `user_id` int(11) NOT NULL COMMENT '一级分销',
  `fx_user` int(11) NOT NULL COMMENT '二级分销',
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_earnings')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `order_id` int(11) NOT NULL COMMENT '订单ID',
  `user_id` int(11) NOT NULL,
  `son_id` int(11) NOT NULL COMMENT '下线',
  `money` decimal(10,2) NOT NULL,
  `time` int(11) NOT NULL,
  `note` varchar(50) NOT NULL COMMENT '备注',
  `state` int(4) NOT NULL COMMENT '佣金状态,1冻结,2有效,3无效',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='佣金收益表';"
);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_hyqx')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `days` int(11) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_czhd')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `full` int(11) NOT NULL,
  `reduction` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_czorder')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `money` decimal(10,2) NOT NULL,
  `money2` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `state` int(11) NOT NULL COMMENT '1.待支付2.已支付',
  `code` varchar(100) NOT NULL,
  `form_id` varchar(100) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_qbmx')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `money` decimal(10,2) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1.加2减',
  `note` varchar(20) NOT NULL COMMENT '备注',
  `time` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_hyorder')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `day` int(11) NOT NULL COMMENT '开通号数',
  `month` int(11) NOT NULL COMMENT '开通期限',
  `time` varchar(20) NOT NULL COMMENT '开通时间',
  `pay_type` int(11) NOT NULL COMMENT '1.微信2.余额',
  `state` int(11) NOT NULL COMMENT '1.待支付2.已支付',
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_cptj')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `img` varchar(500) NOT NULL,
  `details` text NOT NULL,
  `content` varchar(100) NOT NULL,
  `src` varchar(100) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_message2')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `note` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `fs_time` varchar(20) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `src` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_qgtype')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `num` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_qgorder')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `order_num` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_tel` varchar(20) NOT NULL,
  `store_id` int(11) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `good_id` int(11) NOT NULL,
  `pay_type` int(11) NOT NULL COMMENT '1.微信支付2.余额支付',
  `state` int(11) NOT NULL COMMENT '1.待支付2已支付3.已核销',
  `dq_time` varchar(20) NOT NULL COMMENT '到期时间',
  `uniacid` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `good_name` varchar(20) NOT NULL,
  `good_logo` varchar(200) NOT NULL,
  `pay_time` varchar(20) NOT NULL,
  `hx_time` varchar(20) NOT NULL,
  `del` int(11) NOT NULL DEFAULT '2' COMMENT '1删除2.未删除',
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_qggoods')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `name` varchar(20) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL COMMENT '原价',
  `money` decimal(10,2) NOT NULL COMMENT '现价',
  `number` int(11) NOT NULL COMMENT '数量',
  `surplus` int(11) NOT NULL COMMENT '剩余',
  `content` varchar(100) NOT NULL,
  `start_time` varchar(20) NOT NULL COMMENT '开始时间',
  `end_time` varchar(20) NOT NULL COMMENT '结束时间',
  `consumption_time` int(11) NOT NULL COMMENT '消费截止时间',
  `details` text NOT NULL,
  `store_id` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1' COMMENT '1.上架2.下架',
  `type_id` int(11) NOT NULL,
  `img` text NOT NULL,
  `num` int(11) NOT NULL,
  `hot` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_group')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `store_id` int(11) NOT NULL COMMENT '门店id',
  `goods_id` int(11) NOT NULL COMMENT '商品ID',
  `goods_logo` varchar(255) NOT NULL,
  `goods_name` varchar(255) NOT NULL COMMENT '商品名称',
  `kt_num` int(11) NOT NULL COMMENT '开团人数',
  `yg_num` int(11) NOT NULL COMMENT '已购数量',
  `kt_time` int(11) NOT NULL COMMENT '开团时间',
  `dq_time` int(11) NOT NULL COMMENT '到期时间',
  `state` int(4) NOT NULL COMMENT '1.拼团中2成功,3失败',
  `user_id` int(11) NOT NULL COMMENT '团长user_id',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_groupgoods')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `store_id` int(11) NOT NULL COMMENT '门店id',
  `type_id` int(11) NOT NULL COMMENT '分类ID',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `logo` varchar(255) NOT NULL COMMENT 'logo',
  `img` text NOT NULL COMMENT '多图',
  `inventory` int(11) NOT NULL COMMENT '库存',
  `pt_price` decimal(10,2) NOT NULL COMMENT '拼团价格',
  `y_price` decimal(10,2) NOT NULL COMMENT '原价',
  `dd_price` decimal(10,2) NOT NULL COMMENT '单独购买价格',
  `ycd_num` int(11) NOT NULL COMMENT '已成团数量',
  `ysc_num` int(11) NOT NULL COMMENT '已售出数量',
  `people` int(11) NOT NULL COMMENT '成团人数',
  `start_time` int(11) NOT NULL COMMENT '开始时间',
  `end_time` int(11) NOT NULL COMMENT '结束时间',
  `xf_time` int(11) NOT NULL COMMENT '消费截止时间',
  `is_shelves` int(4) NOT NULL DEFAULT '1' COMMENT '1上架,2下架',
  `details` text NOT NULL COMMENT '商品详情',
  `num` int(11) NOT NULL COMMENT '排序',
  `display` int(4) NOT NULL DEFAULT '1' COMMENT '1显示,2隐藏',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_grouphx')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `store_id` int(11) NOT NULL COMMENT '门店id',
  `hx_id` int(11) NOT NULL COMMENT '核销人id',
  `time` int(11) NOT NULL COMMENT '时间',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='核销表';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_grouporder')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `group_id` int(11) NOT NULL COMMENT '团id',
  `store_id` int(11) NOT NULL COMMENT '门店id',
  `goods_id` int(11) NOT NULL COMMENT '商品ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `order_num` varchar(30) NOT NULL COMMENT '订单号',
  `logo` varchar(255) NOT NULL COMMENT '商品图片',
  `goods_name` varchar(255) NOT NULL COMMENT '商品名称',
  `goods_type` varchar(50) NOT NULL COMMENT '商品类型',
  `price` decimal(10,2) NOT NULL COMMENT '单价',
  `goods_num` int(11) NOT NULL COMMENT '商品数量',
  `money` decimal(10,2) NOT NULL COMMENT '订单金额',
  `pay_type` int(4) NOT NULL COMMENT '付款方式1微信，2余额',
  `receive_name` varchar(30) NOT NULL COMMENT '收货人',
  `receive_tel` varchar(20) NOT NULL COMMENT '收货人电话',
  `receive_address` varchar(100) NOT NULL COMMENT '收货人地址',
  `note` varchar(100) NOT NULL COMMENT '备注',
  `state` int(4) NOT NULL COMMENT '1未付款,2已付款,3已完成,4已关闭,5已失效',
  `xf_time` int(11) NOT NULL COMMENT '消费截止时间',
  `time` int(11) NOT NULL COMMENT '下单时间',
  `pay_time` int(11) NOT NULL COMMENT '付款时间',
  `cz_time` int(11) NOT NULL COMMENT '完成/关闭/失效时间',
  `code` varchar(30) NOT NULL COMMENT '支付商户号',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_grouptype')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='拼团分类';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_llz')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `src` varchar(100) NOT NULL,
  `cityname` varchar(20) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='拼团分类';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_reservation')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `store_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '门店',
  `time` varchar(200) NOT NULL DEFAULT '' COMMENT '预定时间',
  `label` varchar(50) NOT NULL DEFAULT '' COMMENT '标签',
  `num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `uniacid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属帐号'
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_service')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `store_id` int(11) NOT NULL COMMENT '门店id',
  `pid` int(11) NOT NULL COMMENT '父ID',
  `num` int(11) NOT NULL COMMENT '排序',
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '时间',
  `dateline` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='送达时间表';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_number')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `store_id` int(11) NOT NULL COMMENT '商家ID',
  `code` varchar(10) NOT NULL COMMENT '编号',
  `num` varchar(30) NOT NULL COMMENT '餐桌名称',
  `people` int(4) NOT NULL COMMENT '就餐人数',
  `state` int(4) NOT NULL COMMENT '1排队,2用餐,3作废',
  `time` datetime NOT NULL COMMENT '时间',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='排队取号';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_numbertype')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `store_id` int(11) NOT NULL,
  `typename` varchar(30) NOT NULL COMMENT '分类名称',
  `sort` int(4) NOT NULL COMMENT '排序',
  `time` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='排队分类';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_continuous')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `day` int(11) NOT NULL COMMENT '天数',
  `integral` int(11) NOT NULL COMMENT '积分',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='连签奖励';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_signlist')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` varchar(20) NOT NULL COMMENT '签到时间',
  `integral` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `time2` int(11) NOT NULL,
  `time3` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='签到列表';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_signset')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `one` int(11) NOT NULL COMMENT '首次奖励积分',
  `integral` int(11) NOT NULL COMMENT '每天签到积分',
  `is_open` int(11) NOT NULL COMMENT '1.开启2.关闭  签到',
  `is_bq` int(11) NOT NULL COMMENT '1.开启2.关闭  补签',
  `bq_integral` int(11) NOT NULL COMMENT '补签扣除积分',
  `details` text NOT NULL COMMENT '签到说明',
  `uniacid` int(11) NOT NULL,
  `qd_img` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"
);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_special')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `day` varchar(20) NOT NULL COMMENT '日期',
  `integral` int(11) NOT NULL COMMENT '积分',
  `title` varchar(20) NOT NULL COMMENT '标题说明',
  `color` varchar(20) NOT NULL COMMENT '颜色',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='特殊日期签到';"
);
pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_collection')."(
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `state` int(4) NOT NULL COMMENT '1收藏,2取消',
  `time` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='门店收藏表';"
);

if (!pdo_fieldexists(tablename('cjdc_system'), 'gs_img')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `gs_img` TEXT NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'gs_details')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `gs_details` TEXT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'gs_tel')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `gs_tel` varchar(200) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'gs_time')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `gs_time` varchar(50) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'gs_add')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `gs_add` varchar(200) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'gs_zb')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `gs_zb` varchar(50) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'is_brand')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `is_brand` int NOT NULL  DEFAULT '2';");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'is_brand')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_brand` int NOT NULL  DEFAULT '1';");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'kfw_appid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `kfw_appid` VARCHAR(50) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'kfw_appsecret')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `kfw_appsecret` VARCHAR(50) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'fl_more')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `fl_more` int NOT NULL  DEFAULT '1';");
}

if (!pdo_fieldexists(tablename('cjdc_order'), 'yhq_money')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `yhq_money` DECIMAL(10,2) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_order'), 'coupon_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `coupon_id` INT NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_order'), 'yhq_money2')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `yhq_money2` DECIMAL(10,2) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_order'), 'coupon_id2')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `coupon_id2` INT NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'tx_zdmoney')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `tx_zdmoney` DECIMAL(10,2) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'tx_notice')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `tx_notice` TEXT NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_goods'), 'is_new')) {
    pdo_query("ALTER TABLE".tablename('cjdc_goods')." ADD `is_new` INT NOT NULL  DEFAULT '2';");
}
if (!pdo_fieldexists(tablename('cjdc_goods'), 'is_tj')) {
    pdo_query("ALTER TABLE".tablename('cjdc_goods')." ADD `is_tj` INT NOT NULL  DEFAULT '2';");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'top_style')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `top_style` INT NOT NULL  DEFAULT '1';");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'info_style')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `info_style` INT NOT NULL  DEFAULT '1';");
}
if (!pdo_fieldexists(tablename('cjdc_shopcar'), 'son_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_shopcar')." ADD `son_id` INT NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_shopcar'), 'type')) {
    pdo_query("ALTER TABLE".tablename('cjdc_shopcar')." ADD `type` INT NOT NULL DEFAULT '1';");
}

if (!pdo_fieldexists(tablename('cjdc_order'), 'table_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `table_id` INT NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_order'), 'dn_state')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `dn_state` INT NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'yysm')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `yysm` VARCHAR(20) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'wmsm')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `wmsm` VARCHAR(20) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'dnsm')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `dnsm` VARCHAR(20) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'sysm')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `sysm` VARCHAR(20) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'jj_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `jj_tid` VARCHAR(200) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_message'), 'tk_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `tk_tid` VARCHAR(200) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_wxzf')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_wxzf` INT NOT NULL DEFAULT '1';");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'print_mode')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `print_mode` INT(4) NOT NULL DEFAULT '1';");
}

if (!pdo_fieldexists(tablename('cjdc_calllog'), 'state')) {
    pdo_query("ALTER TABLE".tablename('cjdc_calllog')." ADD `state` INT(4) NOT NULL DEFAULT '2';");
}

if (!pdo_fieldexists(tablename('cjdc_order'), 'dm_state')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `dm_state` INT(4) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'is_mdrz')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_mdrz` INT(4) NOT NULL DEFAULT '1' ;");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'md_sh')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `md_sh` INT(4) NOT NULL DEFAULT '1' ;");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'md_sf')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `md_sf` INT(4) NOT NULL DEFAULT '1' ;");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'state')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `state` INT(4) NOT NULL DEFAULT '2' ;");
}
if (!pdo_fieldexists(tablename('cjdc_store'), 'rz_time')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `rz_time` VARCHAR(10) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'rzdq_time')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `rzdq_time` VARCHAR(20) NOT NULL DEFAULT '2020-06-08' ;");
}


if (!pdo_fieldexists(tablename('cjdc_store'), 'sq_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `sq_id` INT(11) NOT NULL DEFAULT '0';");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'zm_img')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `zm_img` VARCHAR(255) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'fm_img')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `fm_img` VARCHAR(255) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'zf_state')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `zf_state` INT(4) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'code')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `code`  VARCHAR(50) NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_store'), 'link_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `link_name`  VARCHAR(20) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'link_tel')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `link_tel`  VARCHAR(20) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'rz_details')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `rz_details`  TEXT NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'rzsh_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `rzsh_tid`  VARCHAR(60) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'rzcg_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `rzcg_tid`  VARCHAR(60) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'rzjj_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `rzjj_tid`  VARCHAR(60) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'sq_time')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `sq_time`  DATETIME NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'rz_title')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `rz_title`  VARCHAR(100) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'rz_ms')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `rz_ms`  TEXT NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_drorder'), 'order_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_drorder')." ADD `order_id`  int NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_shopcar'), 'dr_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_shopcar')." ADD `dr_id`  int NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_order_goods'), 'is_jc')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order_goods')." ADD `is_jc`  int NOT NULL DEFAULT '2';");
}
if (!pdo_fieldexists(tablename('cjdc_order'), 'yy_state')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `yy_state`  int NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_yydc')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_yydc`  int NOT NULL DEFAULT '1';");
}
if (!pdo_fieldexists(tablename('cjdc_order'), 'deposit')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `deposit`  DECIMAL(10,2) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_sms'), 'yy_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_sms')." ADD `yy_tid`  int NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_sms'), 'is_yy')) {
    pdo_query("ALTER TABLE".tablename('cjdc_sms')." ADD `is_yy`  int NOT NULL DEFAULT '2';");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'money')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `money`  DECIMAL(10,2) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_goods'), 'restrict_num')) {
    pdo_query("ALTER TABLE".tablename('cjdc_goods')." ADD `restrict_num`  int NOT NULL;");
}
if (!pdo_fieldexists(tablename('cjdc_goods'), 'start_num')) {
    pdo_query("ALTER TABLE".tablename('cjdc_goods')." ADD `start_num`  int NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_order'), 'ship_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `ship_id`  VARCHAR(30) NOT NULL;");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'countdown')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `countdown`  int NOT NULL  DEFAULT '3';");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'distance')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `distance`  int NOT NULL DEFAULT '10000';");
}

if (!pdo_fieldexists(tablename('cjdc_storetype'), 'dn_poundage')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storetype')." ADD `dn_poundage`  VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_storetype'), 'dm_poundage')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storetype')." ADD `dm_poundage`  VARCHAR(20) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storetype'), 'yd_poundage')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storetype')." ADD `yd_poundage`  VARCHAR(20) NOT NULL");
}


if (!pdo_fieldexists(tablename('cjdc_store'), 'admin_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `admin_id`  int NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'integral')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `integral`  int NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'integral2')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `integral2`  int NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'is_jf')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_jf`  int NOT NULL  DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_fxset'), 'type')) {
    pdo_query("ALTER TABLE".tablename('cjdc_fxset')." ADD `type`  INT(4) NOT NULL DEFAULT '1'");
}



if (!pdo_fieldexists(tablename('cjdc_store'), 'is_mp3')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `is_mp3`  INT(1) NOT NULL DEFAULT '2'");
}
if (!pdo_fieldexists(tablename('cjdc_store'), 'is_video')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `is_video`  INT(1) NOT NULL DEFAULT '2'");
}
if (!pdo_fieldexists(tablename('cjdc_store'), 'store_mp3')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `store_mp3` VARCHAR(1000) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_store'), 'store_video')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `store_video` VARCHAR(1000) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'fx_title')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `fx_title` VARCHAR(200) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_ps')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_ps` INT(1) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'is_hy')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_hy` INT(1) NOT NULL DEFAULT '2'");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'hygn')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `hygn` INT(1) NOT NULL DEFAULT '2'");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'hy_discount')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `hy_discount` INT(11) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'hy_details')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `hy_details` TEXT NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'kt_details')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `kt_details` TEXT NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_message'), 'cz_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `cz_tid` VARCHAR(100) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'cz_notice')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `cz_notice` TEXT NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_user'), 'dq_time')) {
    pdo_query("ALTER TABLE".tablename('cjdc_user')." ADD `dq_time` VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_hyorder'), 'user_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_hyorder')." ADD `user_name` VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_hyorder'), 'user_tel')) {
    pdo_query("ALTER TABLE".tablename('cjdc_hyorder')." ADD `user_tel` VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_user'), 'user_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_user')." ADD `user_name` VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_user'), 'user_tel')) {
    pdo_query("ALTER TABLE".tablename('cjdc_user')." ADD `user_tel` VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_user'), 'hy_day')) {
    pdo_query("ALTER TABLE".tablename('cjdc_user')." ADD `hy_day` INT NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_order'), 'zk_money')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `zk_money` decimal(10,2) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'is_cz')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_cz` INT(1) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'hy_note')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `hy_note` TEXT NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_coupons'), 'is_hy')) {
    pdo_query("ALTER TABLE".tablename('cjdc_coupons')." ADD `is_hy` INT(1) NOT NULL DEFAULT '2'");
}
if (!pdo_fieldexists(tablename('cjdc_coupons'), 'day')) {
    pdo_query("ALTER TABLE".tablename('cjdc_coupons')." ADD `day` INT(11) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'is_yuepay')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_yuepay` INT(11) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'ps_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `ps_name` VARCHAR(30) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_dd')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_dd` INT(11) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_order'), 'is_dd')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `is_dd` INT(11) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'is_tzms')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_tzms` INT(11) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_cj')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_cj` INT(11) NOT NULL DEFAULT '1'");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'cj_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `cj_name` VARCHAR(20) NOT NULL DEFAULT '餐具用量'");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'wmps_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `wmps_name` VARCHAR(20) NOT NULL DEFAULT '外卖配送'");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_czztpd')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_czztpd` INT(11) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'is_wx')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_wx` INT(4) NOT NULL DEFAULT '1'");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'is_yhk')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_yhk` INT(4) NOT NULL DEFAULT '1'");
}


if (!pdo_fieldexists(tablename('cjdc_withdrawal'), 'yhk_num')) {
    pdo_query("ALTER TABLE".tablename('cjdc_withdrawal')." ADD `yhk_num` VARCHAR(20) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_withdrawal'), 'tel')) {
    pdo_query("ALTER TABLE".tablename('cjdc_withdrawal')." ADD `tel` VARCHAR(20) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_withdrawal'), 'yh_info')) {
    pdo_query("ALTER TABLE".tablename('cjdc_withdrawal')." ADD `yh_info` VARCHAR(100) NOT NULL");
}


if (!pdo_fieldexists(tablename('cjdc_system'), 'is_sj')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_sj` INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'is_dada')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_dada` INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'is_kfw')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_kfw` INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'is_pt')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_pt` INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'ps_poundage')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `ps_poundage` VARCHAR(10) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_message'), 'xdd_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `xdd_tid` VARCHAR(200) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'qrcode')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `qrcode` VARCHAR(300) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_message'), 'xdd_tid2')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `xdd_tid2` VARCHAR(200) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_account'), 'authority')) {
    pdo_query("ALTER TABLE".tablename('cjdc_account')." ADD `authority` TEXT NOT NULL");
}


if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_dcyhq')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_dcyhq` INT(4) NOT NULL DEFAULT '1'");
}
if (!pdo_fieldexists(tablename('cjdc_message'), 'qf_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `qf_tid` VARCHAR(200) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_pt')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_pt` INT(4) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_order'), 'pt_info')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `pt_info` TEXT NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'qg_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `qg_name` VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'qgsm')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `qgsm` VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'qg_img')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `qg_img` VARCHAR(200) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_qg')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_qg` INT(4) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'pt_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `pt_name` VARCHAR(20) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'ptsm')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `ptsm` VARCHAR(100) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'pt_img')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `pt_img` VARCHAR(200) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_qggoods'), 'state2')) {
    pdo_query("ALTER TABLE".tablename('cjdc_qggoods')." ADD `state2` INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_groupgoods'), 'introduction')) {
    pdo_query("ALTER TABLE".tablename('cjdc_groupgoods')." ADD `introduction`  TEXT NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_qggoods'), 'time')) {
    pdo_query("ALTER TABLE".tablename('cjdc_qggoods')." ADD `time`  VARCHAR(20) NOT NULL");
}


if (!pdo_fieldexists(tablename('cjdc_groupgoods'), 'time')) {
    pdo_query("ALTER TABLE".tablename('cjdc_groupgoods')." ADD `time`  INT(11) NOT NULL DEFAULT '1532425107'");
}

if (!pdo_fieldexists(tablename('cjdc_fxset'), 'is_check')) {
    pdo_query("ALTER TABLE".tablename('cjdc_fxset')." ADD `is_check`  INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_ydtime')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_ydtime`  INT(4) NOT NULL DEFAULT '1'");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'sh_time')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `sh_time`  INT(4) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_yyzw')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_yyzw`  INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'pd_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `pd_name`  VARCHAR(30) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'pdsm')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `pdsm`  VARCHAR(100) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'pd_img')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `pd_img`  VARCHAR(255) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_storeset'), 'is_pd')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `is_pd`  INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'ptgn')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `ptgn`  INT(4) NOT NULL DEFAULT '1'");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'qggn')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `qggn`  INT(4) NOT NULL DEFAULT '1'");
}


if (!pdo_fieldexists(tablename('cjdc_system'), 'is_zb')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_zb`  INT(4) NOT NULL DEFAULT '1'");
}
if (!pdo_fieldexists(tablename('cjdc_system'), 'is_qg')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_qg`  INT(4) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'item')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `item`  INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'appid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `appid`  VARCHAR(20) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'tx_appkey')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `tx_appkey`  VARCHAR(50) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'template_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `template_id`  VARCHAR(10) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'sign')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `sign`  VARCHAR(200) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_message'), 'code')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `code`  VARCHAR(10) NOT NULL DEFAULT '86'");
}

if (!pdo_fieldexists(tablename('cjdc_dyj'), 'xx_sn')) {
    pdo_query("ALTER TABLE".tablename('cjdc_dyj')." ADD `xx_sn`  VARCHAR(10) NOT NULL ");
}
if (!pdo_fieldexists(tablename('cjdc_message'), 'qh_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `qh_tid`  VARCHAR(100) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_qggoods'), 'qg_num')) {
    pdo_query("ALTER TABLE".tablename('cjdc_qggoods')." ADD `qg_num` INT(4) NOT NULL DEFAULT '1'");
}
if (!pdo_fieldexists(tablename('cjdc_qggoods'), 'type')) {
    pdo_query("ALTER TABLE".tablename('cjdc_qggoods')." ADD `type` INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_order_goods'), 'is_qg')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order_goods')." ADD `is_qg` INT(4) NOT NULL DEFAULT '2'");
}
if (!pdo_fieldexists(tablename('cjdc_shopcar'), 'is_qg')) {
    pdo_query("ALTER TABLE".tablename('cjdc_shopcar')." ADD `is_qg` INT(4) NOT NULL DEFAULT '2'");
}
if (!pdo_fieldexists(tablename('cjdc_shopcar'), 'qg_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_shopcar')." ADD `qg_name` VARCHAR(20) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_shopcar'), 'qg_logo')) {
    pdo_query("ALTER TABLE".tablename('cjdc_shopcar')." ADD `qg_logo` VARCHAR(500) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_qbmx'), 'order_id')) {
    pdo_query("ALTER TABLE".tablename('cjdc_qbmx')." ADD `order_id` INT(11) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_store'), 'is_select')) {
    pdo_query("ALTER TABLE".tablename('cjdc_store')." ADD `is_select` INT(4) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_order'), 'kfw_info')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `kfw_info` TEXT NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_goods'), 'dn_hymoney')) {
    pdo_query("ALTER TABLE".tablename('cjdc_goods')." ADD `dn_hymoney` DECIMAL(10,2) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_nav'), 'xcx_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_nav')." ADD `xcx_name` VARCHAR(50) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_nav'), 'appid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_nav')." ADD `appid` VARCHAR(30) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_nav'), 'item')) {
    pdo_query("ALTER TABLE".tablename('cjdc_nav')." ADD `item` INT(4) NOT NULL DEFAULT '1'");
}

if (!pdo_fieldexists(tablename('cjdc_nav'), 'src2')) {
    pdo_query("ALTER TABLE".tablename('cjdc_nav')." ADD `src2` VARCHAR(255) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'isyykg')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `isyykg` INT(4) NOT NULL DEFAULT '2'");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'zb_img')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `zb_img` VARCHAR(300) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_order'), 'hb_type')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `hb_type` INT( 4 ) NOT NULL DEFAULT  '1'");
}
if (!pdo_fieldexists(tablename('cjdc_fxset'), 'xx_name')) {
    pdo_query("ALTER TABLE".tablename('cjdc_fxset')." ADD `xx_name` VARCHAR( 50 ) NOT NULL DEFAULT  '我的伙伴'");
}
if (!pdo_fieldexists(tablename('cjdc_storeset'), 'tz_src')) {
    pdo_query("ALTER TABLE".tablename('cjdc_storeset')." ADD `tz_src` INT( 4 ) NOT NULL DEFAULT  '1'");
}
if (!pdo_fieldexists(tablename('cjdc_order'), 'original_money')) {
    pdo_query("ALTER TABLE".tablename('cjdc_order')." ADD `original_money` DECIMAL(10,2) NOT NULL");
}
if (!pdo_fieldexists(tablename('cjdc_message'), 'sjyy_tid')) {
    pdo_query("ALTER TABLE".tablename('cjdc_message')." ADD `sjyy_tid` VARCHAR( 60 ) NOT NULL");
}

if (!pdo_fieldexists(tablename('cjdc_system'), 'is_tj')) {
    pdo_query("ALTER TABLE".tablename('cjdc_system')." ADD `is_tj` INT(4) NOT NULL DEFAULT '1'");
}
pdo_query("ALTER TABLE ".tablename('cjdc_user')." CHANGE `name` `name` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL");
?>