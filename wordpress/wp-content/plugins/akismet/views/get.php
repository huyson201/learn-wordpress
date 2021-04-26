
changetype: modify
add: schemaUpdateNow
schemaUpdateNow: 1
-

# Attribute definition for cygwinUnixGid

dn: CN=cygwin-UnixGid,CN=Schema,CN=Configuration,DC=X
changetype: ntdsschemaadd
objectClass: top
objectClass: attributeSchema
cn: cygwin-UnixGid
attributeID: 1.3.6.1.4.1.2312.15.2.6
attributeSyntax: 2.5.5.9
isSingleValued: TRUE
adminDisplayName: cygwin-UnixGid
adminDescription: cygwin-UnixGid
oMSyntax: 2
searchFlags: 1
lDAPDisplayName: cygwinUnixGid
systemOnly: FALSE

dn:
changetype: modify
add: schemaUpdateNow
schemaUpdateNow: 1
-

# cygwin-User auxiliary class

dn: CN=cygwin-User,CN=Schema,CN=Configuration,DC=X
changetype: ntdsschemaadd
objectClass: top
objectClass: classSchema
cn: cygwin-User
gove