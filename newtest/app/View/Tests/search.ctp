<?php
//debug ($serch);

 echo $this->Form->create('Search');
 echo $this->Form->input('testname',array('lable'=>'Enter Name'));
 echo $this->Form->end('Submit'); 
 if(isset($serch))
 {
	 //echo 'hy';
	
	// pr($serch);die;
	
?>
	<table>
         <th>S.No</th>
          <th> <?php echo $this->paginator->sort('testname','Test Name')?></th>
          <th> <?php echo $this->paginator->sort('platform','Plateform'); ?></th>
          <th> <?php echo $this->paginator->sort('created','created')?></th>
          <th> <?php echo $this->paginator->sort('modified','modified')?></th>
          <th>Action</th>
		<?php
			$counter=1;
		 foreach($serch as $test): ?>
         
         
    <tr>
 <?php 
 // pr($test);
           $t_name=strtoupper($test['Test']['testname']);
          $pf_n=strtoupper($test['Test']['platform']);
    
 ?>
    
        <td  align="center"><?php echo $counter; $counter++;
		//echo $test['Test']['id']; ?></td>
        <td  align="center"><?php  echo $t_name; ?> </td>
         <td  align="center"><?php echo $pf_n ; ?> </td>
       
              <td  align="center"><?php echo $test['Test']['created']; ?> </td>
               <td  align="center"><?php echo $test['Test']['modified']; ?> </td>
               
        <td>
            <?php
                echo $this->Form->postLink('Delete',
                    array('action' => 'delete', $test['Test']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $test['Test']['id'])
                );
            ?>
        </td>
        </tr>
       
    <?php endforeach; ?>
     </table>
    <!-- <div>
	<?php
	//echo $this->Paginator->prev(__('< previous'), array(), null, array('class' => 'prev disabled'));
	//echo $this->Paginator->numbers(array('separator' => ' | '));
	//echo $this->Paginator->next(__('next >'), array(), null, array('class' => 'next disabled'));
	?>
</div>-->

	<?php 
 }
 ?>