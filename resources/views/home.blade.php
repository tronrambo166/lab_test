
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>


<div class="row form-group mt-3">
            
            <div class=" w-75 m-auto bg-light  text-center text-dark"> 
         Palindrome Checker
          </div>  

          

          </div>

          

       
        <div class="row form-group " style="text-align:center; margin:auto; ">
            
            <div class=" border shadow w-50 m-auto bg-light  text-center text-dark"> 
			
         <form action="{{route('lab')}}" method="post" > @csrf
          <span class="d-inline" >Word:</span> <input type="text" id="" name="test"  class="w-50 d-inline form-control" placeholder="Enter text"  /> 
		  <button type="submit" class="btn btn-info w-25 mx-auto d-block my-3 "  > Submit </button>
		  
          </div>  
          </div> 
		  
		  
		  <div class="col-sm-6 my-4" style="text-align:center; margin:auto; ">
  @if (Session::has('success'))
                     <div class="alert alert-light text-dark  text-center">
				  Word: <p class="ml-5 d-inline">{{ Session::get('word') }} </p>  <br>
				   Reverse: <p class="ml-5 d-inline">{{ Session::get('reverse') }} </p>  <br>
				    No of characters: <p class="ml-5 d-inline">{{ Session::get('chars') }} </p> <br>
                       
                        <h3>{{ Session::get('success') }} </h3>
                     </div>
                     @endif @php Session::forget('success'); @endphp
					 </div>

					 
					 

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    