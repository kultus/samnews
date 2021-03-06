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

// if user attempts to visit login, register, or forgot pw page while already logged in, redirect to index
if( (isset($_SESSION['user']) && MYSELF == "login" && !isset($_GET['out'])) || (isset($_SESSION['user']) && MYSELF == "forgot") || (isset($_SESSION['user']) && MYSELF == "register") ) {
	// user is already logged in
	header("Location: " . SITE_URL);
	die();
}
?>