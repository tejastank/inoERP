<div id="form_all"><span class="heading"><?php echo __('Document Sequence') ?></span>
 <div id="form_headerDiv">
  <div id="form_serach_header">
   <label><?php echo __('Business Org') ?></label>
   <?php echo form::select_field_from_object('org_id', org::find_all_business(), 'org_id', 'org', $org_id_h, 'org_id', $readonly1); ?>
   <a name="show" href="form.php?class_name=sys_document_sequence&<?php echo "mode=$mode"; ?>" class="show document_id sys_document_sequence_id"><img src="<?php echo HOME_URL; ?>themes/images/refresh.png"/></a> 
  </div>
  <form method="post" id="sys_document_sequence_line"  name="document_sequence_line">
   <div id="tabsLine">
    <div id ="form_line" class="sys_document_sequence">
     <ul class="tabMain">
      <li><a href="#tabsLine-1"><?php echo __('Basic') ?></a></li>
      <li><a href="#tabsLine-2"><?php echo __('Future') ?></a></li>
     </ul>
     <div class="tabContainer"> 

      <div id="tabsLine-1" class="tabContent">
       <table class="form_table">
        <thead> 
         <tr>
          <th><?php echo __('Action') ?></th>
          <th><?php echo __('Seq#') ?></th>
          <th><?php echo __('Id') ?></th>
          <th><?php echo __('Document Type') ?></th>
          <th><?php echo __('Entry Type') ?></th>
          <th><?php echo __('Prefix') ?></th>
          <th><?php echo __('Seq Separator') ?></th>
          <th><?php echo __('Next Number') ?></th>
          <th><?php echo __('Start Date') ?></th>
          <th><?php echo __('End Date') ?></th>
         </tr>
        </thead>
        <tbody class="form_data_line_tbody document_sequence_values" >
         <?php
         $count = 0;
         foreach ($document_sequence_object as $sys_document_sequence) {
          ?>         
          <tr class="sys_document_sequence<?php echo $count ?>">
           <td>    
            <ul class="inline_action">
             <li class="add_row_img"><img  src="<?php echo HOME_URL; ?>themes/images/add.png"  alt="add new line" /></li>
             <li class="remove_row_img"><img src="<?php echo HOME_URL; ?>themes/images/remove.png" alt="remove this line" /> </li>
             <li><input type="checkbox" name="line_id_cb" value="<?php echo htmlentities($$class->sys_document_sequence_id); ?>"></li> 
             <li><?php echo $f->hidden_field('bu_org_id', $org_id_h); ?></li>
            </ul>
           </td>
           <td><?php $f->seq_field_d($count) ?></td>
           <td><?php $f->text_field_widsr('sys_document_sequence_id') ?></td>
           <td><?php echo $f->select_field_from_object('document_type', option_header::document_types(), 'option_line_code', 'option_line_value', $$class->document_type, '', '', 1, $readonly); ?></td>
           <td><?php echo $f->select_field_from_array('entry_type', sys_document_sequence::$entry_type_a, $$class->entry_type); ?></td>
           <td><?php $f->text_field_wids('pre_fix') ?></td>
           <td><?php $f->text_field_wids('seq_separator') ?></td>
           <td><?php $f->text_field_wids('next_number') ?></td>
           <td><?php echo $f->date_fieldAnyDay('start_date', $$class->start_date); ?></td>
           <td><?php echo $f->date_fieldAnyDay('end_date', $$class->end_date); ?></td>
          </tr>
          <?php
          $count = $count + 1;
         }
         ?>
        </tbody>
       </table>
      </div>
      <div id="tabsLine-2" class="tabContent">

      </div>
     </div>

    </div>
   </div> 
  </form>
 </div>
</div>

<div id="js_data">
 <ul id="js_saving_data">
  <li class="lineClassName" data-lineClassName="sys_document_sequence" ></li>
  <li class="line_key_field" data-line_key_field="document_type" ></li>
  <li class="single_line" data-single_line="false" ></li>
  <li class="form_line_id" data-form_line_id="sys_document_sequence" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docLineId" data-docLineId="sys_document_sequence_id" ></li>
  <li class="btn2DivId" data-btn2DivId="form_line" ></li>
  <li class="trClass" data-trclass="sys_document_sequence" ></li>
  <li class="tbodyClass" data-tbodyClass="form_data_line_tbody" ></li>
  <li class="noOfTabbs" data-noOfTabbs="2" ></li>
 </ul>
</div>