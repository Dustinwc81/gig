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

@foreach ($tournaments as $tournament)


      <div class="col-sm-4">
         <h6>{{ $tournament->year }}  @if ($tournament->id==1)
         {{ $tournament->id }}st
      @elseif ($tournament->id==2)
            {{ $tournament->id }}nd
         @elseif ($tournament->id==3)
               {{ $tournament->id }}rd
               @else
                  {{ $tournament->id }}th
         @endif
         Annual NGCGT</h6>
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
                     <td>{{ $tournament->firstPlace }}</td>
                     <td>{{ $tournament->firstPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>2nd</td>
                     <td>{{ $tournament->secondPlace }}</td>
                     <td>{{ $tournament->secondPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>3rd</td>
                     <td>{{ $tournament->thirdPlace }}</td>
                     <td>{{ $tournament->thirdPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>4th</td>
                     <td>{{ $tournament->fourthPlace }}</td>
                     <td>{{ $tournament->fourthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>5th</td>
                     <td>{{ $tournament->fifthPlace }}</td>
                     <td>{{ $tournament->fifthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>6th</td>
                     <td>{{ $tournament->sixthPlace }}</td>
                     <td>{{ $tournament->sixthPlacepoints }}</td>
                  </tr>
                  <tr>
                     <td>7th</td>
                     <td>{{ $tournament->seventhPlace }}</td>
                     <td>{{ $tournament->seventhPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>8th</td>
                     <td>{{ $tournament->eighthPlace }}</td>
                     <td>{{ $tournament->eighthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>9th</td>
                     <td>{{ $tournament->ninthPlace }}</td>
                     <td>{{ $tournament->ninthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>10th</td>
                     <td>{{ $tournament->tenthPlace }}</td>
                     <td>{{ $tournament->tenthPlacePoints }}</td>
                  </tr>
                  <tr>
                     <td>Big Fish</td>
                     <td>{{ $tournament->bigFish }}</td>
                     <td>{{ $tournament->bigFishPoints }}</td>
                  </tr>
               </tbody>
            </table>
            <p>{{ $tournament->notes }}
         </p>

      </div><!--End of col div-->
@endforeach
      {{-- <div class="col-sm-5">
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
      </div><!--End of col div--> --}}
   </div> <!--End of row div-->

@endsection
