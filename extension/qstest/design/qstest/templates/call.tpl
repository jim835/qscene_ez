{* call.tpl – template for Modulview .../modul1/create
Html form to save the new data *}
<form action={'qstest/call'|ezurl} method="get">
Name :<br />
<input name="name" type="text" size="50" maxlength="50"><br />
<input type="submit" name="DataCreation" value="Create new data">
<input type="reset" value="Cancel">
</form>
<hr>
Status: {$status_message}
