<?php
/* vim: set fileencoding=cp932 ai et ts=4 sw=4 sts=4 fdm=marker: */
/* mi: charset=Shift_JIS */
/**
 * tGrep - �X�}�[�g���X�g�𑀍�
 */

// {{{ p2��{�ݒ�ǂݍ���&�F��

require_once 'conf/conf.inc.php';

$_login->authorize();

// }}}
// {{{ �����p�̃p�����[�^������

unset($_GET['Q'], $_GET['S'], $_GET['B'], $_GET['C'], $_GET['O'], $_GET['N'], $_GET['P']);

// }}}
// {{{ �ҏW����t�@�C����ݒ�

if (isset($_GET['file'])) {
    switch ($_GET['file']) {
    case 'quick':
        $list_file = $_conf['expack.tgrep.quick_file'];
        $include_file = P2EX_LIBRARY_DIR . '/tgrep/menu_quick.inc.php';
        break;
    case 'recent':
        $list_file = $_conf['expack.tgrep.recent_file'];
        $include_file = P2EX_LIBRARY_DIR . '/tgrep/menu_recent.inc.php';
        break;
    default:
        if ($_conf['ktai']) {
            include 'tgrepc.php';
        }
        exit;
    }
} else {
    if ($_conf['ktai']) {
        include 'tgrepc.php';
    }
    exit;
}

// }}}
// {{{ ���X�g���X�V

if (!empty($_GET['query'])) {
    $purge = !empty($_GET['purge']);
    $query = preg_replace('/[\r\n\t]/', ' ', trim($_GET['query']));

    FileCtl::make_datafile($list_file, $_conf['expack.tgrep.file_perm']);
    $tgrep_list = array_filter(array_map('trim', (array) @file($list_file)), 'strlen');

    if ($purge) {
        $tgrep_tmp_list = $tgrep_list;
        $tgrep_list = array();
        foreach ($tgrep_tmp_list as $tgrep_tmp_query) {
            if ($tgrep_tmp_query != $query) {
                $tgrep_list[] = $tgrep_tmp_query;
            }
        }
    } else {
        array_unshift($tgrep_list, $query);
    }

    $tgrep_list = array_unique($tgrep_list);
    $tgrep_data = implode("\n", $tgrep_list) . "\n";
    if (FileCtl::file_write_contents($list_file, $tgrep_data) === false) {
        die("Error: cannot write file.");
    }
} elseif (!empty($_GET['clear']) && file_exists($list_file)) {
    $fp = @fopen($list_file, 'w');
    if (!$fp) {
        die("Error: cannot write file.");
    }
    @flock($fp, LOCK_EX);
    ftruncate($fp, 0);
    @flock($fp, LOCK_UN);
    fclose($fp);
}

// }}}
// {{{ �s�v�ɂȂ����ϐ������

unset($_GET['clear'], $_GET['file'], $_GET['purge'], $_GET['query'],
    $purge, $query, $tgrep_list, $tgrep_data, $tgrep_tmp_list, $tgrep_tmp_query, $fp);

// }}}
// {{{ �o��

P2Util::header_nocache();
if ($_conf['ktai']) {
    include 'tgrepc.php';
} else {
    define('TGREP_SMARTLIST_PRINT_ONLY_LINKS', 1);
    ob_start();
    include $include_file;
    $buf = ob_get_clean();
    if (P2Util::isBrowserSafariGroup()) {
        header('Content-Type: application/xml; charset=UTF-8');
        echo '<' . '?xml version="1.0" encoding="UTF-8" ?' . '>' . "\n";
        echo mb_convert_encoding($buf, 'UTF-8', 'SJIS-win');
    } else {
        header('Content-Type: text/html; charset=Shift_JIS');
        echo $buf;
    }
}

// }}}
?>