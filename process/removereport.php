<?php
/*
 *  Copyright (C) 2020-2023 Md Shafiqul Islam (Shafi360).
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
// hide all error
error_reporting(0);

	if ($removereport != "") {
		$uids = explode("~", $removereport);
	
		$nuids = count($uids);
	
		for ($i = 0; $i < $nuids; $i++) {
	
			$API->comm("/system/script/remove", array(
				".id" => "$uids[$i]",
			));
	
		}
		$_SESSION[$session.'idhr'] = "";
	}
	echo "<script>window.location='./?report=selling".$_SESSION['report']."&session=" . $session . "'</script>";