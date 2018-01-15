@extends('layouts.main')

@section('title', '|  Gigging Tournament')

@section('content')

   <div class="row" style="padding-bottom:30px">
      <div class="col-md-10 offset-1">
            <img src="{{ URL::asset('images/sucker.png')}}" width="300" height="350">
      </div>
   </div>

   <div class="row text-white" style="padding-bottom: 30px">
      <div class="col-md-8 offset-2">
         <h2>National Gigging Tournament Championship</h2><br>
         <h5>1973-Present Top Ten + Big Fish Winners</h5><br>
         <p>5 pts. per lb. - Red Horse Suckers<br>
            4 pts. per lb. - Spotted, White and Hog Suckers<br>
            3 pts. per lb. - White and Sand Bass<br>
            1 pt. per lb. - Carp, Drum, Perch, Shad and Flathead Catfish </p>
      </div>
   </div>

   <div class="row text-white" style="padding-bottom:30px">
      <div class="col-sm-5">
         <h6>1973  1st Annual NGCGT</h6>
         <table class="table table-condensed">
               <thead>
                  <tr>
                     <th>Place</th>
                     <th>Giggers</th>
                     <th>Points</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1st</td>
                     <td>Red Martin & Ralph Henderson</td>
                     <td>158</td>
                  </tr>
                  <tr>
                     <td>2nd</td>
                     <td>Roy Hughes Jr. & Louis Bryant</td>
                     <td>90</td>
                  </tr>
                  <tr>
                     <td>3rd</td>
                     <td>Floyd Midget & Gary Bogle</td>
                     <td>83</td>
                  </tr>
                  <tr>
                     <td>4th</td>
                     <td>Kenneth Robertson & Billie Robertson</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>5th</td>
                     <td>Leon Cochran & Charles Smith</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>6th</td>
                     <td>Vaughn Williams & Glen Wiese</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>7th</td>
                     <td>Leonard Tuder & Woody Wilson</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>8th</td>
                     <td>Jerry Maynard & Bob Cearly</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>9th</td>
                     <td>Bunny Ross & William Chumwalooky</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>10th</td>
                     <td>Manford Long & John Phillips</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>Big Fish</td>
                     <td>Leonard Tuder & Woody Wilson</td>
                     <td>15.5 lb. Carp</td>
                  </tr>
               </tbody>
            </table>
            <p>NOTES:  47 Teams, Heavy rains & tough conditions.  1,099 lbs. of fish weighed in. <br>
            Golden Gig Award Winner-Chuck Robers, Tulsa<br>
            Only gave out trophies for top three and big fish, rest got prizes, <br>
            Prize for 10th was a set of Boat trailer tires from Robertson Tire in Tulsa.
         </p>
      </div><!--End of col div-->

      <div class="col-sm-5">
         <h6>1974  2nd Annual NGCGT</h6>
         <table class="table table-condensed">
               <thead>
                  <tr>
                     <th>Place</th>
                     <th>Giggers</th>
                     <th>Points</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1st</td>
                     <td>Manford Long & Everett Dick</td>
                     <td>593.55</td>
                  </tr>
                  <tr>
                     <td>2nd</td>
                     <td>Delmar Harmon & Nathan Kustanborter</td>
                     <td>217.10</td>
                  </tr>
                  <tr>
                     <td>3rd</td>
                     <td>Melvin Barton & Larry Carter</td>
                     <td>190.74</td>
                  </tr>
                  <tr>
                     <td>4th</td>
                     <td>Roy Hughes Jr. & Louis Bryant</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>5th</td>
                     <td>Maurice Hendren & Andy Glen</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>6th</td>
                     <td>R.D. French & John Phillips</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>7th</td>
                     <td>Bunny Ross & William Chumwalooky</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>8th</td>
                     <td>Lloyd Kingfisher & Thomas Gourd</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>9th</td>
                     <td>Bobby Dees & Ralph Henderson</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>10th</td>
                     <td>Robbin Rogers & Jerry Maynard</td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>Big Fish</td>
                     <td>Bobby Dees & Ralph Henderson</td>
                     <td>12.2 lb. Carp</td>
                  </tr>
               </tbody>
            </table>
            <p>NOTES:  40 Teams, 1,259 lbs. of fish weighed in.<br>
               Long & Dick gigged all their fish in Rosholt's, mainly redhorse, and ran away with the title this year <br>
               The lake was low so the gigging tournament take-off and weigh in was held at the shelter house on the south side of the lake by the bridge.<br>
               There was a scoring error that wasn't found until after the trophies had been presented and as a result Junior Mason & Wayne Henson were awarded 9th place and that bumped Dees & Henderson to 10th and Rogers & Maynard to 11th.  However everyone was allowed to keep their original trophies.

         </p>
      </div><!--End of col div-->
   </div> <!--End of row div-->

@endsection
