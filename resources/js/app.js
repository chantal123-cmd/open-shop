require('./bootstrap');

require('alpinejs');

import Swal from "sweetalert2";

window.delConfirm = function(formId){
    Swal.fire({
        title: 'etes-vous sur de vouloir supprimer?',
        text: "suupprimer le produit n'est plus recuperable!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'oui,supprimer!',
        cancelButtonText: "Annuler",
      }).then((result) => {
        if (result.isConfirmed) {
         document.getElementById(formId).submit()
        }
      })

}