<?php

/**
**********************
** BTManager v3.0.1 **
**********************
** http://www.btmanager.org/
** https://github.com/blackheart1/BTManager
** http://demo.btmanager.org/index.php
** Licence Info: GPL
** Copyright (C) 2018
** Formerly Known As phpMyBitTorrent
** Created By Antonio Anzivino (aka DJ Echelon)
** And Joe Robertson (aka joeroberts)
** Project Leaders: Black_heart, Thor.
** File forum/english.php 2018-03-11 11:47:00 Thor
**
** CHANGES
**
** 2018-03-02 - Added New Masthead
** 2018-03-02 - Added New !defined('IN_PMBT')
** 2018-03-02 - Fixed Spelling
** 2018-03-26 - Added Missing Text
**/

if (!defined('IN_PMBT'))
{
    include_once './../../security.php';
    die ("You can't access this file directly");
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'COM_NEW'                    => 'Compose New Thread',
    'LAST_POST'                  => 'Last Post',
    'NO_POSTS'                   => 'No Posts',
    'FORUM_BANNED'               => 'Unfortunately you have been Banned from Accessing the Forums.<br />Please contact a member of Staff if you do not know the reason.',

    'MARK_FORUMS_READ'           => 'Mark Forums Read',
    'REDIRECTING'                => 'You are being Redirected',
    'NO_TOPICS'                  => 'There are NO Topics at this time.',
    'REPLIES'                    => 'Replies',
    'VIEWS'                      => 'Views',
    'MCP'                        => 'Moderator Control Panel',
    'LOGIN_NOTIFY_FORUM'         => 'You have been Notified about this Forum, please Login to View it.',
    'NO_READ_ACCESS'             => 'You DO NOT have the Required Permissions to Read Topics within this Forum.',
    'POST_FORUM_LOCKED'          => 'Forum is Locked',
    'TOPICS_MARKED'              => 'The Topics for this Forum have now been Marked Read.',
    'VIEW_FORUM'                 => 'View Forum',
    'VIEW_FORUM_TOPIC'           => '1 Topic',
    'VIEW_FORUM_TOPICS'          => '%d Topics',
    'ALL_FORUMS'                 => 'ALL Forums',
    'ACTIVE_TOPICS'              => 'Active Topics',
    'ANNOUNCEMENTS'              => 'Announcements',
    'FORUM_PERMISSIONS'          => 'Forum Permissions',
    'DISPLAY_TOPICS'             => 'Display Topics',
    'ALL_POSTS'                  => 'ALL Posts',
    'UNREAD_POSTS'               => 'Unread Posts',
    'UNREAD_POSTS_HOT'           => 'Unread Posts [ Popular ]',
    'UNREAD_POSTS_LOCKED'        => 'Unread Posts [ Locked ]',
    'NO_UNREAD_POSTS_IMG'        => 'NO Unread Posts',
    'NO_UNREAD_POSTS_HOT'        => 'NO Unread Posts [ Popular ]',
    'NO_UNREAD_POSTS_LOCKED'     => 'NO Unread Posts [ Locked ]',
    'FORUM_LOCKED'               => 'Forum Locked',
    'ICON_ANNOUNCEMENT'          => 'Announcement',
    'ICON_STICKY'                => 'Sticky',
    'TOPIC_MOVED'                => 'Moved Topic',
    'MARK_TOPICS_READ'           => 'Mark Topics Read ',
    'SEARCH_FOR'                 => 'Search for',
    'JUMP_TO'                    => 'Jump To',
    'SUBJECT'                    => 'Subject',
    'POST_TIME'                  => 'Post Time',
    'ALL_TOPICS'                 => 'ALL Topics',
    'LOG_APPROVE_TOPIC'          => '<strong>Approved Topic</strong><br />» %s',
    'LOG_BUMP_TOPIC'             => '<strong>User Bumped Topic</strong><br />» %s',
    'LOG_DELETE_POST'            => '<strong>Deleted Post</strong><br />» %s',
    'LOG_DELETE_SHADOW_TOPIC'    => '<strong>Deleted Shadow Topic</strong><br />» %s',
    'LOG_DELETE_TOPIC'           => '<strong>Deleted Topic</strong><br />» %s',
    'FLOOD_ERROR'                => 'You can NOT make another Post so soon after your Last.',
    'LOG_FORK'                   => '<strong>Copied Topic</strong><br />» from %s',
    'LOG_LOCK'                   => '<strong>Locked Topic</strong><br />» %s',
    'LOG_LOCK_POST'              => '<strong>Locked Post</strong><br />» %s',
    'LOG_MERGE'                  => '<strong>Merged Posts</strong> into topic<br />» %s',
    'LOG_MOVE'                   => '<strong>Moved Topic</strong><br />» from %1$s to %2$s',
    'LOG_POST_APPROVED'          => '<strong>Approved Post</strong><br />» %s',
    'LOG_POST_DISAPPROVED'       => '<strong>Disapproved Post "%1$s" with the following Reason</strong><br />» %2$s',
    'LOG_POST_EDITED'            => '<strong>Edited Post "%1$s" written by</strong><br />» %2$s',
    'LOG_REPORT_CLOSED'          => '<strong>Closed Report</strong><br />» %s',
    'LOG_REPORT_DELETED'         => '<strong>Deleted Report</strong><br />» %s',
    'LOG_SPLIT_DESTINATION'      => '<strong>Moved Split Posts</strong><br />» to %s',
    'LOG_SPLIT_SOURCE'           => '<strong>Split Posts</strong><br />» from %s',
    'LOG_TOPIC_APPROVED'         => '<strong>Approved Topic</strong><br />» %s',
    'LOG_TOPIC_DISAPPROVED'      => '<strong>Disapproved Topic "%1$s" with the following Reason</strong><br />%2$s',
    'LOG_TOPIC_RESYNC'           => '<strong>Resynchronised Topic Counters</strong><br />» %s',
    'LOG_TOPIC_TYPE_CHANGED'     => '<strong>Changed Topic Type</strong><br />» %s',
    'LOG_UNLOCK'                 => '<strong>Unlocked Topic</strong><br />» %s',
    'LOG_UNLOCK_POST'            => '<strong>Unlocked Post</strong><br />» %s',
    'SELECT'                     => 'Select',
    'TOPIC'                      => 'Topic',
    'IP'                         => 'IP',
    'LOG_DISALLOW_ADD'           => '<strong>Added Disallowed Username</strong><br />» %s',
    'LOG_DISALLOW_DELETE'        => '<strong>Deleted Disallowed Username</strong>',

    'RETURN_FORUM'               => '%sReturn to the Forum Last Visited%s',
    'POST_DELETED'               => 'This Message has been Deleted Successfully.',
    'RETURN_TOPIC'               => '%sReturn to the Topic Last Visited%s',
    'SELECT_FORUM'               => 'Select Forum',
    'RULES_ATTACH_CAN'           => 'You <strong>can</strong> Post Attachments in this Forum',
    'RULES_ATTACH_CANNOT'        => 'You <strong>can NOT</strong> Post Attachments in this Forum',
    'RULES_DELETE_CAN'           => 'You <strong>can</strong> Delete your Posts in this Forum',
    'RULES_DELETE_CANNOT'        => 'You <strong>can NOT</strong> Delete your Posts in this Forum',
    'RULES_DOWNLOAD_CAN'         => 'You <strong>can</strong> Download Attachments in this Forum',
    'RULES_DOWNLOAD_CANNOT'      => 'You <strong>can NOT</strong> Download Attachments in this Forum',
    'RULES_EDIT_CAN'             => 'You <strong>can</strong> Edit your Posts in this Forum',
    'RULES_EDIT_CANNOT'          => 'You <strong>can NOT</strong> Edit your Posts in this Forum',
    'RULES_LOCK_CAN'             => 'You <strong>can</strong> Lock your Topics in this Forum',
    'RULES_LOCK_CANNOT'          => 'You <strong>can NOT</strong> Lock your Topics in this Forum',
    'RULES_POST_CAN'             => 'You <strong>can</strong> Post New Topics in this Forum',
    'RULES_POST_CANNOT'          => 'You <strong>can NOT</strong> Post New Topics in this Forum',
    'RULES_REPLY_CAN'            => 'You <strong>can</strong> Reply to Topics in this Forum',
    'RULES_REPLY_CANNOT'         => 'You <strong>can NOT</strong> Reply to Topics in this Forum',
    'RULES_VOTE_CAN'             => 'You <strong>can</strong> Vote in Polls in this Forum',
    'RULES_VOTE_CANNOT'          => 'You <strong>can NOT</strong> Vote in Polls in this Forum',
    'POST_TOPIC'                 => 'Post a New Topic',
    'POST_REPLY'                 => 'Post a Reply',
    'EDIT_POST'                  => 'Edit Post',
    'SAVE'                       => 'Save',
    'SAVE_DATE'                  => 'Saved at',
    'SAVE_DRAFT'                 => 'Save Draft',
    'SAVE_DRAFT_CONFIRM'         => 'Please Note that Saved Drafts Only Include the Subject and the Message, any other Element will be Removed. Do you want to Save your Draft Now?',

    'SMILIES'                    => 'Smilies',
    'SMILIES_ARE_OFF'            => 'Smilies are <em>OFF</em>',
    'SMILIES_ARE_ON'             => 'Smilies are <em>ON</em>',
    'STICKY_ANNOUNCE_TIME_LIMIT' => 'Sticky/Announcement Time Limit',
    'STICK_TOPIC_FOR'            => 'Stick Topic for',
    'STICK_TOPIC_FOR_EXPLAIN'    => 'Enter 0 or Leave Blank for a Never Ending Sticky/Announcement.',
    'STYLES_TIP'                 => 'Tip: Styles can be Applied Quickly to Selected Text.',
    'PARTIAL_UPLOAD'             => 'The Uploaded file was ONLY Partially Uploaded.',
    'PHP_SIZE_NA'                => 'The Attachment\'s File Size is Too Large.<br />Could NOT determine the Maximum Size Defined by PHP in php.ini.',

    'PHP_SIZE_OVERRUN'           => 'The Attachment\'s File Size is Too Large, the Maximum Upload Size is %1$d %2$s.<br />Please Note this is Set in php.ini and can NOT be Overridden.',

    'PLACE_INLINE'               => 'Place Inline',
    'POLL_DELETE'                => 'Delete Poll',
    'POLL_FOR'                   => 'Run Poll for',
    'POLL_FOR_EXPLAIN'           => 'Enter 0 or Leave Blank for a Never Ending Poll.',
    'POLL_MAX_OPTIONS'           => 'Options Per User',
    'POLL_MAX_OPTIONS_EXPLAIN'   => 'This is the Number of Options each User may Select when Voting.',
    'POLL_OPTIONS'               => 'Poll Options',
    'POLL_OPTIONS_EXPLAIN'       => 'Place each Option on a New Line. You may Enter up to <strong>%d</strong> Options.',
    'POLL_OPTIONS_EDIT_EXPLAIN'  => 'Place each Option on a New Line. You may Enter up to <strong>%d</strong> Options. If you Remove or Add Options ALL previous Votes will be Reset.',

    'POLL_QUESTION'              => 'Poll Question',
    'POLL_TITLE_TOO_LONG'        => 'The Poll Title must be Less than 100 Characters.',
    'POLL_TITLE_COMP_TOO_LONG'   => 'The Parsed Size of your Poll Title is Too Large, consider Removing BBCodes or Smilies.',
    'POLL_VOTE_CHANGE'           => 'Allow Re-Voting',
    'POLL_VOTE_CHANGE_EXPLAIN'   => 'If Enabled Users are able to Change their Vote.',
    '_POSTED_ATTACHMENTS'        => 'Posted Attachments',
    'POST_APPROVAL_NOTIFY'       => 'You will be Notified when your Post has been Approved.',
    'POST_CONFIRMATION'          => 'Confirmation of Post',
    'POST_CONFIRM_EXPLAIN'       => 'To prevent Automated Posts the Board Requires you to Enter a Confirmation Code. The Code is Displayed in the Image you should now see below. If you are Visually Impaired or cannot otherwise Read this Code please contact the %sBoard Administrator%s.',

    'POST_DELETED'               => 'This Message has been Deleted Successfully.',
    'POST_EDITED'                => 'This Message has been Edited Successfully.',
    'POST_EDITED_MOD'            => 'This Message has been Edited Successfully, but it will need to be Approved by a Moderator before it is Publicly Viewable.',

    'POST_GLOBAL'                => 'Global',
    'POST_ICON'                  => 'Post Icon',
    'POST_NORMAL'                => 'Normal',
    'POST_REVIEW'                => 'Post Review',
    'POST_REVIEW_EXPLAIN'        => 'At least One New Post has been made to this Topic. You may wish to Review your Post in light of this.',
    'POST_STORED'                => 'This Message has been Posted Successfully.',
    'POST_STORED_MOD'            => 'This Message has been Submitted Successfully, but it will need to be Approved by a Moderator before it is Publicly Viewable.',

    'POST_TOPIC_AS'              => 'Post Topic as',
    'PROGRESS_BAR'               => 'Progress Bar',

    'DOWNLOADED'                 => 'Downloaded',
    'DOWNLOADING_FILE'           => 'Downloading File',
    'DOWNLOAD_COUNT'             => 'Downloaded %d time',
    'DOWNLOAD_COUNTS'            => 'Downloaded %d times',
    'DOWNLOAD_COUNT_NONE'        => 'Not Downloaded yet',
    'VIEWED_COUNT'               => 'Viewed %d time',
    'VIEWED_COUNTS'              => 'Viewed %d times',
    'VIEWED_COUNT_NONE'          => 'Not Viewed yet',
    'FILE_COMMENT'               => 'File Comment',
    'QUOTE_DEPTH_EXCEEDED'       => 'You may embed Only %1$d Quotes within each other.',
    '_ADD_ATTACHMENT'            => 'Upload Attachment',
    '_ADD_ATTACHMENT_EXPLAIN'    => 'If you wish to Attach Files Enter the Details below.',
    '_ADD_FILE'                  => 'Add the File',
    'ADD_POLL'                   => 'Poll Creation',
    'ADD_POLL_EXPLAIN'           => 'If you DO NOT want to Add a Poll to your Topic Leave the Fields Blank.',
    'ALREADY_DELETED'            => 'Sorry but this Message has already been Deleted.',
    'ATTACH_QUOTA_REACHED'       => 'Sorry, the Board Attachment Quota has been Reached.',
    'ATTACH_SIG'                 => 'Attach a Signature (Signatures can be Altered via the UCP)',
    'ATTACHMENT'                 => 'Attachment',

    'ATTACHMENT_FUNCTIONALITY_DISABLED' => 'The Attachments Feature has been Disabled.',

    'BOOKMARK_ADDED'             => 'Bookmarked Topic Successfully.',
    'BOOKMARK_ERR'               => 'Bookmarking the Topic Failed. Please try again.',
    'BOOKMARK_REMOVED'           => 'Removed Bookmarked Topic Successfully.',
    'BOOKMARK_TOPIC'             => 'Bookmark Topic',
    'BOOKMARK_TOPIC_REMOVE'      => 'Remove from Bookmarks',
    'BUMPED_BY'                  => 'Last Bumped by %1$s on %2$s.',
    'BUMP_TOPIC'                 => 'Bump Topic',
    'CODE'                       => 'Code',
    'DELETE_TOPIC'               => 'Delete Topic',
    'DOWNLOAD_NOTICE'            => 'You DO NOT have the Required Permissions to View the Files Attached to this Post.',
    'EDITED_TIMES_TOTAL'         => 'Last edited by %1$s on %2$s, edited %3$d times in total.',
    'EDITED_TIME_TOTAL'          => 'Last edited by %1$s on %2$s, edited %3$d time in total.',
    'EMAIL_TOPIC'                => 'email Friend',
    'ERROR_NO_ATTACHMENT'        => 'The Selected Attachment DOES NOT Exist any more.',
    'FILE_NOT_FOUND_404'         => 'The File <strong>%s</strong> DOES NOT Exist.',
    'FORK_TOPIC'                 => 'Copy Topic',
    'LINKAGE_FORBIDDEN'          => 'You are NOT Authorised to View, Download or Link from/to this Site.',
    'LOGIN_NOTIFY_TOPIC'         => 'You have been Notified about this Topic, please Login to View it.',
    'LOGIN_VIEWTOPIC'            => 'The Board Requires you to be Registered and Logged in to View this Topic.',
    'MAKE_ANNOUNCE'              => 'Change to Announcement',
    'MAKE_GLOBAL'                => 'Change to Global',
    'MAKE_NORMAL'                => 'Change to Standard Topic',
    'MAKE_STICKY'                => 'Change to Sticky',
    'MAX_OPTIONS_SELECT'         => 'You may Select up to <strong>%d</strong> Options',
    'MAX_OPTION_SELECT'          => 'You may Select <strong>1</strong> Option',
    'MISSING_INLINE_ATTACHMENT'  => 'The Attachment <strong>%s</strong> is NO Longer Available',
    'MOVE_TOPIC'                 => 'Move Topic',
    'NO_ATTACHMENT_SELECTED'     => 'You haven\'t Selected an Attachment to Download or View.',
    'NO_NEWER_TOPICS'            => 'There are NO Newer Topics in this Forum.',
    'NO_OLDER_TOPICS'            => 'There are NO Older Topics in this Forum.',
    'NO_UNREAD_POSTS'            => 'There are NO New Unread Posts for this Topic.',
    'NO_VOTE_OPTION'             => 'You must Specify an Option when Voting.',
    'NO_VOTES'                   => 'NO Votes',
    'NO_NEW_POSTS'               => 'NO New Posts',
    'POLL_ENDED_AT'              => 'Poll Ended at %s',
    'POLL_RUN_TILL'              => 'Poll Runs until %s',
    'POLL_VOTED_OPTION'          => 'You Voted for this Option',
    'PRINT_TOPIC'                => 'Print View',
    'QUICK_MOD'                  => 'Quick Mod Tools',
    'QUOTE'                      => 'Quote',
    'POST_SUBJECT'               => 'Post Subject',
    'REPLY_TO_TOPIC'             => 'Reply to Topic',
    'RETURN_POST'                => '%sReturn to the Post%s',
    'SUBMIT_VOTE'                => 'Submit Vote',
    'TOTAL_VOTES'                => 'Total Votes',
    'UNLOCK_TOPIC'               => 'Unlock Topic',
    'LOCK_TOPIC'                 => 'Lock Topic',
    'SPLIT_TOPIC'                => 'Split Topic',
    'MERGE_POSTS'                => 'Merge Posts',
    'MERGE_TOPIC'                => 'Merge Topic',
    'VIEW_TOPIC_LOGS'            => 'View Logs',
    'DISPLAY_POSTS'              => 'Display Posts from previous',
    'LOCK_POST'                  => 'Lock Post',
    'LOCK_POST_EXPLAIN'          => 'Prevent Editing',
    'VIEW_INFO'                  => 'Post Details',
    'VIEW_NEXT_TOPIC'            => 'Next Topic',
    'VIEW_PREVIOUS_TOPIC'        => 'Previous Topic',
    'VIEW_RESULTS'               => 'View Results',
    'VIEW_TOPIC_POST'            => '1 Post',
    'VIEW_TOPIC_POSTS'           => '%d Posts',
    'VIEW_UNREAD_POST'           => 'First Unread Post',
    'VISIT_WEBSITE'              => 'WWW',
    'VOTE_SUBMITTED'             => 'Your Vote has been Cast.',
    'VOTE_CONVERTED'             => 'Changing Votes is NOT Supported for Converted Polls.',
    'BBCODE_A_HELP'              => 'Inline Uploaded Attachment: [attachment=]filename.ext[/attachment]',
    'BBCODE_B_HELP'              => 'Bold Text: [b]text[/b]',
    'BBCODE_C_HELP'              => 'Code Display: [code]code[/code]',
    'BBCODE_E_HELP'              => 'List: Add List Element',
    'BBCODE_F_HELP'              => 'Font Size: [size=85]Small Text[/size]',
    'BBCODE_IS_OFF'              => '%sBBCode%s is <em>OFF</em>',
    'BBCODE_IS_ON'               => '%sBBCode%s is <em>ON</em>',
    'BBCODE_I_HELP'              => 'Italic Text: [i]Text[/i]',
    'BBCODE_L_HELP'              => 'List: [list]Text[/list]',
    'BBCODE_LISTITEM_HELP'       => 'List Item: [*]Text[/*]',
    'BBCODE_O_HELP'              => 'Ordered List: [list=]Text[/list]',
    'BBCODE_P_HELP'              => 'Insert Image: [img]http://image_url[/img]',
    'BBCODE_Q_HELP'              => 'Quote Text: [quote]Text[/quote]',
    'BBCODE_S_HELP'              => 'Font Colour: [color=red]Text[/color]  Tip: you can also use color=#FF0000',
    'BBCODE_U_HELP'              => 'Underline Text: [u]Text[/u]',
    'BBCODE_W_HELP'              => 'Insert URL: [url]http://url[/url] or [url=http://url]URL text[/url]',
    'BBCODE_D_HELP'              => 'Flash: [flash=width,height]http://url[/flash]',
    'BUMP_ERROR'                 => 'You can NOT Bump this Topic so soon after the Last Post.',

    'CANNOT_DELETE_REPLIED'      => 'Sorry but you may Only Delete Posts which have NOT been Replied to.',
    'CANNOT_EDIT_POST_LOCKED'    => 'This Post has been Locked. You can NO Longer Edit that Post.',
    'CANNOT_EDIT_TIME'           => 'You can NO Longer Edit or Delete that Post.',
    'CANNOT_POST_ANNOUNCE'       => 'Sorry but you can NOT Post Announcements.',
    'CANNOT_POST_STICKY'         => 'Sorry but you can NOT Post Sticky Topics.',
    'CHANGE_TOPIC_TO'            => 'Change Topic Type to',
    'CLOSE_TAGS'                 => 'Close Tags',
    'CURRENT_TOPIC'              => 'Current Topic',

    'DELETE_FILE'                => 'Delete File',
    'DELETE_MESSAGE'             => 'Delete Message',
    'DELETE_MESSAGE_CONFIRM'     => 'Are you sure you want to Delete this Message?',
    'DELETE_OWN_POSTS'           => 'Sorry but you can Only Delete your Own Posts.',
    'DELETE_POST_CONFIRM'        => 'Are you sure you want to Delete this Post?',
    'DELETE_POST_WARN'           => 'Once Deleted the Post can NOT be Recovered',
    'DELETE_POST'                => 'Delete Post',
    'DISABLE_BBCODE'             => 'Disable BBCode',
    'DISABLE_MAGIC_URL'          => 'DO NOT Automatically Parse URLs',
    'DISABLE_SMILIES'            => 'Disable Smilies',
    'DISALLOWED_CONTENT'         => 'The Upload was Rejected because the Uploaded File was Identified as a possible Attack Vector.',
    'DISALLOWED_EXTENSION'       => 'The Extension %s is NOT Allowed.',

    'DRAFT_LOADED'               => 'Draft Loaded into Posting Area, you may want to Finish your Post now.<br />Your Draft will be Deleted after Submitting this Post.',

    'DRAFT_LOADED_PM'            => 'Draft Loaded into Message Area, you may want to Finish your Private Message now.<br />Your Draft will be Deleted after Submitting this Private Message.',

    'DRAFT_SAVED'                => 'Draft Successfully Saved.',
    'DRAFT_TITLE'                => 'Draft Title',

    'EDIT_REASON'                => 'Reason for Editing this Post',
    'EMPTY_FILEUPLOAD'           => 'The Uploaded File is Empty.',
    'EMPTY_MESSAGE'              => 'You must Enter a Message when Posting.',
    'EMPTY_REMOTE_DATA'          => 'File could NOT be Uploaded, please try Uploading the File Manually.',

    'FLASH_IS_OFF'               => '[flash] is <em>OFF</em>',
    'FLASH_IS_ON'                => '[flash] is <em>ON</em>',
    'FLOOD_ERROR'                => 'You can NOT make another Post so soon after your Last.',
    'FONT_COLOR'                 => 'Font Colour',
    'FONT_COLOR_HIDE'            => 'Hide Font Colour',
    'FONT_HUGE'                  => 'Huge',
    'FONT_LARGE'                 => 'Large',
    'FONT_NORMAL'                => 'Normal',
    'FONT_SIZE'                  => 'Font Size',
    'FONT_SMALL'                 => 'Small',
    'FONT_TINY'                  => 'Tiny',

    'TOTAL_ATTACHMENTS'          => 'Attachment(s)',
    'TOTAL_LOG'                  => '1 Log',
    'TOTAL_LOGS'                 => '%d Logs',
    'TOTAL_NO_PM'                => '0 Private Messages in total',
    'TOTAL_PM'                   => '1 Private Message in total',
    'TOTAL_PMS'                  => '%d Private Messages in total',
    'TOTAL_POSTS'                => 'Total Posts',
    'TOTAL_POSTS_OTHER'          => 'Total Posts <strong>%d</strong>',
    'TOTAL_POSTS_ZERO'           => 'Total Posts <strong>0</strong>',
    'TOPIC_REPORTED'             => 'This Topic has been Reported',
    'TOTAL_TOPICS_OTHER'         => 'Total Topics <strong>%d</strong>',
    'TOTAL_TOPICS_ZERO'          => 'Total Topics <strong>0</strong>',
    'TOTAL_USERS_OTHER'          => 'Total Members <strong>%d</strong>',
    'TOTAL_USERS_ZERO'           => 'Total Members <strong>0</strong>',
    'GENERAL_UPLOAD_ERROR'       => 'Could NOT Upload Attachment to %s.',
	'IMAGE_FILETYPE_INVALID'	=> 'Image file type %d for mimetype %s not supported.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Image file type mismatch: expected extension %1$s but extension %2$s given.',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'The image file you tried to attach is invalid.',
	'UNABLE_GET_IMAGE_SIZE'	=> 'It was not possible to determine the dimensions of the image. Please verify that the URL you entered is correct.',

    'IMAGES_ARE_OFF'             => '[img] is <em>OFF</em>',
    'IMAGES_ARE_ON'              => '[img] is <em>ON</em>',
    'INVALID_FILENAME'           => '%s is an Invalid Filename.',

    'LOAD'                       => 'Load',
    'LOAD_DRAFT'                 => 'Load Draft',
    'LOAD_DRAFT_EXPLAIN'         => 'Here you are able to Select the Draft you want to Continue Writing. Your Current Post will be Cancelled, ALL Current Post Contents will be Deleted. View, Edit and Delete Drafts within your User Control Panel.',

    'LOGIN_EXPLAIN_BUMP'         => 'You need to Login in order to Bump Topics within this Forum.',
    'LOGIN_EXPLAIN_DELETE'       => 'You need to Login in order to Delete Posts within this Forum.',
    'LOGIN_EXPLAIN_POST'         => 'You need to Login in order to Post within this Forum.',
    'LOGIN_EXPLAIN_QUOTE'        => 'You need to Login in order to Quote Posts within this Forum.',
    'LOGIN_EXPLAIN_REPLY'        => 'You need to Login in order to Reply to Topics within this Forum.',

    'MAX_FONT_SIZE_EXCEEDED'     => 'You may Only use Fonts up to Size %1$d.',
    'MAX_FLASH_HEIGHT_EXCEEDED'  => 'Your Flash Files may Only be up to %1$d Pixels High.',
    'MAX_FLASH_WIDTH_EXCEEDED'   => 'Your Flash Files may Only be up to %1$d Pixels Wide.',
    'MAX_IMG_HEIGHT_EXCEEDED'    => 'Your Images may Only be up to %1$d Pixels High.',
    'MAX_IMG_WIDTH_EXCEEDED'     => 'Your Images may Only be up to %1$d Pixels Wide.',

    'MESSAGE_BODY_EXPLAIN'       => 'Enter your Message Here, it may contain NO more than <strong>%d</strong> Characters.',
    'MESSAGE_DELETED'            => 'This Message has been Deleted Successfully.',
    'MORE_SMILIES'               => 'View more Smilies',

    'NOTIFY_REPLY'               => 'Notify me when a Reply is Posted',
    'NOT_UPLOADED'               => 'File could NOT be Uploaded.',
    'NO_DELETE_POLL_OPTIONS'     => 'You can NOT Delete Existing Poll Options.',
    'NO_PM_ICON'                 => 'NO PM Icon',
    'NO_POLL_TITLE'              => 'You have to Enter a Poll Title.',
    'NO_POST'                    => 'The Requested Post DOES NOT Exist.',
    'NO_POST_MODE'               => 'NO Post Mode Specified.',
    '_FILENAME'                  => 'Filename',
    '_FILE_COMMENT'              => 'File Comment',
    'ICON'                       => 'Icon',
    'MESSAGE_BODY'               => 'Message Body',
    'POST_ANNOUNCEMENT'          => 'Announce',
    'POST_STICKY'                => 'Sticky',
    'PREVIEW'                    => 'Preview',
    'NO_TOPIC_ICON'              => 'NO Icon',
    '_PREVIEW'                   => 'Preview',
    '_POSTED'                    => 'Posted',
    'POSTED'                     => 'Posted',
    '_POST_SUBJECT'              => 'Post Subject',
    'LOG_POST_EDITED'            => '<strong>Edited Post "%1$s" written by</strong><br />» %2$s',
    'VIEW_TOPIC'                 => 'View Topic',
    'FULL_EDITOR'                => 'Full Editor',
    'QUICKREPLY'                 => 'Quick Reply',
	'WRONG_FILESIZE'			=> 'The file is too big, maximum allowed size is %1$d %2$s.',
	'WRONG_SIZE'				=> 'The image must be at least %1$s wide, %2$s high and at most %3$s wide and %4$s high. The submitted image is %5$s wide and %6$s high.',
	'EMPTY_FILEUPLOAD'			=> 'The uploaded file is empty.',
	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded.',
	'PHP_UPLOAD_STOPPED'		=> 'A PHP extension has stopped the file upload.',
	'URL_INVALID'				=> 'The URL you specified is invalid.',
	'URL_NOT_FOUND'				=> 'The file specified could not be found.',
	'URL_IS_OFF'				=> '[url] is <em>OFF</em>',
	'URL_IS_ON'					=> '[url] is <em>ON</em>',
	'PHP_TEMP_FOLDER_NF'		=> 'Temporary folder could not be found. Please check your PHP installation.'
));

$ignore_words = array(
	'a',
	'torrent',
	'about',
	'after',
	'ago',
	'all',
	'almost',
	'along',
	'alot',
	'also',
	'am',
	'an',
	'and',
	'answer',
	'any',
	'anybody',
	'anybody\'s',
	'anywhere',
	'are',
	'aren\'t',
	'around',
	'as',
	'ask',
	'asked',
	'at',
	'bad',
	'be',
	'because',
	'been',
	'before',
	'being',
	'best',
	'better',
	'between',
	'big',
	'btw',
	'but',
	'by',
	'can',
	'cant',
	'come',
	'could',
	'couldn\'t',
	'day',
	'days',
	'days',
	'did',
	'didn\'t',
	'do',
	'does',
	'doesn\'t',
	'don\t',
	'down',
	'each',
	'etc',
	'either',
	'else',
	'even',
	'ever',
	'every',
	'everybody',
	'everybody\'s',
	'everyone',
	'far',
	'find',
	'for',
	'found',
	'from',
	'get',
	'go',
	'going',
	'gone',
	'good',
	'got',
	'gotten',
	'had',
	'has',
	'have',
	'haven\'t',
	'having',
	'her',
	'here',
	'hers',
	'him',
	'his',
	'home',
	'how',
	'hows',
	'href',
	'I',
	'I\'ve',
	'if',
	'in',
	'ini',
	'into',
	'is',
	'isn\'t',
	'it',
	'its',
	'its',
	'just',
	'know',
	'large',
	'less',
	'like',
	'liked',
	'little',
	'looking',
	'look',
	'looked',
	'looking',
	'lot',
	'maybe',
	'many',
	'me',
	'more',
	'most',
	'much',
	'must',
	'mustn\'t',
	'my',
	'near',
	'need',
	'never',
	'new',
	'news',
	'no',
	'none',
	'not',
	'nothing',
	'now',
	'of',
	'off',
	'often',
	'old',
	'on',
	'once',
	'only',
	'oops',
	'or',
	'other',
	'our',
	'ours',
	'out',
	'over',
	'page',
	'please',
	'put',
	'question',
	'questions',
	'questioned',
	'quote',
	'rather',
	'really',
	'recent',
	'said',
	'saw',
	'say',
	'says',
	'she',
	'see',
	'sees',
	'should',
	'sites',
	'small',
	'so',
	'some',
	'something',
	'sometime',
	'somewhere',
	'soon',
	'take',
	'than',
	'true',
	'thank',
	'that',
	'that\'d',
	'that\'s',
	'the',
	'their',
	'theirs',
	'there\'s',
	'theirs',
	'them',
	'then',
	'there',
	'these',
	'they',
	'they\'ll',
	'they\'d',
	'they\'re',
	'this',
	'those',
	'though',
	'through',
	'thus',
	'time',
	'times',
	'to',
	'too',
	'under',
	'until',
	'untrue',
	'up',
	'upon',
	'use',
	'users',
	'version',
	'very',
	'via',
	'want',
	'was',
	'way',
	'we',
	'well',
	'went',
	'were',
	'weren\'t',
	'what',
	'when',
	'where',
	'which',
	'who',
	'whom',
	'whose',
	'why',
	'wide',
	'will',
	'with',
	'within',
	'without',
	'wont',
	'world',
	'worse',
	'worst',
	'would',
	'wrote',
	'www',
	'yes',
	'yet',
	'you',
	'you\'d',
	'you\'ll',
	'your',
	'you\'re',
	'yours',
	'AFAIK',
	'IIRC',
	'LOL',
	'ROTF',
	'ROTFLMAO',
	'YMMV',
);

?>