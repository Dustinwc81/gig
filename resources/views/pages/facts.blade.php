@extends('layouts.main')

@section('title', '|  Facts and Statistics')

@section('content')

   <div class="row" style="padding-bottom:30px">
      <div class="col-md-10 offset-1">
            <img src="{{ URL::asset('images/sucker.png')}}" width="300" height="350">
      </div>
   </div>

   <div class="row text-white" style="padding-bottom: 30px">
      <div class="col-md-8 offset-2">
         <h2>National Gigging Tournament Championship</h2>
         <h3>Facts and Statistics</h3>
         <h5>1973 to Present</h5><br>
            <div class="spacer">
               <p>** These Facts and Statistics are put together using only the information available to us, there are several placings, weights, and points missing that could change a lot of records.  If you have any information regarding these records please contact: <br>
               John Henry Ward:  Phone Number:  918-964-9725 Email: jhward@ridgerunners.net
               </p>
            </div>
      </div>
   </div>

   <div class="row text-white">
      <div class="col-sm-6">
         <table class="table table-condensed">
            <h6>Most Championships Won</h6>
               <thead>
                  <tr>
                     <th></th>
                     <th># won</th>
                     <th>Gigger</th>
                     <th>Years</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>10</td>
                     <td>Steve Wilson</td>
                     <td>1981, 91, 94, 97, 2004, 05, 06, 07, 10, 13</td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>9</td>
                     <td>Greg Wilson</td>
                     <td>1991, 94, 97, 2004, 05, 06, 07, 10, 13</td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>6</td>
                     <td>Robbin Rogers</td>
                     <td>1978, 79, 83, 85, 90, 93</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>6</td>
                     <td>Wayne Tuder</td>
                     <td>1978, 79, 83, 85, 90, 93</td>
                  </tr>
                  <tr>
                     <td>5</td>
                     <td>4</td>
                     <td>John Henry Ward II</td>
                     <td>1995, 99, 2011, 2014</td>
                  </tr>
                  <tr>
                     <td>6</td>
                     <td>3</td>
                     <td>Dave Chamberlain</td>
                     <td>1988, 89, 92</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>3</td>
                     <td>Larrry Glenn</td>
                     <td>1988, 89, 92</td>
                  </tr>
                  <tr>
                     <td>8</td>
                     <td>2</td>
                     <td>Jared Davis</td>
                     <td>2012, 2016</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Doug Postoak</td>
                     <td>2011, 2014</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Bacon Summerfield</td>
                     <td>1996, 2009</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Steve Lane</td>
                     <td>1995, 99</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Bob Hawkins</td>
                     <td>1976, 82</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Harold Spencer</td>
                     <td>1976, 82</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Melvin Barton</td>
                     <td>1975, 77</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Larry Carter</td>
                     <td>1975, 77</td>
                  </tr>
                  <tr>
                     <td>15</td>
                     <td>1</td>
                     <td>32 other tied</td>
                     <td></td>
                  </tr>
               </tbody>
            </table>
      </div>
   </div><!-- end of row div -->


@endsection
