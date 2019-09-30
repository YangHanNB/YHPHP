<?php

class opManagerPluginFrontendRouteCollection extends opManagerPluginBaseRouteCollection {

    protected function generateRoutes() {
        return array(
            //支付营销规则配置
            'manager_trigger_rule_set' => new sfRoute(
                    '/manager/trigger/rule/set', array('module' => 'managerCrm', 'action' => 'setManagerTriggerList')
            ),
            //获取订单详情
            'manager_crm_money_detali' => new sfRoute(
                    '/manager/crm/money/detali/:ids', array('module' => 'managerCrm', 'action' => 'findMoneyDetali')
            ),
            //获取会员余额明细列表
            'manager_crm_mymoney_list' => new sfRoute(
                    '/manager/crm/mymoney/list', array('module' => 'managerCrm', 'action' => 'getMyMoneyList')
            ),
            //获得人员列表JSON
            'manager_member_get' => new sfRoute(
                    '/manager/member/get', array('module' => 'managerUser', 'action' => 'managerMemberGet')
            ),
            //获得客户资料模板
            'manager_member_get_profile_temp' => new sfRoute(
                    '/manager/member/get/profile/temp', array('module' => 'managerCrm', 'action' => 'managerMemberGetProfileTemp')
            ),
            //绑定用户
            'manager_member_contract_op' => new sfRoute(
                    '/manager/member/contract/op', array('module' => 'managerCrm', 'action' => 'opMemberContract')
            ),
            //绑定用户
            'manager_bund_member_for_old' => new sfRoute(
                    '/manager/bund/member/for/old', array('module' => 'managerAuth', 'action' => 'bundMemberForOld')
            ),
            //获得用户头像
            'manager_member_get_member_head_url' => new sfRoute(
                    '/manager/member/get/member/head/url', array('module' => 'managerCrm', 'action' => 'getMemberHeadUrl')
            ),
            //获得指定关系类型好友
            'manager_member_get_member_relation_ship_list' => new sfRoute(
                    '/manager/member/get/member/relation/ship/list', array('module' => 'managerAuth', 'action' => 'getMemberRelationShipList')
            ),
            //好友添加申请
            'manager_member_apply_member_relation_ship' => new sfRoute(
                    '/manager/member/apply/member/relation/ship', array('module' => 'managerAuth', 'action' => 'applyMemberRelationShip')
            ),
            //用户关系操作：新增，删除，拉黑，编辑：取消好友，设置好友申请，激活好友关系，添加关系备注
            'manager_member_set_member_relation_ship' => new sfRoute(
                    '/manager/member/set/member/relation/ship', array('module' => 'managerAuth', 'action' => 'setMemberRelationShip') 
            ),
            //获得企业用户对外展示信息
            'edit_manager_member_get_root_member_info' => new sfRoute(
                    '/manager/member/get/root/member/info/edit', array('module' => 'managerAuth', 'action' => 'editRootMemberInfo')
            ),
            //获得企业用户对外展示信息
            'manager_member_get_root_member_info' => new sfRoute(
                    '/manager/member/get/root/member/info', array('module' => 'managerAuth', 'action' => 'getRootMemberInfo')
            ),
            //绑定并激活根用户，
            'manager_member_active_root_member' => new sfRoute(
                    '/manager/member/active/root/member', array('module' => 'managerAuth', 'action' => 'activeRootMember')
            ),
            //用户储值操作，新增，撤销
            'manager_crm_money_opreate' => new sfRoute(
                    '/manager/crm/money/opreate/:ids', array('module' => 'managerCrm', 'action' => 'userCrmMoneyOpreate')
            ),
            //查看用户储值历史
            'manager_crm_money_list' => new sfRoute(
                    '/manager/crm/money/list/:ids', array('module' => 'managerCrm', 'action' => 'userCrmMoneyList')
            ),
            //查看自己储值消费情况
            'manager_crm_my_money_list' => new sfRoute(
                    '/manager/crm/my/money/list', array('module' => 'managerCrm', 'action' => 'myMoneyList')
            ),
            //用户对自己储值操作：充值等
            'manager_crm_my_money_opreate' => new sfRoute(
                    '/manager/crm/my/money/opreate', array('module' => 'managerCrm', 'action' => 'myMoneyOpreate')
            ),
            //未激活用户列表
            'manager_member_cache_list' => new sfRoute(
                    '/manager/member/cache/page', array('module' => 'managerCrm', 'action' => 'getCacheMemberPager')
            ),
            //导入EXCEL
            'manager_member_cache_import_excel' => new sfRoute(
                    '/manager/member/cache/import/excel', array('module' => 'managerCrm', 'action' => 'importCacheMemberInfo')
            ),
            //显示并保存映射关系，并选择匹配条件
            'manager_member_cache_set_info_map' => new sfRoute(
                    '/manager/member/cache/set/info/map', array('module' => 'managerCrm', 'action' => 'setMemberInfoMap')
            ),
            //检测资料库与导入用户关系，并默认填充为空用户字段，提示用户是否全部覆盖
            'manager_member_cache_check_update_info_map' => new sfRoute(
                    '/manager/member/cache/check/update/info', array('module' => 'managerCrm', 'action' => 'checkAndUpdateMemberInfo')
            ),
            //验证新用户与缓存用户表关系，确认是否自动更新或人工确认
            'manager_member_cache_check_new_member' => new sfRoute(
                    '/manager/member/cache/check/new/member', array('module' => 'managerCrm', 'action' => 'checkNewMemberInfo')
            ),
            //人工确认微信用户与缓存用户中的认证关系，并匹配资料
            'manager_member_cache_comfirm_member_info' => new sfRoute(
                    '/manager/member/cache/comfirm/member/info', array('module' => 'managerCrm', 'action' => 'comfirmMemberInfoFormCache')
            ),
            'manager_member_get_comfirm_for_role_group_info' => new sfRoute(
                    '/manager/member/get/comfirm/for/role/group/info', array('module' => 'managerAuth', 'action' => 'getComfirmMemberForRoleOrGroupInfo')
            ),
            'manager_member_comfirm_for_role_group' => new sfRoute(
                    '/manager/member/comfirm/for/role/group', array('module' => 'managerAuth', 'action' => 'comfirmMemberForRoleOrGroup')
            ),
            'manager_member_active_for_role_group' => new sfRoute(
                    '/manager/member/active/for/role/group', array('module' => 'managerAuth', 'action' => 'activeMemberForRoleOrGroup')
            ),
            'manager_member_active_for_role_group_static' => new sfRoute(
                    '/manager/member/active/for/role/group/static/:id/:type/:action_hash', array('module' => 'managerAuth', 'action' => 'activeMemberForRoleOrGroup')
            ),
            'manager_member_active_list_for_role_group' => new sfRoute(
                    '/manager/member/active/list/for/role/group', array('module' => 'managerAuth', 'action' => 'listActiveMemberForRoleOrGroup')
            ),
            'manager_member_active_list' => new sfRoute(
                    '/manager/member/active/list/:id', array('module' => 'managerAuth', 'action' => 'listMemberActive')
            ),
            'manager_plugin_get_related_member_info' => new sfRoute(
                    '/manager/plugin/get/related/member/info', array('module' => 'managerAuth', 'action' => 'getRelatedMemberInfo')
            ),
            //用户微信快速注册员工账户
            'manager_plugin_weixin_login_v2' => new sfRoute(
                    '/manager/plugin/weixin/login/v2', array('module' => 'managerAuth', 'action' => 'weixinLoginV2')
            ),
            //用户微信快速注册企业账户
            'manager_plugin_weixin_reg_v2' => new sfRoute(
                    '/manager/plugin/weixin/reg/v2', array('module' => 'managerAuth', 'action' => 'weixinRegV2')
            ),
            //已有用户ids进行登陆
            'manager_plugin_ddt_weixin_login_v1_ids_shopid_reg_qy' => new sfRoute(
                    '/manager/plugin/ddt/weixin/login/v1/reg/qy/:ids/:wxids/:sid', array('module' => 'managerAuth', 'action' => 'weixinLoginRegQyMember')
            ),
            //已有用户ids进行登陆
            'manager_plugin_ddt_weixin_login_v1_ids_shopid' => new sfRoute(
                    '/manager/plugin/ddt/weixin/login/v1/:ids/:wxids/:sid', array('module' => 'managerAuth', 'action' => 'weixinLoginDdtV1')
            ),
            //已有用户ids进行登陆
            'manager_plugin_ddt_weixin_login_v1_ids' => new sfRoute(
                    '/manager/plugin/ddt/weixin/login/v1/:ids/:wxids', array('module' => 'managerAuth', 'action' => 'weixinLoginDdtV1')
            ),
            //微信静默登陆 V2 HASH 版
            //微信服务端口监听
            'manager_plugin_ddt_open_listen_port_v1' => new sfRoute(
                    '/manager/plugin/ddt/open/listen/port/v1', array('module' => 'managerAuth', 'action' => 'ddtOpenListenPortV1')
            ),
            //微信静默登陆 V2 HASH 版
            //微信服务端口监听
            'manager_plugin_ddt_open_listen_port_v1_id' => new sfRoute(
                    '/manager/plugin/ddt/open/listen/port/v1/:ids', array('module' => 'managerAuth', 'action' => 'ddtOpenListenPortV1')
            ),
            //微信静默登陆 V2 HASH 版
            //微信服务端口监听
            'manager_plugin_weixin_open_listen_port_v2' => new sfRoute(
                    '/manager/plugin/weixin/open/listen/port/v2', array('module' => 'managerAuth', 'action' => 'weixinOpenListenPortV2')
            ),
            //微信静默根用户
            'manager_plugin_weixin_snsapi_base_login_root' => new sfRoute(
                    '/manager/plugin/weixin/snsapi/base/login/root', array('module' => 'managerAuth', 'action' => 'memberWxSnsapiBaseLoginRoot')
            ),
            //微信静默登陆
            'manager_plugin_weixin_snsapi_base_login_v2' => new sfRoute(
                    '/manager/plugin/weixin/snsapi/base/login/v2', array('module' => 'managerAuth', 'action' => 'memberWxSnsapiBaseLoginV2')
            ),
            //pc登录准备用户
            'manager_plugin_weixin_login_for_pc' => new sfRoute(
                    '/manager/plugin/weixin/login/for/pc', array('module' => 'managerAuth', 'action' => 'MemberWxLoginForPc')
            ),
            //pc登录准备用户补全root_member
            'manager_plugin_weixin_login_for_pc_sub_root_member' => new sfRoute(
                    '/manager/plugin/weixin/login/for/pc/sub/root/member', array('module' => 'managerAuth', 'action' => 'SubRootMemberWithWx')
            ),
            //记录open_id,添加pc登录扫码验证
            'manager_plugin_weixin_sub_open_id_for_bind_member' => new sfRoute(
                    '/manager/plugin/weixin/sub/wx/for/bind/member', array('module' => 'managerAuth', 'action' => 'SubOpenIdForBindMember')
            ),
            //记录open_id,pc base_open_id登录
            'manager_plugin_weixin_sub_open_id_for_pc_login' => new sfRoute(
                    '/manager/plugin/weixin/sub/wx/for/pc/login', array('module' => 'managerAuth', 'action' => 'SubOpenIdForPcLogin')
            ),
            //微信JS静默登陆
            'manager_plugin_weixin_snsapi_base_login_ajax_v2' => new sfRoute(
                    '/manager/plugin/weixin/snsapi/base/login/ajax/v2', array('module' => 'managerAuth', 'action' => 'memberWxSnsapiBaseLoginAjaxV2')
            ),
            //微信静默登陆
            'manager_plugin_weixin_open_listen_port' => new sfRoute(
                    '/manager/plugin/weixin/open/listen/port', array('module' => 'managerAuth', 'action' => 'weixinOpenListenPort')
            ),
            'manager_plugin_weixin_snsapi_base_login' => new sfRoute(
                    '/manager/plugin/weixin/snsapi/base/login', array('module' => 'managerAuth', 'action' => 'memberWxSnsapiBaseLogin')
            ),
            'manager_plugin_weixin_snsapi_base_login_ajax' => new sfRoute(
                    '/manager/plugin/weixin/snsapi/base/login/ajax', array('module' => 'managerAuth', 'action' => 'memberWxSnsapiBaseLoginAjax')
            ),
            'manager_plugin_weixin_snsapi_login' => new sfRoute(
                    '/manager/plugin/weixin/snsapi/login', array('module' => 'managerAuth', 'action' => 'memberWxSnsapiLogin')
            ),
            //微信非静默登陆
            //微信账号管理
            'manager_plugin_weixin_mp_list' => new sfRoute(
                    '/manager/plugin/weixin/mp/list', array('module' => 'managerAuth', 'action' => 'listWeixinMp')
            ),
            'manager_plugin_weixin_mp_edit' => new sfRoute(
                    '/manager/plugin/weixin/mp/edit/:id', array('module' => 'managerAuth', 'action' => 'editWeixinMp')
            ),
            //后台权限更新
            'manager_plugin_auth_list' => new sfRoute(
                    '/manager/plugin/auth/list', array('module' => 'managerAuth', 'action' => 'listPlugin')
            ),
            'manager_plugin_auth_add_plugin' => new sfRoute(
                    '/manager/plugin/auth/add/plugin', array('module' => 'managerAuth', 'action' => 'addPlugin')
            ),
            'manager_plugin_auth_edit_plugin' => new sfRoute(
                    '/manager/plugin/auth/edit/plugin', array('module' => 'managerAuth', 'action' => 'editPlugin')
            ),
            'manager_plugin_auth_action_add' => new sfRoute(
                    '/manager/plugin/action/add', array('module' => 'managerAuth', 'action' => 'addPluginAction')
            ),
            'manager_plugin_auth_action_edit' => new sfRoute(
                    '/manager/plugin/action/edit', array('module' => 'managerAuth', 'action' => 'editPluginAction')
            ),
            'manager_plugin_auth_update' => new sfRoute(
                    '/manager/plugin/update', array('module' => 'managerAuth', 'action' => 'updatePluginAuth')
            ),
            //前端用户权限设置
            'manager_plugin_auth_list' => new sfRoute(
                    '/manager/plugin/auth/list', array('module' => 'managerAuth', 'action' => 'listPlugin')
            ),
            'manager_plugin_member_auth_update' => new sfRoute(
                    '/manager/plugin/member/auth/update', array('module' => 'managerAuth', 'action' => 'updateMemberPluginAuth')
            ),
            //角色管理
            'manager_user_role_list' => new sfRoute(
                    '/manager/user/role/userList', array('module' => 'managerUser', 'action' => 'userRoleList')
            ),
            'manager_user_role_add' => new sfRoute(
                    '/manager/user/role/add', array('module' => 'managerUser', 'action' => 'userRoleAdd')
            ),
            'manager_user_role_edit' => new sfRoute(
                    '/manager/user/role/edit', array('module' => 'managerUser', 'action' => 'userRoleEdit')
            ),
            'manager_user_group_list' => new sfRoute(
                    '/manager/user/group/list', array('module' => 'managerUser', 'action' => 'userGroupList')
            ),
            'manager_user_group_add' => new sfRoute(
                    '/manager/user/group/add', array('module' => 'managerUser', 'action' => 'userGroupAdd')
            ),
            'manager_user_group_edit' => new sfRoute(
                    '/manager/user/group/edit', array('module' => 'managerUser', 'action' => 'userGroupEdit')
            ),
            'manager_user_test' => new sfRoute(
                    '/manager/user/test', array('module' => 'managerUser', 'action' => 'pushDataSup')
            ),
            'manager_user_error_page' => new sfRoute(
                    '/manager/user/error', array('module' => 'managerUser', 'action' => 'error')
            ),
            'manager_user_list' => new sfRoute(
                    '/manager/user/userList', array('module' => 'managerUser', 'action' => 'userList')
            ),
            'manager_user_dep_list' => new sfRoute(
                    '/manager/user/userList/dep/:id', array('module' => 'managerUser', 'action' => 'userListByDep')
            ),
            'manager_user_dep_type_list' => new sfRoute(
                    '/manager/user/type/userList/dep/:id', array('module' => 'managerCrm', 'action' => 'userListTypeByDep')
            ),
            'manager_user_download_by_wx' => new sfRoute(
                    '/manager/user/download_by_wx', array('module' => 'managerUser', 'action' => 'downloadByWx')
            ),
            'manager_user_wechat_user_list' => new sfRoute(
                    '/manager/user/wechat_user_list', array('module' => 'managerUser', 'action' => 'weChatUserList')
            ),
            'manager_user_member_list' => new sfRoute(
                    '/manager/user/member_list', array('module' => 'managerUser', 'action' => 'takeMember')
            ),
            'manager_user_register' => new sfRoute(
                    '/manager/user/register', array('module' => 'managerUser', 'action' => 'register')
            ),
            'manager_user_add_corpid_and_secret' => new sfRoute(
                    '/manager/user/add_corpid_and_secret', array('module' => 'managerUser', 'action' => 'addCorpIdAndSecret')
            ),
            'manager_user_chose_import_page' => new sfRoute(
                    '/manager/user/chose_import_page', array('module' => 'managerUser', 'action' => 'choseImportPage')
            ),
            'manager_user_import_member' => new sfRoute(
                    '/manager/user/import_member', array('module' => 'managerUser', 'action' => 'importMember')
            ),
            'manager_user_add_one_member' => new sfRoute(
                    '/manager/user/add/one/member', array('module' => 'managerUser', 'action' => 'addOneMember')
            ),
            'manager_user_del_one_member' => new sfRoute(
                    '/manager/user/del_one_member', array('module' => 'managerUser', 'action' => 'delMember')
            ),
            'manager_user_refresh_member' => new sfRoute(
                    '/manager/user/refresh_member', array('module' => 'managerUser', 'action' => 'refreshWxStatusAndAddMemberByWx')
            ),
            'manager_user_member_detail' => new sfRoute(
                    '/manager/user/member_detail', array('module' => 'managerUser', 'action' => 'memberDetail')
            ),
            'manager_user_crm_member_detail' => new sfRoute(
                    '/manager/user/crm/member_detail/:member_id/:wid', array('module' => 'managerCrm', 'action' => 'memberDetail')
            ),
            'manager_user_crm_member_detail_v2' => new sfRoute(
                    '/manager/user/crm/member/detail/v2/:member_id', array('module' => 'managerCrm', 'action' => 'memberDetailV2')
            ),
            'manager_user_crm_wechat_content_user_list' => new sfRoute(
                    '/manager/user/crm/wechat_content_list', array('module' => 'managerCrm', 'action' => 'weChatUserContentList')
            ),
            'manager_user_export' => new sfRoute(
                    '/manager/user/export', array('module' => 'managerUser', 'action' => 'export')
            ),
            'manager_user_push_member_detail_completed' => new sfRoute(
                    '/manager/user/push/member_detail/completed', array('module' => 'managerUser', 'action' => 'memberPushDetailCompleted')
            ),
            'manager_user_change_member_info' => new sfRoute(
                    '/manager/user/change_member_info', array('module' => 'managerUser', 'action' => 'updateMemberInfo')
            ),
            'manager_user_add_member_file_by_ajax' => new sfRoute(
                    '/manager/user/add_member_file_by_ajax', array('module' => 'managerUser', 'action' => 'addMemberFileByAjax')
            ),
            'manager_user_add_member_file' => new sfRoute(
                    '/manager/user/add_member_file', array('module' => 'managerUser', 'action' => 'addMemberFile')
            ),
            'manager_user_temp' => new sfRoute(
                    '/manager/user/temp', array('module' => 'managerUser', 'action' => 'temp')
            ),
            'manager_user_temp_update' => new sfRoute(
                    '/manager/user/temp_update', array('module' => 'managerUser', 'action' => 'tempEdit')
            ),
            'manager_user_temp_delete' => new sfRoute(
                    '/manager/user/temp/delete', array('module' => 'managerUser', 'action' => 'deleteTemp')
            ),
            'manager_user_fork_com_list' => new sfRoute(
                    '/manager/user/fork_com_list', array('module' => 'managerUser', 'action' => 'forkComList')
            ),
            'manager_user_fork_com_add' => new sfRoute(
                    '/manager/user/fork_com_add', array('module' => 'managerUser', 'action' => 'addForkCom')
            ),
            'manager_user_fork_com_update' => new sfRoute(
                    '/manager/user/fork_com_update', array('module' => 'managerUser', 'action' => 'editForkCom')
            ),
            'manager_user_fork_com_del' => new sfRoute(
                    '/manager/user/fork_com_del', array('module' => 'managerUser', 'action' => 'delForkCom')
            ),
            'manager_user_invite' => new sfRoute(
                    '/manager/user/invite', array('module' => 'managerUser', 'action' => 'invite')
            ),
            'manager_dept_list' => new sfRoute(
                    '/manager/dept/dept_list', array('module' => 'managerDept', 'action' => 'takeAllDept')
            ),
            'manager_dept_update' => new sfRoute(
                    '/manager/dept/dept_update', array('module' => 'managerDept', 'action' => 'updateOneDept')
            ),
            'manager_dept_del' => new sfRoute(
                    '/manager/dept/dept_del', array('module' => 'managerDept', 'action' => 'delOneDept')
            ),
            'manager_dept_add' => new sfRoute(
                    '/manager/dept/dept_add', array('module' => 'managerDept', 'action' => 'addOneDept')
            ),
            'manager_role_list' => new sfRoute(
                    '/manager/role/node_list', array('module' => 'managerRole', 'action' => 'takeAllRoleNode')
            ),
            'manager_role_list_update' => new sfRoute(
                    '/manager/role/node_update', array('module' => 'managerRole', 'action' => 'updateOneRoleNode')
            ),
            'manager_role_list_del' => new sfRoute(
                    '/manager/role/node_del', array('module' => 'managerRole', 'action' => 'delOneRoleNode')
            ),
            'manager_role_list_add' => new sfRoute(
                    '/manager/role/node_add', array('module' => 'managerRole', 'action' => 'addOneRoleNode')
            ),
            'manager_role_user_update' => new sfRoute(
                    '/manager/role/role_user_update', array('module' => 'managerRole', 'action' => 'updateOneRoleUser')
            ),
            'manager_role_user_del' => new sfRoute(
                    '/manager/role/role_user_del', array('module' => 'managerRole', 'action' => 'delOneRoleUser')
            ),
            'manager_role_user_add' => new sfRoute(
                    '/manager/role/role_user_add', array('module' => 'managerRole', 'action' => 'addOneRoleUser')
            ),
            //CRM管理相关
            'manager_user_type_list' => new sfRoute(
                    '/manager/user/type/userList', array('module' => 'managerCrm', 'action' => 'userTypeList')
            ),
            //积分操作
            'manager_crm_user_op_scores' => new sfRoute(
                    '/manager/crm/user/op/scores', array('module' => 'managerCrm', 'action' => 'userCrmOpScores')
            ),
            //积分排行榜
            'manager_crm_member_socres_list' => new sfRoute(
                    '/manager/crm/socres/list', array('module' => 'managerCrm', 'action' => 'userCrmMemeberScoresList')
            ),
            //查看历史
            'manager_crm_socres_list' => new sfRoute(
                    '/manager/crm/socres/list/:id', array('module' => 'managerCrm', 'action' => 'userCrmScoresList')
            ),
            //查看自己积分
            'manager_crm_my_socres_list' => new sfRoute(
                    '/manager/crm/my/socres/list', array('module' => 'managerCrm', 'action' => 'myScoresList')
            ),
            //微信会员卡
            'manager_crm_wx_huiyu_card' => new sfRoute(
                    '/manager/crm/wx/huiyu/card/:id', array('module' => 'managerCrm', 'action' => 'crmWxHuiyuanCard')
            ),
            //客户列表
            'manager_user_type_list' => new sfRoute(
                    '/manager/user/type/userList', array('module' => 'managerCrm', 'action' => 'userTypeList')
            ),
            'manager_user_type_list_download_wx' => new sfRoute(
                    '/manager/user/type/userList/download/wx', array('module' => 'managerCrm', 'action' => 'userTypeListDownloadWx')
            ),
            'manager_user_type_list_insert_wx_member' => new sfRoute(
                    '/manager/user/type/userList/insert/wx/member', array('module' => 'managerCrm', 'action' => 'userTypeListInsertWxMember')
            ),
            //添加不同类别的用户密钥
            'manager_user_add_corpid_and_secret_type' => new sfRoute(
                    '/manager/user/add_corpid_and_secret/type', array('module' => 'managerCrm', 'action' => 'addCorpIdAndSecretType')
            ),
            //选装导入用户方法
            'manager_user_chose_import_client_page' => new sfRoute(
                    '/manager/user/chose_import_page/client', array('module' => 'managerCrm', 'action' => 'choseImportClientPage')
            ),
            //导入用户
            'manager_user_import_client_member' => new sfRoute(
                    '/manager/user/import_client_member', array('module' => 'managerCrm', 'action' => 'importClientMember')
            ),
            //手动添加用户
            'manager_user_add_one_client_member' => new sfRoute(
                    '/manager/user/add/one/client/member', array('module' => 'managerCrm', 'action' => 'addOneClientMember')
            ),
            'manager_user_add_one_client_member_temp_id' => new sfRoute(
                    '/manager/user/add/one/client/member/:temp_ids', array('module' => 'managerCrm', 'action' => 'addOneClientMember')
            ),
            //手动删除客户资料
            'manager_user_del_one_client_member' => new sfRoute(
                    '/manager/user/del_one_client_member', array('module' => 'managerCrm', 'action' => 'delClientMember')
            ),
            //查看客户资料
            'manager_user_member_detail_client' => new sfRoute(
                    '/manager/user/member_client_detail', array('module' => 'managerCrm', 'action' => 'memberClientDetail')
            ),
            //导出客户资料
            'manager_user_client_export' => new sfRoute(
                    '/manager/user/client/export', array('module' => 'managerCrm', 'action' => 'exportClient')
            ),
            //修改客户资料
            'manager_user_change_client_member_info' => new sfRoute(
                    '/manager/user/client/change_member_info', array('module' => 'managerCrm', 'action' => 'updateClientMemberInfo')
            ),
            //客户资料从微信更新
            'manager_user_change_client_member_info_form_wx' => new sfRoute(
                    '/manager/user/client/change_member_info/form_wx', array('module' => 'managerCrm', 'action' => 'updateClientMemberInfoFormWx')
            ),
            'manager_user_add_client_member_file_by_ajax' => new sfRoute(
                    '/manager/user/client/add_member_file_by_ajax', array('module' => 'managerCrm', 'action' => 'addClientMemberFileByAjax')
            ),
            'manager_user_add_clientmember_file' => new sfRoute(
                    '/manager/user/add_client_member_file', array('module' => 'managerCrm', 'action' => 'addClientMemberFile')
            ),
            //根据客户类型，管理客户资料模板
            'manager_user_tag' => new sfRoute(
                    '/manager/user/tag', array('module' => 'managerCrm', 'action' => 'memberTag')
            ),
            //根据客户类型，管理客户资料模板
            'manager_user_tag_edit' => new sfRoute(
                    '/manager/user/tag/edit', array('module' => 'managerCrm', 'action' => 'memberTagEdit')
            ),
            //根据客户类型，管理客户资料模板
            'manager_user_tag_attach' => new sfRoute(
                    '/manager/user/tag/attach', array('module' => 'managerCrm', 'action' => 'memberTagAttach')
            ),
            //获得指定的字段内容
            'manager_user_temp_type_ids' => new sfRoute(
                    '/manager/user/temp/type/:ids', array('module' => 'managerCrm', 'action' => 'tempTypeId')
            ),
            //根据客户类型，管理客户资料模板
            'manager_user_temp_type' => new sfRoute(
                    '/manager/user/temp/type', array('module' => 'managerCrm', 'action' => 'tempType')
            ),
            //管理客户资料模板更新
            'manager_user_temp_type_update' => new sfRoute(
                    '/manager/user/temp_type_update', array('module' => 'managerCrm', 'action' => 'tempTypeEdit')
            ),
            //删除客户资料模板
            'manager_user_temp_type_delete' => new sfRoute(
                    '/manager/user/temp/type/delete/:id', array('module' => 'managerCrm', 'action' => 'deleteTypeTemp')
            ),
            //邀请客户关注
            'manager_user_client_invite' => new sfRoute(
                    '/manager/user/client/invite', array('module' => 'managerCrm', 'action' => 'inviteClient')
            ),
            //管理客户分组
            'manager_client_dept_list' => new sfRoute(
                    '/manager/client/dept/dept_list', array('module' => 'managerCrm', 'action' => 'takeAllClientDept')
            ),
            'manager_client_dept_update' => new sfRoute(
                    '/manager/client/dept/dept_update', array('module' => 'managerCrm', 'action' => 'updateOneClientDept')
            ),
            'manager_client_dept_del' => new sfRoute(
                    '/manager/client/dept/dept_del', array('module' => 'managerCrm', 'action' => 'delOneClientDept')
            ),
            'manager_client_dept_add' => new sfRoute(
                    '/manager/client/dept/dept_add', array('module' => 'managerCrm', 'action' => 'addOneClientDept')
            ),
            'manager_role_client_list' => new sfRoute(
                    '/manager/role/client/node_list', array('module' => 'managerCrm', 'action' => 'takeAllClientRoleNode')
            ),
            'manager_role_list_client_update' => new sfRoute(
                    '/manager/role/client/node_update', array('module' => 'managerCrm', 'action' => 'updateOneClientRoleNode')
            ),
            'manager_role_list_client_del' => new sfRoute(
                    '/manager/role/client/node_del', array('module' => 'managerCrm', 'action' => 'delOneClientRoleNode')
            ),
            'manager_role_list_add_client' => new sfRoute(
                    '/manager/role/client/node_add', array('module' => 'managerCrm', 'action' => 'addOneClientRoleNode')
            ),
            'manager_role_user_update_client' => new sfRoute(
                    '/manager/role/client/role_user_update', array('module' => 'managerCrm', 'action' => 'updateOneClientRoleUser')
            ),
            'manager_role_user_del_client' => new sfRoute(
                    '/manager/role/client/role_user_del', array('module' => 'managerCrm', 'action' => 'delOneClientRoleUser')
            ),
            'manager_role_user_add_client' => new sfRoute(
                    '/manager/role/client/role_user_add', array('module' => 'managerCrm', 'action' => 'addOneClientRoleUser')
            ),
            'manager_role_user_add_client' => new sfRoute(
                    '/manager/role/client/role_user_add', array('module' => 'managerCrm', 'action' => 'addOneClientRoleUser')
            ),
            'manager_client_get_value_temp_id' => new sfRoute(
                    '/manager/client/get/value/temp/:id/:cid', array('module' => 'managerCrm', 'action' => 'getMemberTempValueById')
            ),
            'manager_client_check_value_legal' => new sfRoute(
                    '/manager/client/check/value/legal/:id/:vid', array('module' => 'managerCrm', 'action' => 'checkMemberTempValueLegal')
            ),
            'manager_client_bund_wechat' => new sfRoute(
                    '/manager/client/bund/wechat/:ids', array('module' => 'managerCrm', 'action' => 'bundMemberWechat')
            ),
            'manager_wx_auto_reply_rule_index' => new sfRoute(
                    '/manager/wx/auto/reply/rule/index', array('module' => 'managerWxAutoReply', 'action' => 'managerWxAutoReplyRuleIndex')
            ),
            'manager_wx_auto_reply_rule_edit' => new sfRoute(
                    '/manager/wx/auto/reply/rule/edit', array('module' => 'managerWxAutoReply', 'action' => 'editManagerWxAutoReplyRule')
            ),
            'manager_wx_material_list' => new sfRoute(
                    '/manager/wx/get/material/list', array('module' => 'managerWxAutoReply', 'action' => 'getMaterialList')
            ),
            'manager_wx_material_edit' => new sfRoute(
                    '/manager/wx/edit/material', array('module' => 'managerWxAutoReply', 'action' => 'editMaterial')
            ),
            'manager_wx_auto_reply_config_index' => new sfRoute(
                    '/manager/wx/auto/reply/config/index', array('module' => 'managerWxAutoReply', 'action' => 'configIndex')
            ),
            'manager_user_get_self_created_member_list' => new sfRoute(
                    '/manager/user/self/create/ship/list', array('module' => 'managerUser', 'action' => 'GetSelfCreateMemberList')
            ),
            'manager_user_get_self_relate_member_list' => new sfRoute(
                    '/manager/user/self/relate/ship/list', array('module' => 'managerUser', 'action' => 'GetSelfRelateMemberList')
            ),
            'manager_user_add_self_relate_member' => new sfRoute(
                    '/manager/user/self/add/create/ship', array('module' => 'managerUser', 'action' => 'AddSelfCreateMember')
            ),
            'manager_user_add_self_create_member' => new sfRoute(
                    '/manager/user/self/add/relate/ship', array('module' => 'managerUser', 'action' => 'AddSelfRelateMember')
            ),
            //取得授权于自身的关联账号列表
            'manager_user_get_self_relate_auth_list' => new sfRoute(
                    '/manager/user/get/self/relate/auth/list', array('module' => 'managerUser', 'action' => 'GetSelfRelateAuthList')
            ),
            //分组批量排序
            'manager_dept_save_all_dept_sort' => new sfRoute(
                    '/manager/dept/sort/all', array('module' => 'managerDept', 'action' => 'SaveAllDeptSort')
            ),
            //获取所有分组
            'manager_dept_get_all_dept' => new sfRoute(
                    '/manager/dept/all', array('module' => 'managerDept', 'action' => 'GetAllDept')
            ),
            //获取一个分组所有人员
            'manager_dept_get_all_member_one_dept' => new sfRoute(
                    '/manager/dept/get/all/member', array('module' => 'managerDept', 'action' => 'GetAllMemberAndLeaderJsonByDeptId')
            ),
            //定期检测凭证有效，30S一次
            'manager_check_certificate_time' => new sfRoute(
                    '/manager/check/certificate/time', array('module' => 'managerAuth', 'action' => 'checkCertificateTime')
            ),
        );
    }

}
