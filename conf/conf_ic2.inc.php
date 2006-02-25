<?php
// vim: set fileencoding=cp932 ai et ts=4 sw=4 sts=4 fdm=marker:
// mi: charset=Shift_JIS

/**
 * ImageCache2 �ݒ�t�@�C��
 */

// {{{ �S��

// �L���b�V���ۑ��f�B���N�g���̃p�X
$_conf['expack.ic2.general.cachedir'] = "./cache";

// �R���p�C���σe���v���[�g�ۑ��f�B���N�g����
// �icachedir�̃T�u�f�B���N�g���j
$_conf['expack.ic2.general.compiledir'] = "compile";

// DSN (DB�ɐڑ����邽�߂̃f�[�^�\�[�X��)
// @link http://jp.pear.php.net/manual/ja/package.database.db.intro-dsn.php
// ��1 SQLite:      "sqlite:///./cache/imgcache.sqlite"
// ��2 PostgreSQL:  "pgsql://username:password@localhost:5432/database"
// ��3 MySQL:       "mysql://username:password@localhost:3306/database"
// ��1: username,password,database�͎��ۂ̂��̂Ɠǂݑւ���B
// ��2: MySQL,PosrgreSQL�ł͗\�߃f�[�^�x�[�X������Ă����B
$_conf['expack.ic2.general.dsn'] = "";

// DB�Ŏg���e�[�u����
$_conf['expack.ic2.general.table'] = "imgcache";

// �폜�ς݁��ă_�E�����[�h���Ȃ��摜���X�g�̃e�[�u����
$_conf['expack.ic2.general.blacklist_table'] = "ic2_blacklist";

// �G���[���L�^����e�[�u����
$_conf['expack.ic2.general.error_table'] = "ic2_errors";

// �G���[���L�^����ő�̍s��
$_conf['expack.ic2.general.error_log_num'] = 100;

// �摜��URL���\��ꂽ�X���b�h�̃^�C�g���������ŋL�^���� (off:0;on:1)
$_conf['expack.ic2.general.automemo'] = 1;

// �摜����������v���O���� (GD | ImageMagick | ImageMagick6)
// GD��PHP�̃C���[�W�֐��𗘗p�AImageMagick(6)�͊O���v���O�����𗘗p
// �������߂�ImageMagick6
$_conf['expack.ic2.general.driver'] = "GD";

// ImageMagick�̃p�X�iconvert������g�f�B���N�g���h�̃p�X�j
// httpd�̊��ϐ��Ńp�X���ʂ��Ă���Ȃ��̂܂܂ł悢
// �p�X�𖾎��I�Ɏw�肷��ꍇ�́A�X�y�[�X������ƃT���l�C�����쐬�ł��Ȃ��̂Œ���
$_conf['expack.ic2.general.magick'] = "";

// ���߉摜���T���l�C��������ۂ̔w�i�F (GD�̂ݗL���A16�i6���Ŏw��)
$_conf['expack.ic2.general.bgcolor'] = "#FFFFFF";

// �g�тł��T���l�C�����C�����C���\������ (off:0;on:1)
// ���̂Ƃ��̑傫����PC�Ɠ���
$_conf['expack.ic2.general.inline'] = 0;

// �g�їp�̉摜��\������Ƃ�Location �w�b�_���g���ă��_�C���N�g���� (off:0;on:1)
// off�Ȃ�PHP�œK�؂�Content-Type�w�b�_�Ɖ摜���o�͂���
$_conf['expack.ic2.general.redirect'] = 1;

// }}}
// {{{ �f�[�^�L���b�V��

// �f�[�^���L���b�V�����邽�߂̃e�[�u����
$_conf['expack.ic2.cache.table'] = "datacache";

// �L���b�V���̗L�������i�b�j
// 1����=3600
// 1��=86400
// 1�T��=604800
$_conf['expack.ic2.cache.expires'] = 3600;

// �L���b�V������f�[�^�̍ő�ʁi�o�C�g�j
$_conf['expack.ic2.cache.highwater'] = 2048000;

// �L���b�V�������f�[�^��highwater�𒴂����Ƃ��A���̒l�܂Ō��炷�i�o�C�g�j
$_conf['expack.ic2.cache.lowwater'] = 1536000;

// }}}
// {{{ �ꗗ

// �y�[�W�^�C�g��
$_conf['expack.ic2.viewer.title'] = "ImageCache2::Viewer";

// �I���W�i���摜��������Ȃ����R�[�h�������ŏ������� (off:0;on:1)
$_conf['expack.ic2.viewer.delete_src_not_exists'] = 0;

// �\���p�ɒ��������摜�����L���b�V�� (off:0;on:1)
// �L���b�V���̗L�������Ȃǂ́u�f�[�^�L���b�V���v�̍��Őݒ�
$_conf['expack.ic2.viewer.cache'] = 0;

// �d���摜���ŏ��Ƀq�b�g����1�������\�� (off:0;on:1)
// �T�u�N�G�����g�����߃o�[�W����4.1������MySQL�ł͖���
$_conf['expack.ic2.viewer.unique'] = 0;

// Exif����\�� (off:0;on:1)
$_conf['expack.ic2.viewer.exif'] = 0;

// --�ȉ��̐ݒ�͂̓f�t�H���g�l�ŁA�c�[���o�[�ŕύX�ł���--

// 1�y�[�W������̗�
$_conf['expack.ic2.viewer.cols'] = 8;

// 1�y�[�W������̍s��
$_conf['expack.ic2.viewer.rows'] = 5;

// 1�y�[�W������̉摜���i�g�їp�j
$_conf['expack.ic2.viewer.inum'] = 10;

// �������l (-1 ~ 5)
$_conf['expack.ic2.viewer.threshold'] = 0;

// ���ёւ�� (time | uri | date_uri | name | size | width | height | pixels)
$_conf['expack.ic2.viewer.order'] = "time";

// ���ёւ����� (ASC | DESC)
$_conf['expack.ic2.viewer.sort'] = "DESC";

// �����t�B�[���h (uri | name | memo)
$_conf['expack.ic2.viewer.field'] = "memo";

// }}}
// {{{ �Ǘ�

// �y�[�W�^�C�g��
$_conf['expack.ic2.manager.title'] = "ImageCache2::Manager";

// �����L������1�s������̔��p������
$_conf['expack.ic2.manager.cols'] = 40;

// �����L�����̍s��
$_conf['expack.ic2.manager.rows'] = 5;

// }}}
// {{{ �_�E�����[�h

// �y�[�W�^�C�g��
$_conf['expack.ic2.getter.title'] = "ImageCache2::Getter";

// �T�[�o�ɐڑ�����ۂɃ^�C���A�E�g����܂ł̎��ԁi�b�j
$_conf['expack.ic2.getter.conn_timeout'] = 60;

// �_�E�����[�h���^�C���A�E�g����܂ł̎��ԁi�b�j
$_conf['expack.ic2.getter.read_timeout'] = 60;

// �G���[���O�ɂ���摜�̓_�E�����[�h�����݂Ȃ� (no:0;yes:1)
$_conf['expack.ic2.getter.checkerror'] = 1;

// �f�t�H���g��URL+.html�̋U���t�@���𑗂� (no:0;yes:1)
$_conf['expack.ic2.getter.sendreferer'] = 0;

// sendreferer = 0 �̂Ƃ��A��O�I�Ƀ��t�@���𑗂�z�X�g�i�J���}��؂�j
$_conf['expack.ic2.getter.refhosts'] = "";

// sendreferer = 1 �̂Ƃ��A��O�I�Ƀ��t�@���𑗂�Ȃ��z�X�g�i�J���}��؂�j
$_conf['expack.ic2.getter.norefhosts'] = "";

// �������ځ[��̃z�X�g�i�J���}��؂�j
$_conf['expack.ic2.getter.reject_hosts'] = "rotten.com,shinrei.net";

// �������ځ[��URL�̐��K�\��
$_conf['expack.ic2.getter.reject_regex'] = "";

// �E�B���X�X�L���������� (no:0;clamscan:1;clamdscan:2)
// �iClam AntiVirus�𗘗p�j
// ImageCache2��蓮�X�L�����ɂ���ClamAV���g��Ȃ��Ȃ�1��clamscan�̕�������Ǝv����
$_conf['expack.ic2.getter.virusscan'] = 0;

// ClamAV�̃p�X�iclam(d)scan������g�f�B���N�g���h�̃p�X�j
// httpd�̊��ϐ��Ńp�X���ʂ��Ă���Ȃ��̂܂܂ł悢
// �p�X�𖾎��I�Ɏw�肷��ꍇ�́A�X�y�[�X������ƃE�B���X�X�L�����ł��Ȃ��̂Œ���
$_conf['expack.ic2.getter.clamav'] = "";

// }}}
// {{{ �v���L�V

// �摜�̃_�E�����[�h�Ƀv���L�V���g�� (no:0;yes:1)
$_conf['expack.ic2.proxy.enabled'] = 0;

// �z�X�g
$_conf['expack.ic2.proxy.host'] = "";

// �|�[�g
$_conf['expack.ic2.proxy.port'] = "";

// ���[�U��
$_conf['expack.ic2.proxy.user'] = "";

// �p�X���[�h
$_conf['expack.ic2.proxy.pass'] = "";

// }}}
// {{{ �\�[�X

// �ۑ��p�T�u�f�B���N�g����
$_conf['expack.ic2.source.name'] = "src";

// �L���b�V������ő�f�[�^�T�C�Y�i������z����Ƌ֎~���X�g�s���A0�͖������j
$_conf['expack.ic2.source.maxsize'] = 10000000;

// �L���b�V������ő�̕��i��ɓ������j
$_conf['expack.ic2.source.maxwidth'] = 4000;

// �L���b�V������ő�̍����i�V�j
$_conf['expack.ic2.source.maxheight'] = 4000;

// }}}
// {{{ �T���l�C��

// �ݒ薼�i���ۑ��p�T�u�f�B���N�g�����j
$_conf['expack.ic2.thumb1.name'] = 6464;

// �T���l�C���̍ő啝�i���̐����j
$_conf['expack.ic2.thumb1.width'] = 64;

// �T���l�C���̍ő卂���i���̐����j
$_conf['expack.ic2.thumb1.height'] = 64;

// �T���l�C����JPEG�i���i���̐����A1~100�ȊO�ɂ����PNG�j
$_conf['expack.ic2.thumb1.quality'] = 80;

// }}}
// {{{ �g�уt���X�N���[��

// �ݒ薼
$_conf['expack.ic2.thumb2.name'] = "qvga_v";

// �T���l�C���̍ő啝
$_conf['expack.ic2.thumb2.width'] = 240;

// �T���l�C���̍ő卂��
$_conf['expack.ic2.thumb2.height'] = 320;

// �T���l�C����JPEG�i��
$_conf['expack.ic2.thumb2.quality'] = 80;

// }}}
// {{{ ���ԃC���[�W

// �ݒ薼
$_conf['expack.ic2.thumb3.name'] = "vga";

// �T���l�C���̍ő啝
$_conf['expack.ic2.thumb3.width'] = 640;

// �T���l�C���̍ő卂��
$_conf['expack.ic2.thumb3.height'] = 480;

// �T���l�C����JPEG�i��
$_conf['expack.ic2.thumb3.quality'] = 80;

// }}}
?>