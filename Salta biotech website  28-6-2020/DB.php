<?php 
$result = mysqli_query( $con,"SELECT * FROM about_us WHERE Name='Company' LIMIT 1");
$group_of_companies = mysqli_query($con, "SELECT * FROM group_of_companies");
$products = mysqli_query($con,"SELECT * FROM products ORDER BY field(Filter,'Supplements', 'Herbals', 'Organic Juices', 'Proteins', 'Bio - Adhesives', 'Tablets')");
$Salta_Cord = mysqli_query($con,'SELECT * FROM salta_cord');
$order = array('Supplements', 'Herbals', 'Organic Juices', 'Proteins', 'Bio - Adhesives', 'Tablets');
$product_filter = mysqli_query($con,"SELECT DISTINCT(Filter) AS filter FROM products ORDER BY field(Filter,'Supplements', 'Herbals', 'Organic Juices', 'Proteins', 'Bio - Adhesives', 'Tablets')");
//$product_filter = array_merge(array_flip(array('Supplements')), $product_filter1);
date_default_timezone_set('Asia/Kolkata');  
$date1 = strtotime("2003-01-01 00:00:00");  
$date2 = time();  
$diff = $date2 - $date1; 
$years_of_experience = floor($diff / (3.2*10000000));  
while ($row = $result->fetch_assoc()) {
			$Description = $row['Description'];
			$Goals = $row['Goals'];
			$Quality=$row['Quality'];
			$Res_and_dev=$row['R&D'];
			$Address= $row['Address'];
			$Phones= $row['Phones'];
			$Email= $row['Email'];
			$Skype= $row['Skype'];
			$Indiamart= $row['Indiamart'];
			$Linkedin = $row['Linkedin'];
			$Facebook = $row['Facebook'];
			$Coordinates = $row['LatitudeLongitude'];
			$RnD_points = $row['RnD_points'];
			$Quality_points = $row['Quality_points'];
			$product_request_email = $row['product_request_email'];
			$contact_us_email = $row['contact_us_email'];
		}
$email_arr = preg_split ("/\,/", $Email);
$phone_arr = preg_split ("/\,/", $Phones);
?>