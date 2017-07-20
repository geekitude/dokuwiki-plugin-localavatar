<?php
/**
 * DokuWiki Plugin Local Avatar (Helper Component)
 *
 * @license GPL 3 http://www.gnu.org/licenses/gpl-3.0.html
 * @author  Simon Delage <simon.geekitude@gmail.com>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

class helper_plugin_localavatar extends DokuWiki_Plugin {

    /**
     * Get avatar
     *
     * @param string $user users loginname
     * @param string $ns local pre-existant avatars' namespace
     * @return string username with possible links
     */
    public function getPrettyUser($user,$avatarns) {
        $avatarns = $this->getConf('avatarns');
    }
}

