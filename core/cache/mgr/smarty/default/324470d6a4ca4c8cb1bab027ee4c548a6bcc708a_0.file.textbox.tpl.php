<?php
/* Smarty version 4.3.0, created on 2023-03-27 22:56:34
  from 'C:\xampp\htdocs\site.loc\manager\templates\default\element\tv\renders\input\textbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642203025c77e6_72815179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '324470d6a4ca4c8cb1bab027ee4c548a6bcc708a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site.loc\\manager\\templates\\default\\element\\tv\\renders\\input\\textbox.tpl',
      1 => 1679933838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642203025c77e6_72815179 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
    type="text" class="textfield"
    value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
    <?php echo (($tmp = $_smarty_tpl->tpl_vars['style']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

    tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>

<?php echo '<script'; ?>
>
// <![CDATA[

Ext.onReady(function() {
    const fld = MODx.load({
    
        xtype: 'textfield'
        ,itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['minLength'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,minLength: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['minLength'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['maxLength'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,maxLength: <?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['maxLength'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
}?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['regex'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,regex: new RegExp(/<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['params']->value['regex'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
/)<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['regexText'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>,regexText: '<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['params']->value['regexText'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
'<?php }?>
    
        ,listeners: {
            keydown: {
                fn: MODx.fireResourceFormChange,
                scope: this
            }
        }
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
