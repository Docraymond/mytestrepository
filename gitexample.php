@extends('layouts.master')
@section('title')
<title>Impulse - Home</title>
@endsection
@section('css')
   <style type="text/css">
   	body{
   		font-family:paraText ;
   	}
   </style>
@endsection
@section('content')

<div class="col-12  pt-0" style="  position: fixed; background: url('../imgs/backdash7.jpg'); background-size: cover;  " id="homeBack">
	
		<div class="row" style="background: transparent;  ">
		<div class="col-lg-12  pt-2 px-0  alert " style="background: lightskyblue; border-radius: 0px; border-bottom-right-radius: 60px; border-bottom-left-radius: ;">
			<div class="row">
				<h3 style="font-family:  titleText; color:white ; " class="col-lg-3 pl-5 pt-2 col-8" >IMPULSE</h3>
				<div class="col-lg-3 d-none d-lg-block">
					<a href="#" class="btn btn-light btn-outline-light btn-sm btn-round " style="color: white !important; border-color: white !important;">OCIN-Home</a>
				</div>

				<div class="col-lg-3 d-none d-lg-block">
					<div class="btn-group" >
                  <button type="button" class="btn btn-light btn-outline-light btn-sm btn-round  "  style="color: white !important; border-color: white !important;">Community</button>
                  <button type="button" class="btn btn-light btn-sm btn-round  dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"  style="color: white !important; border-color: white !important;">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  
                </div>
					
				</div>

				<div class="col-lg-3 d-none d-lg-block">
					<a href="#" class="btn btn-light btn-outline-light btn-sm btn-round "  style="color: white !important; border-color: white !important;">Learning center</a>
				</div>

				<div class="col-4 d-lg-none py-2 " style="margin-left: auto;">
					<i class="fas fa-bars fa-2x" style="color: white"></i>
				</div>
				
			</div>
		</div>
		<div class="col-1 px-0 py-0">
			<div style="font-weight: lighter; font-size: ; font-family: bodyText; border-top-left-radius: 0px; border-bottom-left-radius: 0px;" class="btn btn-primary btn-sm  btn-round " >Nigeria</div>
		</div>
		<div class="col-11 ">
			<div id="load" style="font-size: 16px;  font-weight: 19px; ">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna
			</div>
		</div>

		<div class="col-lg-8 offset-lg-2 jumbotron text-center mt-3 mb-1 pt-2 px-4 pb-2 " style="border-radius: 5px; background: lightskyblue; height: 30% !important;">
			<div class="row">
				<div class="col-12"> <div class="btn btn-round btn-info  text-center">Impulse Search Engine</div></div>

				<select v-model="basic" class="col-6" style=" background:white; color: grey; border:1px solid #87cefa; padding:4px; padding-left:8px; padding-right:8px;border-radius:8px; ">
                   <option value="" selected>Choose type 1</option>
                        <option value="goods_name">Goods name</option>
                        <option value="business_name">Business name</option>
                        <option value="state">Location(State)</option>
                       <option value="localgovernment">Location(LG)</option>
                       <option value="price">Price</option>
                   </select>

                   <select v-model="basic" class="col-6" style=" background:white; color: grey; border:1px solid #87cefa; padding:4px; padding-left:8px; padding-right:8px;border-radius:8px; ">
                   <option value="" selected>Choose type 2</option>
                        <option value="goods_name">Goods name</option>
                        <option value="business_name">Business name</option>
                        <option value="state">Location(State)</option>
                       <option value="localgovernment">Location(LG)</option>
                       <option value="price">Price</option>
                   </select>
                 <hr>

                 <div class="md-form col-6">

                          

                          <input type="text" name="query" v-model="query" @keyup="search(query)" placeholder="Type here to search" id="materialLoginFormEmail " style="width: 100%;color:white;">
                          
                        

                      </div>

                      <div class="md-form col-6">

                               

                               <input type="text" name="query" v-model="query" @keyup="search(query)" placeholder="Type here to search" id="materialLoginFormEmail " style="width: 100%;color:white;">
                               
                             

                       </div>
                  

			</div>	
		</div>
		
		<div class="col-10 offset-lg-1 mt-1 d-none d-lg-block" style=" height: 40% !important; " >
			<div class=" pt-0  "  style="white-space: nowrap;  overflow-x: scroll; overflow-y: hidden; height: 230px; background: white; border-radius: 5px; border: 1px solid white;">
				<div class=" card pt-0 pb-0 mx-1 d-inline-block d-inline-block" style="width: 35%;">
					<div class="card-body py-2 px-2">
					<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
					<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
					<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
					<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
					
                     <div class="row col-12">
                     	<div class="pull-left col-6 text-center">
                     		<span class="badge badge-success">Feb 12, 2019</span>
                     	</div>
                     	<div class="pull-right col-6 text-center">
                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
                     	</div>
                     </div>
				</div>
				</div>

				<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
					<div class="card-body py-2 px-2 ">
					<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
					<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
					<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
					<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
					
                     <div class="row col-12">
                     	<div class="pull-left col-6 text-center">
                     		<span class="badge badge-success">Feb 12, 2019</span>
                     	</div>
                     	<div class="pull-right col-6 text-center">
                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
                     	</div>
                     </div>
				</div>
				</div>

				<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
					<div class="card-body py-2 px-2 ">
					<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
					<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
					<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
					<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
					
                     <div class="row col-12">
                     	<div class="pull-left col-6 text-center">
                     		<span class="badge badge-success">Feb 12, 2019</span>
                     	</div>
                     	<div class="pull-right col-6 text-center">
                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
                     	</div>
                     </div>
				</div>
				</div>

				<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
					<div class="card-body py-2 px-2 ">
					<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
					<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
					<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
					<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
					
                     <div class="row col-12">
                     	<div class="pull-left col-6 text-center">
                     		<span class="badge badge-success">Feb 12, 2019</span>
                     	</div>
                     	<div class="pull-right col-6 text-center">
                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
                     	</div>
                     </div>
				</div>
				</div>

				<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
					<div class="card-body py-2 px-2 ">
					<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
					<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
					<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
					<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
					
                     <div class="row col-12">
                     	<div class="pull-left col-6 text-center">
                     		<span class="badge badge-success">Feb 12, 2019</span>
                     	</div>
                     	<div class="pull-right col-6 text-center">
                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
                     	</div>
                     </div>
				</div>
				</div>

				<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
					<div class="card-body py-2 px-2 ">
					<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
					<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
					<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
					<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
					
                     <div class="row col-12">
                     	<div class="pull-left col-6 text-center">
                     		<span class="badge badge-success">Feb 12, 2019</span>
                     	</div>
                     	<div class="pull-right col-6 text-center">
                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
                     	</div>
                     </div>
				</div>
				</div>



				

			
			</div>




			<ul class="pagination mb-0" style="">
                <li class="page-item"><a click.prevent="getData(first_page_url)" class="page-link badge-pill badge-primary" > first </a></li>
               
                <li v-for="page in pages"
                    v-if="page > current_page - 2 && page < current_page + 2"
                    v-bind:class="{'active': checkPage(page)}" class="page-item ">
                    <a click.prevent="getData(page)" class="page-link  badge-pill badge-success">1</a>
                </li>
                
                <li class="page-item"><a click.prevent="getData(last_page_url)" class="page-link badge-pill badge-primary" > last </a></li>
            </ul>
		</div>




				<div class="col-12 offset-lg-1 mt-1 d-none d-md-block d-lg-none" style="height: 40% !important;  " >
					<div class=" pt-0  "  style="white-space: nowrap;  overflow-x: scroll; overflow-y: hidden; height: 230px; background: white; border-radius: 5px; border: 1px solid white;">
						<div class=" card pt-0 pb-0 mx-1 d-inline-block d-inline-block" style="width: 35%;">
							<div class="card-body py-2 px-2">
							<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 35%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary" style="white-space:normal;">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill" style="white-space:normal;">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info" style="white-space:normal;">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>



						

					
					</div>




					<ul class="pagination mb-0" style="">
		                <li class="page-item"><a click.prevent="getData(first_page_url)" class="page-link badge-pill badge-primary" > first </a></li>
		               
		                <li v-for="page in pages"
		                    v-if="page > current_page - 2 && page < current_page + 2"
		                    v-bind:class="{'active': checkPage(page)}" class="page-item ">
		                    <a click.prevent="getData(page)" class="page-link  badge-pill badge-success">1</a>
		                </li>
		                
		                <li class="page-item"><a click.prevent="getData(last_page_url)" class="page-link badge-pill badge-primary" > last </a></li>
		            </ul>
				</div>




				<div class="col-12  mt-1 d-md-none pt-0" style="  height: 40% !important;" >
					<div class=" pt-0   "  style="white-space: nowrap;  overflow-x: scroll; overflow-y: hidden; height: 195px; background: white; border-radius: 5px; border: 1px solid white;">
						<div class=" card pt-0 pb-0 mx-1 d-inline-block d-inline-block" style="width: 90%;">
							<div class="card-body py-2 px-2">
							<span class="badge-pill badge-primary">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 90%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 90%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 90%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 90%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>

						<div class=" card pt-0 pb-0 mx-1 d-inline-block"  style="width: 90%;">
							<div class="card-body py-2 px-2 ">
							<span class="badge-pill badge-primary">Topic</span> <strong>Management of surgical Jaundice</strong><br>
							<span class="badge-success badge-pill">Author</span><strong> Prof. Akindele Micheal </strong><br>
							<span  class="badge-pill badge-info">Institution</span> <strong>University of Ibadan</strong><br>
							<div style="border: none; border-bottom: 1px solid #2f4f4f; white-space:normal;"><span  class="badge-pill badge-success">Abstract->Background</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor sit amet, consectetur adipisicing elit, ...<br></div>
							
		                     <div class="row col-12">
		                     	<div class="pull-left col-6 text-center">
		                     		<span class="badge badge-success">Feb 12, 2019</span>
		                     	</div>
		                     	<div class="pull-right col-6 text-center">
		                     		<span class="badge badge-primary">Explore  <i class="fas fa-clipboard-check"></i></span>
		                     	</div>
		                     </div>
						</div>
						</div>



						

					
					</div>



					
					<ul class="pagination mb-0" style="">
		                <li class="page-item"><a click.prevent="getData(first_page_url)" class="page-link badge-pill badge-primary" > first </a></li>
		               
		                <li v-for="page in pages"
		                    v-if="page > current_page - 2 && page < current_page + 2"
		                    v-bind:class="{'active': checkPage(page)}" class="page-item ">
		                    <a click.prevent="getData(page)" class="page-link  badge-pill badge-success">1</a>
		                </li>
		                
		                <li class="page-item"><a click.prevent="getData(last_page_url)" class="page-link badge-pill badge-primary" > last </a></li>
		            </ul>
				</div>

		<div class="col-12 mt-0 fixed-bottom">
			<div class="row" >
		<span style="background: white;" class="p-1"><span class="badge-primary badge-pill py-2 px-2 pull-left " style=""><i class="fas fa-user-tag " style="font-size: 17px;"></i></span></span>
		<span style="background: white; margin-left: auto;" class="p-1"><span class="badge-primary badge-pill py-2 px-2  " style=""><i class="fas fa-phone " style="font-size: 17px;"></i></span></span>
	</div>
	</div>
	</div>

	

	
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	 var screenHeight = $(window).height();
	
  $('#homeBack').css('height',screenHeight);
   var changindText = ["Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore",
          "laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate ."," Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum."];
        var textNum = 0;
      

 $('#load').removeClass('animated shake').addClass('animated shake').text(changindText[textNum]);
          function automate(){
          	
          textNum += 1;
           $('#load').text(changindText[textNum]).removeClass('animated shake').addClass('animated shake');
          if(textNum > 2){
         
          textNum=0;
         
         $('#load').text(changindText[0]).removeClass('animated shake').addClass('animated shake');
          }
  }

   function changeIt(){
  setInterval(automate,3000);}
  changeIt();
       
</script>
@endsection 