<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome </title>
</head>

<body>
<center>
<h1 align="center"><ins>Insert</ins></h1>
<form method="post" action = "{{route('home')}}">
@csrf
<table border="1" cellspacing="0" cellpadding="5" width="50%" align="center">
<thead>
                <tr align="left">
                    <th>Field Name</th>
                    <th>Detail</th>
                </tr>
            </thead>
			<tbody>
<tr bgcolor="#F1F1F1">
<td>Name</td><td><input type="text" name="name" required/>
</td>
</tr>
<tr>
<td>Email</td><td><input type="email" name="email" required />
</td>
</tr>
<tr bgcolor="#F1F1F1">
<td>Department</td><td>
<select name="department">
  <option value="">Department</option>
  <option value="IT">IT</option>
  <option value="HR">HR</option>
  <option value="Manager">Manager</option>
</select>
</td>
</tr>
<td>Designation</td><td>
<select name = "designation">
  <option value="">Designation</option>
  <option value="Developer">Developer</option>
  <option value="Testers">Testers</option>
  <option value="BA">BA</option>
</select>
</td>
</tr>
<tr>
<td>Address</td><td><textarea name="address"></textarea></td>
</tr>
<tr>
<td>Country</td>
<td>
<select name="country">
<option value="India">India</option>
<option value="Austrlia">Austrlia</option>
<option value="Pakistan">Pakistan</option>
<option value="Japan">Japan</option>
</select>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="insertBtn" value="submit"/></td>
</tr>
</tbody>
</table>
</form>
</center>
</body>
</html>
<style>
.rederror{
    color: #FF0000;
   }
   body{
	   background-color:#C7E2EC;
   }
</style>