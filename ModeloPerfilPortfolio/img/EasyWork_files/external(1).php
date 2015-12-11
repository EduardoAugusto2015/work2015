var lang=[],uc_name={},uc_status={},uc_avatar={},uc_link={},barLinks=[],unfocus_chat=[],apps=[],Themes=[],blockList=[],Smiley=[];lang[0] = "Notifications";lang[1] = "Available";lang[2] = "Busy";lang[3] = "Invisible";lang[4] = "Chat";lang[5] = "Available to Chat";lang[6] = "Chat Sounds";lang[7] = "Chat (Offline)";lang[8] = "No one is available to chat.";lang[9] = "You have no new notifications.";lang[10] = "Pop Out Chat";lang[11] = "Pop In Chat";lang[12] = "Search";lang[13] = "This user is offline. They will receive the message next login";lang[14] = "Hide Chat";lang[15] = "Show Chat";lang[16] = "Applications";lang[17] = "Keep List Open";lang[18] = "Show Names Only";lang[19] = "Chat Rooms";lang[20] = "Bookmarks";lang[21] = "See all notifications";lang[22] = "Status";lang[23] = "Options";lang[24] = "Clear Conversation";lang[25] = "";lang[26] = "No friends found.";lang[27] = "Chat is currently down for maintenance.";lang[28] = "close";lang[29] = "Theme:";lang[30] = "New message from";lang[31] = "Create";lang[32] = "Options";lang[33] = "Leave";lang[34] = "";lang[35] = " Online";lang[36] = "Keep Room Open";lang[37] = "Create a new chat room:";lang[38] = "Block Private Chats";lang[39] = "You must wait more time before creating another chatroom.";lang[40] = "User created chat rooms are currently disabled.";lang[41] = "Private Message";lang[42] = "Visit Profile";lang[43] = "Guest";lang[44] = "Moderator";lang[45] = "Administrator";lang[46] = "This user has private messaging disabled";lang[47] = "Stay in Room";lang[48] = "That chat room does not exist.";lang[49] = "The password entered was incorrect. Please try again.";lang[50] = "Enter the password for this chat room.";lang[51] = "Limit Reached: You must wait more time before sending another message.";lang[52] = "Make Moderator";lang[53] = "Kick User";lang[54] = "Remove Moderator";lang[55] = "You are banned from this chat room permanently.";lang[56] = "You are banned from this chat room for this many minutes: ";lang[57] = "Enter the number in minutes that the user should be banned for.  Enter 0 for a permanent ban.";lang[58] = "You must register or login to use chat.";lang[59] = "More &#9660;";lang[60] = "Pop Out Chat";lang[61] = "I have sent you a video chat request. Ignore this message to decline.";lang[62] = "Accept";lang[63] = "Your video chat request has been sent.";lang[64] = "Other Applications";lang[65] = "Drag to reorder";lang[66] = "Add Files...";lang[67] = "cancel the upload";lang[68] = "Your file has been uploaded and sent.";lang[69] = "File sent:";lang[70] = "Download file";lang[71] = "second ago";lang[72] = "seconds ago";lang[73] = "minute ago";lang[74] = "minutes ago";lang[75] = "hour ago";lang[76] = "hours ago";lang[77] = "day ago";lang[78] = "days ago";lang[79] = "month ago";lang[80] = "months ago";lang[81] = "year ago";lang[82] = "years ago";lang[83] = "Guest";lang[84] = "Block User";lang[85] = "Would you also like to report this user?";lang[86] = "Browse";lang[87] = "Hit browse to upload a file or ";lang[88] = "Start a video call";lang[89] = "Close chat";lang[90] = "You";lang[91] = "Enter the name of the chat room you'd like to create.";lang[92] = "Leave Chat Room";lang[93] = "Create a new chat room";lang[94] = "Change the chat theme";lang[95] = "Manage Block List...";lang[96] = "Select the user you wish to unblock";lang[97] = "Unblock";lang[98] = "Name";lang[99] = "Password (Optional)";lang[100] = "Join";lang[101] = "Chat Room Sounds";lang[102] = "Message not sent.  This user has blocked you.";lang[103] = "The user has been blocked. Messages by the user will no longer be received.";lang[104] = "Keep App Open";lang[105] = "Always Load App";lang[106] = " has been made a moderator by ";lang[107] = " has been kicked from the chat room by ";lang[108] = "Select the theme you wish to use";lang[109] = "Choose";lang[110] = "Messenger";lang[111] = "Online Users";lang[112] = "Idle Users";lang[113] = "Back";lang[114] = "Send";lang[115] = "New";lang[116] = "You must login before using mobile chat";lang[117] = "Popout chat room";lang[118] = "Select";lang[119] = "Enter a name to chat with";lang[120] = "You must enter a name.";lang[121] = "The name can only consist of letters and numbers.";lang[122] = "There is a blocked word in your name: ";lang[123] = "You cannot change your name again.";lang[124] = "That name already exists.";lang[125] = "The name cannot be more than 25 characters.";lang[126] = "Home";lang[127] = "There are too many users in this chat room.  Please try again later.";lang[128] = "Chat Rooms";lang[129] = "Settings";lang[130] = "Show chat rooms list";lang[131] = "Show idle user list";lang[132] = "On";lang[133] = "Off";lang[134] = "Scroll down to see new messages.";lang[135] = "There was an error sending your message. Try again later.";lang[136] = " (Admin)";lang[137] = " (Mod)";lang[138] = "Enter the room's password:";lang[139] = "Enter Chat Room";lang[140] = "Connect to Facebook";lang[141] = "Logout from Facebook";lang[142] = "Site Users";lang[143] = "Facebook Friends";lang[144] = "New message from ";lang[145] = "Mobile Chat";lang[146] = "Video calling is currently unavailable";lang[147] = "Users";lang[148] = "Admins";lang[149] = "Mods";lang[150] = "User-created chat room";lang[151] = "There was an error uploading the file.";lang[152] = "Always Show Names";lang[153] = "Edit Welcome Message...";lang[154] = "Enter the welcome message that you would like to be displayed when users enter this chat room. Enter a blank value for no welcome message.";lang[155] = "The settings have been successfully saved.";lang[156] = " has had their moderator status taken away by ";lang[157] = "Edit Description...";lang[158] = "Enter the description that you would like to be displayed in the chat room list.";lang[159] = "Message deleted by ";lang[160] = "Delete Message";lang[161] = "Silence User";lang[162] = "Enter the number in seconds that the user should be silenced for.  Maximum time is 300 seconds.";lang[163] = " has been silenced by ";lang[164] = "You are silenced for another ";lang[165] = " seconds.";lang[166] = "Moderation";lang[167] = "Report Spam/Abuse";lang[168] = "Thank you for your report.";lang[169] = "You have exceeded the flood limit and must wait ";lang[170] = " more seconds to chat.";lang[171] = "Edit Chat Flood...";lang[172] = "Select your chat flood settings";lang[173] = "Save";lang[174] = "message(s) every";lang[175] = "second(s)";lang[176] = "Recent Chat";lang[177] = "Report From";lang[178] = "Report About";lang[179] = "Report Time";lang[180] = "Total Reports";lang[181] = "Reports On User";lang[182] = "Someone else is already working on this report.";lang[183] = "Ban User";lang[184] = "Warn User";lang[185] = "Close Report";lang[186] = "Back to Lobby";lang[187] = "Report #";lang[188] = "No additional reports";lang[189] = "There are no reports, hooray!";lang[190] = "About: ";lang[191] = "From: ";lang[192] = "Previous Warnings: ";lang[193] = "Time: ";lang[194] = "The user was reported here";lang[195] = "Are you sure you want to PERMANENTLY ban this user?  The user will have to be unbanned from the ArrowChat admin panel.";lang[196] = "Enter a reason for the warning.  THIS WILL BE SHOWN TO THE WARNED USER.";lang[197] = "This user has been warned in the past 24 hours.  Are you sure you want to warn again?";lang[198] = "I Understand";lang[199] = "You have been warned by a moderator. Continued spam or abuse of the chat system could lead to a permanent ban. The reason that the moderator has given for the warning is below:";Themes[0] = ['1', 'New Facebook Full', 'new_facebook_full'];Themes[1] = ['2', 'tio', 'teal_hd'];Smiley[0] = ['smiley',':)'];Smiley[1] = ['smiley-mad','>:('];Smiley[2] = ['smiley-lol',':D'];Smiley[3] = ['smiley-wink','\;)'];Smiley[4] = ['smiley-surprise',':o'];Smiley[5] = ['smiley-cool','8)'];Smiley[6] = ['smiley-neutral',':|'];Smiley[7] = ['smiley-cry',':\'('];Smiley[8] = ['smiley-razz',':p'];Smiley[9] = ['smiley-confuse',':s'];Smiley[10] = ['smiley',':-)'];Smiley[11] = ['smiley-sad',':-('];Smiley[12] = ['smiley-wink','\;-)'];Smiley[13] = ['smiley-surprise',':-o'];Smiley[14] = ['smiley-cool','8-)'];Smiley[15] = ['smiley-neutral',':-|'];Smiley[16] = ['smiley-razz',':-p'];Smiley[17] = ['smiley-confuse',':-s'];Smiley[18] = ['smiley-sad',':('];var T=0,u_theme="teal_hd",u_name="Guest 6130981",u_id="g6130981",u_hide_bar="0",u_blist_open="0",u_sounds="1",u_chatroom_open="-1",u_chatroom_stay="0",u_chatroom_block_chats="0",u_status="",u_no_avatars="0",u_hash_id="9Ssi2Zkrh4oTERnlCtfc",u_chat_open="0",u_chatroom_sound="1",u_chatroom_show_names="0",u_apps_open="",u_logged_in="0",u_popout_time="99",u_avatar="/webeasywork/arrowchat/admin/images/img-no-avatar.gif",u_is_guest="1",u_guest_name="",u_is_mod="0",u_is_admin="0",u_num_mod_reports="0",c_chatrooms="0",c_chatroom_auto_join="0",c_guests_apps="1",c_video_chat="1",c_theme_change="0",c_notifications="0",c_chat_maintenance="0",c_guests_login_msg="1",c_search_min="10",c_us_time="1",c_file_transfer="0",c_chatroom_transfer="",c_width_blist="189",c_width_chatroom="16",c_width_apps="16",c_hide_bar_on="1",c_heart_beat="3",c_list_heart_beat="60",c_user_chatrooms="0",c_disable_avatars="0",c_disable_arrowchat="0",c_show_full_name="0",c_bar_fixed="0",c_bar_fixed_alignment="center",c_bar_fixed_width="900",c_bar_padding="15",c_applications_on="0",c_no_apps_menu="0",c_popout_on="1",c_push_engine="0",c_push_publish="",c_push_subscribe="",c_mobile_device="0",c_links_right="0",c_chat_animations="1",c_disable_smilies="0",c_guest_name_change="1",c_login_url="",c_admin_bg="",c_admin_txt="",c_desktop_notify="",c_facebook_app_id="",c_max_upload_size="",c_max_chatroom_msg="",c_enable_moderation="",c_push_ssl="",c_ac_path="/webeasywork/arrowchat/";