@component('mail::message')
# MODIFICATION SUR OPENSHOP!!!!

## un super produit vient d'etre modifier sur votre plateforme OPENSHOP
<br>

vous trouverez ci-dessous les informations sur le nouveau produits.
### Designation: {{ $produit->designation }}
### Prix: {{ $produit->prix }}
### Categorie: {{ $produit->category->libelle }}
Pour toute commande veuillez cliquez sur le bouton ci-dessous.
<br>


@component('mail::button', ['url' => route("produits.show", $produit )])
Commander ce produit
@endcomponent

Merci d'avoir choisi OpenShop,<br><br>
{{ config('app.name') }}
@endcomponent
