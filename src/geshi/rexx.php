<?php
/*************************************************************************************
  * rexx.php
  * ---------------------------------
  * Author: Jon Wolfers (sahananda@windhorse.biz)
  * Copyright: (c) 2008 Jon Wolfers
  * Release Version: 1.0.0
  * CVS Revision Version: $Revision: 995 $
  * Date Started: 2008-01-07
  *
  * Rexx language file for GeSHi.
  *
  * This should work with Classic and Object Rexx
  *
  * CHANGES
  * -------
  * 2008-01-07 Jon Wolfers (jon@sahananda.fwbo.net)
  *  -  First Release
  * 2012/05/31 Walter Pachl  sorted entries, removed invalid urls, added caseless
  *
  * TODO (updated 2012/05/31)
  * -------------------------
  * to be tested
  *
  *************************************************************************************
  *
  *     This file is part of GeSHi.
  *
  *   GeSHi is free software; you can redistribute it and/or modify
  *   it under the terms of the GNU General Public License as published by
  *   the Free Software Foundation; either version 2 of the License, or
  *   (at your option) any later version.
  *
  *   GeSHi is distributed in the hope that it will be useful,
  *   but WITHOUT ANY WARRANTY; without even the implied warranty of
  *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *   GNU General Public License for more details.
  *
  *   You should have received a copy of the GNU General Public License
  *   along with GeSHi; if not, write to the Free Software
  *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
  *
  ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Rexx',
    'COMMENT_SINGLE' => array(1 => '--'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'drop','else','end','exit','if','interpret','iterate','leave',
            'nop','options','otherwise','push','queue','return','say',
            'select','then','when'
            ),
        2 => array(
            'by','digits','engineering','expose','for','forever','form',
            'fuzz','linein','name','off','on','over','scientific','source',
            'to','until','upper','value','var','version','while','with'
            ),
        3 => array(
            'address','call','do','numeric','parse','procedure','signal',
            'trace','use'
            ),
        4 => array(
            'arg','pull'
            ),
        5 => array(
            '::attribute','::class','::method','::requires','::routine'
            ),
        6 => array(
            'abbrev','abs','address','arg','beep','bitand','bitor','bitxor',
            'b2x','center','centre','changestr','charin','charout','chars',
            'compare','condition','copies','countstr','c2d','c2x','datatype',
            'date','delstr','delword','digits','directory','d2c','d2x',
            'endlocal','errortext','filespec','form','format','fuzz','insert',
            'lastpos','left','length','linein','lineout','lines','lower',
            'max','min','overlay','pos','queued','random','reverse','right',
            'rxfuncadd','rxfuncdrop','rxfuncquery','rxqueue','setlocal',
            'sign','sourceline','space','stream','strip','substr','subword',
            'symbol','time','trace','translate','trunc','upper','userid',
            'value','var','verify','word','wordindex','wordlength','wordpos',
            'words','xrange','x2b','x2c','x2d'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '[', ']', '&', '&&', '*', '|', '/', '\\', '<', '>', '.'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000;',
            3 => 'color: #000066;',
            4 => 'color: #006666;',
            5 => 'color: #006666;',
            6 => 'color: #006666;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            0 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000ff;'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => '',
            4 => '',
            5 => '',
            6 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => '',
        4 => '',
        5 => '',
        6 => ''
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTER' => '~',
);

?>
