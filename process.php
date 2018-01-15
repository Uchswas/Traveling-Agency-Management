$cust_code = $_POST['cust_code'];
$result = mysql_query("SELECT code,cust_name FROM information WHERE code=$cust_code") or die(mysql_error());
$data = mysql_fetch_array($result);