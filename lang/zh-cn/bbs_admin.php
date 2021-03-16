<?php

return array(
	'user'=>'用户',
	'forum'=>'版块',
	'plugin'=>'插件',
	'other'=>'其他',
	'buy'=>'Buy',
	
	'user_admin'=>'用户管理',
	'group_admin'=>'用户组管理',
	'forum_admin'=>'版块管理',
	'post_admin'=>'帖子管理',
	'thread_admin'=>'主题管理',
	'plugin_admin'=>'插件管理',
	'other_admin'=>'其他管理',
	
	'admin_index_page'=>'后台',
	'front_index_page'=>'前台',
	'admin_site_setting'=>'站点设置',
	'admin_setting_base'=>'基本设置',
	'admin_setting_smtp'=>'SMTP 设置',
	'admin_other_cache'=>'清理缓存',
	'admin_clear_tmp'=>'清理临时目录',
	'admin_clear_cache'=>'清理缓存',
	'admin_clear_successfully'=>'清理成功',
	
	'admin_user_list'=>'用户列表',
	'admin_thread_batch'=>'主题批量管理',
	'admin_user_group'=>'用户组',
	'admin_user_create'=>'创建用户',
	'admin_plugin_local_list'=>'本地插件',
	'admin_plugin_official_list'=>'官方插件',
	'admin_plugin_official_free_list'=>'免费插件',
	'admin_plugin_official_fee_list'=>'收费插件',
	
	'admin_token_error'=>'管理令牌错误，可能因为您的网络环境不稳定，可以尝试取消后台绑定 IP，配置 conf.php，admin_bind_ip => 0 ',
	'admin_token_expiry'=>'管理登陆令牌失效，请重新登录',
	'forum_edit'=>'版块编辑',
	'user_edit'=>'用户编辑',
	'edit_sucessfully'=>'编辑成功',
	'item_not_exists'=>'{item} 不存在',
	'item_not_moderator'=>'{item} 不是版主',
	'group_not_exists'=>'用户组不存在',
	
	'admin_login'=>'管理登陆',
	'save_conf_failed'=>'保存数据到配置文件 {file} 失败，请检查文件的可写权限',
	'user_already_exists'=>'用户已经存在',
	'email_already_exists'=>'邮箱已经存在',
	'uid_not_exists'=>'指定的 UID 不存在',
	'data_not_changed'=>'没有数据变动',
	'admin_cant_be_deleted'=>'不能直接删除管理员，请先编辑为普通用户组',
	
	// 首页
	'admin_index'=>'后台首页',
	'site_stat_info'=>'站点统计信息',
	'disk_free_space'=>'磁盘剩余空间',
	'server_info'=>'服务器信息',
	'os'=>'操作系统',
	'post_max_size'=>'最大 POST 数据大小',
	'upload_max_filesize'=>'最大文件上传大小',
	'allow_url_fopen'=>'允许开启远程 URL',
	'safe_mode'=>'安全模式（safe_mode）',
	'max_execution_time'=>'最长执行时间',
	'memory_limit'=>'内存上限',
	'client_ip'=>'客户端 IP',
	'server_ip'=>'服务端 IP',
	'dev_team_info'=>'开发团队信息',
	
	'for_safe_input_password_again'=>'为了您的安全，请再次输入账户密码',
	
	// 设置
	'sitename'=>'站点名称',
	'sitebrief'=>'站点介绍',
	'sitebrief_tips'=>'注：支持 HTML 标签，换行请使用 &lt;br&gt;',
	'runlevel'=>'站点访问限制',
	'user_create_on'=>'开启用户注册',
	'user_create_email_on'=>'开启注册邮箱验证',
	'user_resetpw_on'=>'开启找回密码',
	'lang'=>'语言',
	'database'=>'数据库',
	'host'=>'主机',
	'port'=>'端口',
	'account'=>'账号',
	'smtp_host'=>'SMTP 主机',
	'url_rewrite_on'=>'开启伪静态',
	'url_rewrite_on_tip'=>'伪静态设置教程',
	'cdn_on'=>'开启CDN',
	'pagesize'=>'主题列表每页条数',
	'postlist_pagesize'=>'回复列表每页条数',

	// 版块
	'forum_list'=>'版块列表',
	'forum_id'=>'版块 ID',
	'forum_icon'=>'图标',
	'forum_name'=>'名称',
	'forum_rank'=>'排序',
	'forum_edit'=>'编辑',
	'forum_delete'=>'删除',
	'forum_brief'=>'简介',
	'forum_announcement'=>'公告',
	'moderator'=>'版主',
	'add_new_line'=>'增加一行',
	'forum_edit_tip'=>'请谨慎编辑版块，一旦确定后不要轻易变动，否则可能会导致数据关联错误，一般在正式运营时就不要再变动。',
	'forum_cant_delete_system_reserved'=>'不能删除系统保留的版块。',
	'forum_moduid_format_tips'=>'最多允许10个，逗号隔开，如：Jack,Lisa,Mike',
	'user_privilege'=>'用户权限',
	'allow_view'=>'允许看帖',
	'allow_thread'=>'发主题',
	'allow_post'=>'回贴',
	'allow_upload'=>'上传',
	'allow_download'=>'下载',
	'forum_delete_thread_before_delete_forum'=>'请先通过批量主题管理删除版块主题。',
	'forum_please_delete_sub_forum'=>'请删除子版块。',
	'forum_delete_successfully'=>'删除成功。',
	
	// 主题
	'thread_queue_not_exists'=>'队列不存在',
	'search_condition'=>'搜索条件',
	'start_date'=>'开始时间',
	'end_date'=>'结束时间',
	'searching'=>'正在搜索',
	'search_complete'=>'搜索完成',
	'operating'=>'正在操作',
	'operator_complete'=>'操作完成',
	'click_to_view'=>'点击查看',
	'thread_userip'=>'发帖 IP',
	'thread_search_result'=>'结果：{n} 条',
	
	// 用户
	'please_check_delete_user'=>'请勾选您要删除的用户',
	'user_delete_confirm'=>'确定删除用户？',
	'user_admin_cant_be_deleted'=>'不允许删除管理员用户，如果确实要删除，请先调整用户组!',
	'search_type'=>'搜索类型',
	'user_privileges'=>'用户权限',
	'author'=>'作者',
	
	// 用户组
	'group_list'=>'用户组列表',
	'group_edit'=>'用户组编辑',
	'group_id'=>'用户组 ID',
	'group_name'=>'用户组名',
	'group_credits_from'=>'起始积分',
	'group_credits_to'=>'结束积分',
	'group_id'=>'用户组ID',	'group_edit_tips'=>'请谨慎编辑用户组，一旦确定后不要轻易变动，否则可能会导致用户关联错误，一般在正式运营时就不要再变动。',
	'admin_privilege'=>'管理权限',
	'top'=>'置顶',
	'ban_user'=>'禁止用户',
	'delete_user'=>'删除用户',
	'view_user_info'=>'查看用户信息',
	
	// 插件
	'plugin_dir'=>'插件目录名',
	'plugin_bbs_version'=>'要求 BBS 最低版本',
	'price'=>'价格',
	'installs'=>'安装次数',
	'plugin_user_stars_fmt'=>'用户评级',
	'plugin_sells'=>'销售次数',
	'plugin_is_cert'=>'通过官方认证',
	'local_plugin'=>'本地插件',
	'official_plugin'=>'官方插件',
	'pugin_cate_0'=>'所有插件',
	'pugin_cate_1'=>'风格模板',
	'pugin_cate_2'=>'小型插件',
	'pugin_cate_3'=>'大型插件',
	'pugin_cate_4'=>'接口整合',
	'pugin_cate_99'=>'未分类',
	'plugin_detail'=>'插件详情',
	'plugin_brief_url'=>'插件介绍网址',
	'plugin_not_exists'=>'插件不存在',
	'plugin_versio_not_match'=>'此插件依赖的 Xiuno BBS 最低版本为 {bbs_version} ，您当前的版本：{version}',
	'plugin_download_sucessfully'=>'下载插件 ({dir}) 成功，请点击进行安装',
	'plugin_install_sucessfully'=>'安装插件 ( {name} ) 成功',
	'plugin_unstall_sucessfully'=>'卸载插件 ( {name} ) 成功，要彻底删除插件，请手工删除 {dir} 目录',
	'plugin_enable_sucessfully'=>'启用插件 ( {name} ) 成功',
	'plugin_disable_sucessfully'=>'禁用插件 ( {name} ) 成功',
	'plugin_upgrade_sucessfully'=>'升级插件 ( {name} ) 成功',
	'plugin_not_need_update'=>'已经是最新版本，无需更新',
	'plugin_set_relatied_dir_writable'=>'在安装插件目录期间，请设置：{dir} 和文件为可写',
	'plugin_dependency_following'=>'依赖以下插件：{s}，请先安装依赖的插件',
	'plugin_being_dependent_cant_delete'=>'不能删除 {name}，以下插件依赖它：{s}',
	'server_response_empty'=>'服务器返回数据为空',
	'server_response_error'=>'服务器返回数据有错',
	'zip_data_error'=>'压缩包数据有误',
	'format_maybe_error'=>'格式可能不正确',
	'plugin_maybe_download_failed'=>'插件可能下载失败，目录不存在:',
	'plugin_name_error'=>'插件名不合法',
	'plugin_unstall_confirm_tips'=>'卸载会清理该插件相关数据，确定卸载 ( {name} ) 吗？',
	'plugin_task_locked'=>'另外一个插件任务正在执行，当前任务被锁住。',
	'plugin_return_data_error'=>'返回数据有误：',
	'plugin_is_free'=>'该插件免费。',
	'plugin_is_not_free'=>'该插件需要付费购买，请先支付。',
	'plugin_is_bought'=>'已经购买过。',
	'plugin_not_bought'=>'还没购买过。',
	'plugin_wechat_qrcode_pay'=>'微信扫码支付。',
	'plugin_service_qq'=>'客服 QQ',
	
	
	// hook lang_zh_cn_bbs_admin.php
	
);

?>