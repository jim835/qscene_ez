{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{*<form method="post" action={"content/action/"|ezurl}>*}

<div class="maincontentheader">
<h1>{$object.name|wash}</h1>
</div>

<div class="block">
<label>{"Current version"|i18n("design/standard/content/view")}</label><div class="labelbreak"></div>
<p class="box">{$object.current_version}</p>
</div>

{section name=ContentObjectAttribute loop=$object.contentobject_attributes}
<div class="block">
<label>{$ContentObjectAttribute:item.contentclass_attribute.name|wash}:</label><div class="labelbreak"></div>
{attribute_view_gui attribute=$ContentObjectAttribute:item}
</div>
{/section}

<h2>{"Related objects"|i18n("design/standard/content/view")}</h2>

<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
{section name=Object loop=$related_contentobject_array show=$related_contentobject_array sequence=array(bglight,bgdark)}
<tr>
	<td class="{$Object:sequence}">
	{content_view_gui view=text_linked content_object=$Object:item}
	</td>
</tr>
{section-else}
<tr>
	<td class="bglight">
	{"None"|i18n("design/standard/content/view")}
	</td>
</tr>
{/section}
</table>

<input type="hidden" name="ContentObjectID" value="{$object.id}" />

{*</form>*}