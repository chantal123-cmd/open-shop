@csrf
                  <div class="form-group">
                      <label for="designation">Designation</label>
                      <input value="{{ old('designation') ?? $produit->designation }}"  type="text" name="designation" id="designation" class="form-control" placeholder="" aria-describedby="helpId" required>
                      @error("designation")
                        
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div >
                    <div class="form-group">
                        <label for="quantite">Quantite</label>
                        <input value="{{ old('quantite') ?? $produit->quantite}}" type="number" name="quantite" id="quantite" class="form-control" placeholder="" aria-describedby="helpId" required>
                        @error("quantite")
                        
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div >
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input value="{{ old('prix') ?? $produit->prix}}" type="number" name="prix" id="prix" class="form-control" placeholder="" aria-describedby="helpId" required>
                        @error("prix")
                        
                      <small class="text-red">{{ $message }}</small>
                      @enderror
                    </div >


                    <div class="form-group">
                      <label for="categorie">Categorie</label>
                      <select class="form-control" name="category_id" id="category_id" type="number">
                        @foreach($categories as $categorie)
                        <option {{ $categorie->id == $produit->category_id ? "selected" :"" }} value="{{ $categorie->id }}">{{  $categorie->libelle }}</option>
                            
                        @endforeach
                      </select>
                      @error("categorie")
                        
                      <small class="text-red">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="" rows="3">{{ old('description') ??$produit->description }}</textarea>
                      </div>
                      @error("descriptipon")
                        
                      <small class="text-red">{{ $message }}</small>
                      @enderror
                      <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control-file" name="" id="Image" placeholder="" aria-describedby="fileHelpId">
                        @error("image")
                        
                        <small class="text-red">{{ $message }}</small>
                        @enderror
                      </div>

                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-4">valider</button>
                  </div>