

<br/>

<input style="width:98%; padding-top: 0px; color: white; background: black; height: 20px; border-radius: 8px; font-size: .89em" type="submit" value="Ambil access_token android/iphone">
<br/>
<br/>

<form action="" method="post">
Nama : <input style="margin-bottom:5px;" type="text" name="email" value placeholder=" Email/No tlp"/>
<br/>
Password : <input style="margin-bottom:10px;" type="password" name="password" value placeholder=" Password"/>
<br/>
Pilih access_token :
 <select name="app_id">
     <option value="350685531728">android</option>
     <option value="6628568379">iphone</option>
<option value="ios">ios</option>
 </select>
<br/>
Kode Keamanan :
<textarea style="margin-top:10px; border-align:center; center: 50px;" name="kode" rows="3" cols="16" value placeholder="Kode keamanan/autentifikasi 2 faktor">
</textarea>
<br/>
<br/>
<input type="submit" value="Generate access_token" >
</form>

<?php include('token/full.php'); ?>

<hr/>
<br/>


<input style="width:98%; padding-top: 0px; color: white; background: black; height: 20px; border-radius: 8px; font-size: .89em" type="submit" VALUE="Copy access_token nya di box bawah">
<br/>
<br/>

<center><textarea style="border-radius:10px;" name="hasil" rows="25px" cols="37px" border="1"><?php print_r($access_token); ?>
</textarea></center>
</form>





<br/>
<br/>

<form method="POST" action="install.php">
<center>Masukkan access token dibawah ini dan klik install :
</center>
<br>

<textarea type="text" name="token" id="token" rows="2" cols="15" style="margin:3px; height: 90px; width: 96%; border="3"; class="td8">
</textarea>
<br><br>



<div style="padding-top:10px; margin-left:2px; margin-top:5px; color: white; background: green; height: 30px; border-radius: 5px; font-size:.89em">
<center>Set Pengaturan bot</center>
</div>
<br>

Like status teman :
<input style="margin-left:45px; margin-top:1px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="l" value="on" checked/> On
<br><br>

Komentari Status Teman : 
<input style="margin-left:5px; margin-top:5px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="kmn" value="on" checked/>
On
<input type="radio" name="kmn" value="off"/> 
Off
<br><br>

Auto Respon Like : 
<input style="margin-left:50px; margin-top:5px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="rlk" value="on" checked/>
On
<input type="radio" name="rlk" value="Off"/> 
Off
<br><br>

Respon Status sendiri : 
<input style="margin-left:25px; margin-top:5px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="rss" value="on" checked/>
On
<input type="radio" name="rss" value="off"/> 
Off
<br><br>

Auto Update Status : 
<input style="margin-left:40px; margin-top:5px; color: white; background: green; height: 17px; border-radius: 5px; font-size:.89em" type="radio" name="upstat" value="on" checked/>
On
<input type="radio" name="upstat" value="off"/> 
Off
<br><br>

<center>
<input style="margin-top:10px; color:black" class="submit" name="submit" type="submit" VALUE="install">
</center>
</form>

<br/>
<hr/>





</body>
</html>
