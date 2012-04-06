<?php /* #?ini charset="utf-8"?


[TemplateSettings]
ExtensionAutoloadPath[]=qstest

# Permissions to the specific ajax calls are handled inside the ezjscore/call
# view, so only comment this out if you want to disable it!
[RoleSettings]
PolicyOmitList[]=qstest/hello
PolicyOmitList[]=qstest/call

[SiteAccessSettings]
AnonymousAccessList[]=qstest/hello
AnonymousAccessList[]=qstest/call

*/ ?>
