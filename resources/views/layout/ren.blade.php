@extends ('master')

@section('content')
<div>
                            <table  style="border: 1px solid black; border-collapse:collapse;">
                            <tr style="border: 1px solid black;"> <td>cin</td>
                             <td style="border: 1px solid black;">nom</td> 
                             
                            </tr> @foreach ($data as $data ) <a href="souscripteur/{{$data->id_souscripteur}}/vehicule"><tr onclick="window.location='souscripteur/{{$data->id_souscripteur}}/vehicule';"> 
                                <td style="border: 1px solid black;">{{$data->cin}}</td>
                                <td style="border: 1px solid black;">{{$data->nom}}</td> 
                                
                            </tr></a> @endforeach 
                        </table>
               </div>                  
@endsection

