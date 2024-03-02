<?php
/*
 *   Copyright (C) 2020-2023 Md Shafiqul Islam (Shafi360).
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
if (!isset($_SESSION["mahabub"])) {
  header("Location:../admin.php?id=login");
} else {
}
?>
<style>
.iFWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.iFWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
  height: 100%;
  border :none;
}
</style>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3><i class="fa fa-info-circle"></i> About</h3>
      </div>
      <div class="card-body">
        <h3>Shafi360 Net V<?= $_SESSION['v']; ?></h3>
<p>
Mikrotik API Offline Version can't auto updated. If you need update version please contact administrator. This application is dedicated to hotspot entrepreneurs. Hopefully more success.
</p>
<p>
  <ul>
    <li>
      Author : Md Shafiqul Islam
    </li>
    <li>
      Licence : <a href="#">GPLv2</a>
    </li>
    <li>
      API Class : <a href="https://github.com/BenMenking/routeros-api">routeros-api</a>
    </li>
    <li>
      Website : <a href="www.jalal.live">www.jalal.live</a>
    </li>
	<li>
     WiFi Application : <a href="www.jalal.live">www.jalal.live</a>
    </li>
    <li>
      Facebook : <a href="https://fb.com">fb.com/jalal.live</a>
    </li>
  </ul>
</p>
<p>
 Thank you for all who have supported the development.
</p>
<div>
    <p><h2> &#187; Copyright Notice &#171;</h2></p>
	<p>আপনি কখনই কপিরাইট আইন ভঙ্গ করবেন না । এই সফটওয়্যার কোনো এডিট বা পরিবর্তন করতে চাইলে অবশ্যই সফটওয়্যার কোম্পানিকে অবহিত করতে হবে।   নয়ত কোন সমস্যা হলে কর্তৃপক্ষ দায়ী থাকবে না। সফটওয়্যার ক্রয়ের পূর্বে বিক্রয়ের <b><a href="normalboss.com/policy"> টার্মস এন্ড কন্ডিশন </a></b> দেখে নিবেন ।  </p>
	<p>You will never break copyright laws. If you want to make any edit or change of this software, you must notify the software company. Otherwise, the authorities will not be responsible for any problems.Before buying the software, you should check the <b><a href="normalboss.com/policy">terms and conditions</a></b> of the sale. </p>
	
	<i><b>Copyright &copy; <i> 2020 <a href="www.jalal.live">Shafi360</a>  ,Bangladesh, 24/7 Support: Call +8801740930198 (Whatsapp)</b></i></i>
</div>
</div>
</div>
</div>

</div>
