<?php
/* Smarty version 4.3.0, created on 2023-03-27 22:56:34
  from 'C:\xampp\htdocs\site.loc\manager\templates\default\element\tv\renders\input\date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642203026f5de5_08273186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2668d8c2e2f3604011b3a1970855fcd2666b135' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site.loc\\manager\\templates\\default\\element\\tv\\renders\\input\\date.tpl',
      1 => 1679933838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642203026f5de5_08273186 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" type="hidden" class="datefield"
    value="<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
    onblur="MODx.fireResourceFormChange();"/>

<?php echo '<script'; ?>
>
// <![CDATA[

Ext.onReady(function() {
    const fld = MODx.load({
    
        xtype: 'xdatetime'
        ,itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,dateFormat: MODx.config.manager_date_format
        ,timeFormat: MODx.config.manager_time_format
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['disabledDays'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,disabledDays: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['disabledDays'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['disabledDates'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,disabledDates: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['disabledDates'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['minDateValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,minDateValue: '<?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['minDateValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
'<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['maxDateValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,maxDateValue: '<?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['maxDateValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
'<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['startDay'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,startDay: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['startDay'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['minTimeValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,minTimeValue: '<?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['minTimeValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
'<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['maxTimeValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,maxTimeValue: '<?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['maxTimeValue'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
'<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['timeIncrement'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,timeIncrement: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['timeIncrement'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['hideTime'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,hideTime: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['hideTime'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        ,dateWidth: 198
        ,timeWidth: 198
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tv']->value->value != '') {?>
        ,value: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'
        <?php }?>
        ,msgTarget: 'under'
    
        ,listeners: {
            change: { 
                fn: MODx.fireResourceFormChange,
                scope: this
            }
        }
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
