<?php
include '../conf.php';
include 'lib/lib.php';

$isRequest=false;

if (isset($_POST['mode'])) {
	$isRequest=true;
	$returns = [];
	$returns['getparam']=false;
	
	switch ($_POST['mode']) {
		case 'comboharga':
			if (isset($_POST['jenis'])) {
				$returns['getparam']=true;
				$sql= ' SELECT id_param,nama
						FROM parameter 
						WHERE 	param1 = "harga" AND
								param2 = "'.$_POST['jenis'].'"';
				$exe   = mysqli_query($con,$sql);
			// pr($exe);

				if (!$exe) { // failed query 
					$returns['queried'] = false;
				}else{ // success query 
					$returns['queried'] = true;
					$returns['total']   = mysqli_num_rows($exe);
				
					// pr($res);
					while ($res=mysqli_fetch_assoc($exe)){
						$returns['data'][]=array(
							'harga' =>$res['nama'],
							'nominal'     =>'Rp. '.(number_format($res['nama'])),
						);
					}
				}
			}
		break;


		default:
			// code here
		break;
	}

}

echo json_encode([
	'request' =>$isRequest,
	'returns' =>$returns
]);

?>