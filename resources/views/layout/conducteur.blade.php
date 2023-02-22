@extends('master')

@section('content')

<section class="content "> 
  
      <form action="dataInsert1" method="post" enctype="multipart/form-data">
        
      @csrf
            
          <div class="col-md-12" style="margin-top:0.5cm">
            <div class="card card-primary col-md-12" >
                <div class="card-header">
                  <h3 class="card-title">Conducteur</h3>
                </div>
              
              <div class="card-body form-horizontal">
               
                 
                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>lien avec Souscripteur</label>
                        <select class="form-control" name="lien" id="lien">
                          <option>lui-méme</option>
                          <option>autre</option>
                        
                        </select>
                     
                      </div>
                    </div>
                    
                   
            
                    <div class="col-sm-9">
                      
                      <div class="form-group">
                        <label>cin</label>
                        <input type="text" name="cin" data-toggle="validator" data-minlength="6" class="form-control" id="exampleInputcin2" placeholder="cin" required>
                    
                      </div>
                    </div>
                   
                    
                
                      
                     <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>nom</label>
                        <input type="text" name="nom"data-toggle="validator" data-minlength="6" class="form-control" id="exampleInputnom" placeholder="nom" required>
                    
                      </div>
                    </div>

                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>prenom</label>
                        <input type="text" name="prenom" data-toggle="validator" data-minlength="6" class="form-control" id="exampleInputnom" placeholder="prenom" required>
                    
                        </div>
                        </div>
                        <div class="form-group col-md-5  ">
                        <label>sexe</label>
                        <select class="form-control" id="sexe" name="sexe">
                          <option>homme</option>
                          <option>femme</option>
                        
                        </select>
                      </div>
                        <div class="col-sm-9">
                      
                      <div class="form-group">
                        <label>etat civil</label>
                        <select class="form-control" name="etat">
                          <option>1</option>
                          <option>2</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>date naissance</label>
                        <input type="date"  name="naissance" class="form-control" id="exampleInputnom" required>
                    
                        </div>
                        </div>

                        <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>date permis</label>
                        <input type="date" name="datepremis" class="form-control" id="exampleInputnom" required>
                    
                        </div>
                        </div>


                    <div class="col-md-9">
                      
                      <div class="form-group">
                        <label>numero permis</label>
                        <input type="text" name="numpermis"  data-toggle="validator" data-minlength="6" class="form-control" id="exampleInputnom" placeholder="numero permis" required>
                    
                        </div>
                        </div>

                        <div class="col-md-9">
                      
                      <div class="form-group">
                 <label>categorie du permis</label>
                        <input type="text" name="categorie" data-toggle="validator" data-minlength="6" class="form-control" id="exampleInputnom" placeholder="categorie" required>
                    
                        </div>
                   </div>
                      
                   </div>
                  
                   
                  
                        
                     
             </div></div>
                <div class="card-footer " style="margin-left:2cm">
                    <button type="submit" class="btn btn-primary " >Ajouter</button>
       

           


                  
                  </div>


                
                
        </form>
         </section>

@endsection