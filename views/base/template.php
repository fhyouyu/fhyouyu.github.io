<div id="all-templates" style="display: none;">

    <input type="hidden" data="<?php echo $session_id;?>" class="session_id" />
    <input type="hidden" data="<?php echo $user_id;?>" class="token" />
    <input type="hidden" data="<?php echo $nickname;?>" class="nickname" />
    <input type="hidden" data="<?php echo $loginName;?>" class="loginName" />
    <input type="hidden" data="<?php echo $avatar;?>" class="self_avatar" />
    <input type="hidden" data="<?php echo $jumpPage;?>" class="jumpPage" />
    <input type="hidden" data="<?php echo $jumpRoomId;?>" class="jumpRoomId" />
    <input type="hidden" data="<?php echo $jumpRoomType;?>" class="jumpRoomType" />
    <input type="hidden" data="<?php echo $jumpRelation;?>" class="jumpRelation" />

    <div id="group-invite-people" class="pop-window pop-window-invite-people">
        <div class="pw-left">
            <div class="no_data">
                <div class="d-flex" style="text-align: center">
                    <div class="p-2">
                        <img class="no_data_img" src="../../public/img/no_data.png"/>
                    </div>
                    <div class="p-2 no_data_tip" data-local-value="noFriendDataTip">No Friends For Invite</div>
                </div>
            </div>
        </div>

        <div class="pw-right">
            <div class="pw-right-header justify-content-center" data-local-value="selectContactTip">选择好友</div>
            <div class="pw-right-body">

            </div>
            <div class="pw-right-btn">
                <button class="btn-default cancle_invite_people" data-local-value="cancelTip">取消</button>
                <button class="btn-primary add_member_to_group" data-local-value="addTip">添加</button>
            </div>
        </div>
    </div>

    <div id="group-remove-people" class="pop-window pop-window-remove-people">
        <div class="pw-right-header" style="justify-content: center" data-local-value="removeTip">移除群成员</div>

        <div class="remove-people-div" style="width: 100%;">
        </div>
        <div style="text-align: center;">
            <button class="btn-primary remove_member_from_group" style="font-size:1.67rem;" data-local-value="removeGroupMemberTip">移除成员</button>
        </div>
    </div>

    <div id="group-speaker-people" class="pop-window pop-window-speaker-people">
        <div class="pw-right-header" style="justify-content: center" data-local-value="speakerTip" >群发言人</div>
        <div class="sub-speaker-div">
            <div class="sub-speaker-title" data-local-value="currentSpeakerTip"> 当前发言人 </div>
            <div class="remove-all-speaker" data-local-value="removeAllSpeakerTip"> 移除所有发言人 </div>
        </div>
        <div class="speaker-line"></div>
        <div class="speaker-content">
            <div class="speaker-people-div" style="width: 100%;">
            </div>
        </div>
    </div>



    <div id="group-member-list-div" class="pop-window pop-window-member-people">
        <div class="group-member-info" style="display: none">

        </div>
        <div id="group-member-list" class="pop-window pop-window-member-people">

            <div>
                <div class="pw-right-header" style="justify-content: center" data-local-value="groupMemberTip">群成员</div>

                <div class="group-member-content">
                </div>
            </div>
        </div>
    </div>

    <div id="create-group">
        <div class="close_div">
            <img src="../../public/img/close.png" onclick="closeMaskDiv('#create-group');">
        </div>
        <div class="flex-container justify-content-center" >
            <div class="header_tip_font align-items-center"  data-local-value="createGroupTip">创建群组</div>
        </div>

        <div class="d-flex flex-row justify-content-center">
            <input type="text" class="form-control group_name create_group_box_div_input"  onkeydown="createGroupByKeyDown(event)"  data-local-placeholder="enterGroupNamePlaceholder" placeholder="请输入群组名称" >
        </div>

        <div class="line"></div>

        <div  class="d-flex flex-row justify-content-center  data_tip" data-local-value="createGroupNameTip">
            群组名称长度限制1-10
        </div>

        <div class="d-flex flex-row justify-content-center width-percent100 margin-top10" style="text-align:center; ">
            <button type="button" class="btn create_button create_group_button" data-local-value="createTip">创建</button>
        </div>
    </div>

    <div id="edit-remark">
        <div class="close_div">
            <img src="../../public/img/close.png" onclick="closeMaskDiv('#edit-remark');">
        </div>
        <div class="flex-container" style="display: flex;justify-content: center;">
            <div class="header_tip_font align-items-center" data-local-value="editRemarkTip">修改备注</div>
        </div>

        <div class="d-flex flex-row justify-content-center" style="">
            <input type="text" class="form-control remark_name create_group_box_div_input " onkeydown="editFriendRemarkByKeyDown(event)" data-local-placeholder="remarkNamePlaceholder"  placeholder="请输入备注" >
        </div>

        <div class="line"></div>

        <div class="d-flex flex-row justify-content-center width-percent100 margin-top10" style="text-align:center; ">
            <button type="button" class="btn create_button edit_remark_for_friend" data-local-value="sureTip">保存</button>
        </div>
    </div>

    <div id="add-friend-div">

    </div>

    <div id="search-user-div">

    </div>


    <div id="permission-join">
        <div class="close_div">
            <img src="../../public/img/close.png" onclick="closeMaskDiv('#permission-join');">
        </div>
        <div class="flex-container" style="display: flex;justify-content: center;">
            <div class="header_tip_line_left "></div>
            <div class="header_tip_font  font-size-12  align-items-center" data-local-value="joinGroupPermissionsTip">邀请入群权限</div>
            <div class="header_tip_line_right"></div>
        </div>

        <div class="d-flex flex-row" style="margin-top: 5rem; margin-left:23rem;">
            <div class="permission-join-operation join-by-admin">
                <div class="d-flex flex-row" style="width: 50%"  data-local-value="groupAdminInvitationTip">管理员邀请</div>
                <div  class="d-flex flex-row ">
                    <img class="imgDiv" src="../../public/img/msg/member_unselect.png"  permissionJoin="GroupJoinPermissionAdmin">
                </div>
            </div>
            <div class="permission-join-operation join-by-member">
                <div class="d-flex flex-row" style="width: 50%" data-local-value="groupMemberTip">
                    Members Invitation
                </div>
                <div class="d-flex flex-row ">
                    <img class="imgDiv"src="../../public/img/msg/member_unselect.png" permissionJoin="GroupJoinPermissionMember">
                </div>
            </div>
            <div class="permission-join-operation join-by-public">
                <div class="d-flex flex-row" style="width: 50%" data-local-value="groupPublicTip"> 公开</div>
                <div class="d-flex flex-row ">
                    <img class="imgDiv" src="../../public/img/msg/member_unselect.png" permissionJoin="GroupJoinPermissionPublic">
                </div>
            </div>
        </div>

        <div class="d-flex flex-row justify-content-center width-percent100 margin-top10" style="text-align:center; ">
            <button type="button" class="btn create_button save-permission-join" style="margin-bottom: 5rem;" data-local-value="saveTip">保存</button>
        </div>
    </div>

    <div id="share_group" >

    </div>

    <div id="download-app-div">
        
    </div>
</div>

