<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
	<style >
		*{
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;

}

body{
	margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
table {
    border-collapse: collapse;
}
.table {
  width: 100%;
    margin-bottom: 1.5rem;
    color: #12263f;
}

.text-success {
    color: #00d97e!important
}
.text-warning {
    color: #f6c343!important
}
.text-danger {
    color: #e63757!important
}
.table th,
.table td {
  
    padding: .9375rem;
    vertical-align: top;
    border-top: 1px solid #edf2f9;
}

.table thead th {
  background-color: #f9fbfd;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: .08em;
    color: #95aac9;
    border-bottom-width: 1px;
    vertical-align: bottom;
    border-bottom: 2px solid #edf2f9;
    
    font-size: .8125rem;
}
.h6, h6 {
    font-size: .625rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 1.125rem;
    font-weight: 500;
    line-height: 1.1;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table .thead-light th {
  color:rgb(202, 80, 73);
  background-color: #fff;
  border-color: #dee2e6;
}
.col-md-5 ,.col-md-7,.col-md-9,.col-md-3,.col-12{
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.5rem;
}
.p-5 {
    padding: 2.25rem!important;
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
}
.text-center {
    text-align: center!important;
}
.card {
    margin-bottom: 1.5rem;
    border-color: #edf2f9;
    box-shadow: 0 0.75rem 1.5rem rgba(18,38,63,.03);
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}
.col-md-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
     text-align: right;
  }
  .col-md-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .mb-2, .my-2 {
    margin-bottom: .375rem!important;
}
.text-muted {
    color: #95aac9!important;
}
  .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .img-fluid, .img-thumbnail {
    max-width: 100%;
    height: auto;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}
.mt-5, .my-5 {
    margin-top: 2.25rem!important;
}
hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid #e3ebf6;
}
hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}
.mb-6, .my-6 {
    margin-bottom: 4.5rem!important;
}
.text-uppercase {
    text-transform: uppercase!important;
}
.text-body {
    color: #12263f!important;
}
.text-md-right {
    text-align: right!important;
}
.pr-0, .px-0 {
    padding-right: 0!important;
}
.border-top-0 {
    border-top: 0!important;
}
.bg-transparent {
    background-color: transparent!important;
}
.col-6 {
    flex: 0 0 50%;
    max-width: 50%
}
.text-right {
    text-align: right!important;
}
p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.align-items-center {
  -ms-flex-align: center !important;
  align-items: center !important;
}
  
  .col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  
.container-fluid {
    width: 100%;
    padding-right: 40px;
    padding-left: 40px;
    margin-right: auto;
    margin-left: auto;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -12px;
    margin-left: -12px;
}


.col-12 {
    flex: 0 0 100%;
    max-width: 100%;
}
.justify-content-center {
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}


	</style>
</head>
<body>
    
	<div class="container-fluid">
        <div class="row ">
           
            
    <div class="col text-right">
        {{ date('Y M d ') }}
    </div>
        </div>
<div class="row">
        <div class="mt-2 text-left">
           
              
             
          <h2 >Heart Hospital </h2>
          <h3 >POBOX 456 Kigali</h3>
           
         
           
  
          </div>
</div>
<div class="text-center">
    <h2 class="mt-5">
        Laboratory Test Result : #{{$ex->id}}
        </h2>
</div>
<div class="row">
        <div class="col text-left">
           
              
             
               
         
          <h4 class="mt-2">
            Date: {{$ex->created_at->format('d M Y , H:m')}}
          </h4>
          <h4 class="mt-2">
            Patient Id: {{$ex->patient->id}}
          </h4>
          <h4 class="mt-2">
            patient :{{$ex->patient->fullName}}
          </h4>
        </div>
          <div class="col text-right">
          <h4 class="mt-2">
            sex: {{$ex->getSex()}}
          </h4>

          <h4 class="mt-2">
            age: {{$ex->age}}
          </h4>
          <h4 class="mt-2">
          phone: {{$ex->patient->phone}}
          </h4>
         

        
      </div> 
</div>
        

 
<div class="row">
    <div class="col-12">
      
      <!-- Table -->
      <div class="table-responsive">
        <table class="table my-4">
          <thead>
            <tr>
              <th class="px-0 bg-transparent border-top-0">
                <span class="h5">#</span>
              </th>
              <th class="px-0 bg-transparent border-top-0">
                <span class="h5">Test</span>
              </th>
              <th class="px-0 bg-transparent border-top-0 text-right">
                <span class="h5">result</span>
              </th>
             
              
            </tr>
          </thead>
          <tbody>
            
            <tr>
                    <td  class="px-0">1</td>
                 <td class="px-0">
                    chest pain
                  </td>
                  <td class="px-0 text-right">
                    {{$ex->getCP()}} 
                  </td>
               </tr>
               <tr>
                <td  class="px-0">2</td>
             <td class="px-0">
                Resting blood pressure
              </td>
              <td class="px-0 text-right">
                {{$ex->trestbps}} mm Hg
              </td>
           </tr>
           <tr>
            <td  class="px-0">3</td>
         <td class="px-0">
            maximum heart rate achieved
          </td>
          <td class="px-0 text-right">
            {{$ex->thalach}}
          </td>
       </tr>
       <tr>
        <td  class="px-0">4</td>
     <td class="px-0">
        exercise induced angina
      </td>
      <td class="px-0 text-right">
        {{$ex->getexang()}}
      </td>
   </tr>
   <tr>
    <td  class="px-0">5</td>
 <td class="px-0">
    Slope
  </td>
  <td class="px-0 text-right">
    {{$ex->getslope()}}
  </td>
</tr>
<tr>
    <td  class="px-0">6</td>
 <td class="px-0">
    number of major vessels
  </td>
  <td class="px-0 text-right">
    {{$ex->getNbrVessels()}}
  </td>
</tr>
<tr>
    <td  class="px-0">7</td>
 <td class="px-0">
    serum cholestrol
  </td>
  <td class="px-0 text-right">
    {{$ex->chol}} mg/dl
  </td>
</tr>
<tr>
    <td  class="px-0">8</td>
 <td class="px-0">
    Fasting Blood Sugar
  </td>
  <td class="px-0 text-right">
    {{$ex->getFBS()}}
  </td>
</tr>
<tr>
    <td  class="px-0">9</td>
 <td class="px-0">
    Resting electrocardiographic
  </td>
  <td class="px-0 text-right">
    {{$ex->getrestecg()}}
  </td>
</tr>
<tr>
    <td  class="px-0">10</td>
 <td class="px-0">
    Thallium scan
  </td>
  <td class="px-0 text-right">
    {{$ex->getThal()}}
  </td>
</tr>
<tr>
    <td  class="px-0">11</td>
 <td class="px-0">
  Old peak
  </td>
  <td class="px-0 text-right">
    {{$ex->oldpeak}}
  </td>
</tr>


    
            
          </tbody>
          
        </table>
        <div class="mt-2">
          Collected by : {{$ex->doctor->fullName}}
        </div>
        <div  class="mt-2">
            Laboratory Test interpretation:
        </div>
        <div class="mt-2">
            Heart disease  : {{$ex->getResult()}}
          </div>
      </div>

     
    </div>
  </div> <!-- / .row -->
  </div>


</body>
</html>