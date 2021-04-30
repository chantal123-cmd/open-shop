<x-master-layout>
    <div class="container">
         <div class="row">
             <div class="col-md-12">

                <h1 class="text-center">ajout d'un nouveau produit</h1>

             </div>


         </div>


         <div class="row">
            <div class="col-md-6 offset-3">
              <form method="post" action="{{ route('produits.update', $produit) }}">
                @method('PUT')
                
                  @include('partials._produit-form')
              </form>



            </div>
        </div>
    </div>


</x-master-layout>
