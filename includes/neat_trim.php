<?php /*====================================================================================
		SamNews [http://samjlevy.com/samnews], open-source PHP social news application
    	sam j levy [http://samjlevy.com]

    	This program is free software: you can redistribute it and/or modify it under the
    	terms of the GNU General Public License as published by the Free Software
    	Foundation, either version 3 of the License, or (at your option) any later
    	version.

    	This program is distributed in the hope that it will be useful, but WITHOUT ANY
    	WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
    	PARTICULAR PURPOSE.  See the GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License along with this
    	program.  If not, see <http://www.gnu.org/licenses/>.
      ====================================================================================*/

function neat_trim($str, $n, $delim='-') {
	$str = str_replace("\n","",$str);
	$str = str_replace("\r","",$str);
	$str = strip_tags($str);
	$len = strlen($str);
	if ($len > $n) {
		preg_match('/(.{' . $n . '}.*?)\b/', $str, $matches);
		return rtrim($matches[1]) . $delim;
	} else {
		return $str;
	}
}
?>