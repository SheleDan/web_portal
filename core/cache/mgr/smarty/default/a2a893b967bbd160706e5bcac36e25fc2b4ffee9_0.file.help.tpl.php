<?php
/* Smarty version 4.3.0, created on 2023-05-28 21:30:56
  from 'C:\xampp\htdocs\site.loc\manager\templates\default\help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6473abf0920463_89697428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2a893b967bbd160706e5bcac36e25fc2b4ffee9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site.loc\\manager\\templates\\default\\help.tpl',
      1 => 1679933839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473abf0920463_89697428 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-page-help-content" class="container">
    <h2>[[%help_page_title]]</h2>

    <div id="helpBanner">
        <h3>[[%help_main_head]]</h3>
        <p>[[%help_main_subhead]]</p>
    </div>

    <div id="managerbuttons">
        <ul>
            <li>
                <a href="[[%forums_link]]" target="_blank" title="[[%forums_title]]">
                    <span class="icon"><i class="icon icon-comments icon-3x"></i></span>
                    <span class="headline">[[%forums]]</span>
                    <span class="subline">[[%forums_description]]</span>
                </a>
            </li>
            <li>
                <a href="[[%docs_link]]" target="_blank" title="[[%docs_title]]">
                    <span class="icon"><i class="icon icon-book icon-3x"></i></span>
                    <span class="headline">[[%docs]]</span>
                    <span class="subline">[[%docs_description]]</span>
                </a>
            </li>
            <li>
                <a href="[[%bugs_link]]" target="_blank" title="[[%bugs_title]]">
                    <span class="icon"><i class="icon icon-exclamation-circle icon-3x"></i></span>
                    <span class="headline">[[%bugs]]</span>
                    <span class="subline">[[%bugs_description]]</span>
                </a>
            </li>
            <li>
                <a href="[[%localization_link]]" target="_blank" title="[[%localization_title]]">
                    <span class="icon"><i class="icon icon-language icon-3x"></i></span>
                    <span class="headline">[[%localization]]</span>
                    <span class="subline">[[%localization_description]]</span>
                </a>
            </li>
            <li>
                <a href="[[%support_link]]" target="_blank" class="supportTicket" title="[[%support_title]]">
                    <span class="icon"><i class="icon icon-credit-card icon-3x"></i></span>
                    <span class="headline">[[%support]]</span>
                    <span class="subline">[[%support_description]]</span>
                </a>
            </li>
        </ul>
    </div>

    <div id="contactus">
        <h3>[[%email_sub]]</h3>
        <p>[[%email_sub_description]]</p>
        <form id="mcsignup" action="//modx.us1.list-manage.com/subscribe/post" method="post">
            <input type="hidden" name="u" value="08b25a8de68a29fe03a483720">
            <input type="hidden" name="id" value="27b5d94031">
            <input type="hidden" name="MERGE3" value="[[++site_url]] Manager" id="MERGE3">
            <input type="hidden" name="group[157][32]" value="1" checked="checked" id="mce-group[157]-157-1">
            <input type="email" placeholder="[[%email_placeholder]]" required id="MERGE0" name="MERGE0" value="" class="textbox"/>
            <input type="submit" class="x-btn primary-button" name="Submit" value="[[%email_sub_button]]"/>
        </form>

        <p>[[%social_follows]]</p>
        <p><a href="https://twitter.com/modx" target="_blank"><i class="icon icon-2x icon-twitter"></i>Twitter: twitter.com/modx</a></p>
        <p><a href="https://www.facebook.com/modxcms" target="_blank"><i class="icon icon-2x icon-facebook"></i>Facebook: www.facebook.com/modxcms</a></p>
        <p><a href="https://www.linkedin.com/groups/MODX-697477" target="_blank"><i class="icon icon-2x icon-linkedin"></i>LinkedIn: linkedin.com/groups/MODX-697477</a></p>
        <p><a href="http://www.pinterest.com/modx/" target="_blank"><i class="icon icon-2x icon-pinterest"></i>Pinterest: pinterest.com/modx </a></p>
    </div>

    <div id="aboutMODX">
        <p>[[%help_about]]</p>
        <p>[[%help_credit? &current_year=`<?php echo date('Y');?>
`]]</p>
    </div>
</div>
<?php }
}
