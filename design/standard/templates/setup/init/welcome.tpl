{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{*?template charset=latin1?*}

<div align="center">
  <h1>{"Welcome to eZ Publish %1"|i18n("design/standard/setup/init",,array($#version.alias))}</h1>
</div>

{if eq( $optional_test.result, 2 )}
    <p>
        {"Welcome to the eZ Publish content management system and development framework. This wizard will help you set up eZ Publish.<br>Your system is not optimal, if you wish you can click the <i>Finetune</i> button. This will present hints on how to fix these issues.<br/> Click <i>Next</i> to continue without finetuning."|i18n("design/standard/setup/init")}
    </p>
{else}
    <p>
        {"Welcome to the eZ Publish content management system and development framework. This wizard will help you set up eZ Publish.<br>Click <i>Next</i> to continue."|i18n("design/standard/setup/init")}
    </p>
{/if}

<form method="post" action="{$script}">
  {include uri='design:setup/persistence.tpl'}

  <fieldset>
   <legend>{"Select installation language"|i18n("design/standard/setup/init")}:</legend>
   <select name="eZSetupWizardLanguage">
    {foreach $language_list as $language}
        <option value="{$language.locale_code}"  {if eq( $language.locale_code, $primary_language )}selected="selected"{/if}>{$language.intl_language_name}</option>
    {/foreach}
   </select>
  </fieldset>
  {include uri='design:setup/init/navigation.tpl' dont_show_back=1 finetune=eq( $optional_test.result, 2 )}

</form>


  </div>
</form>