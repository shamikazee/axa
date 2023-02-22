@extends('master')

@section('content')

<section class="content "> 
  
      <form action="dataInsert" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid ">
          <div class="row">
          <div class="col-md-12" style="margin-top:0.5cm">
            
              <div class="card card-primary col-md-12"  >
                <div class="card-header">
                  <h3 class="card-title">Souscripteur</h3>
                </div>
        
  
                
                      <div class="card-body form-horizontal">
                      <div class="form-group col-md-9  ">
                        <label>Nature</label>
                        <select class="form-control" id="nature" name="nature">
                          <option>physique</option>
                          <option>morale</option>
                        
                        </select>
                      </div>
                      <div class="form-group col-md-9 ">
                      <label for="exampleInputcin">cin</label>
                      <input type="text" data-toggle="validator" name="cin" data-minlength="6"class="form-control" id="cin" placeholder="cin / Rc" required>
                    </div>
                    <div class="form-group col-md-9 ">
                      <label for="exampleInputcin">rc</label>
                      <input type="text" data-toggle="validator" name="rc" data-minlength="6"class="form-control" id="cin" placeholder="cin / Rc" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow">
                      <label for="exampleInputnom">nom</label>
                      <input type="text" data-toggle="validator" name="nom" data-minlength="6" class="form-control" id="exampleInputnom" placeholder="nom" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow">
                      <label for="exampleInputprenom">prenom</label>
                      <input type="text" data-toggle="validator" name="prenom" data-minlength="6" class="form-control" id="exampleInputprenom" placeholder="nom" required>
                    </div>
                   
                      <div class="form-group col-md-5  ">
                        <label>sexe</label>
                        <select class="form-control" id="sexe" name="sexe">
                          <option>homme</option>
                          <option>femme</option>
                        
                        </select>
                      </div>
                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>date naissance</label>
                        <input type="date" name="date_de_naissance"  class="form-control" id="exampleInputnaissance" required>
                    
                        </div>
                        </div>

                    <div class="form-group col-md-9 validation-grids widget-shadow">
                      <label for="exampleInputaddresse">addresse</label>
                      <input type="text" name="adresse"  class="form-control" id="exampleInputaddresse" placeholder="addresse" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow">
                      <label for="exampleInputville">ville</label>
                      <input type="text" name="ville" class="form-control" id="exampleInputville" placeholder="ville" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow ">
                      <label for="exampleInputcp">CP</label>
                      <input type="text" name="code_postale"  class="form-control" id="exampleInputcp" placeholder="CP" required>
                    </div>
                    <div class="form-group col-md-9 validation-grids widget-shadow ">
                      <label for="exampleInputel">tel</label>
                      <input type="tel" name="tel"  class="form-control" id="exampleInputel" placeholder="tel" required>
                    </div>
                    
                   
                  </div>
                  
               
                  
                
              </div>
             <div class="card-footer " style="margin-left:2cm">
                    <button type="submit" class="btn btn-primary " >Ajouter</button>
                 </div>
             

                
                
        </form>
         </section>

    
@endsection