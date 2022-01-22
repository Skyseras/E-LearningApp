<div class="row bg-white py-2 my-1" id="info">
    <div class="col-1">
        <p class="m-0">Karthi</p>
    </div>
    <div class="col-2">
        <p class="m-0">First</p>
    </div>
    <div class="col-2" id="num">
        <p class="m-0">00012223</p>
    </div>
    <div class="col-2" id="num">
        <p class="text-nowrap m-0">DHS 100,000</p>
    </div>
    <div class="col-2" >
        <p class="text-nowrap m-0">DHS 500,000</p>
    </div>
    <div class="col-2" id="date">
        <p class="text-nowrap m-0">05-Jan, 2022</p>
    </div>
    <div class="col-1" id="editer2">
        <img class="m-auto px-2" src="icons/eye.svg" alt="">
    </div>
</div>

<?php
	
	$payment =['Name' => 'Karthi',
				'Payment Schedule' => 'First',
				'Bill Number' => '00012223',
				'Amount Paid' => 'DHS 100,000' ,
				'Balance amount' => 'DHS 500,000' ,
				'Date ' => '05-Jan, 2022',
				'icon' => '<img class="m-auto px-2" src="icons/eye.svg" alt="">'
                
	];

	foreach($payment as $key => $payment)
	{
		echo "<tr>
				<td>".$payment['Name']."</td>
				<td>".$payment['Payment Schedule']."</td>
				<td>".$payment['Bill Number']."</td>
				<td>".$payment['Amount Paid']."</td>
				<td>".$payment['Balance amount']."</td>
				<td>".$payment['Date ']."</td>
				<td>".$payment['icon']."</td>
		     </tr>";
	}
?>