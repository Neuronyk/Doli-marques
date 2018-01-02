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


# Marques module for Dolibarr

## What is it ?

This module for Dolibarr 6.0 (maybe other, just try) add multi brand capabilities.

You can :

 * not a lot yet

## Help improvements

If you find the module is useful and want to finance improvements, consider giving me some money, few bitcoins would be perfect. 

## How to install

PHP 5.5 or greater is needed.

Like all Dolibarr modules, _git clone_ this repository and install cdav directory in dolibarr/htdocs/

Enable Marques module in Interfaces Modules list.

## How to upgrade

* Disable Marques module in Interfaces Modules list.
* Unzip last version or _git pull_ in dolibarr/htdocs/cdav
* Enable Marques module in Modules list.



## Troubleshooting

in case, desactivate the module
