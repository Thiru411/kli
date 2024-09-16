<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableClass">
  <tr>
		<th width="88">IRDA License no.</th>
		<th width="89">Agent ID</th>
		<th width="247">Name of the Corporate Agency</th>
		<th width="198">Name of Chief Insurance Executive</th>
		<th width="159">Names of Directors</th>
		<th width="498">Names of specified Persons&nbsp;</th>
		<th width="122">Address</th>
		<th width="153">Town/City/District</th>
		<th width="106">State</th>
		<th width="114">Pin code</th>
		<th width="109">Composite (Y/N)</th>
		<th width="127">If Composite Name of other Insurer</th>
		<th width="94">License issued on</th>
		<th width="96">Licensed valid from</th>
		<th width="88">Licensed valid to</th>
		<th width="76">Date of License cancellation (if any)&nbsp;</th>
</tr>
<?php if($excelData){foreach ($excelData as $info){?>
<tr>
    <td><?php echo $info->a1;?></td>
    <td><?php echo $info->a2;?></td>
    <td><?php echo $info->a3;?></td>
    <td><?php echo $info->a4;?></td>
    <td><?php echo $info->a5;?></td>
    <td><?php echo $info->a6;?></td>
    <td><?php echo $info->a7;?></td>
    <td><?php echo $info->a8;?></td>
    <td><?php echo $info->a9;?></td>
    <td><?php echo $info->a10;?></td>
    <td><?php echo $info->a11;?></td>
    <td><?php echo $info->a12;?></td>
    <td><?php echo $info->a13;?></td>
    <td><?php echo $info->a14;?></td>
    <td><?php echo $info->a15;?></td>
    <td><?php echo $info->a16;?></td>
  </tr>
  <?php }}?>

</table>