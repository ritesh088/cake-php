<?php 
// debug($abc);
// die; ?>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?>  
<?php //echo $this->Html->link('view', array('action' => 'view')); ?>   
 <?php echo $this->Html->link('search', array('action' => 'search')); ?>  
  <?php echo $this->Html->link('DropDownList', array('action' => 'reterive_data_ddl')); ?>  
 <?php echo $this->Html->link('Contact', array('Controller'=>'Contact','action' => 'index')); ?></p>

<table   id="tablesorter" style="border:solid; border-color:#09C;" align="center">
<thead>
<tr>
    
         <!-- <th><?php //echo $this->paginator->sort('id','ID')?></th>-->
         <th>S.No</th>
          <th> <?php echo $this->paginator->sort('testname','Test Name')?></th>
          <th> <?php echo $this->paginator->sort('platform','Plateform'); ?></th>
          <th> <?php echo $this->paginator->sort('img','Image'); ?></th>
          <th> <?php echo $this->paginator->sort('created','created')?></th>
          <th> <?php echo $this->paginator->sort('modified','modified')?></th>
          <th>Action</th>
    </tr>
  <!-- <tr style="background-color:#09F;">
          <th align="center">SNO</th>
        <th align="center">Test Name</th>
        <th align="center">platform </th>
        <th align="center">created</th>
        <th align="center">modified</th>
        <th align="center">Action</th>
        
    </tr>-->
    </thead>
    

<!-- Here's where we loop through our $posts array, printing out post info -->
<tbody
    <?php $counter =1;
 foreach($abc as $test): ?>
    <tr>
 <?php 
           $t_name=strtoupper($test['Test']['testname']);
           $pf_n=strtoupper($test['Test']['platform']);
		   $img_d= $test['Test']['img'];
		  // echo $img_d; 
		   //die;
 ?> 
        <td  align="center"><?php echo $counter; $counter++;
		//echo $test['Test']['id']; ?></td>
        <td  align="center"><?php  echo $t_name; ?> </td>
         <td  align="center"><?php echo $pf_n ; ?> </td>
         <td><img src="../../webroot/img/<?php echo $img_d; ?>" /></td>
<!--        <td align="center"><?php //$this->Html->image('img/K-logo.jpeg'); ?></td>-->
         
              <td  align="center"><?php echo $test['Test']['created']; ?> </td>
               <td  align="center"><?php echo $test['Test']['modified']; ?> </td>
               
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
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
    
</tbody>
</table>
<!--<div class="paginat">
<?php  //echo $this->paginator->next();  ?>
<?php  //echo $this->paginator->numbers();?>
<?php // echo $this->paginator->prev();  ?>
</div>-->
<div>
	<?php
	echo $this->Paginator->prev(__('< previous'), array(), null, array('class' => 'prev disabled'));
	echo $this->Paginator->numbers(array('separator' => ' | '));
	echo $this->Paginator->next(__('next >'), array(), null, array('class' => 'next disabled'));
	?>
</div>

