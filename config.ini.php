;  <?php exit;?> DO NOT REMOVE THIS LINE.
;  This file is used to control the capability of LoginShibboleth plugin.
;  Diffrent settings of the plugin can be set here. Please read the README
;  so you can choose the best setting according to your visions.



; In datasource you define, from which source according the fifo
; the data is taken. you can only have one or more sources when you want
; get the data needed for diffrent options in piwik. you can set the following
; parameters. mysql is the fallback login mode which will be used as a last
; resort.
[datasource]
datasource["alias"] = "shib"
datasource["login"] = "shib"
datasource["email"] = "shib"
datasource["websites"] = "ldap, shib"
datasource["superuser"] = "shib"

; Shibboleth related settings. (normally is saved in _SERVER)
; set the username, alias, email, superuser, access_level params here.
; in our scneario the superuser and access_levels where handled with the help of
; groupMembership paramters from Shibboleth.
[shib]
shib["login"] = "uid"
shib["alias"] = "fullName"
shib["email"] = "mail"
shib["superuser"] = "groupMembership"
shib["superuser_type"] = "string"
shib["superuser_param"] = "cn=RZ-Piwik-Admin"
shib["to_get_view"] = "groupMembership"
shib["to_get_view_type"] = "string"
shib["to_get_view_param"] = "cn=RZ-Piwik-View"

; Ldap related settings.
; First the paramters for the ldap connection is set here.
[ldap]
ldap["host"] = "ldaphost"
ldap["port"] = 636
ldap["user"] = "binduser"
ldap["password"] = "bindpassword"
ldap["dn"] = "binddn"
ldap["to_filter_view"] = "(userfilter)"
ldap["to_get_view"] = "website attr"
ldap["to_get_type_view"] = "string"
ldap["to_filter_admin"] = ""
ldap["to_get_admin"] = ""
ldap["to_get_type_admin"] = ""

;Controller Settings
;This config part will be read by the controller class.
[controller]
controller["logout_link"]="http://linktologut.com"
