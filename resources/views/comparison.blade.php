@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>


<style>
a{
  font-size: 100% !important;
}
/* unvisited link */
a:link {
  color: white !important;
}

/* visited link */
a:visited {
  color: white !important;
}

/* mouse over link */
a:hover {
  color: #E89A3D !important;
}

/* selected link */
a:active {
  color: white !important;

}

.container-fluid{
    width: 100%;
    height: auto;

}

/* search */
input[type=search] {
  -webkit-appearance: none !important;
  background-clip: padding-box;
  background-color: white;
  vertical-align: middle;
  border-radius: 0.25rem;
  border: 1px solid #e0e0e5;
  font-size: 1rem;
  width: 100%;
  line-height: 2;
  padding: 0.375rem 1.25rem;
  transition: border-color 0.2s;
}

input[type=search]:focus {
  transition: all 0.5s;
  box-shadow: 0 0 40px #f9d442b9;
  border-color: #f9d342;
  outline: none;
}

form.search-form {
  display: flex;
  justify-content: center;
}

label {
  flex-grow: 1;
  flex-shrink: 0;
  flex-basis: auto;
  align-self: center;
  margin-bottom: 0;
}

input.search-field {
  margin-bottom: 0;
  flex-grow: 1;
  flex-shrink: 0;
  flex-basis: auto;
  align-self: center;
  height: 51px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

input.search-submit {
  height: 51px;
  margin: 0;
  padding: 1rem 1.3rem;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
  font-family: "Font Awesome 5 Free";
  font-size: 1rem;
}

.screen-reader-text {
  clip: rect(1px, 1px, 1px, 1px);
  position: absolute !important;
  height: 1px;
  width: 1px;
  overflow: hidden;
}

.button {
  display: inline-block;
  font-weight: 600;
  font-size: 0.8rem;
  line-height: 1.15;
  letter-spacing: 0.1rem;
  text-transform: uppercase;
  background: #f9d342;
  color: #292826;
  border: 1px solid transparent;
  vertical-align: middle;
  text-shadow: none;
  transition: all 0.2s;
}

.button:hover,
.button:active,
.button:focus {
  cursor: pointer;
  background: #E89A3D;
  color: #292826;
  outline: 0;
}


/* compare */
.product-col {
  display: none;
}

.compare-col-1 {
  -webkit-box-ordinal-group: 2;
  -webkit-order: 1;
  -ms-flex-order: 1;
  order: 1;
  display: block;
}

.compare-col-2 {
  -webkit-box-ordinal-group: 3;
  -webkit-order: 2;
  -ms-flex-order: 2;
  order: 2;
  display: block;
}

.compare-col-3 {
  -webkit-box-ordinal-group: 4;
  -webkit-order: 3;
  -ms-flex-order: 3;
  order: 3;
  display: block;
}

.compare-col-4 {
  -webkit-box-ordinal-group: 5;
  -webkit-order: 4;
  -ms-flex-order: 4;
  order: 4;
  display: block;
}

.compare-col-5 {
  -webkit-box-ordinal-group: 6;
  -webkit-order: 5;
  -ms-flex-order: 5;
  order: 5;
  display: block;
}
</style>

<body>

 <div class="container-fluid">

    <div class="row">
      <div class="col-md-12" style="padding: 5%;">
      <div class="card rounded-lg">
                            <div class="card-body">
                                <div class="card-title">Comparison Table</div>
                                <!-- Table -->
                                <div class="table-responsive">
                                    <table class="table text-dark table-borderless">
                                        <thead>
                                            <tr class="text-center">
                                                <th><p class="mb-0">Meeting rooms</p></th>
                                                <th><p class="mb-0">Size</p></th>
                                                <th><p class="mb-0">Maximum capacity</p></th>
                                                <th><p class="mb-0">Banquet</p></th>
                                                <th><p class="mb-0">Classroom</p></th>
                                                <th><p class="mb-0">Theater</p></th>
                                                <th><p class="mb-0">Cocktail</p></th>
                                                <th><p class="mb-0">Radius from KLCC (car)</p></th>
                                                <th><p class="mb-0">Radius from KLCC (walk )</p></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Table data -->
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">Boardroom</p></td>
                                                <td><p class="mb-0 font-weight-normal">300 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">2000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">1.5 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">3.0 km</p></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">Meeting Room</p></td>
                                                <td><p class="mb-0 font-weight-normal">400 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">1000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">250</p></td>
                                                <td><p class="mb-0 font-weight-normal">250</p></td>
                                                <td><p class="mb-0 font-weight-normal">250</p></td>
                                                <td><p class="mb-0 font-weight-normal">250</p></td>
                                                <td><p class="mb-0 font-weight-normal">2.5 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">5.0 km</p></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">MR6</p></td>
                                                <td><p class="mb-0 font-weight-normal">500 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">3000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">750</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">5.0 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">10.0 km</p></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">Majestic</p></td>
                                                <td><p class="mb-0 font-weight-normal">1000 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">5000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">1000</p></td>
                                                <td><p class="mb-0 font-weight-normal">2000</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">20.0 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">30.0 km</p></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">Shangri La</p></td>
                                                <td><p class="mb-0 font-weight-normal">700 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">3000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">1000</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">5.5 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">10.0 km</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
      </div>
    </div>
   <div class="container p-4">
     <h2>Comparison</h2>
     <div class="row">
       <div class="col text-center">
         <select id="product-col-1" class="custom-select product-selector">
           <option value="product1" selected>Hotel Kuala Lumpur</option>
           <option value="product2">Hotel Kuala Lumpur</option>
           <option value="product3">Hotel Kuala Lumpur</option>
   				<option value="product4">Hotel Kuala Lumpur</option>
           <option value="product5">Hotel Kuala Lumpur</option>
   				<option value="product6">Hotel Kuala Lumpur</option>
   				<option value="product7">Hotel Kuala Lumpur</option>
   				<option value="product8">Hotel Kuala Lumpur</option>
   			</select>
       </div>
       <div class="col text-center">
         <select id="product-col-2" class="custom-select product-selector">
           <option value="product1">Hotel Kuala Lumpur</option>
           <option value="product2" selected>Hotel Kuala Lumpur</option>
           <option value="product3">Hotel Kuala Lumpur</option>
   				<option value="product4">Hotel Kuala Lumpur</option>
           <option value="product5">Hotel Kuala Lumpur</option>
   				<option value="product6">Hotel Kuala Lumpur</option>
   				<option value="product7">Hotel Kuala Lumpur</option>
   				<option value="product8">Hotel Kuala Lumpur</option>
         </select>
       </div>
       <div class="col text-center">
         <select id="product-col-3" class="custom-select product-selector">
           <option value="product1">Hotel Kuala Lumpur</option>
           <option value="product2">Hotel Kuala Lumpur</option>
           <option value="product3" selected>Hotel Kuala Lumpur</option>
   				<option value="product4">Hotel Kuala Lumpur</option>
           <option value="product5">Hotel Kuala Lumpur</option>
   				<option value="product6">Hotel Kuala Lumpur</option>
   				<option value="product7">Hotel Kuala Lumpur</option>
   				<option value="product8">Hotel Kuala Lumpur</option>
         </select>
       </div>
     </div>
     <div class="row">
           <div id="product1" class="product-col col text-center compare-col-1" style="padding-top: 2%">
             <div class="card">
              <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hotel Kuala Lumpur</h5>
                <p class="card-text">Address</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
              </ul>
              
            </div>
           </div>
           <div id="product2" class="product-col col text-center compare-col-2" style="padding-top: 2%">
             <div class="card">
              <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hotel Kuala Lumpur</h5>
                <p class="card-text">Address</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
              </ul>
             
            </div>
           </div>
           <div id="product3" class="product-col col text-center compare-col-3" style="padding-top: 2%">
             <div class="card">
              <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hotel Kuala Lumpur</h5>
                <p class="card-text">Address</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
              </ul>
              
            </div>
           </div>
     </div>
   </div>

 </div>

<script>
$(".product-selector").each(function(){
  $(this).data('__old', this.value);
}).change(function() {
  var $this = $(this), value = $this.val(), oldValue = $this.data('__old'), col = $this.attr('id').replace('product-col-', ''), dupe, dupeCol;

  dupe = $(".product-selector").not(this).filter(function(){
      return this.value == value;
  });
  if(dupe.length){
      dupe.val(oldValue).data('__old', oldValue);
      dupeCol = dupe.attr('id').replace('product-col-', '');
      $(".product-col").removeClass('compare-col-' + dupeCol);
      $("#" + oldValue).addClass('compare-col-' + dupeCol);
  }

  $(".product-col").removeClass('compare-col-' + col);
  $("#" + value).addClass('compare-col-' + col);

  $this.data('__old', value)
});
</script>


@endsection