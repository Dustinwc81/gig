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
      <!--Most Championships, Largest/Smallest winning points, Consecutive top 10, big fish -->
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
            <table class="table table-condensed">
               <h6>Largest Winning Point Margin</h6>
               <thead>
                  <tr>
                     <th></th>
                     <th>Margin of Victory pts.</th>
                     <th>Giggers</th>
                     <th>Year</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th>1</th>
                     <th>376.45</th>
                     <th>Long & Dick</th>
                     <th>1974</th>
                  </tr>
                  <tr>
                     <th>2</th>
                     <th>329</th>
                     <th>Barton & Carter</th>
                     <th>1977</th>
                  </tr>
                  <tr>
                     <th>3</th>
                     <th>295.2</th>
                     <th>Wilson & Wilson</th>
                     <th>2005</th>
                  </tr>
                  <tr>
                     <th>4</th>
                     <th>252.9</th>
                     <th>Ward & Lane</th>
                     <th>1995</th>
                  </tr>
                  <tr>
                     <th>5</th>
                     <th>234.75</th>
                     <th>Wilson & Wilson</th>
                     <th>1994</th>
                  </tr>
                  <tr>
                     <th>6</th>
                     <th>189.6</th>
                     <th>Rogers & Tuder</th>
                     <th>1993</th>
                  </tr>
                  <tr>
                     <th>7</th>
                     <th>188.1</th>
                     <th>Wilson & Wilson</th>
                     <th>2004</th>
                  </tr>
                  <tr>
                     <th>8</th>
                     <th>166</th>
                     <th>Davis & Campbell</th>
                     <th>2012</th>
                  </tr>
                  <tr>
                     <th>9</th>
                     <th>149</th>
                     <th>Rogers & Tuder</th>
                     <th>1979</th>
                  </tr>
                  <tr>
                     <th>10</th>
                     <th>126.47</th>
                     <th>Tuder & Thomas</th>
                     <th>2015</th>
                  </tr>
               </tbody>
            </table>
            <table class="table table-condensed">
               <h6>Smallest Winning Point Margin</h6>
               <thead>
                  <tr>
                     <th></th>
                     <th>Margin of Victory pts.</th>
                     <th>Giggers</th>
                     <th>Year</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th>1</th>
                     <th>2.31</th>
                     <th>Spencer & Hawkins</th>
                     <th>1982</th>
                  </tr>
                  <tr>
                     <th>2</th>
                     <th>3.0</th>
                     <th>Spencer & Hawkins</th>
                     <th>1976</th>
                  </tr>
                  <tr>
                     <th>3</th>
                     <th>4.0</th>
                     <th>Rogers & Tuder</th>
                     <th>1978</th>
                  </tr>
                  <tr>
                     <th>4</th>
                     <th>16.17</th>
                     <th>Wilson & Wilson</th>
                     <th>2013</th>
                  </tr>
                  <tr>
                     <th>5</th>
                     <th>8.92</th>
                     <th>Crites & Crites</th>
                     <th>2017</th>
                  </tr>
                  <tr>
                     <th>6</th>
                     <th>10.4</th>
                     <th>Martin & Robertson</th>
                     <th>2000</th>
                  </tr>
                  <tr>
                     <th>7</th>
                     <th>13.3</th>
                     <th>Collins & Price</th>
                     <th>2008</th>
                  </tr>
                  <tr>
                     <th>8</th>
                     <th>14.3</th>
                     <th>Wilson & Wilson</th>
                     <th>1997</th>
                  </tr>
                  <tr>
                     <th>9</th>
                     <th>14.40</th>
                     <th>Davis & Davis</th>
                     <th>2016</th>
                  </tr>
                  <tr>
                     <th>10</th>
                     <th>14.9</th>
                     <th>Williams & Tate</th>
                     <th>2001</th>
                  </tr>
               </tbody>
            </table>
            <table class="table table-condensed">
               <h6>Most Consecutive Top 10 Finishes</h6>
               <thead>
                  <tr>
                     <th></th>
                     <th># Years</th>
                     <th>Giggers</th>
                     <th>Years</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>17</td>
                     <td>Steve Wilson & Greg Wilson</td>
                     <td>1991-2007</td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>16</td>
                     <td>Robbin Rogers & Wayne Tuder</td>
                     <td>1983-1998</td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>9</td>
                     <td>John Campbell</td>
                     <td>2007-2015</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>9</td>
                     <td>Nate Williams</td>
                     <td>2006-2014</td>
                  </tr>
                  <tr>
                     <td>5</td>
                     <td>8</td>
                     <td>Cale Wiese</td>
                     <td>2010-Present</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>8</td>
                     <td>Jared Davis</td>
                     <td>2007-2014</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>8</td>
                     <td>Blayne Collins & Levi Price</td>
                     <td>2005-2012</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>8</td>
                     <td>Jason Cornell & Travis Cornell</td>
                     <td>1996-2003</td>
                  </tr>
                  <tr>
                     <td>9</td>
                     <td>7</td>
                     <td>Larry Carter & Melvin Barton</td>
                     <td>1974-1980</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>7</td>
                     <td>Mannford Long</td>
                     <td>1973-1979</td>
                  </tr>
                  <tr>
                     <td>11</td>
                     <td>6</td>
                     <td>Dave Chamberlain & Larry Glenn</td>
                     <td>1988-1993</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>6</td>
                     <td>Everett Dick</td>
                     <td>1974-1979</td>
                  </tr>
               </tbody>
            </table>
            <table class="table table-condensed">
               <h6>Most Big Fish Trophies</h6>
               <thead>
                  <tr>
                     <th></th>
                     <th># Trophies</th>
                     <th>Gigger</th>
                     <th>Years</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>5</td>
                     <td>John Ward II</td>
                     <td>2000,01,04,05,11</td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>3</td>
                     <td>Steve Lane</td>
                     <td>2000,01,05</td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>2</td>
                     <td>Steve Wilson</td>
                     <td>2012,17</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Greg Wilson</td>
                     <td>2012,17</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Claude Sixkiller</td>
                     <td>2014,15</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Bryan Wilkins</td>
                     <td>2014,15</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Doug Postoak</td>
                     <td>2004,11</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>George Proctor</td>
                     <td>2006,10</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>James Harmon</td>
                     <td>1994,98</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Jimmy Tagg</td>
                     <td>1986,96</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>John Ward</td>
                     <td>1984,91</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Matt Mathews</td>
                     <td>1984,91</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>2</td>
                     <td>Ralph Henderson</td>
                     <td>1974,75</td>
                  </tr>
                  <tr>
                     <td>14</td>
                     <td>1</td>
                     <td>45 Others Tied with one</td>
                     <td></td>
                  </tr>
               </tbody>
            </table>
      </div> <!-- end of col-sm-6 -->

      <!-- Father/sons, Brothers, different Teammates -->
      <div class="col-sm-4 offset-1">
         <h6>Fathers/Sons who won Championships as a team</h6>
         <ul>
            <li>Jared Davis & Hayden Davis-2016</li>
         </ul>
         {{-- <div class="spacer"></div> --}}
         <h6 style="padding-top:40px">Brothers who won Championships as a team</h6>
         <ul>
            <li>Mark & Eddie Tuder-1984</li>
            <li>Tim & Don Reno-1986</li>
            <li>Steve & Greg Wilson-91,94,97,04,05,06,07,10,13</li>
            <li>Travis & Jason Cornell-2002</li>
            <li>Bacon & Jeremiah Summerfield-2010</li>
         </ul>
         <h6 style="padding-top:40px">People who won Championships with different Teammates</h6>
         <ul>
            <li>John H. Ward II- 1995, 1999 w/Steve Lane, 2011,2014 w/Doug Postoak</li>
            <li>Bacon Summerfield- 1996 w/Bert Rogers, 2009 w/Jeremiah Summerfield</li>
            <li>Steve Wilson- 1981 w/Rodney Shuck, 91,94,97,04,05,06,07,10,13 w/Greg Wilson</li>
            <li>Jared Davis- 2012 w/John Campbell, 2016 w/Hayden Davis</li>
         </ul>
      </div>
   </div><!-- end of row div -->




@endsection
