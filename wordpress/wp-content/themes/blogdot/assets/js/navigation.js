é par un échange de
courrier électronique).

Notez bien que les exemples donnés ci-dessus pour les niveaux 2 et
3 ne sont *que* des exemples.
C'est à vous de décider quelle valeur mettre quand vous signez
les clés des autres personnes.

Si vous ne savez pas quelle réponse est la bonne, répondez "0".
.

.gpg.change_passwd.empty.okay
Répondez «oui» ou «non»
.

.gpg.keyedit.save.okay
Répondez «oui» ou «non»
.

.gpg.keyedit.cancel.okay
Répondez «oui» ou «non»
.

.gpg.keyedit.sign_all.okay
Répondez «oui» si vous voulez signer TOUS les noms d'utilisateurs
.

.gpg.keyedit.remove.uid.okay
Répondez «oui» si vous voulez vraiment supprimer ce nom
d'utilisateur. Tous les certificats seront alors perdus en même temps !
.

.gpg.keyedit.remove.subkey.okay
Répondez «oui» s'il faut vraiment supprimer la sous-clé
.

.gpg.keyedit.delsig.valid
C'est une signature valide dans la clé; vous n'avez pas normalement
intérêt à supprimer cette signature car elle peut être importante pour
établir une connection de confiance vers la clé ou une autre clé certifiée
par celle-là.
.

.gpg.keyedit.delsig.unknown
Cette signature ne peut pas être vérifiée parce que vous n'avez pas la
clé correspondante. Vous devriez remettre sa supression jusqu'à ce que
vous soyez sûr de quelle clé a été utilisée car cette clé de signature
peut établir une connection de confiance vers une autre clé déjà certifiée.
.

.gpg.keyedit.delsig.invalid
Cette signature n'est pas valide. Vous devriez la supprimer de votre
porte-clés.
.

.gpg.keyedit.delsig.selfsig
Cette signature relie le nom d'utilisateur à la clé. Habituellement
enlever une telle signature n'est pas une bonne idée. En fait GnuPG peut
ne plus être capable d'utiliser cette clé. Donc faites ceci uniquement si
cette auto-signature est invalide pour une certaine raison et si une autre
est disponible.
.

.gpg.keyedit.updpref.okay
Changer les préférences de tous les noms d'utilisateurs (ou juste
ceux qui sont sélectionnés) vers la liste actuelle. La date de toutes
les auto-signatures affectées seront avancées d'une seconde.

.

.gpg.passphrase.enter
Entrez le mot de passe ; c'est une phrase secrète 

.

.gpg.passphrase.repeat
Répétez la dernière phrase de passe pour être sûr de ce que vous
avez tapé.
.

.gpg.detached_signature.filename
Donnez le nom du fichier auquel la signature se rapporte
.

.gpg.openfile.overwrite.okay
Répondez «oui» s'il faut vraiment réécrire le fichier
.

.gpg.openfile.askoutname
Entrez le nouveau nom de fichier. Si vous tapez simplement ENTRÉE le
fichier par défaut (indiqué entre crochets) sera utilisé.
.

.gpg.ask_revocation_reason.code
Vous devriez donner une raison pour la certification. Selon le contexte
vous pouvez choisir dans cette liste:
  «La clé a été compromise»
      Utilisez cette option si vous avez une raison de croire que des
      personnes ont pu accéder à votre clé secrète sa