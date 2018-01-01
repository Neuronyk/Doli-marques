# Doli-marques
amorce d'un module multi-marque pour dolibarr 6 

Dans dolibar,il manque la possibilité d'avoir une gestion spécifique lorsqu'une société possède plusieures marques, et qu'elle doivent séparer les facturations clients et rapports, sourcer le marketing, identifier rapidement dans les fiches clients/fournisseur quelle marque est en charge...

mon  idée de base:
- creer une table "marque"
- ajouter un champ lié a la table "marque" dans chaques tables qui le nécéssite
- ajouter un menu "marque" en bandeau qui propose un lien vers la page d'accueil de la marque choisie
  -stat et rapports spécifiques
- page de configuration spécifique + lien en barre latérale dans config 
  - nom marque
  - logo spécifique
  - coordonnées spécifique
  - emails spécifique (envoi et réponse)
  - marque par défaut
