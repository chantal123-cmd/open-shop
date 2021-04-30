<table class="table">
    <thead>
        <tr>
            <th>designation </th>
            <th>quantite</th>
            <th>prix</th>
            <th>description</th>
            <th>action @if(Auth::user()!=null && Auth::user()->isAdmin())s  @endif</th>
        </tr>
    </thead>
    <tbody>
    @foreach ( $produits as $produit )
        <tr>
            <td scope="row"> {{ $produit->designation }}</td>
            <td>{{ $produit->quantite }}</td>
            <td>{{ $produit->prix}}</td>
            <td> {{ $produit->description }}</td>
           
        </tr>
        
    @endforeach    
    </tbody>
</table>