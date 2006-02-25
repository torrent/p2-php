<?php
// p2 - �f�U�C���p �ݒ�t�@�C��

/* vim: set fileencoding=cp932 autoindent noexpandtab ts=4 sw=4 sts=4 fdm=marker: */
/* mi: charset=Shift_JIS */

/*
	�R�����g�`����() ���̓f�t�H���g�l
	�ݒ�� style/*_css.inc �ƘA��
*/
 
//======================================================================
// �f�U�C���J�X�^�}�C�Y
//======================================================================

$STYLE['a_underline_none'] = "1"; // ("2") �����N�ɉ������i����:0, ���Ȃ�:1, �X���^�C�g���ꗗ�������Ȃ�:2�j

// �t�H���g ======================================================

if(strstr($_SERVER['HTTP_USER_AGENT'], "Mac")){
	/* Mac�p�t�H���g�t�@�~���[*/
	if(strstr($_SERVER['HTTP_USER_AGENT'], "AppleWebKit")){ /* �u���E�U�� Mac�� Safari���� WebKit���g���Ă�����̂Ȃ� */
		$STYLE['fontfamily'] = array("Myriad Pro", "Lucida Grande", "Hiragino Maru Gothic Pro"); // ("Hiragino Kaku Gothic Pro") ��{�̃t�H���g for Safari
		$STYLE['fontfamily_bold'] = ""; // ("") ��{�{�[���h�p�t�H���g for Safari�i���ʂ̑�����葾���������ꍇ��"Hiragino Kaku Gothic Std"�j
		if (!strstr($_SERVER['HTTP_USER_AGENT'], "AppleWebKit/4")){
			$STYLE['fontfamily_bold'] = "HiraKakuPro-W6";
		}
	} else {
		$STYLE['fontfamily'] = array("Myriad Pro", "Lucida Grande", "�q���M�m�ۃS Pro W4"); // ("�q���M�m�p�S Pro W3") ��{�̃t�H���g
		$STYLE['fontfamily_bold'] = "�q���M�m�p�S Pro W6"; // ("�q���M�m�p�S Pro W6") ��{�{�[���h�p�t�H���g�i���ʂɑ����ɂ������ꍇ�͎w�肵�Ȃ�("")�j
	}
	/* Mac�p�t�H���g�T�C�Y */
	$STYLE['fontsize'] = "12px"; // ("12px") ��{�t�H���g�̑傫��
	$STYLE['menu_fontsize'] = "11px"; // ("11px") ���j���[�̃t�H���g�̑傫��
	$STYLE['sb_fontsize'] = "11px"; // ("11px") �X���ꗗ�̃t�H���g�̑傫��
	$STYLE['read_fontsize'] = "12px"; // ("12px") �X���b�h���e�\���̃t�H���g�̑傫��
	$STYLE['respop_fontsize'] = "11px"; // ("11px") ���p���X�|�b�v�A�b�v�\���̃t�H���g�̑傫��
	$STYLE['infowin_fontsize'] = "11px"; // ("11px") ���E�B���h�E�̃t�H���g�̑傫��
	$STYLE['form_fontsize'] = "11px"; // ("11px") input, option, select �̃t�H���g�̑傫���iCamino�������j
}else{
	/* Mac�ȊO�̃t�H���g�t�@�~���[*/
	$STYLE['fontfamily'] = "�l�r �o�S�V�b�N"; // ("�l�r �o�S�V�b�N") ��{�̃t�H���g
	/* Mac�ȊO�̃t�H���g�T�C�Y */
	$STYLE['fontsize'] = "12px"; // ("12px") ��{�t�H���g�̑傫��
	$STYLE['menu_fontsize'] = "12px"; // ("12px") ���j���[�̃t�H���g�̑傫��
	$STYLE['sb_fontsize'] = "12px"; // ("12px") �X���ꗗ�̃t�H���g�̑傫��
	$STYLE['read_fontsize'] = "13px"; // ("13px") �X���b�h���e�\���̃t�H���g�̑傫��
	$STYLE['respop_fontsize'] = "11px"; // ("12px") ���p���X�|�b�v�A�b�v�\���̃t�H���g�̑傫��
	$STYLE['infowin_fontsize'] = "12px"; // ("12px") ���E�B���h�E�̃t�H���g�̑傫��
	$STYLE['form_fontsize'] = "12px"; // ("12px") input, option, select �̃t�H���g�̑傫��
}

//======================================================================
// �F�ʂ̐ݒ�
//======================================================================
// ���w��("")�̓u���E�U�̃f�t�H���g�F�A�܂��͊�{�w��ƂȂ�܂��B
// �D��x�́A�ʃy�[�W�w�� �� ��{�w�� �� �g�p�u���E�U�̃f�t�H���g�w�� �ł��B

// ��{(style) =======================
$STYLE['bgcolor'] = "#FFFFFF"; // ("#ffffff") ��{ �w�i�F
$STYLE['background'] = ""; // ("") ��{ �w�i�摜
$STYLE['textcolor'] = "#000000"; // ("#000") ��{ �e�L�X�g�F
$STYLE['acolor'] = "#228B22"; // ("") ��{ �����N�F
$STYLE['acolor_v'] = "#3CB371"; // ("") ��{ �K��ς݃����N�F�B
$STYLE['acolor_h'] = "#32AF32"; // ("#09c") ��{ �}�E�X�I�[�o�[���̃����N�F

$STYLE['fav_color'] = "#195EFF"; // ("#999") ���C�Ƀ}�[�N�̐F

// ���j���[(menu) ====================
$STYLE['menu_bgcolor'] = "#FEDFED"; //("#fff") ���j���[�̔w�i�F
$STYLE['menu_color'] = "#000000"; //("#000") menu �e�L�X�g�F
$STYLE['menu_background'] = ""; //("") ���j���[�̔w�i�摜
$STYLE['menu_cate_color'] = "#000000"; // ("#333") ���j���[�J�e�S���[�̐F

$STYLE['menu_acolor_h'] = "#195EFF"; // ("#09c") ���j���[ �}�E�X�I�[�o�[���̃����N�F

$STYLE['menu_ita_color'] = "#000000"; // ("") ���j���[ �� �����N�F
$STYLE['menu_ita_color_v'] = "#686A6E"; // ("") ���j���[ �� �K��ς݃����N�F
$STYLE['menu_ita_color_h'] = "#195EFF"; // ("#09c") ���j���[ �� �}�E�X�I�[�o�[���̃����N�F

$STYLE['menu_newthre_color'] = "#98AAC4";	// ("hotpink") menu �V�K�X���b�h���̐F
$STYLE['menu_newres_color'] = "#98AAC4";	// ("#ff3300") menu �V�����X���̐F

// �X���ꗗ(subject) ====================
$STYLE['sb_bgcolor'] = "#E3E3E3"; // ("#fff") subject �w�i�F
$STYLE['sb_background'] = ""; // ("") subject �w�i�摜
$STYLE['sb_color'] = "#000000";  // ("#000") subject �e�L�X�g�F

$STYLE['sb_acolor'] = "#000000"; // ("#000") subject �����N�F
$STYLE['sb_acolor_v'] = "#000000"; // ("#000") subject �K��ς݃����N�F
$STYLE['sb_acolor_h'] = "#68A9EA"; // ("#09c") subject �}�E�X�I�[�o�[���̃����N�F

$STYLE['sb_th_bgcolor'] = "#FA1A3A"; // ("#d6e7ff") subject �e�[�u���w�b�_�w�i�F
$STYLE['sb_th_background'] = ""; // ("") subject �e�[�u���w�b�_�w�i�摜
$STYLE['sb_tbgcolor'] = "#FFFFFF"; // ("#fff") subject �e�[�u�����w�i�F0
$STYLE['sb_tbgcolor1'] = "#F4F4F4"; // ("#eef") subject �e�[�u�����w�i�F1
$STYLE['sb_tbackground'] = ""; // ("") subject �e�[�u�����w�i�摜0
$STYLE['sb_tbackground1'] = ""; // ("") subject �e�[�u�����w�i�摜1

$STYLE['sb_ttcolor'] = "#000000"; // ("#333") subject �e�[�u���� �e�L�X�g�F
$STYLE['sb_tacolor'] = "#000000"; // ("#000") subject �e�[�u���� �����N�F
$STYLE['sb_tacolor_h'] = "#68A9EA"; // ("#09c")subject �e�[�u���� �}�E�X�I�[�o�[���̃����N�F

$STYLE['sb_order_color'] = "#4B0082"; // ("#111") �X���ꗗ�̔ԍ� �����N�F

$STYLE['thre_title_color'] = "#000000"; // ("#000") subject �X���^�C�g�� �����N�F
$STYLE['thre_title_color_v'] = "#000000"; // ("#999") subject �X���^�C�g�� �K��ς݃����N�F
$STYLE['thre_title_color_h'] = "#68A9EA"; // ("#09c") subject �X���^�C�g�� �}�E�X�I�[�o�[���̃����N�F

$STYLE['sb_tool_bgcolor'] = "#000000"; // ("#8cb5ff") subject �c�[���o�[�̔w�i�F
$STYLE['sb_tool_background'] = "./skin/flat/header2.png"; // ("") subject �c�[���o�[�̔w�i�摜
$STYLE['sb_tool_border_color'] = "#3E3E3E"; // ("#6393ef") subject �c�[���o�[�̃{�[�_�[�F
$STYLE['sb_tool_color'] = "#FFFFFF"; // ("#d6e7ff") subject �c�[���o�[�� �����F
$STYLE['sb_tool_acolor'] = "#FFFFFF"; // ("#d6e7ff") subject �c�[���o�[�� �����N�F
$STYLE['sb_tool_acolor_v'] = "#FFFFFF"; // ("#d6e7ff") subject �c�[���o�[�� �K��ς݃����N�F
$STYLE['sb_tool_acolor_h'] = "#E3E3E3"; // ("#fff") subject �c�[���o�[�� �}�E�X�I�[�o�[���̃����N�F
$STYLE['sb_tool_sepa_color'] = "#E3E3E3"; // ("#000") subject �c�[���o�[�� �Z�p���[�^�����F

$STYLE['sb_now_sort_color'] = "#FAFA23";	// ("#1144aa") subject ���݂̃\�[�g�F

$STYLE['sb_thre_title_new_color'] = "#FF4500";	// ("red") subject �V�K�X���^�C�g���̐F

$STYLE['sb_tool_newres_color'] = "#FF4500"; // ("#ff3300") subject �c�[���o�[�� �V�K���X���̐F
$STYLE['sb_newres_color'] = "#FF4500"; // ("#ff3300") subject �V�����X���̐F

// �X�����e(read) ====================
$STYLE['read_bgcolor'] = "#FFFFFF"; // ("#efefef") �X���b�h�\���̔w�i�F
$STYLE['read_background'] = ""; // ("") �X���b�h�\���̔w�i�摜
$STYLE['read_color'] = "#000000"; // ("#000") �X���b�h�\���̃e�L�X�g�F

$STYLE['read_acolor'] = "#FF4500"; // ("") �X���b�h�\�� �����N�F
$STYLE['read_acolor_v'] = "#FF7F50"; // ("") �X���b�h�\�� �K��ς݃����N�F
$STYLE['read_acolor_h'] = "#FFA500"; // ("#09c") �X���b�h�\�� �}�E�X�I�[�o�[���̃����N�F

$STYLE['read_newres_color'] = "#FF4500"; // ("#ff3300")  �V�����X�Ԃ̐F

$STYLE['read_thread_title_color'] = "#198EFF"; // ("#f40") �X���b�h�^�C�g���F
$STYLE['read_name_color'] = "#32AF32"; // ("#1144aa") ���e�҂̖��O�̐F
$STYLE['read_mail_color'] = "#32AF32"; // ("") ���e�҂�mail�̐F ex)"#a00000"
$STYLE['read_mail_sage_color'] = "#32CD32"; // ("") sage�̎��̓��e�҂�mail�̐F ex)"#00b000"
$STYLE['read_ngword'] = "#E3E3E3"; // ("#bbbbbb") NG���[�h�̐F

// �������[�h ================
$SYTLE['live_b_width'] = "1px"; // ("1px") �������[�h�A�{�[�_�[��
$SYTLE['live_b_color'] = "#008080"; // ("#888") �������[�h�A�{�[�_�[�F
$SYTLE['live_b_style'] = "dashed"; // ("solid") �������[�h�A�{�[�_�[�`��

// ���X�������݃t�H�[�� ================
$STYLE['post_pop_size'] = "610,350"; // ("610,350") ���X�������݃|�b�v�A�b�v�E�B���h�E�̑傫���i��,�c�j
$STYLE['post_msg_rows'] = 10; // (10) ���X�������݃t�H�[���A���b�Z�[�W�t�B�[���h�̍s��
$STYLE['post_msg_cols'] = 70; // (70) ���X�������݃t�H�[���A���b�Z�[�W�t�B�[���h�̌���

// ���X�|�b�v�A�b�v ====================
$STYLE['respop_color'] = "#000000"; // ("#000") ���X�|�b�v�A�b�v�̃e�L�X�g�F
$STYLE['respop_bgcolor'] = "#F9F9F9"; // ("#ffffcc") ���X�|�b�v�A�b�v�̔w�i�F
$STYLE['respop_background'] = ""; // ("") ���X�|�b�v�A�b�v�̔w�i�摜
$STYLE['respop_b_width'] = "1px"; // ("1px") ���X�|�b�v�A�b�v�̃{�[�_�[��
$STYLE['respop_b_color'] = "#008080"; // ("#000000") ���X�|�b�v�A�b�v�̃{�[�_�[�F
$STYLE['respop_b_style'] = "solid"; // ("solid") ���X�|�b�v�A�b�v�̃{�[�_�[�`��

$STYLE['info_pop_size'] = "600,380"; // ("600,380") ���|�b�v�A�b�v�E�B���h�E�̑傫���i��,�c�j

// �X�^�C���̏㏑�� ====================
$MYSTYLE['read']['body']['margin'] = "0";
$MYSTYLE['read']['body']['padding'] = "5px 10px";
$MYSTYLE['read']['form#header']['margin'] = "-5px -10px 2px -10px";
$MYSTYLE['read']['form#header']['padding'] = "2px 10px 5px 10px";
$MYSTYLE['read']['form#header']['line-height'] = "100%";
$MYSTYLE['read']['form#header']['vertical-align'] = "middle";
$MYSTYLE['read']['form#header']['background'] = "transparent url('./skin/flat/header2.png') bottom repeat-x";
$MYSTYLE['read']['form#header']['border-bottom'] = "1px #3E3E3E solid";
$MYSTYLE['read']['form#header']['color'] = "#FFFFFF";
$MYSTYLE['read']['div#kakiko']['border-top'] = "1px #CACACA solid";
$MYSTYLE['read']['div#kakiko']['margin'] = "5px -10px -5px -10px";
$MYSTYLE['read']['div#kakiko']['padding'] = "5px 10px";
$MYSTYLE['read']['div#kakiko']['background'] = "#E3E3E3";

$MYSTYLE['subject']['table.toolbar']['height'] = "30px";
$MYSTYLE['subject']['table.toolbar']['background-position'] = "top";
$MYSTYLE['subject']['table.toolbar']['background-repeat'] = "repeat-x";
$MYSTYLE['subject']['table.toolbar']['border-left'] = "none";
$MYSTYLE['subject']['table.toolbar']['border-right'] = "none";
$MYSTYLE['subject']['table.toolbar *']['padding'] = "0";
$MYSTYLE['subject']['table.toolbar *']['line-height'] = "100%";
$MYSTYLE['subject']['table.toolbar td']['padding'] = "1px";
$MYSTYLE['subject']['tr.tableheader td']['color'] = "#F9F9F9";
$MYSTYLE['subject']['tr.tableheader a']['color'] = "#F9F9F9";
$MYSTYLE['subject']['tr.tableheader a:hover']['color'] = "#E3E3E3";
$MYSTYLE['subject']['tr#pager td']['color'] = "#F9F9F9";
$MYSTYLE['subject']['tr#pager a']['color'] = "#F9F9F9";
$MYSTYLE['subject']['tr#pager a:hover']['color'] = "#E3E3E3";

$MYSTYLE['iv2']['div#toolbar']['background'] = "#000000 url('./skin/flat/header2_l.png') top repeat-x";
$MYSTYLE['iv2']['div#toolbar td']['color'] = "#FFFFFF";

?>