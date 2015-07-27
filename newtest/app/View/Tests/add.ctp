<h1>Add Test</h1>
<div>

<?php
echo $this->Form->create('Test' );
echo $this->Form->input('testname',array('label'=>'Enter Name'));
?>
Select Your Plarform
<select name="plate">
<?php
foreach($send as $receive):
?>
<option value="<?php echo $receive['Plateform']['filed_name']; ?>"><?php echo $receive['Plateform']['filed_name']; ?></option>
<?php
endforeach;
 ?>
</select>
<?php
//echo $this->Form->Select('platform',array('label'=>'Select Plateform'));
//echo $this->Form->Select('platform',array(array($arrCategory)));
echo $this->Form->input('img',array('type'=>'file','label'=>'Select image'));
//echo $this->Form->button('Save Test');
echo $this->Form->end('Save Test');
?>

</div>






